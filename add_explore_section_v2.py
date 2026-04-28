#!/usr/bin/env python3
import os
import re

# The HTML section to add
explore_section = '''
              <div class="wow animated fadeIn mt-4" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <h3 class="tour-listing-details__title tour-listing-details__overview-title" style="font-size: 1.25rem;">Explore More Options</h3>
              </div>
              <ul class="tour-listing-details__overview-text wow animated fadeInUp list-unstyled" data-wow-delay="0.3s" data-wow-duration="1500ms">
                <li style="margin-bottom: 8px;"><i class="fas fa-arrow-right" style="color:var(--trevlo-base); margin-right: 8px;"></i> Just want the heritage core? View our <a href="golden-triangle-tour-5-days" style="color: inherit; text-decoration: underline; font-weight: 600;">Golden Triangle 5 Days</a> itinerary.</li>
                <li style="margin-bottom: 8px;"><i class="fas fa-arrow-right" style="color:var(--trevlo-base); margin-right: 8px;"></i> Want to dive deeper into the desert? Explore the <a href="golden-triangle-tour-with-rajasthan" style="color: inherit; text-decoration: underline; font-weight: 600;">Golden Triangle with Rajasthan</a>.</li>
                <li style="margin-bottom: 8px;"><i class="fas fa-arrow-right" style="color:var(--trevlo-base); margin-right: 8px;"></i> Interested in spiritual hubs near the Himalayas? Try our <a href="golden-triangle-tour-with-haridwar-and-rishikesh" style="color: inherit; text-decoration: underline; font-weight: 600;">Golden Triangle with Haridwar &amp; Rishikesh</a>.</li>
                <li style="margin-bottom: 8px;"><i class="fas fa-arrow-right" style="color:var(--trevlo-base); margin-right: 8px;"></i> Short on time? Do a quick <a href="same-day-agra-tour-by-car" style="color: inherit; text-decoration: underline; font-weight: 600;">Same Day Agra Tour</a>.</li>
                <li style="margin-bottom: 8px;"><i class="fas fa-arrow-right" style="color:var(--trevlo-base); margin-right: 8px;"></i> Tailor your perfect trip: <a href="contact" style="color: inherit; text-decoration: underline; font-weight: 600;">Contact our specialists</a>.</li>
              </ul>
'''

def add_explore_section(file_path):
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Check if "Explore More Options" already exists
    if "Explore More Options" in content:
        print(f"Skipping {file_path} - already has Explore More Options")
        return False

    # Find the pattern: before tour highlights section
    pattern = r'(\s*</div>\s*<!-- \/\.overview -->\s*)(\s*<!-- TOUR HIGHLIGHTS -->\s*<div class="tour-listing-details__included">)'

    def replacement(match):
        overview_end = match.group(1)
        highlights_start = match.group(2)
        return overview_end + explore_section + highlights_start

    new_content = re.sub(pattern, replacement, content, flags=re.DOTALL)

    if new_content != content:
        with open(file_path, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f"Updated: {file_path}")
        return True
    else:
        print(f"No match found in: {file_path}")
        return False

def main():
    # Get all PHP files that might be tour pages
    tour_files = [
        'golden-triangle-tour-5-days.php',
        'golden-triangle-tour-with-goa.php',
        'golden-triangle-tour-with-haridwar-and-rishikesh.php',
        'golden-triangle-tour-with-mumbai.php',
        'golden-triangle-tour-with-orchha-khajuraho.php',
        'golden-triangle-tour-with-rajasthan.php',
        'golden-triangle-tour-with-ranthambore.php',
        'rajasthan-heritage-tour.php',
        'same-day-agra-tour-by-car.php',
        'same-day-delhi-tour.php',
        'same-day-jaipur-tour.php',
        'taj-mahal-day-tour-by-train.php',
        'fort-and-palaces-tour.php',
        'desert-tour-rajasthan.php',
        'royal-rajasthan-tour.php'
    ]

    updated_count = 0
    for filename in tour_files:
        filepath = f'/Applications/XAMPP/xamppfiles/htdocs/backup/{filename}'
        if os.path.exists(filepath):
            if add_explore_section(filepath):
                updated_count += 1

    print(f"Total files updated: {updated_count}")

if __name__ == "__main__":
    main()