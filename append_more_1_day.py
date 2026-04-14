import re

# 1. Read the template to extract the cards
with open("same-day-tours.php", "r") as f:
    template_html = f.read()

chunks = template_html.split('<div class="col-xl-4 col-md-6 wow')
delhi_card = None
jaipur_card = None

for chunk in chunks[1:]:
    card_html = '<div class="col-xl-4 col-md-6 wow' + chunk.split('</div><!-- /.col-xl-4 col-md-6 -->')[0] + '</div><!-- /.col-xl-4 col-md-6 -->'
    
    if 'href="same-day-delhi-tour.php"' in card_html:
        delhi_card = card_html
    elif 'href="same-day-jaipur-tour.php"' in card_html:
        jaipur_card = card_html

# 2. Append to 1-day-tours.php
if delhi_card and jaipur_card:
    with open("1-day-tours.php", "r") as f:
        target_html = f.read()
        
    marker = '</div><!-- /.row -->'
    marker_pos = target_html.find(marker)
    
    if marker_pos != -1:
        new_html = target_html[:marker_pos] + "\n" + delhi_card + "\n" + jaipur_card + "\n" + target_html[marker_pos:]
        with open("1-day-tours.php", "w") as f:
            f.write(new_html)
        print("Successfully appended Delhi and Jaipur cards!")
    else:
        print("Marker not found in 1-day-tours.php")
else:
    print("Could not find one or both cards in template.")
