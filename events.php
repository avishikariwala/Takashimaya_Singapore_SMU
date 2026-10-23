<?php
/**
 * Takashimaya Singapore - Events & Promotions
 * Featuring the Japanese Food Festival with Pre-Order e-Shop Shift Flow
 */
$page_title = 'Events & Promotions | Takashimaya Singapore';
$page_desc  = 'Discover upcoming seasonal festivals, exclusive promotions, masterclasses, and pre-order festival highlights online at Takashimaya Singapore.';
$current_page = 'events';
$show_promo_links = true;

include 'header.php';
?>

    <!-- ========================================================
         HERO SECTION: Events & Promotions
         ======================================================== -->
    <section class="events-hero-section" aria-label="Events and Promotions Hero Banner">
      <div class="events-hero-backdrop"></div>
      <div class="events-hero-container">
        <div class="events-hero-content">
          <span class="events-eyebrow">WHAT'S HAPPENING AT TAKASHIMAYA</span>
          <h1 class="events-hero-title">Events &amp;<br>Promotions</h1>
          <p class="events-hero-subtitle">Immerse yourself in authentic cultural festivals, seasonal gourmets, brand showcases, and exclusive department store privileges.</p>
          <div class="events-hero-actions">
            <a href="#featured-festival" class="btn-events-primary">
              <span>Explore Japanese Food Festival</span>
              <span class="btn-arrow" aria-hidden="true">&rarr;</span>
            </a>
            <a href="#all-events" class="btn-events-secondary">
              <span>View All Events &amp; Offers</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================================================
         STICKY SUBNAV FILTER PILLS
         ======================================================== -->
    <nav class="events-subnav-bar" id="eventsSubNav" aria-label="Events Category Navigation">
      <div class="events-subnav-inner">
        <button type="button" class="subnav-pill active" data-tab="all" onclick="filterEvents('all')">
          <svg viewBox="0 0 24 24" class="subnav-icon"><circle cx="12" cy="12" r="9"/><path d="M12 3v18M3 12h18"/></svg>
          <span>All Highlights</span>
        </button>
        <button type="button" class="subnav-pill" data-tab="food-fairs" onclick="filterEvents('food-fairs')">
          <svg viewBox="0 0 24 24" class="subnav-icon"><path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
          <span>Food Fairs &amp; Dining</span>
        </button>
        <button type="button" class="subnav-pill" data-tab="promotions" onclick="filterEvents('promotions')">
          <svg viewBox="0 0 24 24" class="subnav-icon"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
          <span>Storewide Promotions</span>
        </button>
        <button type="button" class="subnav-pill" data-tab="workshops" onclick="filterEvents('workshops')">
          <svg viewBox="0 0 24 24" class="subnav-icon"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          <span>Workshops &amp; Pop-ups</span>
        </button>
      </div>
    </nav>

    <!-- ========================================================
         MAIN CONTENT: FEATURED JAPANESE FOOD FESTIVAL SHOWCASE
         ======================================================== -->
    <main class="events-main-wrap">

      <!-- HERO HIGHLIGHT: JAPANESE FOOD FESTIVAL (Primary User Flow) -->
      <section class="festival-spotlight-section" id="featured-festival" aria-label="Featured Japanese Food Festival">
        <div class="festival-card-master">
          <div class="festival-visual-col">
            <img src="https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=1200&q=85" alt="Authentic Japanese street food festival highlights at Takashimaya Singapore" class="festival-hero-img">
            <div class="festival-badge-overlay">
              <span class="badge-seal">髙</span>
              <span class="badge-text">ANNUAL SIGNATURE FOOD FAIR</span>
            </div>
            <div class="festival-dates-pill">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
              <span>15 Oct – 02 Nov 2026 &bull; Takashimaya Square, B2</span>
            </div>
          </div>

          <div class="festival-content-col">
            <div class="festival-header">
              <span class="festival-tag">TASTE OF NIPPON &bull; TAKASHIMAYA SQUARE B2</span>
              <h2 class="festival-title">Autumn Japanese Food Festival 2026</h2>
              <p class="festival-lead">Indulge in authentic Japanese street specialities, artisanal confections, and air-flown seasonal delicacies directly from Hokkaido, Kyoto, and Okinawa prefectures.</p>
            </div>

            <!-- Highlights Checklist -->
            <div class="festival-perks-grid">
              <div class="perk-unit">
                <span class="perk-icon">🍣</span>
                <div>
                  <strong>Live Teppan &amp; Chef Stalls</strong>
                  <p>Sizzling Kyoto Takoyaki, Hiroshima Okonomiyaki &amp; A5 Wagyu Kushiyaki made fresh on site.</p>
                </div>
              </div>
              <div class="perk-unit">
                <span class="perk-icon">🍈</span>
                <div>
                  <strong>Hokkaido Air-Flown Fruits</strong>
                  <p>Limited batches of Yubari King Melons, Shine Muscat grapes &amp; fresh sea urchin bentos.</p>
                </div>
              </div>
              <div class="perk-unit">
                <span class="perk-icon">🍵</span>
                <div>
                  <strong>Artisanal Matcha Sweets</strong>
                  <p>Uji ceremonial grade matcha soft-serve, fresh warabimochi and Tokyo castella cakes.</p>
                </div>
              </div>
              <div class="perk-unit">
                <span class="perk-icon">🍶</span>
                <div>
                  <strong>Exclusive Brewery Sakes</strong>
                  <p>Award-winning Junmai Daiginjo selections flown in exclusively for Takashimaya cardholders.</p>
                </div>
              </div>
            </div>

            <!-- Contextual Flow / CTA Zone: Pre-order Festival Highlights Online -->
            <div class="festival-cta-banner">
              <div class="cta-message">
                <span class="cta-pulse-dot"></span>
                <div>
                  <h4 class="cta-heading">Skip the Queue &bull; Online Exclusives</h4>
                  <p class="cta-desc">Pre-order popular festival sets, air-flown fruit boxes, and sweet confectioneries for convenient home delivery or express in-store collection.</p>
                </div>
              </div>

              <!-- Contextual CTA Button: Smoothly shifts user to e-Shop Modal / Checkout -->
              <div class="cta-action-row">
                <button type="button" class="btn-preorder-eshop" id="btnPreorderOnline" onclick="openEshopShift('autumn-japanese-food-festival')">
                  <span class="cart-icon">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2">
                      <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/>
                    </svg>
                  </span>
                  <span>Pre-order Festival Highlights Online</span>
                  <span class="btn-arrow" aria-hidden="true">&rarr;</span>
                </button>
                <a href="pyv.php#mark-your-calendar" class="btn-mark-calendar-taka">
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><circle cx="12" cy="15" r="1.5"/></svg>
                  <span>Mark on My Visit Calendar</span>
                </a>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- ========================================================
           MORE UPCOMING EVENTS & PROMOTIONS GRID
           ======================================================== -->
      <section class="events-catalogue-block" id="all-events">
        <div class="catalogue-block-header">
          <div>
            <span class="block-tag">CURATED HAPPENINGS</span>
            <h3 class="block-title">More Events &amp; Promotions</h3>
          </div>
          <p class="block-subtitle">Discover ongoing in-store privileges, brand anniversaries, and seasonal workshops.</p>
        </div>

        <div class="events-grid-layout" id="eventsGrid">

          <!-- Card 1: Takashimaya Cardholders 10% Shopping Days -->
          <article class="event-card" data-category="promotions">
            <div class="event-card-media">
              <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=700&q=80" alt="Takashimaya Cardholder Special 10% Shopping Day" loading="lazy">
              <span class="event-card-tag tag-crimson">CARD PRIVILEGE</span>
            </div>
            <div class="event-card-body">
              <span class="event-meta-date">24 Oct – 27 Oct 2026 &bull; Storewide</span>
              <h4 class="event-card-title">Takashimaya 10% Card Day</h4>
              <p class="event-card-desc">Enjoy an additional 10% rebate across luxury fashion, fine jewellery, cosmetics, and home departments with your Takashimaya Cards.</p>
              <div class="event-card-footer">
                <button type="button" class="btn-card-action" onclick="openEshopShift('card-day-promotions')">
                  <span>Shop Online Specials &rarr;</span>
                </button>
              </div>
            </div>
          </article>

          <!-- Card 2: Autumn Beauty Masterclass & Fragrance Atelier -->
          <article class="event-card" data-category="workshops">
            <div class="event-card-media">
              <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=700&q=80" alt="Beauty consultations and fragrance workshop" loading="lazy">
              <span class="event-card-tag">WORKSHOP</span>
            </div>
            <div class="event-card-body">
              <span class="event-meta-date">18 Oct – 22 Oct 2026 &bull; Level 1 Cosmetics</span>
              <h4 class="event-card-title">Autumn Beauty &amp; Fragrance Atelier</h4>
              <p class="event-card-desc">Personalized skincare consultations with Japanese beauty experts and fragrance layering masterclasses from prestigious houses.</p>
              <div class="event-card-footer">
                <button type="button" class="btn-card-action" onclick="openEshopShift('beauty-atelier-booking')">
                  <span>Pre-order Beauty Sets &rarr;</span>
                </button>
              </div>
            </div>
          </article>

          <!-- Card 3: Hokkaido Sea Harvest Pop-Up -->
          <article class="event-card" data-category="food-fairs">
            <div class="event-card-media">
              <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=700&q=80" alt="Hokkaido Gourmet Food Fair" loading="lazy">
              <span class="event-card-tag">FOOD FAIR</span>
            </div>
            <div class="event-card-body">
              <span class="event-meta-date">Ongoing till 31 Oct 2026 &bull; Basement 2</span>
              <h4 class="event-card-title">Hokkaido Fresh Seafood Bento Fair</h4>
              <p class="event-card-desc">Savor Hokkaido snow crab, Ikura salmon roe bowls, and grilled scallops delivered daily via express cold-chain flights.</p>
              <div class="event-card-footer">
                <button type="button" class="btn-card-action" onclick="openEshopShift('hokkaido-harvest-bento')">
                  <span>Pre-order Bentos &rarr;</span>
                </button>
              </div>
            </div>
          </article>

          <!-- Card 4: Japanese Ceramics & Tea Living Exhibition -->
          <article class="event-card" data-category="workshops">
            <div class="event-card-media">
              <img src="https://images.unsplash.com/photo-1576092768241-dec231879fc3?auto=format&fit=crop&w=700&q=80" alt="Japanese traditional ceramic craft display" loading="lazy">
              <span class="event-card-tag">LIFESTYLE</span>
            </div>
            <div class="event-card-body">
              <span class="event-meta-date">01 Nov – 14 Nov 2026 &bull; Level 4 Living</span>
              <h4 class="event-card-title">Arita Porcelain &amp; Kyoto Tea Ceremony</h4>
              <p class="event-card-desc">Meet 4th-generation master potters and discover hand-glazed tea ceremony ware crafted in Saga prefecture.</p>
              <div class="event-card-footer">
                <button type="button" class="btn-card-action" onclick="openEshopShift('arita-tea-collection')">
                  <span>View Online Catalog &rarr;</span>
                </button>
              </div>
            </div>
          </article>

        </div>
      </section>

      <!-- ========================================================
           CROSS-NAVIGATION BANNER TO PLAN YOUR VISIT
           ======================================================== -->
      <section class="events-pyv-banner">
        <div class="pyv-banner-inner">
          <div class="pyv-banner-text">
            <span class="pyv-banner-tag">PLAN YOUR ITINERARY</span>
            <h3>Pair Your Event with a Seamless In-Store Visit</h3>
            <p>Explore our 3D interactive floor models, locate parking and concierge desks, and pick your favorite Taka Day on your personalized shopping calendar.</p>
          </div>
          <div class="pyv-banner-action">
            <a href="pyv.php" class="btn-events-primary">
              <span>Explore 3D Floor Guide</span>
              <span class="btn-arrow" aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
      </section>

    </main>

    <!-- ========================================================
         SMOOTH E-SHOP SHIFT MODAL / DRAWER
         Seamless contextual transition to official online store
         ======================================================== -->
    <div class="eshop-shift-overlay" id="eshopShiftOverlay" role="dialog" aria-modal="true" aria-labelledby="shiftModalTitle" aria-hidden="true">
      <div class="eshop-shift-card">
        <div class="shift-card-header">
          <div class="shift-brand-seal">
            <span class="brand-seal-mini">髙</span>
            <div>
              <span class="shift-eyebrow">TAKASHIMAYA ONLINE STORE</span>
              <h3 id="shiftModalTitle">Pre-order Japanese Food Festival Highlights</h3>
            </div>
          </div>
          <button type="button" class="close-shift-btn" id="closeShiftBtn" aria-label="Close Pre-order Modal" onclick="closeEshopShift()">&times;</button>
        </div>

        <div class="shift-card-body">
          <p class="shift-intro-note">You are being seamlessly connected to the official <strong>Takashimaya e-Shop</strong> to reserve limited festival delicacies before they sell out in store.</p>

          <div class="preorder-items-preview" id="preorderItemsPreview">
            <!-- Item 1 -->
            <div class="preorder-item">
              <img src="https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=150&q=80" alt="Deluxe Sashimi & Bento Platter" class="item-thumb">
              <div class="item-info">
                <h4>Hokkaido Tokusen Seafood Bento (Air-Flown)</h4>
                <p>Limited to 50 sets daily &bull; Collection at Takashimaya Square B2</p>
                <div class="item-price-bar">
                  <span class="price-val">S$ 38.00</span>
                  <span class="badge-fresh">Fresh Daily</span>
                </div>
              </div>
              <button type="button" class="btn-item-add" onclick="triggerEshopShift('Hokkaido Tokusen Seafood Bento')">Pre-order</button>
            </div>

            <!-- Item 2 -->
            <div class="preorder-item">
              <img src="https://images.unsplash.com/photo-1576092768241-dec231879fc3?auto=format&fit=crop&w=150&q=80" alt="Kyoto Uji Matcha & Wagashi Set" class="item-thumb">
              <div class="item-info">
                <h4>Kyoto Uji Ceremonial Matcha &amp; Warabimochi Gift Set</h4>
                <p>Includes handmade wooden whisk &bull; Direct import from Uji, Kyoto</p>
                <div class="item-price-bar">
                  <span class="price-val">S$ 46.50</span>
                  <span class="badge-fresh">Bestseller</span>
                </div>
              </div>
              <button type="button" class="btn-item-add" onclick="triggerEshopShift('Kyoto Uji Ceremonial Matcha Set')">Pre-order</button>
            </div>

            <!-- Item 3 -->
            <div class="preorder-item">
              <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=150&q=80" alt="Yubari Melon Box" class="item-thumb">
              <div class="item-info">
                <h4>Hokkaido Yubari King Melon (Gift Box of 2)</h4>
                <p>Grade: Ryo &bull; Sweetness 13+ Brix &bull; Air-flown chilled</p>
                <div class="item-price-bar">
                  <span class="price-val">S$ 128.00</span>
                  <span class="badge-fresh">Air-Flown</span>
                </div>
              </div>
              <button type="button" class="btn-item-add" onclick="triggerEshopShift('Hokkaido Yubari King Melon')">Pre-order</button>
            </div>
          </div>

          <div class="shift-delivery-perks">
            <div class="perk-tag">🚚 Free Delivery on orders S$150+</div>
            <div class="perk-tag">📍 Free Express Pick-up at B2 Takashimaya Square</div>
            <div class="perk-tag">💳 Earn 2x Takashimaya Bonus Points</div>
          </div>
        </div>

        <div class="shift-card-footer">
          <button type="button" class="btn-continue-shopping" onclick="closeEshopShift()">Stay on Events Page</button>
          <a href="https://www.takashimaya.com.sg" target="_blank" rel="noopener noreferrer" class="btn-launch-eshop" id="btnLaunchEshop">
            <span>Continue to Official Takashimaya e-Shop</span>
            <span class="btn-arrow" aria-hidden="true">&rarr;</span>
          </a>
        </div>
      </div>
    </div>

    <!-- ========================================================
         EVENT FILTER & E-SHOP SHIFT SCRIPT
         ======================================================== -->
    <script>
      // Filter Event Categories
      function filterEvents(category) {
        const pills = document.querySelectorAll('.events-subnav-bar .subnav-pill');
        pills.forEach(p => p.classList.toggle('active', p.getAttribute('data-tab') === category));

        const cards = document.querySelectorAll('.event-card');
        cards.forEach(card => {
          if (category === 'all') {
            card.style.display = '';
          } else {
            const cardCat = card.getAttribute('data-category');
            card.style.display = (cardCat === category) ? '' : 'none';
          }
        });

        if (category !== 'all') {
          const target = document.getElementById('all-events');
          if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        }
      }

      // Open e-Shop Shift Transition
      function openEshopShift(context) {
        const overlay = document.getElementById('eshopShiftOverlay');
        if (!overlay) return;

        overlay.classList.add('open');
        overlay.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';

        if (typeof showSiteToast === 'function') {
          showSiteToast('Opening Takashimaya e-Shop Pre-order Portal...');
        }
      }

      // Close e-Shop Shift Transition
      function closeEshopShift() {
        const overlay = document.getElementById('eshopShiftOverlay');
        if (!overlay) return;

        overlay.classList.remove('open');
        overlay.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      }

      // Action when clicking individual pre-order item
      function triggerEshopShift(itemName) {
        if (typeof showSiteToast === 'function') {
          showSiteToast(`Adding "${itemName}" to pre-order session...`);
        }
        setTimeout(() => {
          window.open('https://www.takashimaya.com.sg', '_blank', 'noopener');
          closeEshopShift();
        }, 600);
      }

      // Close on ESC key or clicking outside
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeEshopShift();
      });

      const shiftOverlay = document.getElementById('eshopShiftOverlay');
      if (shiftOverlay) {
        shiftOverlay.addEventListener('click', (e) => {
          if (e.target === shiftOverlay) closeEshopShift();
        });
      }
    </script>

<?php include 'footer.php'; ?>
