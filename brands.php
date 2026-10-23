<?php
/**
 * Takashimaya Singapore - Brands & Store Directory
 */
$page_title = 'Brands & Store Directory | Takashimaya Singapore';
$page_desc  = 'Explore a world of renowned brands and everyday favourites at Takashimaya Singapore.';
$current_page = 'brands';

include 'header.php';
?>

    <!-- Brands Hero Banner with Cherry Blossom Theme -->
    <section class="brands-hero" aria-label="Brands and Store Directory Banner">
      <div class="brands-hero-bg"></div>
      <div class="brands-hero-content">
        <p class="brands-eyebrow">BRANDS AT TAKASHIMAYA SINGAPORE</p>
        <h1 class="brands-title">Brands &amp; Store Directory</h1>
        <p class="brands-subtitle">Explore a world of renowned brands and everyday favourites at Takashimaya Singapore.</p>

        <!-- Main Search Bar -->
        <div class="brands-search-wrapper">
          <div class="brands-search-box">
            <svg class="brands-search-icon" viewBox="0 0 24 24"><circle cx="10.8" cy="10.8" r="6.5"/><path d="m16 16 4.2 4.2"/></svg>
            <input type="text" id="brandSearchInput" placeholder="Search for a brand (e.g. Dior, Uniqlo, Wedgwood...)" aria-label="Search for a brand">
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
            <label class="filter-checkbox"><input type="checkbox" name="cat" value="Others"> <span>Others</span></label>
          </div>
        </div>

        <!-- Floor Filter -->
        <div class="filter-group open" id="fg-floor">
          <div class="filter-group-header" onclick="toggleFilterGroup('fg-floor')">
            <span>Floor</span>
            <svg class="chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
          </div>
          <div class="filter-group-content">
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="B2"> <span>B2</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="B1"> <span>B1</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="Level 1"> <span>Level 1</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="Level 2"> <span>Level 2</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="Level 3"> <span>Level 3</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="floor" value="Level 4"> <span>Level 4</span></label>
          </div>
        </div>

        <!-- Brand Type Filter -->
        <div class="filter-group open" id="fg-type">
          <div class="filter-group-header" onclick="toggleFilterGroup('fg-type')">
            <span>Brand Type</span>
            <svg class="chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
          </div>
          <div class="filter-group-content">
            <label class="filter-checkbox"><input type="checkbox" name="type" value="International"> <span>International Brands</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="type" value="Japanese"> <span>Japanese Brands</span></label>
            <label class="filter-checkbox"><input type="checkbox" name="type" value="Local"> <span>Local Brands</span></label>
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
          <span id="resultsCount">Showing all brands</span>
        </div>

        <!-- Brand Cards Grid (Exact matching image from reference) -->
        <div class="brands-cards-grid" id="brandsGrid">
          <!-- Card 1: DIOR -->
          <article class="brand-item-card" data-letter="D" data-cat="Beauty" data-floor="Level 1" data-type="International">
            <div class="brand-item-thumb">
              <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&amp;fit=crop&amp;w=700&amp;q=85" alt="DIOR Beauty perfume bottle in pink sakura setting" loading="lazy">
            </div>
            <div class="brand-item-body">
              <div class="brand-item-header">
                <h3 class="brand-item-name">DIOR</h3>
              </div>
              <p class="brand-item-meta">Beauty &nbsp;|&nbsp; Level 1</p>
              <div class="brand-item-actions">
                <a href="pyv.php" class="brand-view-link">View Brand <span aria-hidden="true">→</span></a>
                <a href="pyv.php" class="brand-map-link">
                  <svg viewBox="0 0 24 24"><path d="M20 10c0 5.5-8 12-8 12S4 15.5 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                  <span>See on Map</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 2: Grand Seiko -->
          <article class="brand-item-card" data-letter="G" data-cat="Watches & Jewellery" data-floor="Level 2" data-type="Japanese">
            <div class="brand-item-thumb">
              <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&amp;fit=crop&amp;w=700&amp;q=85" alt="Grand Seiko luxury Japanese timepiece watch" loading="lazy">
            </div>
            <div class="brand-item-body">
              <div class="brand-item-header">
                <h3 class="brand-item-name">Grand Seiko</h3>
              </div>
              <p class="brand-item-meta">Watches &amp; Jewellery &nbsp;|&nbsp; Level 2</p>
              <div class="brand-item-actions">
                <a href="pyv.php" class="brand-view-link">View Brand <span aria-hidden="true">→</span></a>
                <a href="pyv.php" class="brand-map-link">
                  <svg viewBox="0 0 24 24"><path d="M20 10c0 5.5-8 12-8 12S4 15.5 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                  <span>See on Map</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 3: UNIQLO -->
          <article class="brand-item-card" data-letter="U" data-cat="Fashion" data-floor="Level 3" data-type="Japanese">
            <div class="brand-item-thumb">
              <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&amp;fit=crop&amp;w=700&amp;q=85" alt="Uniqlo Japanese contemporary fashion store" loading="lazy">
            </div>
            <div class="brand-item-body">
              <div class="brand-item-header">
                <span class="brand-logo-badge uniqlo-badge">UNI<br>QLO</span>
                <h3 class="brand-item-name sr-only">UNIQLO</h3>
              </div>
              <p class="brand-item-meta">Fashion &nbsp;|&nbsp; Level 3</p>
              <div class="brand-item-actions">
                <a href="pyv.php" class="brand-view-link">View Brand <span aria-hidden="true">→</span></a>
                <a href="pyv.php" class="brand-map-link">
                  <svg viewBox="0 0 24 24"><path d="M20 10c0 5.5-8 12-8 12S4 15.5 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                  <span>See on Map</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 4: Wedgwood -->
          <article class="brand-item-card" data-letter="W" data-cat="Home & Lifestyle" data-floor="Level 2" data-type="International">
            <div class="brand-item-thumb">
              <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&amp;fit=crop&amp;w=700&amp;q=85" alt="Wedgwood fine porcelain blue and white teacup and saucer" loading="lazy">
            </div>
            <div class="brand-item-body">
              <div class="brand-item-header">
                <h3 class="brand-item-name">Wedgwood</h3>
              </div>
              <p class="brand-item-meta">Home &amp; Lifestyle &nbsp;|&nbsp; Level 2</p>
              <div class="brand-item-actions">
                <a href="pyv.php" class="brand-view-link">View Brand <span aria-hidden="true">→</span></a>
                <a href="pyv.php" class="brand-map-link">
                  <svg viewBox="0 0 24 24"><path d="M20 10c0 5.5-8 12-8 12S4 15.5 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                  <span>See on Map</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 5: GODIVA -->
          <article class="brand-item-card" data-letter="G" data-cat="Food & Beverage" data-floor="B1" data-type="International">
            <div class="brand-item-thumb">
              <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&amp;fit=crop&amp;w=700&amp;q=85" alt="Godiva luxury gourmet chocolates in gold packaging" loading="lazy">
            </div>
            <div class="brand-item-body">
              <div class="brand-item-header">
                <h3 class="brand-item-name">GODIVA</h3>
              </div>
              <p class="brand-item-meta">Food &amp; Beverage &nbsp;|&nbsp; B1</p>
              <div class="brand-item-actions">
                <a href="pyv.php" class="brand-view-link">View Brand <span aria-hidden="true">→</span></a>
                <a href="pyv.php" class="brand-map-link">
                  <svg viewBox="0 0 24 24"><path d="M20 10c0 5.5-8 12-8 12S4 15.5 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                  <span>See on Map</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 6: SHISEIDO -->
          <article class="brand-item-card" data-letter="S" data-cat="Beauty" data-floor="Level 1" data-type="Japanese">
            <div class="brand-item-thumb">
              <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&amp;fit=crop&amp;w=700&amp;q=85" alt="Shiseido premium red Japanese skincare cosmetics" loading="lazy">
            </div>
            <div class="brand-item-body">
              <div class="brand-item-header">
                <h3 class="brand-item-name brand-logo-shiseido">SHISEIDO</h3>
              </div>
              <p class="brand-item-meta">Beauty &nbsp;|&nbsp; Level 1</p>
              <div class="brand-item-actions">
                <a href="pyv.php" class="brand-view-link">View Brand <span aria-hidden="true">→</span></a>
                <a href="pyv.php" class="brand-map-link">
                  <svg viewBox="0 0 24 24"><path d="M20 10c0 5.5-8 12-8 12S4 15.5 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                  <span>See on Map</span>
                </a>
              </div>
            </div>
          </article>
        </div>

        <!-- Store Guide: Explore Our Floor Map Promo Banner -->
        <section class="floor-map-promo-banner" aria-label="Floor Map Guide">
          <div class="floor-map-promo-copy">
            <p class="floor-map-promo-eyebrow">STORE GUIDE</p>
            <h2 class="floor-map-promo-title">Explore Our Floor Map</h2>
            <p class="floor-map-promo-desc">Find your favourite brands and plan your visit with ease.</p>
            <a href="pyv.php" class="floor-map-promo-btn">View Floor Map <span aria-hidden="true">→</span></a>
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
            const letter = card.dataset.letter || '';
            const cat = card.dataset.cat || '';
            const floor = card.dataset.floor || '';
            const type = card.dataset.type || '';

            let matchesSearch = !query || name.includes(query) || cat.toLowerCase().includes(query);
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
            resultsCount.textContent = `Showing ${visibleCount} brand${visibleCount === 1 ? '' : 's'}`;
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
