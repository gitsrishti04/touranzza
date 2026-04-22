#!/bin/bash
# Script to convert all JPG/PNG images to WebP format
# and update all PHP file references

set -e

PROJECT_DIR="/Applications/XAMPP/xamppfiles/htdocs/backup"
ASSETS_DIR="$PROJECT_DIR/assets/images"
QUALITY=80  # WebP quality (0-100), 80 gives great quality with significant size reduction

echo "=== WebP Conversion Script ==="
echo ""

# Step 1: Convert all JPG and PNG files to WebP (excluding favicons and vendor files)
echo "Step 1: Converting images to WebP format..."
echo ""

converted=0
failed=0
skipped=0

# Find all jpg/jpeg/png images in assets/images (excluding favicons)
find "$ASSETS_DIR" -type f \( -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" \) \
  -not -path "*/favicons/*" \
  -not -path "*/vendors/*" | while read -r img; do
    
    # Get the output path with .webp extension
    webp_path="${img%.*}.webp"
    
    if [ -f "$webp_path" ]; then
        echo "  SKIP (exists): $webp_path"
        continue
    fi
    
    # Convert based on file type
    ext="${img##*.}"
    ext_lower=$(echo "$ext" | tr '[:upper:]' '[:lower:]')
    
    if [ "$ext_lower" = "png" ]; then
        # For PNG files, use lossless or near-lossless for transparency support
        if cwebp -q $QUALITY -alpha_q 100 "$img" -o "$webp_path" 2>/dev/null; then
            orig_size=$(stat -f%z "$img" 2>/dev/null || stat -c%s "$img" 2>/dev/null)
            new_size=$(stat -f%z "$webp_path" 2>/dev/null || stat -c%s "$webp_path" 2>/dev/null)
            savings=$(( (orig_size - new_size) * 100 / orig_size ))
            echo "  OK: $(basename "$img") -> $(basename "$webp_path") (${savings}% smaller)"
        else
            echo "  FAIL: $img"
        fi
    else
        # For JPG files
        if cwebp -q $QUALITY "$img" -o "$webp_path" 2>/dev/null; then
            orig_size=$(stat -f%z "$img" 2>/dev/null || stat -c%s "$img" 2>/dev/null)
            new_size=$(stat -f%z "$webp_path" 2>/dev/null || stat -c%s "$webp_path" 2>/dev/null)
            savings=$(( (orig_size - new_size) * 100 / orig_size ))
            echo "  OK: $(basename "$img") -> $(basename "$webp_path") (${savings}% smaller)"
        else
            echo "  FAIL: $img"
        fi
    fi
done

echo ""
echo "Step 1 complete!"
echo ""

# Step 2: Update PHP file references (only in root PHP files, not website/ backup)
echo "Step 2: Updating PHP file references..."
echo ""

# Process each PHP file in the root directory
for php_file in "$PROJECT_DIR"/*.php; do
    if [ -f "$php_file" ]; then
        filename=$(basename "$php_file")
        
        # Check if this file contains image references that need updating
        if grep -q "assets/images/.*\.\(jpg\|jpeg\|png\)" "$php_file" 2>/dev/null; then
            # Replace .jpg -> .webp, .jpeg -> .webp, .png -> .webp
            # But EXCLUDE favicon references (keep those as PNG for browser compatibility)
            # Use sed to do the replacements
            
            # Create a temp file for safe replacement
            tmp_file="${php_file}.tmp"
            
            sed \
                -e '/favicons/!s/\(assets\/images\/[^"'"'"']*\)\.jpg/\1.webp/g' \
                -e '/favicons/!s/\(assets\/images\/[^"'"'"']*\)\.jpeg/\1.webp/g' \
                -e '/favicons/!s/\(assets\/images\/[^"'"'"']*\)\.png/\1.webp/g' \
                "$php_file" > "$tmp_file"
            
            # Check if changes were made
            if ! diff -q "$php_file" "$tmp_file" > /dev/null 2>&1; then
                mv "$tmp_file" "$php_file"
                echo "  UPDATED: $filename"
            else
                rm "$tmp_file"
                echo "  NO CHANGES: $filename"
            fi
        fi
    fi
done

echo ""
echo "Step 2 complete!"
echo ""

# Step 3: Show size comparison
echo "=== Size Comparison ==="
orig_size=$(find "$ASSETS_DIR" -type f \( -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" \) -not -path "*/favicons/*" -not -path "*/vendors/*" -exec stat -f%z {} + 2>/dev/null | awk '{s+=$1} END {print s}')
webp_size=$(find "$ASSETS_DIR" -type f -name "*.webp" -exec stat -f%z {} + 2>/dev/null | awk '{s+=$1} END {print s}')

if [ -n "$orig_size" ] && [ -n "$webp_size" ] && [ "$orig_size" -gt 0 ]; then
    orig_mb=$(echo "scale=2; $orig_size / 1048576" | bc)
    webp_mb=$(echo "scale=2; $webp_size / 1048576" | bc)
    savings=$(echo "scale=1; ($orig_size - $webp_size) * 100 / $orig_size" | bc)
    echo "Original images: ${orig_mb}MB"
    echo "WebP images:     ${webp_mb}MB"  
    echo "Space saved:     ${savings}%"
else
    echo "Could not calculate size comparison"
fi

echo ""
echo "=== Done! ==="
echo ""
echo "NOTE: Original JPG/PNG files have been kept as backup."
echo "Once you verify everything works, you can delete them with:"
echo "  find $ASSETS_DIR -type f \\( -name '*.jpg' -o -name '*.jpeg' -o -name '*.png' \\) -not -path '*/favicons/*' -not -path '*/vendors/*' -delete"
