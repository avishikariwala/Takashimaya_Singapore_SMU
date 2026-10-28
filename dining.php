<?php
/**
 * Takashimaya Singapore - Discover Dining, Events & Editorials
 * Bringing the Store to Life
 */
$page_title = 'Dining, Events & Editorials | Takashimaya Singapore';
$page_desc  = 'Discover exceptional dining, seasonal food fairs, curated staff picks and unique events across Takashimaya Singapore.';
$current_page = 'dining';
$show_promo_links = true;

include 'header.php';
?>

    <!-- ========================================================
         HERO SECTION: Dining, Events and More at Takashimaya
         ======================================================== -->
    <section class="dining-hero-section" aria-label="Dining and Events Banner">
      <div class="dining-hero-backdrop"></div>
      <div class="dining-hero-container">
        <div class="dining-hero-content">
          <span class="dining-eyebrow">DISCOVER &amp; BE INSPIRED</span>
          <h1 class="dining-hero-title">Restaurants &amp; Dining at Takashimaya Singapore</h1>
          <p class="dining-hero-subtitle">Exceptional dining, seasonal discoveries, curated stories and unique experiences &mdash; all in one place.</p>
          <div class="dining-hero-actions">
            <a href="#dining-highlights" class="btn-dining-primary">
              <span>Explore Now</span>
              <span class="btn-arrow" aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================================================
         STICKY / PILL SUB-NAV TABS
         ======================================================== -->
    <nav class="dining-subnav-bar" id="diningSubNav" aria-label="Dining and Discovery Navigation">
      <div class="dining-subnav-inner">
        <button type="button" class="subnav-pill active" data-tab="all" onclick="filterDiningSection('all')">
          <svg viewBox="0 0 24 24" class="subnav-icon"><path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
          <span>All Highlights</span>
        </button>
        <button type="button" class="subnav-pill" data-tab="dining" onclick="filterDiningSection('dining')">
          <svg viewBox="0 0 24 24" class="subnav-icon"><path d="M18 2v20M2 2h3a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H2V2zM7 2v20"/></svg>
          <span>Dining</span>
        </button>
        <button type="button" class="subnav-pill" data-tab="events" onclick="filterDiningSection('events')">
          <svg viewBox="0 0 24 24" class="subnav-icon"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          <span>Events</span>
        </button>
        <button type="button" class="subnav-pill" data-tab="seasonal" onclick="filterDiningSection('seasonal')">
          <svg viewBox="0 0 24 24" class="subnav-icon"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          <span>Seasonal Picks</span>
        </button>
        <button type="button" class="subnav-pill" data-tab="staff" onclick="filterDiningSection('staff')">
          <svg viewBox="0 0 24 24" class="subnav-icon"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/></svg>
          <span>Staff Edit</span>
        </button>
      </div>
    </nav>

    <!-- ========================================================
         MAIN CONTENT AREA
         ======================================================== -->
    <main class="dining-main-wrap" id="dining-highlights">

      <!-- SECTION 1: DINING HIGHLIGHTS -->
      <section class="discovery-block" data-section="dining">
        <div class="discovery-block-header">
          <div>
            <span class="block-tag">DINING HIGHLIGHTS</span>
            <h2 class="block-title">A World of Flavours Under One Roof</h2>
          </div>
          <a href="brands.php" class="view-all-link">View All Dining <span aria-hidden="true">&rarr;</span></a>
        </div>

        <div class="dining-cards-grid">
          <!-- Card 1: Taste of Japan -->
          <article class="discovery-card food-card" data-category="dining">
            <div class="card-media">
              <img src="https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=800&q=82" alt="Artisanal Nigiri sushi and sashimi platter" loading="lazy">
              <span class="media-tag">FEATURED</span>
            </div>
            <div class="card-body">
              <div class="card-content-wrap">
                <span class="card-sub-tag">JAPANESE CUISINE &bull; LEVEL 4 &amp; B2</span>
                <h3 class="card-heading">A Taste of Japan</h3>
                <p class="card-excerpt">Authentic flavours and refined dining experiences at Takashimaya, from seasonal sashimi counters to delicate wagyu sukiyaki.</p>
              </div>
              <a href="pyv.php" class="round-action-btn" aria-label="Explore A Taste of Japan">
                <span>&rarr;</span>
              </a>
            </div>
          </article>

          <!-- Card 2: Weekend at the Food Hall -->
          <article class="discovery-card food-card" data-category="dining">
            <div class="card-media">
              <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=800&q=82" alt="Bustling modern Takashimaya Food Hall with gourmet stations" loading="lazy">
              <span class="media-tag">FOOD GUIDE</span>
            </div>
            <div class="card-body">
              <div class="card-content-wrap">
                <span class="card-sub-tag">GOURMET FOOD HALL &bull; BASEMENT 2</span>
                <h3 class="card-heading">Weekend at the Food Hall</h3>
                <p class="card-excerpt">From casual artisanal bites to signature confectioneries and takeaway bentos, discover something fresh every visit.</p>
              </div>
              <a href="pyv.php" class="round-action-btn" aria-label="Explore Weekend at the Food Hall">
                <span>&rarr;</span>
              </a>
            </div>
          </article>

          <!-- Card 3: Cafes & Sweet Treats -->
          <article class="discovery-card food-card" data-category="dining">
            <div class="card-media">
              <img src="https://images.unsplash.com/photo-1576092768241-dec231879fc3?auto=format&fit=crop&w=800&q=82" alt="Matcha ceremonial tea bowl with delicate traditional wagashi" loading="lazy">
              <span class="media-tag">SWEET DELIGHTS</span>
            </div>
            <div class="card-body">
              <div class="card-content-wrap">
                <span class="card-sub-tag">CAFÉS &amp; DESSERTS &bull; ALL LEVELS</span>
                <h3 class="card-heading">Caf&eacute;s &amp; Sweet Treats</h3>
                <p class="card-excerpt">Delight in artisanal tea salons, traditional Japanese wagashi confectioneries, and freshly baked European pastries.</p>
              </div>
              <a href="pyv.php" class="round-action-btn" aria-label="Explore Cafes and Sweet Treats">
                <span>&rarr;</span>
              </a>
            </div>
          </article>
        </div>
      </section>

      <!-- SECTION 2: EDITORIALS & CURATED EXPERIENCES -->
      <section class="discovery-block" data-section="editorials">
        <div class="editorial-cards-grid">

          <!-- Card A: Seasonal Discoveries -->
          <article class="discovery-card banner-card" data-category="seasonal">
            <div class="banner-card-media">
              <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=700&q=82" alt="Curated seasonal tableware and luxury lifestyle goods" loading="lazy">
            </div>
            <div class="banner-card-body">
              <span class="block-tag">SEASONAL PICKS</span>
              <h3 class="card-heading">Seasonal Discoveries</h3>
              <p class="card-excerpt">Curated picks for the season &mdash; from luxury fashion and home living to gourmet holiday hampers and gifts.</p>
              <a href="brands.php" class="editorial-link">
                <span>Explore Seasonal Picks</span>
                <span aria-hidden="true">&rarr;</span>
              </a>
            </div>
          </article>

          <!-- Card B: Takashimaya Staff Picks -->
          <article class="discovery-card banner-card" data-category="staff">
            <div class="banner-card-media">
              <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=700&q=82" alt="Takashimaya staff member sharing curated picks" loading="lazy">
            </div>
            <div class="banner-card-body">
              <span class="block-tag">STAFF EDIT</span>
              <h3 class="card-heading">Takashimaya Staff Picks</h3>
              <p class="card-excerpt">Our concierge team shares what they love &mdash; from hidden culinary gems to must-try artisan teas and lifestyle finds.</p>
              <a href="pyv.php" class="editorial-link">
                <span>See Their Picks</span>
                <span aria-hidden="true">&rarr;</span>
              </a>
            </div>
          </article>

          <!-- Card C: Events & Workshops -->
          <article class="discovery-card banner-card" data-category="events">
            <div class="banner-card-media">
              <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=700&q=82" alt="Japanese artisanal ceramic craft making workshop" loading="lazy">
            </div>
            <div class="banner-card-body">
              <span class="block-tag">EVENTS &amp; WORKSHOPS</span>
              <h3 class="card-heading">Craft, Taste &amp; Everyday Living</h3>
              <p class="card-excerpt">Join our exclusive culinary masterclasses, tea ceremony tastings, and seasonal mastercrafter exhibitions.</p>
              <a href="pyv.php#mark-your-calendar" class="editorial-link">
                <span>View Events</span>
                <span aria-hidden="true">&rarr;</span>
              </a>
            </div>
          </article>

        </div>
      </section>

      <!-- SECTION 3: PROMOTIONS & VISITOR INVITATION -->
      <section class="dining-invitation-strip">
        <div class="invitation-box">
          <div class="invitation-text">
            <span class="invitation-tag">PLAN YOUR CULINARY VISIT</span>
            <h3>Pair Your Dining with a Takashimaya Day</h3>
            <p>Save your favorite dining dates, discover exclusive restaurant privileges with Takashimaya Cards, and reserve your table in advance.</p>
          </div>
          <div class="invitation-action">
            <a href="pyv.php#mark-your-calendar" class="btn-dining-primary">
              <span>Choose Your Taka Day</span>
              <span class="btn-arrow" aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
      </section>

    </main>

    <script>
      function filterDiningSection(category) {
        const pills = document.querySelectorAll('.subnav-pill');
        pills.forEach(p => p.classList.toggle('active', p.getAttribute('data-tab') === category));

        const cards = document.querySelectorAll('.discovery-card');
        cards.forEach(card => {
          if (category === 'all') {
            card.style.display = '';
          } else {
            const cardCat = card.getAttribute('data-category');
            card.style.display = (cardCat === category) ? '' : 'none';
          }
        });

        const target = document.getElementById('dining-highlights');
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    </script>

<?php include 'footer.php'; ?>
