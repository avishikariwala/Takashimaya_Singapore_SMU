<?php
/**
 * Takashimaya Singapore - Final Home Page
 */
$page_title = 'Takashimaya Singapore | Discover Something New';
$page_desc  = 'Discover brands, dining, events and experiences at Takashimaya Singapore.';
$current_page = 'final_HP';
$show_promo_links = true;

include 'header.php';
?>

    <section class="hero" aria-label="Discover Takashimaya Singapore">
      <div class="hero-content">
        <p class="eyebrow">A more joyful everyday</p>
        <h1>Discover<br>Takashimaya<br>Singapore</h1>
        <p class="hero-copy">From world-renowned brands to exceptional dining and inspiring experiences, there’s always something new to discover.</p>
        <a class="primary-button" href="#discover">Explore Now <span aria-hidden="true">→</span></a>
      </div>
      <div class="hero-controls" aria-label="Hero image controls"><span>● ● ●</span><button id="pauseHero" aria-label="Pause slideshow">Ⅱ</button></div>
    </section>

    <section class="quick-links" id="discover" aria-label="Explore Takashimaya">
      <a class="quick-card" id="brands" href="#stories">
        <span class="quick-icon"><svg viewBox="0 0 24 24"><path d="M3 8.5h18l-1.5 12h-15Z"/><path d="M8 8.5V6a4 4 0 0 1 8 0v2.5"/></svg></span>
        <span><h3>Find Brands</h3><p>Explore our curated selection of brands</p></span><span class="round-arrow">→</span>
      </a>
      <a class="quick-card" id="dining" href="dining.php">
        <span class="quick-icon"><svg viewBox="0 0 24 24"><path d="M5 3v7M2.5 3v4a2.5 2.5 0 0 0 5 0V3M5 9.5V21M16 3v18M16 3c4 2 5 6 0 9"/></svg></span>
        <span><h3>Explore Dining</h3><p>Discover restaurants and cafés</p></span><span class="round-arrow">→</span>
      </a>
      <a class="quick-card" id="events" href="events.php">
        <span class="quick-icon"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M7 2v6M17 2v6M3 10h18"/></svg></span>
        <span><h3>Events &amp; Workshops</h3><p>Be part of our seasonal experiences</p></span><span class="round-arrow">→</span>
      </a>
      <a class="quick-card" id="visit" href="pyv.php">
        <span class="quick-icon"><svg viewBox="0 0 24 24"><path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg></span>
        <span><h3>Plan Your Visit</h3><p>Find store information, floor guide and more</p></span><span class="round-arrow">→</span>
      </a>
    </section>

    <section class="stories" id="stories">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Takashimaya edit</p>
          <h2>Stories, Picks and Inspiration</h2>
          <p>Curated content to help you discover something new — from seasonal highlights and expert picks to dining stories and lifestyle ideas.</p>
        </div>
        <a class="view-all" href="#stories">View All <span>→</span></a>
      </div>
      <div class="story-grid">
        <a class="story-card" id="story-dining" href="#dining">
          <div class="story-image" role="img" aria-label="Japanese dining inspiration"></div>
          <div class="story-body"><div class="story-category">Dining</div><h3>A Taste of Japan</h3><p>Discover exceptional dining experiences at Takashimaya.</p><span class="story-arrow">→</span></div>
        </a>
        <a class="story-card" href="#brands">
          <div class="story-image" role="img" aria-label="Beauty and skincare products"></div>
          <div class="story-body"><div class="story-category">Beauty</div><h3>New Season Essentials</h3><p>Explore the latest in beauty and self-care.</p><span class="story-arrow">→</span></div>
        </a>
        <a class="story-card" href="#brands">
          <div class="story-image" role="img" aria-label="Modern fashion and clothing"></div>
          <div class="story-body"><div class="story-category">Fashion</div><h3>Modern Wardrobe Ideas</h3><p>Timeless pieces for everyday living.</p><span class="story-arrow">→</span></div>
        </a>
        <a class="story-card" href="pyv.php">
          <div class="story-image" role="img" aria-label="Homeware and tea setting"></div>
          <div class="story-body"><div class="story-category">Lifestyle</div><h3>Elevate Everyday Living</h3><p>Thoughtful finds for a more inspired home.</p><span class="story-arrow">→</span></div>
        </a>
      </div>
    </section>

    <section class="promo-section" id="promotions">
      <div class="section-heading">
        <div>
          <p class="eyebrow">A little something extra</p>
          <h2>Takashimaya Singapore Promotions &amp; Offers</h2>
          <p>Find a new favourite, enjoy seasonal discoveries and make more of your next visit.</p>
        </div>
        <a class="view-all" href="pyv.php">Plan a Visit <span>→</span></a>
      </div>
      <div class="promo-grid">
        <article class="promo-card">
          <div class="story-category">Seasonal Edit</div>
          <h3>Something for the season</h3>
          <p>Explore fresh picks across fashion, beauty, home and gifting.</p>
          <a class="promo-link" href="#stories">Explore the edit →</a>
        </article>
        <article class="promo-card">
          <div class="story-category">Dining Discoveries</div>
          <h3>Your next favourite bite</h3>
          <p>Make time for Japanese favourites, cafés and memorable meals.</p>
          <a class="promo-link" href="#dining">Discover dining →</a>
        </article>
        <article class="promo-card">
          <div class="story-category">In-store Experiences</div>
          <h3>Make a day of it</h3>
          <p>Keep an eye out for events, workshops and special experiences.</p>
          <a class="promo-link" href="#events">What's on →</a>
        </article>
      </div>
      <p style="font-size:10px;color:var(--muted);margin:13px 0 0;">Promotional highlights shown here are illustrative homepage content. Check official store channels for current offers and terms.</p>
    </section>

    <section class="about-section" id="about-us">
      <div class="about-art" role="img" aria-label="Takashimaya-inspired department store atmosphere"></div>
      <div class="about-copy">
        <p class="eyebrow">A Singapore shopping landmark</p>
        <h2>About Takashimaya Singapore</h2>
        <p>Located at Ngee Ann City along Orchard Road, Takashimaya Singapore brings together a world of shopping, dining and discovery under one roof. Inspired by a thoughtful approach to quality and service, it is a place to explore beloved labels, discover new finds and enjoy time with family and friends.</p>
        <div class="about-facts">
          <div class="about-fact"><strong>Orchard</strong>In the heart of the city</div>
          <div class="about-fact"><strong>Discover</strong>Fashion, beauty, home &amp; more</div>
          <div class="about-fact"><strong>Enjoy</strong>Dining and experiences</div>
        </div>
        <a class="primary-button" href="pyv.php">Plan Your Visit <span aria-hidden="true">→</span></a>
      </div>
    </section>

    <section class="map-section" id="location" aria-label="Store Location Map">
      <div class="map-header">
        <div>
          <p class="eyebrow">Visit Us</p>
          <h2>Find Us on Orchard Road</h2>
          <p class="map-address"><strong>Takashimaya Department Store</strong> · Located in: Ngee Ann City, 391 Orchard Rd, Singapore 238872</p>
        </div>
        <div class="map-actions">
          <a class="primary-button" href="https://maps.google.com/?q=Takashimaya+Department+Store+Ngee+Ann+City+391+Orchard+Rd+Singapore+238872" target="_blank" rel="noopener noreferrer">
            Get Directions <span aria-hidden="true">↗</span>
          </a>
        </div>
      </div>
      <div class="map-container">
        <iframe
          title="Takashimaya Singapore Location Map"
          src="https://maps.google.com/maps?q=Takashimaya%20Department%20Store%2C%20391%20Orchard%20Rd%2C%20Ngee%20Ann%20City%2C%20Singapore%20238872&t=&z=16&ie=UTF8&iwloc=&output=embed"
          width="100%"
          height="420"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <div class="map-card-overlay">
          <div class="map-card-badge">髙 Takashimaya</div>
          <h3>Ngee Ann City</h3>
          <p>391 Orchard Road, Singapore 238872</p>
          <div class="map-card-meta">
            <span>● Open Daily: 10:00 AM – 9:30 PM</span>
            <span>● MRT: Orchard (NS22/TE14) or Somerset (NS23)</span>
          </div>
        </div>
      </div>
    </section>

<?php include 'footer.php'; ?>
