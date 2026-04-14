import re

with open("golden-triangle-tours.php", "r") as f:
    html = f.read()

chunks = html.split('<div class="col-xl-4 col-md-6 wow')

# chunks[0] is the top of the file up to the first card
template_top = chunks[0]

# we also need the bottom of the file which is in the last chunk
# specifically after '</div><!-- /.row -->'
last_chunk = chunks[-1]
marker = '</div><!-- /.row -->'
bottom_index = last_chunk.find(marker)
template_bottom = marker + last_chunk[bottom_index + len(marker):] if bottom_index != -1 else ""

# parse all cards into a map keyed by href target
cards_map = {}

for chunk in chunks[1:]:
    card_html = '<div class="col-xl-4 col-md-6 wow' + chunk.split('</div><!-- /.col-xl-4 col-md-6 -->')[0] + '</div><!-- /.col-xl-4 col-md-6 -->'
    
    # regex extract href
    match = re.search(r'href="([^"]+)"', card_html)
    if match:
        href = match.group(1)
        cards_map[href] = card_html

# The requested order of tours
tour_sequence = [
    "golden-triangle-tour-5-days.php",
    "golden-triangle-tour-with-ranthambore.php",
    "golden-triangle-tour-with-rajasthan.php",
    "golden-triangle-tour-with-varanasi.php",
    "golden-triangle-tour-with-orchha-khajuraho.php",
    "golden-triangle-tour-with-goa.php",
    "golden-triangle-tour-with-mumbai.php",
    "golden-triangle-tour-with-haridwar-and-rishikesh.php",
    "golden-triangle-tour-with-amritsar.php"
]

final_cards = []
for tour in tour_sequence:
    if tour in cards_map:
        final_cards.append(cards_map[tour])
        print(f"Found and placed: {tour}")
    else:
        # If any are missing from the current golden-triangle-tours.php, we might need to check temp_gt.php
        print(f"WARNING: {tour} not found in golden-triangle-tours.php!")

# Reconstruct
new_html = template_top + "\n".join(final_cards) + "\n" + template_bottom

with open("golden-triangle-tours.php", "w") as f:
    f.write(new_html)

print(f"Successfully rebuilt golden-triangle-tours.php with {len(final_cards)} cards.")
