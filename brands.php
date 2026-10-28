<?php
/**
 * Takashimaya Singapore - Department Store Brands Directory
 */
$page_title = 'Brands & Store Directory | Takashimaya Department Store Singapore';
$page_desc  = 'Explore official brands, luxury counters, and gourmet food hall shops present inside Takashimaya Department Store Singapore.';
$current_page = 'brands';

// Curated official Takashimaya Department Store brand list
$department_store_brands = [
  // --- BEAUTY (Level 1 / B2) ---
  [
    'name' => 'SHISEIDO',
    'cat' => 'Beauty',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'Japanese',
    'letter' => 'S',
    'desc' => 'Iconic Japanese prestige skincare, Ultimune power infusing serum, and artistry cosmetics.',
    'img' => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'DIOR Beauty',
    'cat' => 'Beauty',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'International',
    'letter' => 'D',
    'desc' => 'Haute perfumery, Miss Dior, Rouge Dior lipsticks, and Dior Prestige skincare counters.',
    'img' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'SK-II',
    'cat' => 'Beauty',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'Japanese',
    'letter' => 'S',
    'desc' => 'Revolutionary Japanese Facial Treatment Essence powered by PITERA™ yeast ferment.',
    'img' => 'https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'Clé de Peau Beauté',
    'cat' => 'Beauty',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'Japanese',
    'letter' => 'C',
    'desc' => 'Prestige Japanese skin keys to radiance, La Crème, and skin-empowering illuminator cosmetics.',
    'img' => 'https://images.unsplash.com/photo-1616683693504-3ea7e9ad6fec?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'CHANEL Beauty',
    'cat' => 'Beauty',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'International',
    'letter' => 'C',
    'desc' => 'Signature N°5 fragrances, Les Beiges makeup, and Sublimage skincare at the Cosmetics Hall.',
    'img' => 'https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'DECORTÉ',
    'cat' => 'Beauty',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'Japanese',
    'letter' => 'D',
    'desc' => 'KOSÉ’s crown luxury beauty maison renowned for Moisture Liposome technology and AQ Meliority.',
    'img' => 'https://images.unsplash.com/photo-1512290900672-1f55b9e075c3?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'Estée Lauder',
    'cat' => 'Beauty',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'International',
    'letter' => 'E',
    'desc' => 'Advanced Night Repair serum, Double Wear foundation, and youth-generating cosmetics.',
    'img' => 'https://images.unsplash.com/photo-1571781926291-c477ebfd024b?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'Lancôme',
    'cat' => 'Beauty',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'International',
    'letter' => 'L',
    'desc' => 'French luxury beauty featuring Advanced Génifique youth serum, Absolue, and Teint Idole.',
    'img' => 'https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'Jo Malone London',
    'cat' => 'Beauty',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'International',
    'letter' => 'J',
    'desc' => 'Bespoke British fragrances, English Pear & Freesia colognes, and luxury bath oils.',
    'img' => 'https://images.unsplash.com/photo-1547887537-6158d64c35b3?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'Albion',
    'cat' => 'Beauty',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'Japanese',
    'letter' => 'A',
    'desc' => 'Beloved Japanese Skin Conditioner Essential and signature 4-step milk-first skincare ritual.',
    'img' => 'https://images.unsplash.com/photo-1608248597359-52e85bf0c873?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],

  // --- FASHION & APPAREL (Level 1 / Level 2 / Level 3 / Level 4) ---
  [
    'name' => 'COMME des GARÇONS PLAY',
    'cat' => 'Fashion',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'Japanese',
    'letter' => 'C',
    'desc' => 'Rei Kawakubo’s iconic red heart-eyed motif cardigans, graphic tees, and striped shirts.',
    'img' => 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'Bao Bao Issey Miyake',
    'cat' => 'Fashion',
    'floor' => 'Level 2',
    'floor_code' => 'L2',
    'type' => 'Japanese',
    'letter' => 'B',
    'desc' => 'Innovative Japanese triangular geometric transformable prism tote bags and clutches.',
    'img' => 'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L2',
  ],
  [
    'name' => 'Pleats Please Issey Miyake',
    'cat' => 'Fashion',
    'floor' => 'Level 2',
    'floor_code' => 'L2',
    'type' => 'Japanese',
    'letter' => 'P',
    'desc' => 'Effortlessly modern micro-pleated womenswear crafted with timeless Japanese ease.',
    'img' => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L2',
  ],
  [
    'name' => 'Polo Ralph Lauren',
    'cat' => 'Fashion',
    'floor' => 'Level 3',
    'floor_code' => 'L3',
    'type' => 'International',
    'letter' => 'P',
    'desc' => 'American classic heritage tailoring, embroidered pony mesh polos, and Oxford button-downs.',
    'img' => 'https://images.unsplash.com/photo-1620012253295-c15c429fccf8?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L3',
  ],
  [
    'name' => 'agnès b.',
    'cat' => 'Fashion',
    'floor' => 'Level 3',
    'floor_code' => 'L3',
    'type' => 'International',
    'letter' => 'A',
    'desc' => 'Understated French elegance, snap cardigans, Paris graphic tees, and voyage leather accessories.',
    'img' => 'https://images.unsplash.com/photo-1445205170230-053b83016050?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L3',
  ],
  [
    'name' => 'Sandro Paris',
    'cat' => 'Fashion',
    'floor' => 'Level 3',
    'floor_code' => 'L3',
    'type' => 'International',
    'letter' => 'S',
    'desc' => 'Parisian effortless chic, structured wool blazers, knit cardigans, and contemporary dresses.',
    'img' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L3',
  ],
  [
    'name' => 'Maje',
    'cat' => 'Fashion',
    'floor' => 'Level 3',
    'floor_code' => 'L3',
    'type' => 'International',
    'letter' => 'M',
    'desc' => 'Bohemian glamour, tweed short-suits, feminine tailoring, and signature M fringe bags.',
    'img' => 'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L3',
  ],
  [
    'name' => 'Longchamp',
    'cat' => 'Fashion',
    'floor' => 'Level 2',
    'floor_code' => 'L2',
    'type' => 'International',
    'letter' => 'L',
    'desc' => 'Celebrated French leather luxury and iconic foldable nylon Le Pliage travel and city totes.',
    'img' => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L2',
  ],
  [
    'name' => 'Bottega Veneta',
    'cat' => 'Fashion',
    'floor' => 'Level 2',
    'floor_code' => 'L2',
    'type' => 'International',
    'letter' => 'B',
    'desc' => 'Supreme Italian craftsmanship featuring intrecciato woven leather luxury handbags and footwear.',
    'img' => 'https://images.unsplash.com/photo-1590874103328-eac38a683ce7?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L2',
  ],
  [
    'name' => 'Ferragamo',
    'cat' => 'Fashion',
    'floor' => 'Level 2',
    'floor_code' => 'L2',
    'type' => 'International',
    'letter' => 'F',
    'desc' => 'Florentine master shoe salon, Vara bow pumps, Gancini hardware belts, and leather accessories.',
    'img' => 'https://images.unsplash.com/photo-1543163521-1bf539c55dd2?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L2',
  ],
  [
    'name' => 'Tumi',
    'cat' => 'Fashion',
    'floor' => 'Level 3',
    'floor_code' => 'L3',
    'type' => 'International',
    'letter' => 'T',
    'desc' => 'Engineered ballistic nylon Alpha backpacks, international carry-on luggage, and business briefcases.',
    'img' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L3',
  ],
  [
    'name' => 'Sanrio Gift Gate',
    'cat' => 'Fashion',
    'floor' => 'Level 4',
    'floor_code' => 'L4',
    'type' => 'Japanese',
    'letter' => 'S',
    'desc' => 'Official Hello Kitty, Kuromi, Cinnamoroll children’s apparel, school bags, and plush keepsakes.',
    'img' => 'https://images.unsplash.com/photo-1513151233558-d860c5398176?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L4',
  ],

  // --- WATCHES & JEWELLERY (Level 1 / Level 2) ---
  [
    'name' => 'Grand Seiko',
    'cat' => 'Watches & Jewellery',
    'floor' => 'Level 2',
    'floor_code' => 'L2',
    'type' => 'Japanese',
    'letter' => 'G',
    'desc' => 'Japanese haute horlogerie with Zaratsu mirror polishing, Spring Drive, and Snowflake dials.',
    'img' => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L2',
  ],
  [
    'name' => 'Montblanc',
    'cat' => 'Watches & Jewellery',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'International',
    'letter' => 'M',
    'desc' => 'Meisterstück writing instruments, Swiss Minerva-heritage watches, and fine business leather.',
    'img' => 'https://images.unsplash.com/photo-1585123334904-845d60e97b29?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'Breitling',
    'cat' => 'Watches & Jewellery',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'International',
    'letter' => 'B',
    'desc' => 'Swiss aviation chronographs, Navitimer slide rule watches, and Superocean dive instruments.',
    'img' => 'https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'Seiko',
    'cat' => 'Watches & Jewellery',
    'floor' => 'Level 1',
    'floor_code' => 'L1',
    'type' => 'Japanese',
    'letter' => 'S',
    'desc' => 'Presage enamel mechanical watches, Prospex divers, and 5 Sports automatic movements.',
    'img' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L1',
  ],
  [
    'name' => 'Mikimoto',
    'cat' => 'Watches & Jewellery',
    'floor' => 'Level 2',
    'floor_code' => 'L2',
    'type' => 'Japanese',
    'letter' => 'M',
    'desc' => 'Inventor of cultured pearls; Akoya, Black South Sea, and high jewellery pearl necklaces.',
    'img' => 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L2',
  ],

  // --- HOME & LIFESTYLE (Basement 1 / Level 4) ---
  [
    'name' => 'Wedgwood',
    'cat' => 'Home & Lifestyle',
    'floor' => 'B1',
    'floor_code' => 'B1',
    'type' => 'International',
    'letter' => 'W',
    'desc' => 'English fine bone china tableware, Wild Strawberry tea sets, and Jasperware decorative gifts.',
    'img' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B1',
  ],
  [
    'name' => 'Le Creuset',
    'cat' => 'Home & Lifestyle',
    'floor' => 'B1',
    'floor_code' => 'B1',
    'type' => 'International',
    'letter' => 'L',
    'desc' => 'French enamelled cast-iron round casseroles, stoneware baking dishes, and signature bright cookware.',
    'img' => 'https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B1',
  ],
  [
    'name' => 'Dyson',
    'cat' => 'Home & Lifestyle',
    'floor' => 'B1',
    'floor_code' => 'B1',
    'type' => 'International',
    'letter' => 'D',
    'desc' => 'Airwrap multi-styler, Supersonic hair dryers, cordless V15 vacuum cleaners, and air purifiers.',
    'img' => 'https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B1',
  ],
  [
    'name' => 'Tiger',
    'cat' => 'Home & Lifestyle',
    'floor' => 'B1',
    'floor_code' => 'B1',
    'type' => 'Japanese',
    'letter' => 'T',
    'desc' => 'Japanese induction heating ceramic rice cookers, stainless steel vacuum bottles, and food jars.',
    'img' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B1',
  ],
  [
    'name' => 'Zojirushi',
    'cat' => 'Home & Lifestyle',
    'floor' => 'B1',
    'floor_code' => 'B1',
    'type' => 'Japanese',
    'letter' => 'Z',
    'desc' => 'Japanese micro-computerized thermal water heaters, pressure IH rice cookers, and lunch bento jars.',
    'img' => 'https://images.unsplash.com/photo-1584269600464-37b1b58a9fe7?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B1',
  ],
  [
    'name' => 'Imabari Towel Japan',
    'cat' => 'Home & Lifestyle',
    'floor' => 'B1',
    'floor_code' => 'B1',
    'type' => 'Japanese',
    'letter' => 'I',
    'desc' => 'Ultra-absorbent certified 100% Japanese cotton towels, cloud bath sheets, and organic linens.',
    'img' => 'https://images.unsplash.com/photo-1616627547584-bf28cee262db?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B1',
  ],
  [
    'name' => 'Callaway Golf',
    'cat' => 'Home & Lifestyle',
    'floor' => 'Level 4',
    'floor_code' => 'L4',
    'type' => 'International',
    'letter' => 'C',
    'desc' => 'Paradym Ai Smoke drivers, Apex forged irons, Odyssey putters, and golf performance accessories.',
    'img' => 'https://images.unsplash.com/photo-1535131749006-b7f58c99034b?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L4',
  ],
  [
    'name' => 'Honma Golf',
    'cat' => 'Home & Lifestyle',
    'floor' => 'Level 4',
    'floor_code' => 'L4',
    'type' => 'Japanese',
    'letter' => 'H',
    'desc' => 'Handcrafted Japanese luxury Beres golf irons, driver heads, and Sakata master artisan shafts.',
    'img' => 'https://images.unsplash.com/photo-1592919505780-303950717480?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L4',
  ],
  [
    'name' => 'Optique Paris Miki',
    'cat' => 'Home & Lifestyle',
    'floor' => 'Level 4',
    'floor_code' => 'L4',
    'type' => 'Japanese',
    'letter' => 'O',
    'desc' => 'Japanese bespoke titanium eyeglass frames, progressive lenses, and precision eye examination.',
    'img' => 'https://images.unsplash.com/photo-1574258495973-f010dfbb5371?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L4',
  ],

  // --- FOOD & BEVERAGE / GOURMET (Basement 2 / Level 4) ---
  [
    'name' => 'GODIVA',
    'cat' => 'Food & Beverage',
    'floor' => 'B2',
    'floor_code' => 'B2',
    'type' => 'International',
    'letter' => 'G',
    'desc' => 'Belgian luxury chocolate truffles, gold ballotins, and rich soft serve at B2 Food Hall #27.',
    'img' => 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B2 #27',
  ],
  [
    'name' => 'Royce’ Chocolates',
    'cat' => 'Food & Beverage',
    'floor' => 'B2',
    'floor_code' => 'B2',
    'type' => 'Japanese',
    'letter' => 'R',
    'desc' => 'Hokkaido fresh Nama chocolate squares, chocolate potato chips, and matcha crispy batons at B2 #48.',
    'img' => 'https://images.unsplash.com/photo-1549007994-cb92caebd54b?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B2 #48',
  ],
  [
    'name' => 'DONQ & Mini One',
    'cat' => 'Food & Beverage',
    'floor' => 'B2',
    'floor_code' => 'B2',
    'type' => 'Japanese',
    'letter' => 'D',
    'desc' => 'Kobe scratch French artisanal baguettes, pain de mie, and sweet mini croissants weighed by gram at B2 #21.',
    'img' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B2 #21',
  ],
  [
    'name' => 'Yoku Moku',
    'cat' => 'Food & Beverage',
    'floor' => 'B2',
    'floor_code' => 'B2',
    'type' => 'Japanese',
    'letter' => 'Y',
    'desc' => 'Tokyo luxury rolled Cigare butter cookies, double chocolat au lait, and gift presentation tins at B2 #63.',
    'img' => 'https://images.unsplash.com/photo-1558961363-fa8fdf82db35?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B2 #63',
  ],
  [
    'name' => 'Juchheim Baumkuchen',
    'cat' => 'Food & Beverage',
    'floor' => 'B2',
    'floor_code' => 'B2',
    'type' => 'Japanese',
    'letter' => 'J',
    'desc' => 'Kobe confectionery baking classic German-Japanese ring-layer Baumkuchen cakes at B2 #32.',
    'img' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B2 #32',
  ],
  [
    'name' => 'Minamoto Kitchoan',
    'cat' => 'Food & Beverage',
    'floor' => 'B2',
    'floor_code' => 'B2',
    'type' => 'Japanese',
    'letter' => 'M',
    'desc' => 'Traditional Japanese seasonal fruit wagashi, whole Muscat grape jelly, and festive confections at B2 #40.',
    'img' => 'https://images.unsplash.com/photo-1582293041079-7814c2f12063?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B2 #40',
  ],
  [
    'name' => 'Tonkichi Tonkatsu',
    'cat' => 'Food & Beverage',
    'floor' => 'Level 4',
    'floor_code' => 'L4',
    'type' => 'Japanese',
    'letter' => 'T',
    'desc' => 'Golden panko hire and rosu pork cutlets with bottomless shredded cabbage and koshihikari rice at L4 #31.',
    'img' => 'https://images.unsplash.com/photo-1569058242253-92a9c755a0ec?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L4 #31',
  ],
  [
    'name' => 'Ma Maison',
    'cat' => 'Food & Beverage',
    'floor' => 'Level 4',
    'floor_code' => 'L4',
    'type' => 'Japanese',
    'letter' => 'M',
    'desc' => 'Tokyo nostalgic Western Yoshoku, demi-glace beef stew, hamburg steaks, and handcrafted fruit tarts at L4 #27.',
    'img' => 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · L4 #27',
  ],
  [
    'name' => 'Bengawan Solo',
    'cat' => 'Food & Beverage',
    'floor' => 'B2',
    'floor_code' => 'B2',
    'type' => 'Local',
    'letter' => 'B',
    'desc' => 'Signature Singapore pandan chiffon cakes, kueh lapis, pineapple tarts, and Nyonya delicacies at B2 #14.',
    'img' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B2 #14',
  ],
  [
    'name' => 'Ya Kun Kaya Toast',
    'cat' => 'Food & Beverage',
    'floor' => 'B2',
    'floor_code' => 'B2',
    'type' => 'Local',
    'letter' => 'Y',
    'desc' => 'Traditional Singaporean charcoal-toasted kaya toast, soft boiled eggs, and Hainanese nanyang kopi at B2 #61.',
    'img' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B2 #61',
  ],
  [
    'name' => 'Cold Storage Fresh Market',
    'cat' => 'Food & Beverage',
    'floor' => 'B2',
    'floor_code' => 'B2',
    'type' => 'Local',
    'letter' => 'C',
    'desc' => 'Full-service supermarket with direct air-flown Japanese produce, seasonal fruits, and butchery at B2 #65.',
    'img' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B2 #65',
  ],
  [
    'name' => 'Bacha Coffee',
    'cat' => 'Food & Beverage',
    'floor' => 'B1',
    'floor_code' => 'B1',
    'type' => 'International',
    'letter' => 'B',
    'desc' => '100% Arabica single-origin coffees, gift hampers, chantilly cream, and gourmet takeaway cups.',
    'img' => 'https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=700&q=85',
    'badge' => 'Department Store · B1',
  ],
];

include 'header.php';
?>

    <!-- Brands Hero Banner with Cherry Blossom Theme -->
    <section class="brands-hero" aria-label="Brands and Store Directory Banner">
      <div class="brands-hero-bg"></div>
      <div class="brands-hero-content">
        <p class="brands-eyebrow">TAKASHIMAYA DEPARTMENT STORE SINGAPORE</p>
        <h1 class="brands-title">Brands &amp; Stores at Takashimaya Singapore</h1>
        <p class="brands-subtitle">Exclusively featuring authentic brands, luxury beauty counters, fashion ateliers, home living and gourmet shops present inside Takashimaya Department Store.</p>


        <!-- Main Search Bar -->
        <div class="brands-search-wrapper">
          <div class="brands-search-box">
            <svg class="brands-search-icon" viewBox="0 0 24 24"><circle cx="10.8" cy="10.8" r="6.5"/><path d="m16 16 4.2 4.2"/></svg>
            <input type="text" id="brandSearchInput" placeholder="Search department store brands (e.g. Shiseido, Dior, Wedgwood, Royce', Grand Seiko...)" aria-label="Search department store brands">
          </div>
          <button type="button" id="brandSearchBtn" class="brands-search-btn">Search</button>
        </div>
      </div>
    </section>

    <!-- Main Directory Section with Sidebar & Grid -->
    <div class="brands-directory-container">
      <!-- Left Filter Sidebar -->
      <aside class="brands-sidebar" aria-label="Directory Filters">
        <!-- Category Filter -->
        <div class="filter-group open" id="fg-category">
          <div class="filter-group-header" onclick="toggleFilterGroup('fg-category')">
            <span>Category</span>
            <svg class="chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
          </div>
          <div class="filter-group-content">
            <label class="filter-checkbox"><input type="checkbox" name="cat" value="Beauty"> <span>Beauty</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="cat" value="Fashion"> <span>Fashion</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="cat" value="Watches & Jewellery"> <span>Watches &amp; Jewellery</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="cat" value="Home & Lifestyle"> <span>Home &amp; Lifestyle</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="cat" value="Food & Beverage"> <span>Food &amp; Beverage</span></label>
          </div>
        </div>

        <!-- Floor Filter -->
        <div class="filter-group open" id="fg-floor">
          <div class="filter-group-header" onclick="toggleFilterGroup('fg-floor')">
            <span>Department Store Floor</span>
            <svg class="chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
          </div>
          <div class="filter-group-content">
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="B2"> <span>B2 · Food Hall &amp; Confectionery</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="B1"> <span>B1 · Living &amp; Tableware</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="Level 1"> <span>Level 1 · Cosmetics &amp; Fragrance</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="Level 2"> <span>Level 2 · Ladies' Shoes &amp; Leather</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="Level 3"> <span>Level 3 · Men's &amp; Contemporary</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="Level 4"> <span>Level 4 · Children, Golf &amp; Dining</span></label>
          </div>
        </div>

        <!-- Brand Type Filter -->
        <div class="filter-group open" id="fg-type">
          <div class="filter-group-header" onclick="toggleFilterGroup('fg-type')">
            <span>Brand Origin</span>
            <svg class="chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
          </div>
          <div class="filter-group-content">
            <label class="filter-checkbox"><input type="checkbox" name="type" value="Japanese"> <span>Japanese Brands</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="type" value="International"> <span>International Brands</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="type" value="Local"> <span>Local Singapore Brands</span></label>
          </div>
        </div>

        <button type="button" class="clear-filters-btn" id="clearFiltersBtn">Reset All Filters</button>

      </aside>

      <!-- Right Directory Content Area -->
      <main class="brands-main-content">
        <!-- A-Z Alphabet Filter Navigation -->
        <div class="alphabet-nav-bar" aria-label="Alphabetical brand filter">
          <span class="alphabet-label">Browse Brands A – Z</span>
          <div class="alphabet-pills" id="alphabetPills">
            <button type="button" class="az-btn active" data-letter="all">All</button>
            <?php foreach (range('A', 'Z') as $char): ?>
              <button type="button" class="az-btn" data-letter="<?php echo $char; ?>"><?php echo $char; ?></button>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Results Counter & Status -->
        <div class="brands-status-bar">
          <span id="resultsCount">Showing all department store brands</span>
        </div>

        <!-- Brand Cards Grid -->
        <div class="brands-cards-grid" id="brandsGrid">
          <?php foreach ($department_store_brands as $brand): ?>
            <article class="brand-item-card" 
                     data-letter="<?php echo htmlspecialchars($brand['letter']); ?>" 
                     data-cat="<?php echo htmlspecialchars($brand['cat']); ?>" 
                     data-floor="<?php echo htmlspecialchars($brand['floor']); ?>" 
                     data-type="<?php echo htmlspecialchars($brand['type']); ?>">
              <div class="brand-item-thumb">
                <img src="<?php echo htmlspecialchars($brand['img']); ?>" alt="<?php echo htmlspecialchars($brand['name']); ?> at Takashimaya Singapore" loading="lazy">
              </div>
              <div class="brand-item-body">
                <div class="brand-item-header">
                  <h3 class="brand-item-name"><?php echo htmlspecialchars($brand['name']); ?></h3>
                </div>
                <p class="brand-item-meta"><?php echo htmlspecialchars($brand['cat']); ?> &nbsp;|&nbsp; <?php echo htmlspecialchars($brand['floor']); ?></p>
                <p style="font-size:12.5px;line-height:1.45;color:#6b5d56;margin:6px 0 12px;flex:1;"><?php echo htmlspecialchars($brand['desc']); ?></p>
                <div class="brand-item-actions">
                  <span style="display:inline-block;font-size:11px;font-weight:700;color:#c41230;background:#fff0f3;padding:3px 8px;border-radius:4px;border:1px solid #f8ccd5;">
                    <?php echo htmlspecialchars($brand['badge']); ?>
                  </span>
                  <a href="Takashimaya-Plan-Your-Visit-FINAL-v15.php?floor=<?php echo urlencode($brand['floor_code']); ?>" class="brand-map-link" title="See on Floor Map">
                    <svg viewBox="0 0 24 24"><path d="M20 10c0 5.5-8 12-8 12S4 15.5 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                    <span>Floor Map</span>
                  </a>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>

        <!-- Store Guide: Explore Our Floor Map Promo Banner -->
        <section class="floor-map-promo-banner" aria-label="Floor Map Guide">
          <div class="floor-map-promo-copy">
            <p class="floor-map-promo-eyebrow">STORE GUIDE &amp; FLOOR MAPS</p>
            <h2 class="floor-map-promo-title">Explore Our Department Store Floors</h2>
            <p class="floor-map-promo-desc">Navigate Basement 2 through Level 4 with our interactive floor map guide. Find your favourite counters and plan your visit with ease.</p>
            <a href="Takashimaya-Plan-Your-Visit-FINAL-v15.php" class="floor-map-promo-btn">View Interactive Map <span aria-hidden="true">→</span></a>
          </div>
          <div class="floor-map-promo-visual" aria-hidden="true">
            <div class="isometric-levels-wrap">
              <div class="level-indicator">
                <span>L4</span>
                <span>L3</span>
                <span>L2</span>
                <span>L1</span>
                <span>B1</span>
                <span>B2</span>
              </div>
              <div class="isometric-levels-stack">
                <div class="iso-plate plate-l4"></div>
                <div class="iso-plate plate-l3"></div>
                <div class="iso-plate plate-l2"></div>
                <div class="iso-plate plate-l1"></div>
                <div class="iso-plate plate-b1"></div>
                <div class="iso-plate plate-b2"></div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <!-- Client-side Interactive Filtering Script -->
    <script>
      function toggleFilterGroup(id) {
        const el = document.getElementById(id);
        if (el) el.classList.toggle('open');
      }

      document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('brandSearchInput');
        const searchBtn = document.getElementById('brandSearchBtn');
        const alphabetBtns = document.querySelectorAll('.az-btn');
        const cards = document.querySelectorAll('.brand-item-card');
        const resultsCount = document.getElementById('resultsCount');
        const clearBtn = document.getElementById('clearFiltersBtn');
        const checkboxes = document.querySelectorAll('.filter-checkbox input');

        let activeLetter = 'all';

        function filterBrands() {
          const query = (searchInput ? searchInput.value : '').trim().toLowerCase();
          
          // Get checked categories
          const checkedCats = Array.from(document.querySelectorAll('input[name="cat"]:checked')).map(cb => cb.value);
          // Get checked floors
          const checkedFloors = Array.from(document.querySelectorAll('input[name="floor"]:checked')).map(cb => cb.value);
          // Get checked types
          const checkedTypes = Array.from(document.querySelectorAll('input[name="type"]:checked')).map(cb => cb.value);

          let visibleCount = 0;

          cards.forEach(card => {
            const name = card.querySelector('.brand-item-name').textContent.toLowerCase();
            const desc = card.querySelector('p:not(.brand-item-meta)') ? card.querySelector('p:not(.brand-item-meta)').textContent.toLowerCase() : '';
            const letter = card.dataset.letter || '';
            const cat = card.dataset.cat || '';
            const floor = card.dataset.floor || '';
            const type = card.dataset.type || '';

            let matchesSearch = !query || name.includes(query) || cat.toLowerCase().includes(query) || desc.includes(query);
            let matchesLetter = (activeLetter === 'all') || (letter.toUpperCase() === activeLetter.toUpperCase());
            let matchesCat = (checkedCats.length === 0) || checkedCats.includes(cat);
            let matchesFloor = (checkedFloors.length === 0) || checkedFloors.includes(floor);
            let matchesType = (checkedTypes.length === 0) || checkedTypes.includes(type);

            if (matchesSearch && matchesLetter && matchesCat && matchesFloor && matchesType) {
              card.style.display = '';
              visibleCount++;
            } else {
              card.style.display = 'none';
            }
          });

          if (resultsCount) {
            resultsCount.textContent = `Showing ${visibleCount} department store brand${visibleCount === 1 ? '' : 's'}`;
          }
        }

        // Search events
        if (searchInput) {
          searchInput.addEventListener('input', filterBrands);
          searchInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') filterBrands();
          });
        }
        if (searchBtn) {
          searchBtn.addEventListener('click', filterBrands);
        }

        // A-Z pills
        alphabetBtns.forEach(btn => {
          btn.addEventListener('click', () => {
            alphabetBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            activeLetter = btn.dataset.letter;
            filterBrands();
          });
        });

        // Checkbox events
        checkboxes.forEach(cb => {
          cb.addEventListener('change', filterBrands);
        });

        // Reset filters
        if (clearBtn) {
          clearBtn.addEventListener('click', () => {
            if (searchInput) searchInput.value = '';
            checkboxes.forEach(cb => cb.checked = false);
            alphabetBtns.forEach(b => b.classList.remove('active'));
            const allBtn = document.querySelector('.az-btn[data-letter="all"]');
            if (allBtn) allBtn.classList.add('active');
            activeLetter = 'all';
            filterBrands();
          });
        }
      });
    </script>

<?php include 'footer.php'; ?>
