import re

# Read the kerala card from box 4
with open("10-plus-days-grand-tours.php", "r") as f:
    box4 = f.read()

chunks = box4.split('<div class="col-xl-4 col-md-6 wow')
kerala_card = None
for chunk in chunks:
    if 'href="golden-triangle-tour-with-kerala.php"' in chunk:
        kerala_card = '<div class="col-xl-4 col-md-6 wow' + chunk.split('</div><!-- /.col-xl-4 col-md-6 -->')[0] + '</div><!-- /.col-xl-4 col-md-6 -->\n'
        break

if kerala_card:
    # Convert kerala card to orchha-khajuraho-varanasi card
    new_card = kerala_card.replace('href="golden-triangle-tour-with-kerala.php"', 'href="golden-triangle-tour-with-orchha-khajuraho-and-varanasi.php"')
    new_card = new_card.replace('Golden Triangle Tour With Kerala', 'Golden Triangle Tour With Orchha, Khajuraho & Varanasi')
    
    # We should search inside the actual golden-triangle-tour-with-orchha-khajuraho-and-varanasi.php for the correct image!
    # Let's read it to find the hero image
    v_image = "orchha.jpg" # default fallback
    try:
        with open("golden-triangle-tour-with-orchha-khajuraho-and-varanasi.php", "r") as v_file:
            v_content = v_file.read()
            match = re.search(r'assets/images/tours/([^"]+)', v_content)
            if match:
                v_image = match.group(1)
    except:
        pass
        
    print(f"Using image: {v_image}")
    
    # Replace image
    new_card = re.sub(r'src="assets/images/tours/[^"]+"', f'src="assets/images/tours/{v_image}"', new_card)
    
    # Optional CSS dimensions for image to match Udaipur fix just in case! 
    # Actually wait, I didn't add the height=252px CSS to Kerala. Kerala is fine. 
    
    # Append to Box 4
    marker = '</div><!-- /.row -->'
    marker_pos = box4.find(marker)
    if marker_pos != -1:
        new_box4 = box4[:marker_pos] + new_card + "\n" + box4[marker_pos:]
        with open("10-plus-days-grand-tours.php", "w") as f:
            f.write(new_box4)
        print("Success! Appended Orchha Khajuraho Varanasi card to Box 4")
    else:
        print("Marker </div><!-- /.row --> not found!")
else:
    print("Kerala card not found!")
