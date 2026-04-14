import re

with open("rajasthan-tours.php", "r") as f:
    html = f.read()

chunks = html.split('<div class="col-xl-4 col-md-6 wow')

template_top = chunks[0]

last_chunk = chunks[-1]
marker = '</div><!-- /.row -->'
bottom_index = last_chunk.find(marker)
template_bottom = marker + last_chunk[bottom_index + len(marker):] if bottom_index != -1 else ""

cards_map = {}

for chunk in chunks[1:]:
    card_html = '<div class="col-xl-4 col-md-6 wow' + chunk.split('</div><!-- /.col-xl-4 col-md-6 -->')[0] + '</div><!-- /.col-xl-4 col-md-6 -->'
    
    match = re.search(r'href="([^"]+)"', card_html)
    if match:
        href = match.group(1)
        cards_map[href] = card_html

tour_sequence = [
    "rajasthan-heritage-tour.php",
    "royal-rajasthan-tour.php",
    "fort-and-palaces-tour.php",
    "desert-tour-rajasthan.php"
]

final_cards = []
for tour in tour_sequence:
    if tour in cards_map:
        final_cards.append(cards_map[tour])
        print(f"Found and placed: {tour}")
    else:
        print(f"WARNING: {tour} not found in rajasthan-tours.php!")

new_html = template_top + "\n".join(final_cards) + "\n" + template_bottom

with open("rajasthan-tours.php", "w") as f:
    f.write(new_html)

print(f"Successfully rebuilt rajasthan-tours.php with {len(final_cards)} cards.")
