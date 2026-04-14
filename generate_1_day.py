# generate_1_day.py
import re

with open("same-day-tours.php", "r") as f:
    html = f.read()

# 1. Update title and page header
html = html.replace("<title>Touranzza</title>", "<title>1 Day Tours - Touranzza</title>")
html = html.replace("Same Day Tours", "1 Day Tours")

# 2. Extract cards
chunks = html.split('<div class="col-xl-4 col-md-6 wow')
template_parts = []
cards = []

# chunk 0 has everything before the first card
template_parts.append(chunks[0])

for chunk in chunks[1:]:
    card_html = '<div class="col-xl-4 col-md-6 wow' + chunk.split('</div><!-- /.col-xl-4 col-md-6 -->')[0] + '</div><!-- /.col-xl-4 col-md-6 -->'
    
    if 'href="same-day-agra-tour-by-car.php"' in card_html:
        cards.append(card_html)
    elif 'href="same-day-agra-tour-by-train.php"' in card_html:
        cards.append(card_html)
    
    # We also need the rest of the file which is in the last chunk
    if '</div><!-- /.row -->' in chunk:
        rest_of_file = '</div><!-- /.row -->' + chunk.split('</div><!-- /.row -->')[1]
        template_parts.append(rest_of_file)

# Reassemble
new_html = template_parts[0] + "\n".join(cards) + "\n" + template_parts[1]

with open("1-day-tours.php", "w") as f:
    f.write(new_html)

print("Created 1-day-tours.php with 2 cards!")
