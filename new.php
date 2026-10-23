<?php
/**
 * Takashimaya Singapore - Plan Your Visit
 */
$page_title = 'Plan Your Visit | Takashimaya Singapore';
$page_desc  = 'Everything you need for a smooth and enjoyable experience at Takashimaya Singapore. Store directory, opening hours, directions, and floor guide.';
$current_page = 'pyv';
$show_promo_links = true;

$extra_head = <<<'HTML'
<style id="takashimaya-floor-directory-layout-v2">
/* Map-first floor directory layout: preserve the existing site header/footer and page content. */
.main-pyv {
  display: grid !important;
  grid-template-columns: minmax(0, 1.15fr) minmax(300px, .85fr) !important;
  grid-template-rows: auto auto !important;
  grid-template-areas: "map map" "search details" !important;
  align-items: stretch !important;
  gap: 22px !important;
  width: min(100% - 40px, 1440px) !important;
  max-width: 1440px !important;
  margin: 28px auto 0 !important;
}
.main-pyv > .floor-visual {
  grid-area: map !important;
  grid-column: 1 / -1 !important;
  grid-row: 1 !important;
  width: 100% !important;
  min-width: 0 !important;
  min-height: 0 !important;
  align-self: stretch !important;
}
.main-pyv > .floor-intro {
  grid-area: search !important;
  grid-column: 1 !important;
  grid-row: 2 !important;
  width: 100% !important;
  min-width: 0 !important;
  align-self: start !important;
}
.main-pyv > .floor-detail {
  grid-area: details !important;
  grid-column: 2 !important;
  grid-row: 2 !important;
  width: 100% !important;
  min-width: 0 !important;
  align-self: stretch !important;
}
.floor-visual {
  overflow: hidden !important;
  border-radius: 16px !important;
  box-shadow: 0 8px 28px rgba(74, 47, 34, .06) !important;
}
.map-top-bar { flex-wrap: wrap !important; gap: 12px !important; }
.map-prominent-floor { min-width: 0 !important; flex-wrap: wrap !important; }
.map-viewport {
  position: relative !important;
  height: auto !important;
  min-height: 0 !important;
  aspect-ratio: 1.82 / 1 !important;
  width: 100% !important;
  overflow: hidden !important;
  background: #fffdfa !important;
  touch-action: pan-y !important;
}
.map-pan-stage {
  position: absolute !important;
  inset: 0 !important;
  width: 100% !important;
  height: 100% !important;
  transform-origin: center center !important;
}
.map-base-img {
  display: block !important;
  width: 100% !important;
  height: 100% !important;
  object-fit: fill !important;
  object-position: center !important;
  user-select: none !important;
  -webkit-user-drag: none !important;
}
.store-markers-layer { position: absolute !important; inset: 0 !important; pointer-events: none !important; }
.store-marker-pin {
  pointer-events: auto !important;
  min-width: 14px !important;
  min-height: 14px !important;
  width: 14px !important;
  height: 14px !important;
  padding: 0 !important;
  border: 2px solid #fff !important;
  border-radius: 50% !important;
  background: #c8102e !important;
  box-shadow: 0 1px 5px rgba(0,0,0,.28) !important;
  transform: translate(-50%, -50%) !important;
  z-index: 2 !important;
}
.store-marker-pin .pin-dot { display: block !important; width: 100% !important; height: 100% !important; border-radius: 50% !important; background: #c8102e !important; }
/* Store names appear only on hover, keyboard focus or selection to prevent label collisions. */
.store-marker-pin .pin-title { display: none !important; }
.store-marker-pin:hover, .store-marker-pin:focus-visible, .store-marker-pin.active {
  width: 18px !important; height: 18px !important; z-index: 20 !important;
  outline: 2px solid rgba(200,16,46,.22) !important; outline-offset: 2px !important;
}
.store-marker-pin:hover .pin-title, .store-marker-pin:focus-visible .pin-title, .store-marker-pin.active .pin-title {
  display: block !important;
  position: absolute !important;
  left: 50% !important; bottom: calc(100% + 7px) !important;
  width: max-content !important; max-width: 190px !important;
  padding: 6px 10px !important; border: 1px solid #ead9cf !important;
  border-radius: 8px !important; background: #fff !important; color: #332821 !important;
  box-shadow: 0 4px 14px rgba(44,30,22,.14) !important;
  font-size: 12px !important; font-weight: 600 !important; line-height: 1.25 !important;
  white-space: normal !important; transform: translateX(-50%) !important;
}
.store-marker-pin.dimmed { opacity: .22 !important; }
.map-floating-card { z-index: 30 !important; max-width: min(320px, calc(100% - 24px)) !important; }
.map-bottom-note { flex-wrap: wrap !important; gap: 8px 16px !important; }
.floor-intro, .floor-detail { box-sizing: border-box !important; }
.floor-intro { padding: 4px 0 0 !important; }
.floor-intro > p:not(.section-label) { max-width: 48ch !important; }
.floor-search-box, .category-filter-zone, .floor-list { max-width: 100% !important; }
.floor-list { display: grid !important; grid-template-columns: repeat(2, minmax(0, 1fr)) !important; gap: 8px !important; }
.floor-btn { min-width: 0 !important; }
.floor-btn .floor-name { overflow-wrap: anywhere !important; }
.floor-detail { min-height: 0 !important; }
.detail-photo { max-height: 190px !important; object-fit: cover !important; }
.facilities { width: min(100% - 40px, 1440px) !important; margin-left: auto !important; margin-right: auto !important; }
@media (min-width: 1200px) {
  .map-viewport { height: auto !important; min-height: 0 !important; aspect-ratio: 1.82 / 1 !important; }
}
@media (max-width: 900px) {
  .main-pyv {
    width: min(100% - 28px, 760px) !important;
    grid-template-columns: minmax(0, 1fr) !important;
    grid-template-rows: auto auto auto !important;
    grid-template-areas: "map" "search" "details" !important;
    gap: 18px !important;
  }
  .main-pyv > .floor-visual, .main-pyv > .floor-intro, .main-pyv > .floor-detail {
    grid-column: 1 !important; width: 100% !important;
  }
  .main-pyv > .floor-visual { grid-row: 1 !important; }
  .main-pyv > .floor-intro { grid-row: 2 !important; }
  .main-pyv > .floor-detail { grid-row: 3 !important; }
  .map-viewport { height: auto !important; min-height: 0 !important; aspect-ratio: 1.55 / 1 !important; }
  .floor-list { grid-template-columns: repeat(2, minmax(0, 1fr)) !important; }
}
@media (max-width: 560px) {
  .main-pyv { width: calc(100% - 24px) !important; margin-top: 18px !important; gap: 16px !important; }
  .map-top-bar { align-items: flex-start !important; }
  .map-zoom-controls { width: 100% !important; justify-content: flex-start !important; }
  .map-viewport { height: auto !important; min-height: 0 !important; aspect-ratio: 1.25 / 1 !important; }
  .floor-list { grid-template-columns: minmax(0, 1fr) !important; }
  .map-bottom-note { font-size: 12px !important; }
  .facilities { width: calc(100% - 24px) !important; }
}

/* Pop-up discovery map: separate, editable layer below the permanent floor directory. */
.pop-up-experience-section{width:min(100% - 40px,1440px);margin:34px auto 30px;color:#30251f}
.pop-up-intro{display:flex;justify-content:space-between;align-items:flex-end;gap:22px;margin-bottom:18px}
.pop-up-intro .section-label{margin:0 0 8px;color:#a70f2b;font-size:11px;letter-spacing:.15em;font-weight:700}
.pop-up-intro h2{font-size:clamp(25px,3vw,36px);line-height:1.15;margin:0 0 8px;font-weight:600}
.pop-up-intro p{margin:0;color:#70645d;max-width:68ch;line-height:1.6;font-size:14px}
.pop-up-layout{display:grid;grid-template-columns:minmax(0,1.65fr) minmax(260px,.75fr);gap:20px;align-items:stretch}
.pop-up-map-card,.pop-up-list-card{background:#fff;border:1px solid #eee5df;border-radius:16px;overflow:hidden;box-shadow:0 8px 28px rgba(74,47,34,.045);min-width:0}
.pop-up-map-toolbar{display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap;padding:16px 18px;border-bottom:1px solid #f0e8e3}
.pop-up-map-toolbar strong{font-size:16px;font-weight:650}
.pop-up-floor-tabs{display:flex;gap:6px;flex-wrap:wrap}
.pop-up-floor-tab{border:1px solid #e8dcd5;background:#fff;color:#55463e;border-radius:7px;padding:8px 11px;font:inherit;font-size:12px;font-weight:650;cursor:pointer}
.pop-up-floor-tab[aria-pressed="true"]{background:#b5122b;border-color:#b5122b;color:#fff}
.pop-up-map-viewport{position:relative;width:100%;aspect-ratio:1.65/1;background:#fffdfa;overflow:hidden}
.pop-up-floor-image{display:block;width:100%;height:100%;object-fit:fill}
.pop-up-markers{position:absolute;inset:0;pointer-events:none}
.pop-up-pin{position:absolute;pointer-events:auto;transform:translate(-50%,-50%);border:2px solid #fff;border-radius:50%;width:28px;height:28px;background:#b5122b;color:#fff;box-shadow:0 2px 8px #0003;font-weight:700;font-size:12px;cursor:pointer;display:grid;place-items:center}
.pop-up-pin[aria-pressed="true"]{outline:3px solid #b5122b44;width:34px;height:34px}
.pop-up-map-foot{padding:11px 16px;color:#75685f;font-size:12px;line-height:1.5;border-top:1px solid #f0e8e3}
.pop-up-list-card{padding:18px;display:flex;flex-direction:column;gap:12px}
.pop-up-list-head{display:flex;align-items:center;justify-content:space-between;gap:8px}
.pop-up-list-head h3{margin:0;font-size:18px}
.pop-up-count{font-size:11px;color:#a70f2b;background:#fbf0f1;border-radius:99px;padding:5px 8px;white-space:nowrap}
.pop-up-event-card{display:grid;grid-template-columns:82px minmax(0,1fr);gap:12px;padding:12px;border:1px solid #eee5df;border-radius:11px;cursor:pointer;text-align:left;background:#fff;color:inherit;font:inherit;width:100%}
.pop-up-event-card[aria-pressed="true"]{border-color:#b5122b;background:#fffafa;box-shadow:0 0 0 1px #b5122b12}
.pop-up-event-thumb{width:82px;height:82px;border-radius:7px;background:linear-gradient(145deg,#f8eee9,#efe2d9);color:#9e1730;display:flex;align-items:center;justify-content:center;font-size:11px;letter-spacing:.12em;font-weight:800;text-align:center}
.pop-up-event-copy{min-width:0;align-self:center}
.pop-up-event-copy strong{display:block;font-size:14px;line-height:1.35;margin-bottom:5px}
.pop-up-event-copy span{display:block;color:#766961;font-size:12px;line-height:1.45}
.pop-up-event-copy .pop-up-event-floor{color:#a70f2b;font-weight:650;margin-top:5px}
.pop-up-editor-note{font-size:11px;line-height:1.5;color:#82766e;background:#faf7f4;padding:10px 12px;border-radius:8px;margin-top:auto}
@media(max-width:900px){.pop-up-layout{grid-template-columns:minmax(0,1fr)}.pop-up-list-card{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));align-content:start}.pop-up-list-head,.pop-up-editor-note{grid-column:1/-1}}
@media(max-width:560px){.pop-up-experience-section{width:calc(100% - 24px);margin:25px auto}.pop-up-intro{display:block}.pop-up-intro h2{font-size:27px}.pop-up-map-toolbar{align-items:flex-start;padding:13px}.pop-up-map-viewport{aspect-ratio:1.2/1}.pop-up-list-card{display:flex;padding:13px}.pop-up-event-card{grid-template-columns:68px minmax(0,1fr);padding:9px}.pop-up-event-thumb{width:68px;height:68px}.pop-up-floor-tab{padding:7px 9px}}

</style>
HTML;

include 'header.php';
?>

    <section class="hero-pyv" id="visit" aria-label="Plan Your Visit Banner">
      <div class="hero-copy">
        <p class="eyebrow">A MORE JOYFUL EVERYDAY</p>
        <h1>Plan Your Visit</h1>
        <p>Everything you need for a smooth and enjoyable experience at Takashimaya Singapore.</p>
      </div>
    </section>

    <section class="quick-info" aria-label="Visitor information">
      <button class="info-card" data-info="hours" type="button">
        <span class="info-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9.5"/><path d="M12 6v6l4 2"/></svg></span>
        <span class="info-text"><strong>Opening Hours</strong><span>10:00am – 9:30pm<br>Daily (incl. Public Holidays)</span></span>
        <span class="info-arrow">›</span>
      </button>
      <button class="info-card" data-info="location" type="button">
        <span class="info-icon"><svg viewBox="0 0 24 24"><path d="M20 10c0 5.5-8 12-8 12S4 15.5 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg></span>
        <span class="info-text"><strong>Location</strong><span>391 Orchard Road<br>Singapore 238872</span></span>
        <span class="info-arrow">›</span>
      </button>
      <button class="info-card" data-info="getting" type="button">
        <span class="info-icon"><svg viewBox="0 0 24 24"><path d="M3 11h18v9H3zM5 11l2-6h10l2 6M7 20v-3m10 3v-3"/></svg></span>
        <span class="info-text"><strong>Getting Here</strong><span>MRT, Bus, Taxi, Parking<br>and more</span></span>
        <span class="info-arrow">›</span>
      </button>
      <button class="info-card" data-info="services" type="button">
        <span class="info-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 11v6m0-10h.01"/></svg></span>
        <span class="info-text"><strong>Visitor Services</strong><span>Concierge, GST Refund,<br>Wheelchair &amp; more</span></span>
        <span class="info-arrow">›</span>
      </button>
      <button class="info-card" data-info="tax" type="button">
        <span class="info-icon"><svg viewBox="0 0 24 24"><path d="M6 8h12l1 13H5L6 8Z"/><path d="M9 8V6a3 3 0 0 1 6 0v2"/></svg></span>
        <span class="info-text"><strong>Tax Refund</strong><span>For overseas visitors<br>(eTRS)</span></span>
        <span class="info-arrow">›</span>
      </button>
    </section>

    <main class="main-pyv" aria-label="Store Directory &amp; Floor Map">
      <!-- LEFT COLUMN: Explore Our Floors, Search & Category Filters -->
      <section class="floor-intro" aria-labelledby="floor-title">
        <p class="section-label">FLOOR DIRECTORY</p>
        <h2 id="floor-title">Explore<br>Our Floors</h2>
        <p>From luxury fashion and beauty to dining and lifestyle, discover what awaits on each level.</p>

        <!-- Store Search Field -->
        <div class="floor-search-box">
          <div class="floor-search-input-wrap">
            <svg class="floor-search-icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>
            <input type="search" id="mapStoreSearch" class="floor-search-input" placeholder="Search stores, brands..." aria-label="Search stores or brands" autocomplete="off">
            <button type="button" id="clearSearchBtn" class="floor-search-clear" aria-label="Clear search">&times;</button>
          </div>
          <div class="floor-search-dropdown" id="searchDropdown" role="listbox" aria-label="Search suggestions"></div>
        </div>

        <!-- Category Filters -->
        <div class="category-filter-zone">
          <div class="category-filter-head">
            <span>FILTER BY CATEGORY</span>
            <span class="category-filter-count" id="activeCategoryCount">All</span>
          </div>
          <div class="category-filter-pills" id="categoryFilterPills" role="radiogroup" aria-label="Category filters">
            <button type="button" class="cat-pill active" data-cat="all" role="radio" aria-checked="true">All categories</button>
            <button type="button" class="cat-pill" data-cat="beauty" role="radio" aria-checked="false">Beauty &amp; Skincare</button>
            <button type="button" class="cat-pill" data-cat="fashion" role="radio" aria-checked="false">Fashion</button>
            <button type="button" class="cat-pill" data-cat="jewellery" role="radio" aria-checked="false">Jewellery &amp; Watches</button>
            <button type="button" class="cat-pill" data-cat="dining" role="radio" aria-checked="false">Dining &amp; Food Hall</button>
            <button type="button" class="cat-pill" data-cat="home" role="radio" aria-checked="false">Gifts, Home &amp; Books</button>
            <button type="button" class="cat-pill" data-cat="services" role="radio" aria-checked="false">Services &amp; Lifestyle</button>
          </div>
        </div>

        <!-- Six Selectable Floor Tabs -->
        <div class="floor-list" id="floorList" role="tablist" aria-label="Select Floor Level">
          <button class="floor-btn" data-floor="L4" type="button" role="tab" aria-selected="false"><span class="floor-code">L4</span><span class="floor-name">Lifestyle, Home &amp; Books</span><span class="mini-arrow">›</span></button>
          <button class="floor-btn active" data-floor="L3" type="button" role="tab" aria-selected="true"><span class="floor-code">L3</span><span class="floor-name">Fashion &amp; Accessories</span><span class="mini-arrow">›</span></button>
          <button class="floor-btn" data-floor="L2" type="button" role="tab" aria-selected="false"><span class="floor-code">L2</span><span class="floor-name">Beauty &amp; Boutiques</span><span class="mini-arrow">›</span></button>
          <button class="floor-btn" data-floor="L1" type="button" role="tab" aria-selected="false"><span class="floor-code">L1</span><span class="floor-name">Luxury &amp; Fine Jewellery</span><span class="mini-arrow">›</span></button>
          <button class="floor-btn" data-floor="B1" type="button" role="tab" aria-selected="false"><span class="floor-code">B1</span><span class="floor-name">Dining &amp; Lifestyle</span><span class="mini-arrow">›</span></button>
          <button class="floor-btn" data-floor="B2" type="button" role="tab" aria-selected="false"><span class="floor-code">B2</span><span class="floor-name">Food Hall &amp; Gourmet Village</span><span class="mini-arrow">›</span></button>
        </div>
      </section>

      <!-- CENTRE COLUMN: Interactive Takashimaya Floor Map -->
      <section class="floor-visual" aria-label="Interactive Takashimaya Floor Map">
        <!-- Top Map Header Toolbar -->
        <div class="map-top-bar">
          <div class="map-prominent-floor">
            <span class="prominent-code-badge" id="mapFloorBadge">L3</span>
            <span class="prominent-floor-name" id="mapFloorTitle">Fashion &amp; Accessories</span>
            <span class="prominent-store-count" id="mapFloorStoreCount">&bull; 24 Stores Mapped</span>
          </div>

          <!-- Working Zoom & Pan Controls -->
          <div class="map-zoom-controls" aria-label="Map Zoom Controls">
            <button type="button" class="map-btn-ctrl" id="zoomOutBtn" title="Zoom Out (-)" aria-label="Zoom Out">
              <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </button>
            <span class="map-zoom-label" id="zoomLevelLabel">100%</span>
            <button type="button" class="map-btn-ctrl" id="zoomInBtn" title="Zoom In (+)" aria-label="Zoom In">
              <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            </button>
            <button type="button" class="map-btn-ctrl btn-reset-map" id="resetZoomBtn" title="Reset Map View (0)" aria-label="Reset Map Zoom and Center">
              <svg viewBox="0 0 24 24"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
              <span>Reset</span>
            </button>
          </div>
        </div>

        <!-- Interactive Map Canvas Viewport with Touch & Drag Support -->
        <div class="map-viewport" id="mapViewport" tabindex="0" role="region" aria-label="Interactive Takashimaya Map Viewport">
          <div class="map-pan-stage" id="mapPanStage">
            <img id="floorMapImage" class="map-base-img" src="assets/floor-L3.png" alt="Takashimaya Level L3 Official Floor Plan" draggable="false" loading="eager">
            <!-- Dynamic Store Markers & Highlights Overlay -->
            <div class="store-markers-layer" id="storeMarkersLayer" aria-live="polite"></div>
          </div>

          <!-- Anchored Floating Store Information Card -->
          <div class="map-floating-card" id="mapFloatingCard" style="display:none;" role="dialog" aria-modal="false" aria-labelledby="floatingStoreTitle">
            <div class="floating-card-head">
              <h4 class="floating-card-title" id="floatingStoreTitle">Store Name</h4>
              <button type="button" class="floating-card-close" id="closeFloatingCardBtn" aria-label="Close card">&times;</button>
            </div>
            <div class="floating-card-meta">
              <span class="floating-card-badge" id="floatingStoreBadge">Fashion</span>
              <span class="floating-card-unit" id="floatingStoreUnit">#03-01</span>
            </div>
            <p class="floating-card-desc" id="floatingStoreDesc">Store description goes here.</p>
            <button type="button" class="floating-card-btn" id="floatingViewDetailsBtn">View Store Details &rarr;</button>
          </div>
        </div>

        <!-- Bottom Map Status & Drag Hint -->
        <div class="map-bottom-note">
          <span class="map-drag-hint-text">
            <svg viewBox="0 0 24 24"><path d="M5 9l-3 3 3 3M19 9l3 3-3 3M2 12h20"/></svg>
            <span>Drag to pan &bull; Pinch or +/- to zoom &bull; Click stores to view details</span>
          </span>
          <span class="map-legend-dots">
            <span class="legend-dot-item"><span class="dot dot-red"></span> Selected Store</span>
            <span class="legend-dot-item"><span class="dot dot-blue"></span> Mapped Retail</span>
          </span>
        </div>
      </section>

      <!-- RIGHT COLUMN: Store Details and Recommendations -->
      <aside class="floor-detail" id="floorDetail" aria-live="polite">
        <!-- State A: Selected Store View -->
        <div class="store-detail-view" id="storeSelectedView" style="display: none;">
          <div class="store-detail-top">
            <button type="button" class="btn-detail-back" id="btnBackToOverview">
              <span>&lsaquo; Floor Overview</span>
            </button>
            <button type="button" class="btn-detail-back" id="btnClearStoreSelection" style="color: #7d726b;">
              <span>Clear &times;</span>
            </button>
          </div>

          <div class="store-badges-row">
            <span class="detail-pill-badge badge-cat-tag" id="detailStoreCat">Fashion</span>
            <span class="detail-pill-badge badge-floor-tag" id="detailStoreFloorBadge">Level 3</span>
            <span class="detail-pill-badge" id="detailStoreUnitBadge" style="background:#f7f3ef;color:#61564f;">#03-01</span>
          </div>

          <h3 class="store-detail-name" id="detailStoreName">Store Name</h3>
          <p class="store-detail-desc" id="detailStoreDesc">Store description goes here.</p>

          <div class="store-detail-actions">
            <button type="button" class="btn-locate-store" id="btnLocateOnMap">
              <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><circle cx="12" cy="12" r="8"/><path d="M12 2v2m0 16v2M2 12h2m16 0h2"/></svg>
              <span>Locate on Map</span>
            </button>
          </div>

          <!-- Relevant Stores in the Same Category -->
          <div class="store-peers-box">
            <div class="detail-section-title">
              <span>More in this Category</span>
              <small id="detailPeerCount">3 stores</small>
            </div>
            <div class="peer-stores-grid" id="peerStoresList"></div>
          </div>

          <!-- "Where should I go next?" Recommendation Feature -->
          <div class="store-next-stops-box">
            <div class="detail-section-title">
              <span>Where should I go next?</span>
            </div>
            <div id="nextStopsContainer"></div>
          </div>
        </div>

        <!-- State B: Default Floor Overview (When No Specific Store Selected) -->
        <div class="floor-overview-view" id="floorOverviewView">
          <div class="detail-heading">
            <span class="detail-code" id="detailCode">L3</span>
            <div>
              <h3 id="detailTitle">Fashion &amp; Accessories</h3>
              <p id="detailDesc">Contemporary fashion, accessories and lifestyle pieces for every you.</p>
            </div>
          </div>
          <img class="detail-photo" id="detailPhoto" src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="Fashion retail boutiques">
          <div class="subhead">
            <span>Featured Brands</span>
            <button id="viewAllBrands" type="button">View All &rarr;</button>
          </div>
          <div class="brand-grid" id="brandGrid">
            <!-- Dynamically populated -->
          </div>
          <div class="category-list" id="categoryList">
            <!-- Dynamically populated -->
          </div>
        </div>
      </aside>
    </main>



    <!-- POP-UP & EXPERIENCES MAP: content entries can be updated without changing permanent floor plans. -->
    <section class="pop-up-experience-section" id="pop-up-map-section" aria-labelledby="popUpHeading">
      <div class="pop-up-intro">
        <div>
          <p class="section-label">WHAT'S HAPPENING AT TAKA</p>
          <h2 id="popUpHeading">Discover Pop-Ups &amp; Experiences</h2>
          <p>Find seasonal pop-ups, special events and new experiences across the store. Choose a floor or select a pin to explore a location.</p>
        </div>
      </div>
      <div class="pop-up-layout">
        <div class="pop-up-map-card">
          <div class="pop-up-map-toolbar">
            <strong><span id="popUpFloorLabel">Level L3</span> · Pop-up map</strong>
            <div class="pop-up-floor-tabs" role="group" aria-label="Choose floor for pop-up map">
              <button class="pop-up-floor-tab" type="button" data-pop-floor="B2" aria-pressed="false">B2</button>
              <button class="pop-up-floor-tab" type="button" data-pop-floor="B1" aria-pressed="false">B1</button>
              <button class="pop-up-floor-tab" type="button" data-pop-floor="L1" aria-pressed="false">L1</button>
              <button class="pop-up-floor-tab" type="button" data-pop-floor="L2" aria-pressed="false">L2</button>
              <button class="pop-up-floor-tab" type="button" data-pop-floor="L3" aria-pressed="true">L3</button>
              <button class="pop-up-floor-tab" type="button" data-pop-floor="L4" aria-pressed="false">L4</button>
            </div>
          </div>
          <div class="pop-up-map-viewport">
            <img class="pop-up-floor-image" id="popUpFloorImage" src="assets/floor-L3.png" alt="Level L3 floor plan for pop-up locations" loading="lazy">
            <div class="pop-up-markers" id="popUpMarkers" aria-label="Pop-up locations"></div>
          </div>
          <div class="pop-up-map-foot" id="popUpMapFoot">Select a numbered pin to see its details. Floor plans are reused from the main directory.</div>
        </div>
        <aside class="pop-up-list-card" aria-label="Pop-up and experience listings">
          <div class="pop-up-list-head"><h3>Featured now</h3><span class="pop-up-count" id="popUpCount">Example content</span></div>
          <div id="popUpEventList"></div>
          <p class="pop-up-editor-note">Content setup note: the entries below are illustrative placeholders, not confirmed current Takashimaya events. Replace titles, images, dates, floor and pin coordinates with verified event information before publishing. Expired entries can be filtered by their end date.</p>
        </aside>
      </div>
    </section>

    <section class="facilities" id="facilitiesSection" aria-label="Facilities on this floor">
      <h3 id="facilitiesFloorHeading">Facilities on Level L3</h3>
      <div class="facility-items-row" id="facilitiesItemsRow">
        <!-- Dynamically rendered according to active floor -->
      </div>
    </section>

    <!-- CHOOSE YOUR TAKA DAY SECTION (DIRECT REFERENCE TO DESIGN) -->
    <section class="taka-day-feature-zone" id="mark-your-calendar" aria-labelledby="taka-day-heading">
      <div class="taka-day-container">
        
        <!-- Top Row: Hero Text + Interactive Calendar + Confirmation Card -->
        <div class="taka-day-top-row">
          
          <!-- Column 1: Intro Heading & Description -->
          <div class="taka-intro-col">
            <span class="taka-pre-title">PLAN YOUR VISIT</span>
            <h2 id="taka-day-heading" class="taka-main-title">Choose Your<br>Taka Day</h2>
            <p class="taka-main-desc">Pick a date, and make it a day of special finds, exclusive offers and memorable experiences at Takashimaya Singapore.</p>
            <div class="taka-cherry-deco">
              <svg viewBox="0 0 100 100" class="cherry-blossom-svg" width="90" height="90">
                <path d="M50 30 C45 10 30 15 35 32 C20 22 10 36 25 45 C8 48 10 65 28 62 C18 75 32 85 42 70 C48 88 65 85 62 68 C75 78 85 64 70 54 C88 48 85 31 68 34 C78 21 64 11 54 26 C52 24 51 25 50 30 Z" fill="none" stroke="#d49a9a" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="50" cy="50" r="5" fill="#e8b4b4" stroke="#c07878" stroke-width="1.2"/>
                <path d="M50 45 L50 38 M45 48 L38 45 M46 54 L40 59 M54 54 L60 59 M55 48 L62 45" stroke="#c07878" stroke-width="1.2"/>
              </svg>
            </div>
          </div>

          <!-- Column 2: Minimalist Clean Calendar Card -->
          <div class="taka-calendar-clean-card">
            <div class="cal-header-clean">
              <button type="button" class="cal-nav-arrow" id="calPrevMonth" aria-label="Previous Month">&lsaquo;</button>
              <h3 class="cal-clean-month-label" id="calMonthDisplay">October 2026</h3>
              <button type="button" class="cal-nav-arrow" id="calNextMonth" aria-label="Next Month">&rsaquo;</button>
            </div>

            <div class="cal-clean-weekdays">
              <span>SUN</span><span>MON</span><span>TUE</span><span>WED</span><span>THU</span><span>FRI</span><span>SAT</span>
            </div>

            <div class="cal-clean-days-grid" id="calDaysGrid">
              <!-- Dynamically generated days -->
            </div>

            <div class="cal-clean-legend">
              <span class="legend-unit"><span class="legend-dot-red"></span> Special Taka Day</span>
              <span class="legend-unit"><span class="legend-ring-grey"></span> Select a date</span>
            </div>
          </div>

          <!-- Column 3: Confirmation Greeting Card -->
          <div class="taka-confirmation-card" id="takaConfirmationCard">
            <div class="taka-crest-icon">
              <!-- Takashimaya Crest / Rose Emblem -->
              <svg viewBox="0 0 36 36" width="30" height="30" fill="none" stroke="#b5122b" stroke-width="1.8">
                <circle cx="18" cy="18" r="14"/>
                <path d="M18 9v18M11 18h14M13 13l10 10M23 13L13 23"/>
                <circle cx="18" cy="18" r="4" fill="#b5122b"/>
              </svg>
            </div>
            
            <p class="chosen-lead-text">You have chosen</p>
            <h3 class="chosen-hero-date" id="chosenDateDisplay">16 October 2026</h3>
            <p class="chosen-trail-text">to be your Taka Day!</p>
            <p class="chosen-salutation">See you there!</p>

            <div class="store-facade-illustration">
              <svg viewBox="0 0 160 80" class="facade-svg" width="130" height="65">
                <!-- Storefront Line Illustration -->
                <path d="M20 70 h120 M35 70 v-40 h90 v40 M45 30 l35 -14 l35 14 M55 70 v-25 h50 v25 M80 45 v25" fill="none" stroke="#d5a8a8" stroke-width="1.4" stroke-linecap="round"/>
                <circle cx="80" cy="24" r="6" fill="none" stroke="#c48a8a" stroke-width="1.2"/>
                <!-- Blossoms flank -->
                <path d="M15 50 c-4 -4 0 -10 6 -7 c0 -6 8 -4 7 2 c5 0 6 7 1 8 c4 5 -2 8 -6 4 c-4 4 -8 0 -8 -7 Z" fill="none" stroke="#e0b2b2" stroke-width="1.2"/>
                <path d="M145 50 c4 -4 0 -10 -6 -7 c0 -6 -8 -4 -7 2 c-5 0 -6 7 -1 8 c-4 5 2 8 6 4 c4 4 8 0 8 -7 Z" fill="none" stroke="#e0b2b2" stroke-width="1.2"/>
              </svg>
            </div>

            <div class="card-action-bar">
              <button type="button" class="btn-taka-primary" id="btnSaveVisit">
                <span>Save to Calendar</span>
                <span class="btn-arrow">&rsaquo;</span>
              </button>
            </div>
          </div>
        </div>

        <!-- Bottom Row: Three Steps Guide + Personalized Experiences -->
        <div class="taka-day-bottom-row">
          
          <!-- Left: Narrative and 3-step timeline -->
          <div class="taka-experience-intro">
            <span class="taka-pre-title">PLAN YOUR VISIT</span>
            <h3 class="taka-sub-heading">Your Taka Day,<br>Made Even More Special</h3>
            <p class="taka-sub-desc">After selecting your date, get personalised recommendations on exclusive offers, events and reminders &mdash; all tailored just for you.</p>

            <div class="taka-steps-row">
              <div class="taka-step-item">
                <div class="step-circle-icon">
                  <svg viewBox="0 0 24 24" width="20" height="20" stroke="#b5122b" fill="none" stroke-width="1.8"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                </div>
                <span class="step-number">1</span>
                <strong>Select Your Date</strong>
                <p>Choose the day you want to visit.</p>
              </div>

              <div class="step-connector">&rarr;</div>

              <div class="taka-step-item">
                <div class="step-circle-icon">
                  <svg viewBox="0 0 24 24" width="20" height="20" stroke="#b5122b" fill="none" stroke-width="1.8"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <span class="step-number">2</span>
                <strong>Get Personalised Recommendations</strong>
                <p>Discover offers, events and experiences for your Taka Day.</p>
              </div>

              <div class="step-connector">&rarr;</div>

              <div class="taka-step-item">
                <div class="step-circle-icon">
                  <svg viewBox="0 0 24 24" width="20" height="20" stroke="#b5122b" fill="none" stroke-width="1.8"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                </div>
                <span class="step-number">3</span>
                <strong>Set Reminders</strong>
                <p>Keep track of your favourite deals and upcoming events.</p>
              </div>
            </div>
          </div>

          <!-- Right: Personalized Experience Recommendations Filtered by Date -->
          <div class="taka-recommendations-col">
            <div class="recs-header">
              <span class="sparkle-icon">&#10022;</span>
              <h4>Your Personalised<br>Taka Day Experience</h4>
            </div>

            <div class="recs-cards-list" id="eventsCardsGrid">
              <!-- Populated dynamically based on chosen date -->
            </div>

            <!-- Reminder Setting & Status Feedback -->
            <div class="recs-reminder-bar">
              <div class="reminder-inline-select">
                <label for="reminderSelect">Calendar Alert:</label>
                <select id="reminderSelect" class="clean-select">
                  <option value="1day" selected>1 Day Before</option>
                  <option value="2hours">2 Hours Before</option>
                  <option value="morning">Morning of Visit (9:00 AM)</option>
                  <option value="none">No reminder</option>
                </select>
              </div>
              <div class="save-status-msg" id="saveStatusMsg"></div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- Modal Backdrop -->
    <div class="modal-backdrop" id="modalBackdrop" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
      <div class="modal">
        <div class="modal-top">
          <h2 id="modalTitle">Visitor Information</h2>
          <button class="close-modal" id="closeModal" aria-label="Close" type="button">&times;</button>
        </div>
        <div id="modalBody"></div>
      </div>
    </div>

    <script>
    (() => {
      /* ====================================================
       * TAKASHIMAYA INTERACTIVE FLOOR DIRECTORY ENGINE
       * ==================================================== */
      const floors = {
        L4: {
          code: 'L4',
          name: 'Lifestyle, Home & Books',
          desc: 'Inspiration for your home, Books Kinokuniya flagship, gourmet dining and kids lifestyle.',
          brands: ['Books Kinokuniya', 'Crystal Jade Palace', 'PAUL Bakery', 'Ma Maison', 'Tonkichi', 'Golf Studio'],
          map: 'assets/floor-L4.png',
          photo: 'photo-1600210492486-724fe5c67fb0',
          cats: ['Gifts, Home & Books', 'Dining & Food Hall', 'Services & Lifestyle', 'Fashion & Accessories']
        },
        L3: {
          code: 'L3',
          name: 'Fashion & Accessories',
          desc: 'Contemporary international fashion, luxury ready-to-wear, boutique cafes and lifestyle accessories.',
          brands: ['CHANEL', 'Dior', 'Dolce & Gabbana', 'Shanghai Tang', 'Maje', 'LUMU CAFE'],
          map: 'assets/floor-L3.png',
          photo: 'photo-1483985988355-763728e1935b',
          cats: ['Fashion & Accessories', 'Dining & Food Hall', 'Services & Lifestyle']
        },
        L2: {
          code: 'L2',
          name: 'Beauty & Boutiques',
          desc: 'Fine horology, international luxury collections, bespoke footwear salons and TWG Tea.',
          brands: ['Louis Vuitton', 'Cartier', 'Tiffany & Co.', 'Van Cleef & Arpels', 'Mikimoto', 'TWG Tea'],
          map: 'assets/floor-L2.png',
          photo: 'photo-1596462502278-27bfdc403348',
          cats: ['Jewellery & Watches', 'Fashion & Accessories', 'Dining & Food Hall']
        },
        L1: {
          code: 'L1',
          name: 'Luxury & Fine Jewellery',
          desc: 'Global luxury flagships, prestigious high jewellery maisons and cosmetic powerhouses.',
          brands: ['Louis Vuitton', 'CHANEL', 'Dior', 'CELINE', 'Fendi', 'BVLGARI'],
          map: 'assets/floor-L1.png',
          photo: 'photo-1539109136881-3be0616acf4b',
          cats: ['Fashion & Accessories', 'Jewellery & Watches', 'Beauty & Skincare']
        },
        B1: {
          code: 'B1',
          name: 'Dining & Lifestyle',
          desc: 'Prestige beauty hall, niche artisanal perfumeries, athletic lifestyle and gourmet coffee bars.',
          brands: ['Sephora', 'lululemon', 'Bacha Coffee', 'Aesop', 'Diptyque', 'Onitsuka Tiger'],
          map: 'assets/floor-B1.png',
          photo: 'photo-1517248135467-4c7edcad34c4',
          cats: ['Beauty & Skincare', 'Fashion & Accessories', 'Dining & Food Hall', 'Gifts, Home & Books']
        },
        B2: {
          code: 'B2',
          name: 'Food Hall & Gourmet Village',
          desc: 'Takashimaya Square event hall, authentic Japanese food kiosks, Cold Storage and gourmet confections.',
          brands: ['Takashimaya Square', 'Cold Storage', 'Royce Chocolates', 'GODIVA', 'DONQ', 'Ya Kun Kaya Toast'],
          map: 'assets/floor-B2.png',
          photo: 'photo-1555396273-367ea4eb4db5',
          cats: ['Dining & Food Hall', 'Beauty & Skincare', 'Services & Lifestyle', 'Fashion & Accessories']
        }
      };

      // Facilities on each floor
      const floorAmenities = {
        L4: [
          { id: 'l4-restroom', title: 'Restroom & Baby Care Room', icon: '🚼', desc: 'North-West Wing &bull; Diaper changing station, private nursing cubicles and family amenities.' },
          { id: 'l4-golf', title: 'Indoor Golf Studio & Putting Green', icon: '🏌️', desc: 'West Wing &bull; Simulator swing analysis, custom club fitting and putting practice.' },
          { id: 'l4-cs', title: 'Customer Service & Gift Wrapping', icon: '🎁', desc: 'South Concourse &bull; Complimentary gift wrapping, delivery arrangements and voucher sales.' },
          { id: 'l4-lift', title: 'Tower A & B Lift Lobbies', icon: '🛗', desc: 'Direct high-speed lifts connecting to office towers and basement car park.' }
        ],
        L3: [
          { id: 'l3-restroom', title: 'Restrooms & Accessible Toilet', icon: '🚻', desc: 'North Wing near West Escalator &bull; Wheelchair accessible, automatic entry.' },
          { id: 'l3-fitting', title: 'VIP Fitting Suites', icon: '✨', desc: 'East Fashion Galleria &bull; Spacious private fitting lounges with 3-way vanity mirrors.' },
          { id: 'l3-psl', title: 'Personal Shopping Lounge', icon: '🛍️', desc: 'Center Mezzanine &bull; Dedicated stylist appointments and private consultations.' },
          { id: 'l3-prayer', title: 'Quiet Space & Prayer Room', icon: '🕊️', desc: 'East Corridor &bull; Designated prayer and quiet contemplation space.' }
        ],
        L2: [
          { id: 'l2-restroom', title: 'Restrooms & Powder Room', icon: '💄', desc: 'West Wing &bull; Illuminated vanity mirrors, retouching stations and accessible facilities.' },
          { id: 'l2-beauty', title: 'Beauty Consultation Pods', icon: '🌸', desc: 'Central Beauty Hall &bull; Express skin analysis, fragrance profiling and touch-up counters.' },
          { id: 'l2-taxi', title: 'Taxi Stand & Valet Drop-off', icon: '🚕', desc: 'Level 2 Driveway &bull; Covered taxi bay and dedicated hotel / shopping valet.' },
          { id: 'l2-shoes', title: 'Shoe Salon & Private Fitting', icon: '👠', desc: 'South-East Gallery &bull; Luxury footwear fitting with cushioned salon seating.' }
        ],
        L1: [
          { id: 'l1-concierge', title: 'Main Concierge & Information Desk', icon: '🛎️', desc: 'Main Orchard Entrance &bull; Store guides, taxi bookings, wheelchair & umbrella loans.' },
          { id: 'l1-tax', title: 'eTRS Tourist Tax Refund Lounge', icon: '✈️', desc: 'West Lobby &bull; Self-service eTRS tourist refund kiosks with staff assistance.' },
          { id: 'l1-restroom', title: 'Restrooms & Family Facilities', icon: '🚻', desc: 'North Lobby &bull; Accessible restrooms and mother & baby care room.' },
          { id: 'l1-jewel', title: 'High Jewellery Viewing Chambers', icon: '💎', desc: 'East Luxury Arcade &bull; Private viewing chambers for haute horlogerie & fine gems.' }
        ],
        B1: [
          { id: 'b1-mrt', title: 'Direct Orchard MRT Underpass', icon: '🚇', desc: 'South Exit &bull; Air-conditioned underground link to Orchard MRT Station (NS22/TE14).' },
          { id: 'b1-restroom', title: 'Restrooms & Nursing Room', icon: '🚻', desc: 'North Corridor next to Specialty Boutiques &bull; Full amenity facilities.' },
          { id: 'b1-atm', title: 'ATM & Currency Exchange', icon: '🏧', desc: 'South Underpass corridor &bull; Multi-currency exchange counters & 24hr ATMs.' },
          { id: 'b1-cashier', title: 'Central Cashier & Tax Refund Kiosk', icon: '💳', desc: 'Central concourse &bull; Express checkout and electronic tourist refund.' }
        ],
        B2: [
          { id: 'b2-event', title: 'Takashimaya Square Event Concierge', icon: '🎪', desc: 'Center Atrium &bull; Event customer assistance, lucky draw redemptions and festival info.' },
          { id: 'b2-supermarket', title: 'Supermarket Service Counter', icon: '🛒', desc: 'Cold Storage Concourse &bull; Grocery holding, chilled packing and porter assistance.' },
          { id: 'b2-misterminit', title: 'Mister Minit Key & Shoe Repair', icon: '👞', desc: 'North-East corridor near MRT access &bull; Quick shoe restoration, key duplication & watch batteries.' },
          { id: 'b2-restroom', title: 'Restrooms & Nursing Room', icon: '🚻', desc: 'West Wing near Gourmet Dining &bull; Wheelchair friendly.' }
        ]
      };

      // Comprehensive Real Store Database across all 6 Floors
      const allStores = [
        // --- LEVEL 4 STORES ---
        {
          id: 'l4-kinokuniya',
          name: 'Books Kinokuniya Flagship',
          floor: 'L4',
          unit: '#04-20/20A',
          category: 'home',
          categoryName: 'Gifts, Home & Books',
          desc: 'Singapore’s largest flagship bookstore featuring extensive Japanese and international literature, manga, curated stationery, and lifestyle collectibles.',
          x: 77.1,
          y: 69.3,
          nextStops: ['l4-paul', 'l4-ma-maison']
        },
        {
          id: 'l4-crystal-jade',
          name: 'Crystal Jade Palace',
          floor: 'L4',
          unit: '#04-19',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'MICHELIN-recommended fine Cantonese dining celebrated for authentic barbecue specialties, exquisite dim sum, live seafood, and traditional banquet dishes.',
          x: 55.0,
          y: 41.5,
          nextStops: ['l4-kinokuniya', 'l4-hazuki']
        },
        {
          id: 'l4-paul',
          name: 'PAUL Bakery & Restaurant',
          floor: 'L4',
          unit: '#04-26',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Authentic French artisan bakery and bistro serving handcrafted viennoiseries, escargot, crepes, and signature café gourmand since 1889.',
          x: 60.7,
          y: 62.3,
          nextStops: ['l4-kinokuniya', 'l4-crystal-jade']
        },
        {
          id: 'l4-linkus',
          name: 'Linkus Hokkien Flavor',
          floor: 'L4',
          unit: '#04-21',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Heritage Hokkien culinary craftsmanship presenting braised seafood treasures, authentic oyster omelettes, and slow-simmered rich broths.',
          x: 49.0,
          y: 65.0,
          nextStops: ['l4-paul', 'l4-tonkichi']
        },
        {
          id: 'l4-hazuki',
          name: 'Hazuki Kaiseki',
          floor: 'L4',
          unit: '#04-18A',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Intimate Kyoto-style kaiseki counter experience crafted by Master Chef Ryuichi Yoshii using fresh seasonal ingredients flown in from Toyosu Market.',
          x: 46.2,
          y: 43.0,
          nextStops: ['l4-crystal-jade', 'l3-shanghai-tang']
        },
        {
          id: 'l4-tampopo',
          name: 'Tampopo Grand Sushi & Shabu Shabu',
          floor: 'L4',
          unit: '#04-28',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Pioneers of authentic Kurobuta pork ramen, premium Wagyu shabu-shabu, and fresh sushi platters imported directly from Japanese ports.',
          x: 32.0,
          y: 61.0,
          nextStops: ['l4-tonkichi', 'l4-angus']
        },
        {
          id: 'l4-ma-maison',
          name: 'Ma Maison Restaurant',
          floor: 'L4',
          unit: '#04-27',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Cozy Japanese-Western Yoshoku restaurant known for beef demi-glace hamburg steaks, tonkatsu cutlets, and fluffy fruit tarts.',
          x: 24.4,
          y: 72.2,
          nextStops: ['l4-kinokuniya', 'l4-tonkichi']
        },
        {
          id: 'l4-tonkichi',
          name: 'Tonkichi',
          floor: 'L4',
          unit: '#04-31',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Specialty Japanese deep-fried pork cutlet house serving golden, crispy hire katsu and rosu katsu with bottomless shredded cabbage and koshihikari rice.',
          x: 29.7,
          y: 77.8,
          nextStops: ['l4-ma-maison', 'l4-kinokuniya']
        },
        {
          id: 'l4-angus',
          name: 'Angus House Steakhouse',
          floor: 'L4',
          unit: '#04-25',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Japanese-Italian charcoal-grilled steakhouse serving prime Angus beef cuts, handmade pastas, and classic tiramisu in a warm nostalgic setting.',
          x: 24.8,
          y: 90.8,
          nextStops: ['l4-kinokuniya', 'l3-paradise']
        },
        {
          id: 'l4-golf-studio',
          name: 'Golf Equipment, Apparel & Putting Green',
          floor: 'L4',
          unit: '#04-12/15',
          category: 'services',
          categoryName: 'Services & Lifestyle',
          desc: 'Premier golf retail department housing Callaway, TaylorMade, Titleist, Honma, precision club fitting, and an indoor synthetic putting green.',
          x: 23.0,
          y: 32.0,
          nextStops: ['l4-driving-range', 'l3-boggi']
        },
        {
          id: 'l4-driving-range',
          name: 'Indoor Virtual Driving Range',
          floor: 'L4',
          unit: '#04-16',
          category: 'services',
          categoryName: 'Services & Lifestyle',
          desc: 'State-of-the-art virtual swing analysis simulator and club testing range with PGA-certified golf coaching appointments.',
          x: 19.0,
          y: 24.0,
          nextStops: ['l4-golf-studio', 'l4-kinokuniya']
        },
        {
          id: 'l4-toys-kids',
          name: 'Children’s Wear & Toys Department',
          floor: 'L4',
          unit: '#04-01/10',
          category: 'home',
          categoryName: 'Gifts, Home & Books',
          desc: 'Curated children’s boutique department featuring designer kids apparel, Sanrio, Lego collections, plush toys, and nursery essentials.',
          x: 18.0,
          y: 70.0,
          nextStops: ['l4-kinokuniya', 'l4-ma-maison']
        },
        {
          id: 'l4-optique',
          name: 'Optique Paris Miki',
          floor: 'L4',
          unit: '#04-22',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'High-end Japanese precision eyewear boutique offering bespoke eye examinations, hand-carved acetate frames, and luxury designer sunglasses.',
          x: 34.0,
          y: 28.0,
          nextStops: ['l4-golf-studio', 'l3-boggi']
        },

        // --- LEVEL 3 STORES ---
        {
          id: 'l3-chanel',
          name: 'CHANEL Ready-to-Wear',
          floor: 'L3',
          unit: '#03-01',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'The pinnacle of French luxury showcasing Virginie Viard’s ready-to-wear collections, tweed suits, signature flap bags, and costume jewellery.',
          x: 72.5,
          y: 91.4,
          nextStops: ['l3-dior', 'l3-lumu-cafe']
        },
        {
          id: 'l3-dior',
          name: 'Dior Boutique',
          floor: 'L3',
          unit: '#03-02',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Elegance and modern Parisian haute couture featuring Lady Dior bags, Book Totes, refined tailoring, and exclusive shoe collections.',
          x: 85.0,
          y: 91.4,
          nextStops: ['l3-chanel', 'l3-rituel-cafe']
        },
        {
          id: 'l3-dolce',
          name: 'Dolce & Gabbana',
          floor: 'L3',
          unit: '#03-12',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Opulent Italian luxury fashion steeped in Sicilian heritage, vibrant Mediterranean prints, precision tailoring, and signature Sicily handbags.',
          x: 45.0,
          y: 62.8,
          nextStops: ['l3-hermes', 'l3-maje']
        },
        {
          id: 'l3-shanghai-tang',
          name: 'Shanghai Tang & Imperial Salon',
          floor: 'L3',
          unit: '#03-05/06',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Modern Chinese luxury fashion showcasing imperial silk tailoring, contemporary Qipaos, lacquer home decor, and tailored bespoke jackets.',
          x: 55.0,
          y: 37.5,
          nextStops: ['l3-paradise', 'l3-lumu-cafe']
        },
        {
          id: 'l3-paradise',
          name: 'Paradise Teochew Restaurant',
          floor: 'L3',
          unit: '#03-10',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Exquisite Teochew heritage cooking renowned for signature braised Irish duck, steamed pomfret, and hand-rolled Teochew dim sum.',
          x: 79.0,
          y: 53.5,
          nextStops: ['l3-rituel-cafe', 'l3-shanghai-tang']
        },
        {
          id: 'l3-rituel-cafe',
          name: 'Rituel Cafe',
          floor: 'L3',
          unit: '#03-14',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Tokyo-origin French bakery cafe serving organic sourdough tartines, specialty siphon brews, and buttery layered escargot pastries.',
          x: 84.0,
          y: 74.0,
          nextStops: ['l3-dior', 'l3-chanel']
        },
        {
          id: 'l3-lumu-cafe',
          name: 'LUMU CAFE',
          floor: 'L3',
          unit: '#03-15',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Minimalist aesthetic specialty coffee bar crafting matcha lattes, pour-overs, and light artisanal sandwiches amidst luxury boutiques.',
          x: 69.5,
          y: 77.0,
          nextStops: ['l3-chanel', 'l3-maje']
        },
        {
          id: 'l3-wanderlust',
          name: 'Wanderlust Cafe',
          floor: 'L3',
          unit: '#03-24',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'A chic hideaway cafe nestled within contemporary fashion racks, serving loose-leaf teas and fresh buttery scones.',
          x: 21.0,
          y: 71.0,
          nextStops: ['l3-maje', 'l3-weekend-maxmara']
        },
        {
          id: 'l3-boggi',
          name: 'Boggi Milano',
          floor: 'L3',
          unit: '#03-03',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Refined contemporary Italian menswear, offering Italian travel-suit jackets, breathable tech-wool blazers, and luxury leather belts.',
          x: 76.4,
          y: 62.5,
          nextStops: ['l3-shanghai-tang', 'l3-rituel-cafe']
        },
        {
          id: 'l3-big-mama',
          name: 'Big Mama Korean Restaurant',
          floor: 'L3',
          unit: '#03-11',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Beloved authentic homestyle Korean cooking featuring slow-simmered Suyuk boiled pork belly, crispy seafood pancakes, and spicy army stew.',
          x: 87.3,
          y: 62.1,
          nextStops: ['l3-rituel-cafe', 'l3-boggi']
        },
        {
          id: 'l3-hermes',
          name: 'Hermès Boutique',
          floor: 'L3',
          unit: '#03-19',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'French artisanal excellence showcasing hand-rolled silk carre scarves, equestrian leather goods, and refined lifestyle accessories.',
          x: 35.5,
          y: 57.5,
          nextStops: ['l3-dolce', 'l3-maje']
        },
        {
          id: 'l3-maje',
          name: 'Maje Paris',
          floor: 'L3',
          unit: '#03-20',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Bold feminine Parisian chic featuring statement fringe bags, structured blazers, knitted cardigans, and bohemian dresses.',
          x: 30.5,
          y: 54.3,
          nextStops: ['l3-bimba', 'l3-weekend-maxmara']
        },
        {
          id: 'l3-bimba',
          name: 'Bimba Y Lola',
          floor: 'L3',
          unit: '#03-22',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Playful Spanish designer fashion label celebrated for bold geometric prints, chunky sneakers, and nylon crossbody bags.',
          x: 28.0,
          y: 58.6,
          nextStops: ['l3-maje', 'l3-weekend-maxmara']
        },
        {
          id: 'l3-weekend-maxmara',
          name: 'Weekend Max Mara',
          floor: 'L3',
          unit: '#03-25',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Sophisticated casual Italian luxury presenting double-face virgin wool coats, relaxed cashmere knits, and iconic Pasticcino clutch bags.',
          x: 28.5,
          y: 70.5,
          nextStops: ['l3-wanderlust', 'l3-maje']
        },
        {
          id: 'l3-agnes-b',
          name: 'agnès b.',
          floor: 'L3',
          unit: '#03-18',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Timeless French understated style featuring signature snap-button cardigans, striped sailor tees, and Voyage leather bags.',
          x: 39.5,
          y: 34.5,
          nextStops: ['l3-shanghai-tang', 'l3-dolce']
        },
        {
          id: 'l3-prestige-lounge',
          name: 'Prestige Member Lounge',
          floor: 'L3',
          unit: '#03-VIP',
          category: 'services',
          categoryName: 'Services & Lifestyle',
          desc: 'Exclusive sanctuary for Takashimaya Prestige cardholders offering complimentary refreshments, private fitting suites, and concierge assistance.',
          x: 3.5,
          y: 78.5,
          nextStops: ['l3-wanderlust', 'l3-chanel']
        },

        // --- LEVEL 2 STORES ---
        {
          id: 'l2-louis-vuitton',
          name: 'Louis Vuitton Maison',
          floor: 'L2',
          unit: '#02-01',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Two-storey flagship maison showcasing luxury travel trunks, women’s ready-to-wear, Capucines leather goods, and fine perfumes.',
          x: 85.2,
          y: 88.4,
          nextStops: ['l2-chanel', 'l2-goyard']
        },
        {
          id: 'l2-chanel',
          name: 'Chanel Luxury Salon',
          floor: 'L2',
          unit: '#02-02',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Private shopping suites featuring haute couture accessories, seasonal footwear collections, and bespoke styling appointments.',
          x: 74.0,
          y: 90.5,
          nextStops: ['l2-louis-vuitton', 'l2-mikimoto']
        },
        {
          id: 'l2-cartier',
          name: 'Cartier',
          floor: 'L2',
          unit: '#02-08',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'The legendary King of Jewellers presenting Love, Juste un Clou, Trinity rings, and high horology Santos and Tank timepieces.',
          x: 48.0,
          y: 65.5,
          nextStops: ['l2-vancleef', 'l2-tiffany']
        },
        {
          id: 'l2-tiffany',
          name: 'Tiffany & Co.',
          floor: 'L2',
          unit: '#02-06',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'Iconic American diamond jewellery maison featuring Tiffany T, Lock, Knot bracelets, and legendary solitaire engagement rings.',
          x: 57.0,
          y: 52.5,
          nextStops: ['l2-vancleef', 'l2-cartier']
        },
        {
          id: 'l2-vancleef',
          name: 'Van Cleef & Arpels',
          floor: 'L2',
          unit: '#02-07',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'Poetic high jewellery and master complications showcasing lucky Alhambra four-leaf clover motifs, Frivole blossoms, and Perlée gold beads.',
          x: 59.5,
          y: 65.5,
          nextStops: ['l2-cartier', 'l2-mikimoto']
        },
        {
          id: 'l2-goyard',
          name: 'Goyard',
          floor: 'L2',
          unit: '#02-03',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Exclusive Parisian malletier founded in 1853, renowned for hand-painted Goyardine chevron canvas, Saint Louis totes, and bespoke trunks.',
          x: 75.0,
          y: 78.0,
          nextStops: ['l2-louis-vuitton', 'l2-mikimoto']
        },
        {
          id: 'l2-mikimoto',
          name: 'Mikimoto Pearl Jewellers',
          floor: 'L2',
          unit: '#02-04',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'The world-renowned originator of cultured pearls, creating breathtaking Akoya, South Sea, and black pearl high jewellery necklaces.',
          x: 68.2,
          y: 78.6,
          nextStops: ['l2-pomellato', 'l2-vancleef']
        },
        {
          id: 'l2-pomellato',
          name: 'Pomellato',
          floor: 'L2',
          unit: '#02-05',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'Milanese fine goldsmithing brand famous for vibrant faceted Nudo gemstone cocktail rings and tactile Iconica gold chain necklaces.',
          x: 64.3,
          y: 68.8,
          nextStops: ['l2-mikimoto', 'l2-cartier']
        },
        {
          id: 'l2-patek',
          name: 'Patek Philippe',
          floor: 'L2',
          unit: '#02-09',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'Geneva’s last independent family-owned watch manufacturer, crafting timeless Nautilus, Aquanaut, and Grand Complication masterpieces.',
          x: 38.5,
          y: 52.5,
          nextStops: ['l2-cartier', 'l2-jacob']
        },
        {
          id: 'l2-jacob',
          name: 'Jacob & Co. / Sincere Fine Watches',
          floor: 'L2',
          unit: '#02-04A',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'Awe-inspiring haute horlogerie showcasing Astronomia triple-axis tourbillons, Bugatti Chiron engine animations, and high jewellery timepieces.',
          x: 75.0,
          y: 68.0,
          nextStops: ['l2-patek', 'l2-berluti']
        },
        {
          id: 'l2-berluti',
          name: 'Berluti',
          floor: 'L2',
          unit: '#02-14',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Venezia leather shoemaking house founded in 1895, revered for hand-patinated Alessandro oxfords, Scritto leather bags, and tailoring.',
          x: 82.0,
          y: 65.0,
          nextStops: ['l2-boss', 'l2-armani']
        },
        {
          id: 'l2-boss',
          name: 'BOSS',
          floor: 'L2',
          unit: '#02-15',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'German luxury tailoring maison crafting razor-sharp business suits, Italian virgin wool overcoats, and modern smart-casual essentials.',
          x: 86.7,
          y: 63.9,
          nextStops: ['l2-berluti', 'l2-armani']
        },
        {
          id: 'l2-armani',
          name: 'Giorgio Armani',
          floor: 'L2',
          unit: '#02-12',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Pure Italian luxury defined by deconstructed silhouettes, liquid silk eveningwear, and refined unstructured suiting.',
          x: 67.0,
          y: 61.5,
          nextStops: ['l2-boss', 'l2-berluti']
        },
        {
          id: 'l2-tag-espresso',
          name: 'Tag Espresso',
          floor: 'L2',
          unit: '#02-K1',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Artisanal coffee counter offering single-origin espresso tonics, coconut cold brews, and fresh French pastries.',
          x: 77.0,
          y: 48.5,
          nextStops: ['l2-tiffany', 'l2-berluti']
        },
        {
          id: 'l2-twg',
          name: 'TWG Tea Salon & Boutique',
          floor: 'L2',
          unit: '#02-21',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Finest luxury tea salon presenting over 800 single-estate harvests, tea-infused savoury dining, and fresh tea macarons.',
          x: 7.0,
          y: 84.0,
          nextStops: ['l2-suju', 'l2-ferragamo']
        },
        {
          id: 'l2-suju',
          name: 'Suju Dining Japanese Restaurant',
          floor: 'L2',
          unit: '#02-18',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Authentic Nagano cuisine celebrated for traditional copper pot rice, charcoal-grilled miso-marinated fish, and artisanal sake pairings.',
          x: 32.5,
          y: 31.0,
          nextStops: ['l2-twg', 'l2-patek']
        },
        {
          id: 'l2-ferragamo',
          name: 'Ferragamo',
          floor: 'L2',
          unit: '#02-10',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Florentine luxury house famous for iconic Vara bow pumps, Gancini buckle leather belts, and Hug leather top-handle bags.',
          x: 34.0,
          y: 55.5,
          nextStops: ['l2-bottega', 'l2-hermes']
        },
        {
          id: 'l2-bottega',
          name: 'Bottega Veneta',
          floor: 'L2',
          unit: '#02-11',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Sensual Italian leather craftsmanship highlighting Intrecciato woven leather Jodie bags, Andiamo totes, and sculptural mules.',
          x: 29.5,
          y: 55.5,
          nextStops: ['l2-ferragamo', 'l2-longchamp']
        },

        // --- LEVEL 1 STORES ---
        {
          id: 'l1-louis-vuitton',
          name: 'Louis Vuitton Grand Arcade',
          floor: 'L1',
          unit: '#01-01',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'The grand street-level facade boutique showcasing iconic Monogram and Damier luggage, Speedy bags, leather accessories, and bespoke hot-stamping.',
          x: 80.5,
          y: 65.0,
          nextStops: ['l1-chanel', 'l1-dior']
        },
        {
          id: 'l1-chanel',
          name: 'CHANEL Flagship',
          floor: 'L1',
          unit: '#01-02',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'The iconic Parisian boutique presenting the classic 11.12 handbag, 2.55 reissues, seasonal eyewear, and fine leather goods.',
          x: 70.0,
          y: 82.0,
          nextStops: ['l1-louis-vuitton', 'l1-dior']
        },
        {
          id: 'l1-celine',
          name: 'CELINE',
          floor: 'L1',
          unit: '#01-05',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Modern Parisian chic under Hedi Slimane featuring Triomphe monogram bags, refined tailoring, chunky sunglasses, and Haute Parfumerie.',
          x: 56.5,
          y: 42.0,
          nextStops: ['l1-dior', 'l1-bvlgari']
        },
        {
          id: 'l1-dior',
          name: 'Dior Flagship',
          floor: 'L1',
          unit: '#01-03',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Magnificent flagship boutique presenting Maria Grazia Chiuri’s creations, Dior Toujours bags, and silk Mitzah scarves.',
          x: 65.0,
          y: 52.0,
          nextStops: ['l1-celine', 'l1-fendi']
        },
        {
          id: 'l1-fendi',
          name: 'Fendi',
          floor: 'L1',
          unit: '#01-04',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Roman luxury craftsmanship showcasing the legendary Baguette bag, Peekaboo tote, FF jacquard motifs, and Selleria hand-stitched leather.',
          x: 60.5,
          y: 62.0,
          nextStops: ['l1-dior', 'l1-moynat']
        },
        {
          id: 'l1-moynat',
          name: 'Moynat Paris',
          floor: 'L1',
          unit: '#01-06',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'One of the oldest French trunkmakers dating back to 1849, celebrated for curved limousine trunks and Rejane leather handbags.',
          x: 67.0,
          y: 62.0,
          nextStops: ['l1-fendi', 'l1-goyard']
        },
        {
          id: 'l1-cartier',
          name: 'Cartier Grand Salon',
          floor: 'L1',
          unit: '#01-08',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'Ground-level grand entrance salon featuring Love bracelets, Panthère de Cartier creations, and exquisite diamond bridal collections.',
          x: 45.0,
          y: 61.0,
          nextStops: ['l1-bvlgari', 'l1-hour-glass']
        },
        {
          id: 'l1-bvlgari',
          name: 'BVLGARI',
          floor: 'L1',
          unit: '#01-09',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'Roman high jeweller renowned for coiled Serpenti tubogas bracelets, B.zero1 architectural rings, and vibrant cabochon gemstone pieces.',
          x: 40.0,
          y: 39.0,
          nextStops: ['l1-hour-glass', 'l1-cartier']
        },
        {
          id: 'l1-hour-glass',
          name: 'The Hour Glass',
          floor: 'L1',
          unit: '#01-10',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'Premier specialist luxury watch retailer offering curations from Rolex, Tudor, Hublot, and independent Swiss watchmakers.',
          x: 46.5,
          y: 37.0,
          nextStops: ['l1-bvlgari', 'l1-breitling']
        },
        {
          id: 'l1-breitling',
          name: 'Breitling Boutique',
          floor: 'L1',
          unit: '#01-12',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'Swiss aviation and dive chronograph specialist featuring Navitimer slide-rule watches, rugged Superocean, and Chronomat timepieces.',
          x: 34.0,
          y: 46.5,
          nextStops: ['l1-montblanc', 'l1-hour-glass']
        },
        {
          id: 'l1-montblanc',
          name: 'Montblanc',
          floor: 'L1',
          unit: '#01-14',
          category: 'jewellery',
          categoryName: 'Jewellery & Watches',
          desc: 'Masterpieces of German craftsmanship including Meisterstück fountain pens, Swiss complications, and Italian leather business folios.',
          x: 31.0,
          y: 57.0,
          nextStops: ['l1-breitling', 'l1-coach']
        },
        {
          id: 'l1-coach',
          name: 'Coach New York',
          floor: 'L1',
          unit: '#01-15',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Modern American luxury leather goods featuring the viral Tabby shoulder bag, signature jacquard totes, and shearling outerwear.',
          x: 33.0,
          y: 75.0,
          nextStops: ['l1-kate-spade', 'l1-montblanc']
        },
        {
          id: 'l1-kate-spade',
          name: 'Kate Spade New York',
          floor: 'L1',
          unit: '#01-16',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Joyful, spirited American accessories and ready-to-wear presenting playful novelty clutches, Sam nylon bags, and floral summer dresses.',
          x: 30.5,
          y: 82.0,
          nextStops: ['l1-coach', 'l1-polo']
        },
        {
          id: 'l1-cosmetics',
          name: 'Cosmetics & Beauty Hall',
          floor: 'L1',
          unit: '#01-Department',
          category: 'beauty',
          categoryName: 'Beauty & Skincare',
          desc: 'World-renowned beauty emporium featuring dedicated flagship counters for SK-II, Shiseido, Lancôme, Estée Lauder, Clé de Peau Beauté, and La Mer.',
          x: 14.0,
          y: 69.0,
          nextStops: ['l1-fragrances', 'b1-sephora']
        },
        {
          id: 'l1-fragrances',
          name: 'Haute Parfumerie & Fragrance Hall',
          floor: 'L1',
          unit: '#01-Fragrance',
          category: 'beauty',
          categoryName: 'Beauty & Skincare',
          desc: 'Curated selection of prestigious perfume houses including Chanel Les Exclusifs, Dior Privee, Guerlain, and Tom Ford Private Blend.',
          x: 22.5,
          y: 47.0,
          nextStops: ['l1-cosmetics', 'b1-byredo']
        },

        // --- BASEMENT 1 STORES ---
        {
          id: 'b1-sephora',
          name: 'Sephora Flagship',
          floor: 'B1',
          unit: '#B1-05/06',
          category: 'beauty',
          categoryName: 'Beauty & Skincare',
          desc: 'Massive beauty wonderland housing exclusive international makeup, clinical skincare, haircare, and complimentary Beauty Studio makeovers.',
          x: 57.5,
          y: 40.0,
          nextStops: ['b1-aesop', 'b1-nars']
        },
        {
          id: 'b1-lululemon',
          name: 'lululemon athletica',
          floor: 'B1',
          unit: '#B1-12/13',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Technical athletic apparel for yoga, running, and training, celebrated for buttery-soft Align leggings, Define jackets, and everyday belt bags.',
          x: 80.0,
          y: 57.5,
          nextStops: ['b1-onitsuka', 'b1-salomon']
        },
        {
          id: 'b1-onitsuka',
          name: 'Onitsuka Tiger',
          floor: 'B1',
          unit: '#B1-18',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Iconic Japanese heritage athletic footwear famous for handcrafted Mexico 66 leather sneakers, Nippon Made lines, and retro streetwear.',
          x: 57.0,
          y: 81.5,
          nextStops: ['b1-salomon', 'b1-beyond-vines']
        },
        {
          id: 'b1-salomon',
          name: 'Salomon Sportstyle',
          floor: 'B1',
          unit: '#B1-19',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Outdoor performance footwear and viral gorpcore sneakers featuring XT-6, ACS Pro, and technical trail running gear.',
          x: 63.0,
          y: 82.0,
          nextStops: ['b1-onitsuka', 'b1-beyond-vines']
        },
        {
          id: 'b1-beyond-vines',
          name: 'Beyond The Vines',
          floor: 'B1',
          unit: '#B1-20',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Contemporary Singapore design studio famous for cult utilitarian Dumpling Bags, lightweight nylon backpacks, and modular lifestyle goods.',
          x: 67.0,
          y: 80.0,
          nextStops: ['b1-editor', 'b1-marimekko']
        },
        {
          id: 'b1-editor',
          name: 'The Editor’s Market',
          floor: 'B1',
          unit: '#B1-22',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Modern minimalist womenswear focusing on versatile linen staples, earthy palettes, and timeless contemporary silhouettes.',
          x: 63.5,
          y: 69.5,
          nextStops: ['b1-beyond-vines', 'b1-sephora']
        },
        {
          id: 'b1-aesop',
          name: 'Aesop',
          floor: 'B1',
          unit: '#B1-08',
          category: 'beauty',
          categoryName: 'Beauty & Skincare',
          desc: 'Australian botanical skincare and olfactory perfumes offering bespoke skin consultations at an architecturally designed basin.',
          x: 55.0,
          y: 50.5,
          nextStops: ['b1-sephora', 'b1-diptyque']
        },
        {
          id: 'b1-nars',
          name: 'NARS Cosmetics',
          floor: 'B1',
          unit: '#B1-09',
          category: 'beauty',
          categoryName: 'Beauty & Skincare',
          desc: 'Modern artistry cosmetics founded by François Nars, famous for Orgasm blush, Radiant Creamy Concealer, and Light Reflecting powders.',
          x: 55.0,
          y: 55.5,
          nextStops: ['b1-sephora', 'b1-bath-body']
        },
        {
          id: 'b1-mfk',
          name: 'Maison Francis Kurkdjian',
          floor: 'B1',
          unit: '#B1-30',
          category: 'beauty',
          categoryName: 'Beauty & Skincare',
          desc: 'Parisian master perfumer creating unforgettable olfactory icons such as Baccarat Rouge 540, Grand Soir, and 724.',
          x: 67.0,
          y: 92.0,
          nextStops: ['b1-byredo', 'b1-diptyque']
        },
        {
          id: 'b1-byredo',
          name: 'BYREDO',
          floor: 'B1',
          unit: '#B1-31',
          category: 'beauty',
          categoryName: 'Beauty & Skincare',
          desc: 'European luxury brand founded in Stockholm by Ben Gorham, renowned for Gypsy Water, Mojave Ghost, and Rose of No Man’s Land.',
          x: 69.5,
          y: 92.0,
          nextStops: ['b1-mfk', 'b1-le-labo']
        },
        {
          id: 'b1-diptyque',
          name: 'Diptyque Paris',
          floor: 'B1',
          unit: '#B1-33',
          category: 'beauty',
          categoryName: 'Beauty & Skincare',
          desc: 'Historic French fragrance house celebrated for scented candles (Baies, Figuier, Feu de Bois), Eau Capitale, and solid perfumes.',
          x: 76.5,
          y: 92.0,
          nextStops: ['b1-byredo', 'b1-penhaligons']
        },
        {
          id: 'b1-le-labo',
          name: 'LE LABO',
          floor: 'B1',
          unit: '#B1-35',
          category: 'beauty',
          categoryName: 'Beauty & Skincare',
          desc: 'Artisanal perfume laboratory hand-formulating iconic scents like Santal 33, Another 13, and Thé Noir 29 with personalized labels.',
          x: 80.5,
          y: 92.0,
          nextStops: ['b1-byredo', 'b1-laduree']
        },
        {
          id: 'b1-laduree',
          name: 'LADURÉE Paris',
          floor: 'B1',
          unit: '#B1-26',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'The historic French luxury patisserie famed worldwide for double-decker macarons, delicate viennoiseries, and pastel gift boxes.',
          x: 73.5,
          y: 73.5,
          nextStops: ['b1-bacha', 'b1-starbucks']
        },
        {
          id: 'b1-bacha',
          name: 'Bacha Coffee',
          floor: 'B1',
          unit: '#B1-40',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Magnificent heritage Moroccan coffee room presenting over 200 single-origin harvests served in shimmering gooseneck pots with Chantilly cream.',
          x: 14.5,
          y: 53.0,
          nextStops: ['b1-laduree', 'b1-starbucks']
        },
        {
          id: 'b1-starbucks',
          name: 'Starbucks Coffee',
          floor: 'B1',
          unit: '#B1-45',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Relaxing modern coffeehouse offering handcrafted espresso beverages, seasonal Frappuccinos, and gourmet toasties.',
          x: 38.5,
          y: 41.5,
          nextStops: ['b1-bacha', 'b1-moleskine']
        },
        {
          id: 'b1-charles-keith',
          name: 'Charles & Keith',
          floor: 'B1',
          unit: '#B1-15',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Leading Singapore fashion label recognized globally for modern on-trend footwear, structured handbags, and chic eyewear.',
          x: 86.5,
          y: 76.0,
          nextStops: ['b1-marimekko', 'b1-owndays']
        },
        {
          id: 'b1-marimekko',
          name: 'Marimekko',
          floor: 'B1',
          unit: '#B1-16',
          category: 'home',
          categoryName: 'Gifts, Home & Books',
          desc: 'Finnish design house celebrated for timeless Unikko poppy prints, vibrant homeware, ceramic mugs, and Scandinavian apparel.',
          x: 83.5,
          y: 85.5,
          nextStops: ['b1-charles-keith', 'b1-beyond-vines']
        },
        {
          id: 'b1-moleskine',
          name: 'Moleskine Boutique',
          floor: 'B1',
          unit: '#B1-42',
          category: 'home',
          categoryName: 'Gifts, Home & Books',
          desc: 'Legendary notebooks, smart writing sets, travel journals, and premium sketching papers cherished by creatives worldwide.',
          x: 42.0,
          y: 41.5,
          nextStops: ['b1-starbucks', 'b1-bacha']
        },

        // --- BASEMENT 2 STORES ---
        {
          id: 'b2-taka-square',
          name: 'Takashimaya Square Event Hall',
          floor: 'B2',
          unit: '#B2-Square',
          category: 'services',
          categoryName: 'Services & Lifestyle',
          desc: 'Massive central atrium hosting Singapore’s premier seasonal fairs: Hokkaido Gourmet Food Fair, Mid-Autumn Mooncake Bazaar, and festive markets.',
          x: 42.0,
          y: 48.0,
          nextStops: ['b2-cold-storage', 'b2-donq']
        },
        {
          id: 'b2-cold-storage',
          name: 'Cold Storage Supermarket',
          floor: 'B2',
          unit: '#B2-01',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Flagship gourmet supermarket featuring premium Japanese Wagyu cuts, fresh sushi counters, air-flown seasonal berries, and fine wine cellar.',
          x: 26.0,
          y: 24.0,
          nextStops: ['b2-taka-square', 'b2-nakajima']
        },
        {
          id: 'b2-nakajima',
          name: 'Nakajima Suisan Grilled Fish & Sushi',
          floor: 'B2',
          unit: '#B2-08',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Direct from Tsukiji, serving traditional Japanese charcoal-grilled saba, salmon teriyaki, unagi sets, and freshly rolled nigiri.',
          x: 14.0,
          y: 41.0,
          nextStops: ['b2-tsuru-koshi', 'b2-donq']
        },
        {
          id: 'b2-tsuru-koshi',
          name: 'Tsuru-Koshi Sanuki Udon',
          floor: 'B2',
          unit: '#B2-09',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Handmade springy Sanuki udon noodles served in comforting hot dashi broth with golden crispy tempura prawns and kakiga-age.',
          x: 18.0,
          y: 42.0,
          nextStops: ['b2-nakajima', 'b2-yakun']
        },
        {
          id: 'b2-donq',
          name: 'DONQ Boulangerie & Mini One',
          floor: 'B2',
          unit: '#B2-21',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Historic 119-year-old bakery from Kobe famous for crackly French baguettes, batards, and queues for bite-sized Mini One mini croissants.',
          x: 14.5,
          y: 56.0,
          nextStops: ['b2-royce', 'b2-godiva']
        },
        {
          id: 'b2-royce',
          name: 'Royce’ Chocolates',
          floor: 'B2',
          unit: '#B2-48',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Sapporo Hokkaido confectionery famous for melt-in-mouth Nama Chocolate (Au Lait, Matcha, Champagne) and chocolate potato chips.',
          x: 14.0,
          y: 67.5,
          nextStops: ['b2-godiva', 'b2-bengawan']
        },
        {
          id: 'b2-godiva',
          name: 'GODIVA Chocolatier',
          floor: 'B2',
          unit: '#B2-27',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Belgian maître chocolatier crafting luxury praline gift boxes, rich dark chocolate soft-serve ice cream, and chocolate shakes.',
          x: 13.5,
          y: 60.0,
          nextStops: ['b2-royce', 'b2-donq']
        },
        {
          id: 'b2-bengawan',
          name: 'Bengawan Solo',
          floor: 'B2',
          unit: '#B2-14',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Singapore’s beloved traditional bakery celebrated for fresh pandan chiffon cakes, kueh lapis, ondeh-ondeh, and festive pineapple tarts.',
          x: 13.0,
          y: 53.0,
          nextStops: ['b2-tai-cheong', 'b2-yakun']
        },
        {
          id: 'b2-tai-cheong',
          name: 'Tai Cheong Bakery',
          floor: 'B2',
          unit: '#B2-53',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Hong Kong institution since 1954 renowned for warm, wobbly egg tarts with crumbly golden butter cookie crusts and bolo buns.',
          x: 17.5,
          y: 69.5,
          nextStops: ['b2-bengawan', 'b2-yakun']
        },
        {
          id: 'b2-yakun',
          name: 'Ya Kun Kaya Toast',
          floor: 'B2',
          unit: '#B2-61',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Singapore heritage coffee stall serving charcoal-grilled toast slathered with sweet kaya and cold butter, soft-boiled eggs, and aromatic kopi.',
          x: 16.0,
          y: 74.0,
          nextStops: ['b2-tai-cheong', 'b2-boon-tong-kee']
        },
        {
          id: 'b2-boon-tong-kee',
          name: 'Boon Tong Kee Chicken Rice',
          floor: 'B2',
          unit: '#B2-65',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Renowned Singapore Hainanese chicken rice featuring silky poached chicken, fragrant jasmine rice, and zesty chili ginger dip.',
          x: 60.0,
          y: 15.0,
          nextStops: ['b2-crystal-jade-b2', 'b2-sunnyhills']
        },
        {
          id: 'b2-crystal-jade-b2',
          name: 'Crystal Jade La Mian Xiao Long Bao',
          floor: 'B2',
          unit: '#B2-68',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Steaming bamboo baskets of delicate Shanghai soup dumplings, hand-pulled Dan Dan noodles, and spicy Szechuan wontons.',
          x: 66.5,
          y: 17.0,
          nextStops: ['b2-boon-tong-kee', 'b2-sunnyhills']
        },
        {
          id: 'b2-sunnyhills',
          name: 'SunnyHills Pineapple Cakes',
          floor: 'B2',
          unit: '#B2-70',
          category: 'dining',
          categoryName: 'Dining & Food Hall',
          desc: 'Farm-to-bakery Taiwanese pastries baked with indigenous organic mountain pineapples, French Echire butter, and organic Oolong tea.',
          x: 79.0,
          y: 18.0,
          nextStops: ['b2-innisfree', 'b2-crystal-jade-b2']
        },
        {
          id: 'b2-innisfree',
          name: 'innisfree',
          floor: 'B2',
          unit: '#B2-55',
          category: 'beauty',
          categoryName: 'Beauty & Skincare',
          desc: 'Clean Korean beauty brand from Jeju Island featuring Green Tea Seed hyaluronic serums, volcanic pore clay masks, and suncare.',
          x: 57.5,
          y: 25.0,
          nextStops: ['b2-watsons', 'b2-action-city']
        },
        {
          id: 'b2-watsons',
          name: 'Watsons & Guardian Health',
          floor: 'B2',
          unit: '#B2-58',
          category: 'beauty',
          categoryName: 'Beauty & Skincare',
          desc: 'Comprehensive personal health, Japanese pharmacy skincare, vitamins, and wellness supplements.',
          x: 65.0,
          y: 60.0,
          nextStops: ['b2-innisfree', 'b2-paper-bunny']
        },
        {
          id: 'b2-action-city',
          name: 'ActionCity & ActionCity Plus',
          floor: 'B2',
          unit: '#B2-62',
          category: 'home',
          categoryName: 'Gifts, Home & Books',
          desc: 'Art toy and designer collectible gallery featuring BE@RBRICK, POP MART blind boxes, Tokidoki, and limited pop culture sculptures.',
          x: 68.0,
          y: 70.0,
          nextStops: ['b2-paper-bunny', 'b2-benjamin-barker']
        },
        {
          id: 'b2-paper-bunny',
          name: 'The Paper Bunny',
          floor: 'B2',
          unit: '#B2-60',
          category: 'home',
          categoryName: 'Gifts, Home & Books',
          desc: 'Singapore lifestyle brand crafting cult puffy bags, reusable bottle bags, stationery, and sustainable everyday accessories.',
          x: 62.0,
          y: 67.0,
          nextStops: ['b2-action-city', 'b2-benjamin-barker']
        },
        {
          id: 'b2-benjamin-barker',
          name: 'Benjamin Barker',
          floor: 'B2',
          unit: '#B2-56',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Heritage sartorial menswear offering modern tailored suits, spread collar shirts, brogues, and handcrafted leather wallets.',
          x: 62.0,
          y: 40.0,
          nextStops: ['b2-anothersole', 'b2-action-city']
        },
        {
          id: 'b2-anothersole',
          name: 'Anothersole & Motherhouse',
          floor: 'B2',
          unit: '#B2-57',
          category: 'fashion',
          categoryName: 'Fashion & Accessories',
          desc: 'Featherlight ergonomic leather travel flats and handcrafted ethical leather bags made with sustainable craftsmanship.',
          x: 64.0,
          y: 49.0,
          nextStops: ['b2-benjamin-barker', 'b2-paper-bunny']
        },
        {
          id: 'b2-misterminit-store',
          name: 'Mister Minit',
          floor: 'B2',
          unit: '#B2-80',
          category: 'services',
          categoryName: 'Services & Lifestyle',
          desc: 'Quick precision services: shoe heal replacement, protective rubber half-soles, duplicate keys, RFID fobs, and watch batteries.',
          x: 65.0,
          y: 84.0,
          nextStops: ['b2-watsons', 'b2-cold-storage']
        }
      ];

      // Helper function for element lookup
      const $ = id => document.getElementById(id);
      const toast = message => {
        if (typeof showSiteToast === 'function') {
          showSiteToast(message);
        } else {
          const t = $('toast');
          if (!t) return;
          t.textContent = message;
          t.classList.add('show');
          clearTimeout(toast.timer);
          toast.timer = setTimeout(() => t.classList.remove('show'), 2600);
        }
      };

      const imgUrl = (id, w = 800) => `https://images.unsplash.com/${id}?auto=format&fit=crop&w=${w}&q=82`;

      /* ----------------------------------------------------
       * STATE MANAGEMENT
       * ---------------------------------------------------- */
      let currentFloor = 'L3';
      let activeCategory = 'all';
      let selectedStore = null;

      // Pan & Zoom Engine State
      let scale = 1.0;
      let panX = 0;
      let panY = 0;
      const minScale = 1.0;
      const maxScale = 3.2;
      const scaleStep = 0.35;

      let isDragging = false;
      let dragStartX = 0;
      let dragStartY = 0;
      let initialPanX = 0;
      let initialPanY = 0;

      // Pinch zoom state
      let initialPinchDist = 0;
      let initialPinchScale = 1.0;

      /* ----------------------------------------------------
       * PAN & ZOOM CONTROLLER
       * ---------------------------------------------------- */
      const viewport = $('mapViewport');
      const stage = $('mapPanStage');
      const zoomLabel = $('zoomLevelLabel');

      function updateZoomTransform(animate = true) {
        if (!stage) return;
        if (animate) {
          stage.style.transition = 'transform 0.2s cubic-bezier(0.2, 0.8, 0.2, 1)';
        } else {
          stage.style.transition = 'none';
        }

        // Clamp pan values so the map cannot be lost outside viewport
        clampPan();

        stage.style.transform = `translate(${panX}px, ${panY}px) scale(${scale})`;
        if (zoomLabel) {
          zoomLabel.textContent = `${Math.round(scale * 100)}%`;
        }

        if (viewport) {
          viewport.classList.toggle('grabbing', isDragging);
        }
      }

      function clampPan() {
        if (!viewport || !stage) return;
        if (scale <= 1.0) {
          panX = 0;
          panY = 0;
          return;
        }

        const vW = viewport.clientWidth;
        const vH = viewport.clientHeight;
        const sW = vW * scale;
        const sH = vH * scale;

        const maxPanX = 40;
        const minPanX = vW - sW - 40;
        const maxPanY = 40;
        const minPanY = vH - sH - 40;

        panX = Math.min(maxPanX, Math.max(minPanX, panX));
        panY = Math.min(maxPanY, Math.max(minPanY, panY));
      }

      function zoomIn() {
        if (scale >= maxScale) return;
        const oldScale = scale;
        scale = Math.min(maxScale, +(scale + scaleStep).toFixed(2));
        
        // Zoom towards center of viewport
        if (viewport) {
          const cX = viewport.clientWidth / 2;
          const cY = viewport.clientHeight / 2;
          panX = cX - (cX - panX) * (scale / oldScale);
          panY = cY - (cY - panY) * (scale / oldScale);
        }
        updateZoomTransform(true);
      }

      function zoomOut() {
        if (scale <= minScale) return;
        const oldScale = scale;
        scale = Math.max(minScale, +(scale - scaleStep).toFixed(2));
        
        if (scale <= 1.0) {
          panX = 0;
          panY = 0;
        } else if (viewport) {
          const cX = viewport.clientWidth / 2;
          const cY = viewport.clientHeight / 2;
          panX = cX - (cX - panX) * (scale / oldScale);
          panY = cY - (cY - panY) * (scale / oldScale);
        }
        updateZoomTransform(true);
      }

      function resetZoom(clearSel = false) {
        scale = 1.0;
        panX = 0;
        panY = 0;
        updateZoomTransform(true);
        if (clearSel) {
          clearStoreSelection();
        }
      }

      function centerOnCoords(xPct, yPct, targetScale = 1.7) {
        if (!viewport) return;
        scale = Math.max(scale, targetScale);
        const vW = viewport.clientWidth;
        const vH = viewport.clientHeight;

        // Calculate store position in unscaled stage coords
        const storeX = (xPct / 100) * vW;
        const storeY = (yPct / 100) * (vW * 0.555); // base aspect ratio ~568/1024

        panX = vW / 2 - storeX * scale;
        panY = vH / 2 - storeY * scale;

        updateZoomTransform(true);
      }

      // Initialize Pointer Dragging on Map Viewport
      function initMapDragPan() {
        if (!viewport) return;

        viewport.addEventListener('pointerdown', e => {
          if (e.target.closest('.map-floating-card, .store-marker-pin, .map-btn-ctrl')) return;
          isDragging = true;
          viewport.setPointerCapture(e.pointerId);
          dragStartX = e.clientX;
          dragStartY = e.clientY;
          initialPanX = panX;
          initialPanY = panY;
          viewport.classList.add('is-dragging');
        });

        viewport.addEventListener('pointermove', e => {
          if (!isDragging) return;
          const deltaX = e.clientX - dragStartX;
          const deltaY = e.clientY - dragStartY;
          panX = initialPanX + deltaX;
          panY = initialPanY + deltaY;
          updateZoomTransform(false);
        });

        const stopDrag = e => {
          if (isDragging) {
            isDragging = false;
            viewport.classList.remove('is-dragging');
            try { viewport.releasePointerCapture(e.pointerId); } catch (_) {}
            updateZoomTransform(true);
          }
        };

        viewport.addEventListener('pointerup', stopDrag);
        viewport.addEventListener('pointercancel', stopDrag);

        // Wheel Zoom
        viewport.addEventListener('wheel', e => {
          e.preventDefault();
          if (e.deltaY < 0) {
            zoomIn();
          } else {
            zoomOut();
          }
        }, { passive: false });

        // Double click to zoom in
        viewport.addEventListener('dblclick', e => {
          if (e.target.closest('.map-floating-card, .store-marker-pin')) return;
          if (scale < 2.0) {
            scale = 2.0;
            const rect = viewport.getBoundingClientRect();
            const clickX = e.clientX - rect.left;
            const clickY = e.clientY - rect.top;
            panX = viewport.clientWidth / 2 - clickX * 2.0;
            panY = viewport.clientHeight / 2 - clickY * 2.0;
            updateZoomTransform(true);
          } else {
            resetZoom();
          }
        });

        // Touch Pinch Zoom on Mobile
        viewport.addEventListener('touchstart', e => {
          if (e.touches.length === 2) {
            isDragging = false;
            const dx = e.touches[0].clientX - e.touches[1].clientX;
            const dy = e.touches[0].clientY - e.touches[1].clientY;
            initialPinchDist = Math.hypot(dx, dy);
            initialPinchScale = scale;
          }
        }, { passive: true });

        viewport.addEventListener('touchmove', e => {
          if (e.touches.length === 2 && initialPinchDist > 0) {
            const dx = e.touches[0].clientX - e.touches[1].clientX;
            const dy = e.touches[0].clientY - e.touches[1].clientY;
            const currentDist = Math.hypot(dx, dy);
            const pinchRatio = currentDist / initialPinchDist;
            scale = Math.min(maxScale, Math.max(minScale, initialPinchScale * pinchRatio));
            updateZoomTransform(false);
          }
        }, { passive: true });

        viewport.addEventListener('touchend', e => {
          if (e.touches.length < 2) {
            initialPinchDist = 0;
            updateZoomTransform(true);
          }
        });

        // Control Buttons
        const zIn = $('zoomInBtn');
        const zOut = $('zoomOutBtn');
        const zReset = $('resetZoomBtn');

        if (zIn) zIn.addEventListener('click', zoomIn);
        if (zOut) zOut.addEventListener('click', zoomOut);
        if (zReset) zReset.addEventListener('click', () => {
          resetZoom(true);
          toast('Floor map view reset.');
        });
      }

      /* ----------------------------------------------------
       * STORE MARKERS & PINS RENDERING
       * ---------------------------------------------------- */
      function renderStorePins() {
        const layer = $('storeMarkersLayer');
        if (!layer) return;

        const floorStores = allStores.filter(s => s.floor === currentFloor);
        const activeCat = activeCategory;

        layer.innerHTML = floorStores.map(store => {
          const isMatch = activeCat === 'all' || store.category === activeCat;
          const isSelected = selectedStore && selectedStore.id === store.id;

          let classes = 'store-marker-pin';
          if (isSelected) classes += ' active';
          if (!isMatch) classes += ' dimmed';

          return `
            <button type="button" class="${classes}" data-id="${store.id}" style="left: ${store.x}%; top: ${store.y}%;" aria-label="${store.name} (${store.categoryName})">
              <span class="pin-dot"></span>
              <span class="pin-title">${store.name.split(' ')[0]}</span>
              ${isSelected ? '<span class="pin-beacon"></span>' : ''}
            </button>
          `;
        }).join('');

        // Attach Click to Each Pin
        layer.querySelectorAll('.store-marker-pin').forEach(pin => {
          pin.addEventListener('click', e => {
            e.stopPropagation();
            const store = allStores.find(s => s.id === pin.dataset.id);
            if (store) {
              selectStore(store, { center: true, showTooltip: true });
            }
          });
        });
      }

      /* ----------------------------------------------------
       * ANCHORED FLOATING STORE CARD ON MAP
       * ---------------------------------------------------- */
      function updateFloatingCard(store) {
        const card = $('mapFloatingCard');
        if (!card) return;

        if (!store) {
          card.style.display = 'none';
          return;
        }

        const title = $('floatingStoreTitle');
        const badge = $('floatingStoreBadge');
        const unit = $('floatingStoreUnit');
        const desc = $('floatingStoreDesc');
        const viewBtn = $('floatingViewDetailsBtn');

        if (title) title.textContent = store.name;
        if (badge) badge.textContent = store.categoryName;
        if (unit) unit.textContent = store.unit;
        if (desc) desc.textContent = store.desc;

        // Position card anchored to stage coordinates
        card.style.left = `${store.x}%`;
        card.style.top = `${store.y}%`;
        card.style.display = 'block';

        if (viewBtn) {
          viewBtn.onclick = () => {
            $('floorDetail').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
          };
        }
      }

      const closeFloatingBtn = $('closeFloatingCardBtn');
      if (closeFloatingBtn) {
        closeFloatingBtn.addEventListener('click', () => {
          const card = $('mapFloatingCard');
          if (card) card.style.display = 'none';
        });
      }

      /* ----------------------------------------------------
       * RIGHT COLUMN: STORE DETAIL & RECOMMENDATIONS
       * ---------------------------------------------------- */
      function renderStoreDetails(store) {
        const selectedView = $('storeSelectedView');
        const overviewView = $('floorOverviewView');

        if (!store) {
          if (selectedView) selectedView.style.display = 'none';
          if (overviewView) overviewView.style.display = 'block';
          return;
        }

        if (overviewView) overviewView.style.display = 'none';
        if (selectedView) selectedView.style.display = 'flex';

        $('detailStoreName').textContent = store.name;
        $('detailStoreCat').textContent = store.categoryName;
        $('detailStoreFloorBadge').textContent = `Level ${store.floor}`;
        $('detailStoreUnitBadge').textContent = store.unit;
        $('detailStoreDesc').textContent = store.desc;

        // Peer stores in same category
        const peerContainer = $('peerStoresList');
        const peerCount = $('detailPeerCount');
        const peers = allStores.filter(s => s.category === store.category && s.id !== store.id).slice(0, 4);

        if (peerCount) peerCount.textContent = `${peers.length} stores`;
        if (peerContainer) {
          peerContainer.innerHTML = peers.map(p => `
            <button type="button" class="peer-store-item" data-id="${p.id}">
              <span class="peer-store-name">${p.name}</span>
              <span class="peer-store-level">${p.floor} &bull; ${p.unit}</span>
            </button>
          `).join('');

          peerContainer.querySelectorAll('.peer-store-item').forEach(btn => {
            btn.addEventListener('click', () => {
              const target = allStores.find(s => s.id === btn.dataset.id);
              if (target) {
                selectStore(target, { center: true, showTooltip: true });
              }
            });
          });
        }

        // "Where should I go next?" Recommendations
        const nextContainer = $('nextStopsContainer');
        if (nextContainer) {
          const nextStoreIds = store.nextStops || [];
          const nextStores = nextStoreIds.map(id => allStores.find(s => s.id === id)).filter(Boolean);

          // If store has fewer than 2 defined next stops, fill with curated cross-category staples
          if (nextStores.length < 2) {
            const fallback = allStores.filter(s => s.id !== store.id && s.floor !== store.floor).slice(0, 2 - nextStores.length);
            nextStores.push(...fallback);
          }

          nextContainer.innerHTML = nextStores.map(ns => {
            let roleTag = 'NEXT STOP';
            if (ns.category === 'dining') roleTag = 'SAVOUR & RECHARGE';
            else if (ns.category === 'fashion') roleTag = 'STYLE DISCOVERY';
            else if (ns.category === 'beauty') roleTag = 'PAMPER & BEAUTY';
            else if (ns.category === 'home') roleTag = 'BROWSE & LIFESTYLE';

            return `
              <div class="next-stop-card">
                <div class="next-stop-head">
                  <span class="next-stop-tag">${roleTag}</span>
                  <span class="peer-store-level">${ns.floor}</span>
                </div>
                <strong class="next-stop-name">${ns.name}</strong>
                <p class="next-stop-desc">${ns.desc}</p>
                <button type="button" class="btn-next-action" data-id="${ns.id}">
                  <span>View on Map &rsaquo;</span>
                </button>
              </div>
            `;
          }).join('');

          nextContainer.querySelectorAll('.btn-next-action').forEach(btn => {
            btn.addEventListener('click', () => {
              const target = allStores.find(s => s.id === btn.dataset.id);
              if (target) {
                selectStore(target, { center: true, showTooltip: true });
              }
            });
          });
        }

        // Locate Store button in Right Column
        const locateBtn = $('btnLocateOnMap');
        if (locateBtn) {
          locateBtn.onclick = () => {
            centerOnCoords(store.x, store.y, 1.8);
            updateFloatingCard(store);
            toast(`📍 Centered on ${store.name} (${store.floor})`);
          };
        }
      }

      function clearStoreSelection() {
        selectedStore = null;
        updateFloatingCard(null);
        renderStoreDetails(null);
        renderStorePins();
      }

      const backBtn = $('btnBackToOverview');
      const clearBtn = $('btnClearStoreSelection');
      if (backBtn) backBtn.addEventListener('click', clearStoreSelection);
      if (clearBtn) clearBtn.addEventListener('click', clearStoreSelection);

      /* ----------------------------------------------------
       * SELECT STORE MAIN ACTION
       * ---------------------------------------------------- */
      function selectStore(store, opts = {}) {
        if (!store) return;
        selectedStore = store;

        // If store is on another floor, switch floor first!
        if (store.floor !== currentFloor) {
          selectFloor(store.floor, false);
        }

        renderStorePins();
        renderStoreDetails(store);

        if (opts.center !== false) {
          centerOnCoords(store.x, store.y, 1.8);
        }

        if (opts.showTooltip !== false) {
          updateFloatingCard(store);
        }

        toast(`Selected ${store.name} &bull; Level ${store.floor}`);

        if (window.matchMedia('(max-width: 768px)').matches && opts.scroll) {
          $('floorDetail').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }

      /* ----------------------------------------------------
       * SELECT FLOOR CONTROLLER
       * ---------------------------------------------------- */
      function selectFloor(code, resetStore = true) {
        const f = floors[code];
        if (!f) return;
        currentFloor = code;

        if (resetStore) {
          selectedStore = null;
          updateFloatingCard(null);
          renderStoreDetails(null);
        }

        // 1. Update Left Floor Directory List
        document.querySelectorAll('.floor-btn').forEach(b => {
          const active = b.dataset.floor === code;
          b.classList.toggle('active', active);
          b.setAttribute('aria-selected', String(active));
        });

        // 2. Update Map Top Toolbar
        const mapFloorBadge = $('mapFloorBadge');
        const mapFloorTitle = $('mapFloorTitle');
        const mapFloorStoreCount = $('mapFloorStoreCount');
        const floorStoresCount = allStores.filter(s => s.floor === code).length;

        if (mapFloorBadge) mapFloorBadge.textContent = code;
        if (mapFloorTitle) mapFloorTitle.textContent = f.name;
        if (mapFloorStoreCount) mapFloorStoreCount.innerHTML = `&bull; ${floorStoresCount} Stores Mapped`;

        // 3. Update Floor Map Graphic Image
        const floorImg = $('floorMapImage');
        if (floorImg) {
          floorImg.src = f.map;
          floorImg.alt = `Takashimaya ${code} - ${f.name} Official Floor Plan`;
        }

        // 4. Update Floor Overview in Right Column
        $('detailCode').textContent = code;
        $('detailTitle').textContent = f.name;
        $('detailDesc').textContent = f.desc;
        $('detailPhoto').src = imgUrl(f.photo, 700);
        $('detailPhoto').alt = f.name;
        $('brandGrid').innerHTML = f.brands.map(name => `<button class="brand-tile" type="button">${name.replace('|', '<br>')}</button>`).join('');
        $('categoryList').innerHTML = f.cats.map(name => `<button class="category-btn" type="button"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><path d="M8 12h8M12 8v8"/></svg><span>${name}</span><b>›</b></button>`).join('');

        // 5. Render Store Pins for this Floor
        renderStorePins();

        // 6. Update Category Count indicator
        updateCategoryCountBadge();

        // 7. Update Facilities Strip
        renderFacilityPins(code);

        // Reset zoom when switching floor
        resetZoom();
      }

      /* ----------------------------------------------------
       * CATEGORY FILTERS CONTROLLER
       * ---------------------------------------------------- */
      function setCategoryFilter(cat) {
        activeCategory = cat;

        // Update Pill styles
        document.querySelectorAll('.cat-pill').forEach(pill => {
          const isActive = pill.dataset.cat === cat;
          pill.classList.toggle('active', isActive);
          pill.setAttribute('aria-checked', String(isActive));
        });

        updateCategoryCountBadge();
        renderStorePins();

        const catName = document.querySelector(`.cat-pill[data-cat="${cat}"]`)?.textContent || 'All';
        toast(`Filtered by: ${catName}`);
      }

      function updateCategoryCountBadge() {
        const countBadge = $('activeCategoryCount');
        if (!countBadge) return;

        if (activeCategory === 'all') {
          const total = allStores.filter(s => s.floor === currentFloor).length;
          countBadge.textContent = `All (${total})`;
        } else {
          const matches = allStores.filter(s => s.floor === currentFloor && s.category === activeCategory).length;
          countBadge.textContent = `${matches} on ${currentFloor}`;
        }
      }

      // Bind category pills
      document.querySelectorAll('.cat-pill').forEach(pill => {
        pill.addEventListener('click', () => setCategoryFilter(pill.dataset.cat));
      });

      /* ----------------------------------------------------
       * STORE SEARCH DIRECTORY (IN-PAGE & HEADER LINKAGE)
       * ---------------------------------------------------- */
      const mapSearchInput = $('mapStoreSearch');
      const searchDropdown = $('searchDropdown');
      const clearSearchBtn = $('clearSearchBtn');

      function executeMapSearch() {
        if (!mapSearchInput || !searchDropdown) return;
        const q = mapSearchInput.value.trim().toLowerCase();

        if (clearSearchBtn) {
          clearSearchBtn.classList.toggle('visible', q.length > 0);
        }

        if (!q) {
          searchDropdown.classList.remove('open');
          searchDropdown.innerHTML = '';
          return;
        }

        const matches = allStores.filter(s => {
          return s.name.toLowerCase().includes(q) ||
                 s.categoryName.toLowerCase().includes(q) ||
                 s.floor.toLowerCase().includes(q) ||
                 s.desc.toLowerCase().includes(q);
        }).slice(0, 8);

        if (matches.length === 0) {
          searchDropdown.innerHTML = `<div class="search-no-results">No stores found matching "${q}". Try another keyword or floor.</div>`;
        } else {
          searchDropdown.innerHTML = matches.map(s => `
            <button type="button" class="search-result-item" data-id="${s.id}">
              <div>
                <span class="search-result-name">${s.name}</span>
                <span class="search-result-cat">${s.categoryName} &bull; ${s.unit}</span>
              </div>
              <span class="search-result-floor">${s.floor}</span>
            </button>
          `).join('');

          searchDropdown.querySelectorAll('.search-result-item').forEach(item => {
            item.addEventListener('click', () => {
              const store = allStores.find(s => s.id === item.dataset.id);
              if (store) {
                selectStore(store, { center: true, showTooltip: true, scroll: true });
                searchDropdown.classList.remove('open');
                mapSearchInput.value = store.name;
              }
            });
          });
        }

        searchDropdown.classList.add('open');
      }

      if (mapSearchInput) {
        mapSearchInput.addEventListener('input', executeMapSearch);
        mapSearchInput.addEventListener('focus', executeMapSearch);
      }

      if (clearSearchBtn) {
        clearSearchBtn.addEventListener('click', () => {
          mapSearchInput.value = '';
          clearSearchBtn.classList.remove('visible');
          searchDropdown.classList.remove('open');
          mapSearchInput.focus();
        });
      }

      // Close search dropdown on click outside
      document.addEventListener('click', e => {
        if (searchDropdown && !e.target.closest('.floor-search-box')) {
          searchDropdown.classList.remove('open');
        }
      });

      // Synchronize Site Header Search with All Stores
      const siteSearchInput = $('siteSearch');
      if (siteSearchInput) {
        siteSearchInput.addEventListener('input', () => {
          const q = siteSearchInput.value.trim().toLowerCase();
          const resEl = $('searchResults');
          if (!resEl) return;

          if (!q) {
            resEl.innerHTML = '';
            return;
          }

          const matches = allStores.filter(s => {
            return s.name.toLowerCase().includes(q) ||
                   s.categoryName.toLowerCase().includes(q) ||
                   s.desc.toLowerCase().includes(q);
          }).slice(0, 8);

          resEl.innerHTML = matches.length
            ? matches.map(s => `<button type="button" data-store-id="${s.id}">${s.floor} &bull; ${s.name} <small style="color:#888;">(${s.categoryName})</small></button>`).join('')
            : '<span style="font-size:12px;color:#777;padding:6px 10px;display:block;">No matches found.</span>';

          resEl.querySelectorAll('[data-store-id]').forEach(btn => {
            btn.addEventListener('click', () => {
              const store = allStores.find(s => s.id === btn.dataset.storeId);
              if (store) {
                selectStore(store, { center: true, showTooltip: true, scroll: true });
                const panel = $('searchPanel');
                if (panel) panel.classList.remove('open');
                siteSearchInput.value = '';
                resEl.innerHTML = '';
                $('visit')?.scrollIntoView({ behavior: 'smooth' });
              }
            });
          });
        });
      }

      // Facilities Strip Renderer
      function renderFacilityPins(code) {
        const facilitiesRow = $('facilitiesItemsRow');
        const facilitiesHeading = $('facilitiesFloorHeading');
        const items = floorAmenities[code] || [];

        if (facilitiesHeading) {
          facilitiesHeading.textContent = `Facilities on Level ${code}`;
        }
        if (facilitiesRow) {
          facilitiesRow.innerHTML = items.map(p => `
            <div class="facility" data-id="${p.id}" title="${p.desc.replace(/&bull;/g, '•')}">
              <span class="fac-icon">${p.icon}</span>
              <span>${p.title}</span>
            </div>
          `).join('');

          facilitiesRow.querySelectorAll('.facility').forEach(fac => {
            fac.addEventListener('click', () => {
              const item = items.find(i => i.id === fac.dataset.id);
              if (item) {
                toast(`📍 Level ${code} — ${item.title}: ${item.desc.replace(/&bull;/g, '•')}`);
              }
            });
          });
        }
      }

      // Bind all floor interactive trigger buttons
      document.querySelectorAll('.floor-btn').forEach(b => {
        b.addEventListener('click', () => selectFloor(b.dataset.floor, true));
      });

      // Preload floor map graphics for instantaneous switching
      Object.values(floors).forEach(f => {
        const i = new Image();
        i.src = f.map;
      });

      // Initialize Interactive Pan & Zoom
      initMapDragPan();

      // Initial render for default floor Level 3
      selectFloor('L3', true);

      /* ----------------------------------------------------
       * MODAL & MEMBERSHIP HANDLERS
       * ---------------------------------------------------- */
      const modalCopy = {
        hours: ['Opening Hours', 'Takashimaya Singapore is open daily from 10:00am to 9:30pm, including public holidays. Individual restaurants and specialty outlets may observe extended hours.'],
        location: ['Location', 'Takashimaya Department Store & Shopping Centre is located at Ngee Ann City, 391 Orchard Road, Singapore 238872.'],
        getting: ['Getting Here', 'By MRT: Directly connected to Orchard MRT Station (North-South Line NS22 & Thomson-East Coast Line TE14) via Basement 1 and Basement 2 underpass. Direct vehicular drop-offs available via Orchard Road and Level 2 driveway.'],
        services: ['Visitor Services', 'Comprehensive customer care including main Concierge at Level 1, eTRS Tourist Tax Refund, VIP styling suites, baby care rooms, wheelchair assistance, and complimentary gift wrapping at Level 4.'],
        tax: ['Tax Refund (eTRS)', 'Overseas visitors can claim GST refunds on purchases over $100 across Takashimaya. Bring your passport and visit the self-service eTRS refund lounge at Level 1 West Lobby or Concierge.'],
        brands: ['Featured Brands Directory', 'Explore our comprehensive directory of over 200 luxury fashion, beauty, fine jewellery, dining, and lifestyle stores across all six levels.'],
        dining: ['Dining & Food Hall', 'From MICHELIN-recommended dining at Level 4 to the vibrant Japanese Food Hall and Takashimaya Square at Basement 2, enjoy diverse culinary offerings.'],
        events: ['Events & Pop-ups', 'Visit Takashimaya Square at B2 for international food fairs, festive bazaars, and exclusive brand pop-ups throughout the year.'],
        membership: ['Takashimaya Membership', 'Earn points and unlock exclusive shopping privileges, voucher rebates, and complimentary parking with Takashimaya Cards.']
      };

      function openModal(key) {
        const item = modalCopy[key] || ['Explore Takashimaya', 'Browse the floor directory to find stores, brands and services.'];
        $('modalTitle').textContent = item[0];
        $('modalBody').innerHTML = `<p>${item[1]}</p>${key === 'location' ? '<button class="primary" id="mapLink" type="button">Open in Google Maps &nearr;</button>' : ''}${key === 'membership' ? '<button class="primary" id="membershipContact" type="button">Inquire at Concierge</button>' : ''}`;
        $('modalBackdrop').classList.add('open');
        $('closeModal').focus();

        if ($('mapLink')) {
          $('mapLink').onclick = () => window.open('https://www.google.com/maps/search/?api=1&query=Takashimaya+Singapore+391+Orchard+Road', '_blank', 'noopener');
        }
        if ($('membershipContact')) {
          $('membershipContact').onclick = () => toast('Please visit the Customer Service Counter on Level 1 or 4 for assistance.');
        }
      }

      document.querySelectorAll('[data-info]').forEach(b => b.addEventListener('click', () => openModal(b.dataset.info)));
      const viewAllBtn = $('viewAllBrands');
      if (viewAllBtn) viewAllBtn.addEventListener('click', () => openModal('brands'));

      const closeBtn = $('closeModal');
      if (closeBtn) closeBtn.addEventListener('click', () => $('modalBackdrop').classList.remove('open'));

      const backdrop = $('modalBackdrop');
      if (backdrop) {
        backdrop.addEventListener('click', e => {
          if (e.target === backdrop) backdrop.classList.remove('open');
        });
      }

      document.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
          if (backdrop) backdrop.classList.remove('open');
          const panel = $('searchPanel');
          if (panel) panel.classList.remove('open');
          if (searchDropdown) searchDropdown.classList.remove('open');
          const card = $('mapFloatingCard');
          if (card) card.style.display = 'none';
        }
      });

      // Account modal connection
      const accountBtn = $('accountBtn');
      if (accountBtn) {
        accountBtn.addEventListener('click', e => {
          e.preventDefault();
          $('modalTitle').textContent = 'Takashimaya Membership';
          $('modalBody').innerHTML = '<p>Welcome to Takashimaya Singapore. Access exclusive shopping privileges and points with your membership account.</p><label for="emailInput" style="font-size:12px;font-weight:600;display:block;margin-bottom:4px;">Email address</label><input id="emailInput" type="email" placeholder="you@example.com"><button class="primary" id="accountContinue" type="button">Sign In / Register</button>';
          $('modalBackdrop').classList.add('open');
          $('accountContinue').onclick = () => {
            const v = $('emailInput').value;
            if (!v || !v.includes('@')) {
              toast('Please enter a valid email address');
              return;
            }
            toast('Welcome! Membership account connected for ' + v);
            setTimeout(() => { $('modalBackdrop').classList.remove('open'); }, 1400);
          };
        });
      }

      // Delegate brand tile & category button clicks in floor overview
      document.addEventListener('click', e => {
        const brandTile = e.target.closest('.brand-tile');
        if (brandTile) {
          const brandName = brandTile.textContent.replace(/[\n\r]+/g, ' ').trim();
          const match = allStores.find(s => s.floor === currentFloor && s.name.toLowerCase().includes(brandName.toLowerCase()));
          if (match) {
            selectStore(match, { center: true, showTooltip: true });
          } else {
            toast(`${brandName} &bull; Level ${currentFloor} &bull; Directory information available in store.`);
          }
        }

        const catBtn = e.target.closest('.category-btn');
        if (catBtn) {
          const catText = catBtn.querySelector('span')?.textContent || '';
          let targetCatKey = 'all';
          if (catText.toLowerCase().includes('beauty') || catText.toLowerCase().includes('skincare')) targetCatKey = 'beauty';
          else if (catText.toLowerCase().includes('fashion')) targetCatKey = 'fashion';
          else if (catText.toLowerCase().includes('jewel') || catText.toLowerCase().includes('watch')) targetCatKey = 'jewellery';
          else if (catText.toLowerCase().includes('dining') || catText.toLowerCase().includes('food') || catText.toLowerCase().includes('cafe')) targetCatKey = 'dining';
          else if (catText.toLowerCase().includes('home') || catText.toLowerCase().includes('gift') || catText.toLowerCase().includes('book')) targetCatKey = 'home';
          else if (catText.toLowerCase().includes('lifestyle') || catText.toLowerCase().includes('service')) targetCatKey = 'services';
          setCategoryFilter(targetCatKey);
        }
      });

      /* ----------------------------------------------------
       * MARK YOUR CALENDAR FEATURE
       * ---------------------------------------------------- */
      // Sample promotional and event data (structured for future API/CMS connection)
      const takashimayaEvents = [
        {
          id: 'ev-1',
          title: 'Takashimaya Autumn Grand Shopping Day',
          category: 'Shopping Privilege',
          tag: 'Storewide &bull; All Floors',
          startDate: '2026-10-15',
          endDate: '2026-10-18',
          time: '10:00 AM – 9:30 PM',
          desc: 'Enjoy an additional 10% voucher rebate across participating luxury fashion, beauty and home brands with Takashimaya Cards.',
          highlight: 'Double Takashimaya Bonus Points'
        },
        {
          id: 'ev-2',
          title: 'Autumn Beauty Atelier & Masterclasses',
          category: 'Beauty Event',
          tag: 'Cosmetics & Fragrances &bull; Level 1 & 2',
          startDate: '2026-10-10',
          endDate: '2026-10-25',
          time: '11:00 AM – 8:00 PM',
          desc: 'Complimentary seasonal skin consultations, personalized fragrance layering sessions, and exclusive gift-with-purchase sets.',
          highlight: 'Complimentary Deluxe Samples'
        },
        {
          id: 'ev-3',
          title: 'Hokkaido Gourmet Harvest Food Fair',
          category: 'Dining & Food Fair',
          tag: 'Takashimaya Square &bull; B2',
          startDate: '2026-10-12',
          endDate: '2026-10-31',
          time: '10:00 AM – 9:30 PM',
          desc: 'Indulge in authentic Japanese confections, fresh ramen stalls, sea urchin bentos, and seasonal melon delicacies flown in directly from Hokkaido.',
          highlight: 'Live Chef Demonstrations'
        },
        {
          id: 'ev-4',
          title: 'Fine Watchmaking Showcase',
          category: 'Luxury Fashion',
          tag: 'Fine Jewellery & Watches &bull; Level 1',
          startDate: '2026-10-01',
          endDate: '2026-10-20',
          time: '11:00 AM – 9:00 PM',
          desc: 'Discover limited edition Swiss timepieces and rare high horology masterworks from prestigious maisons with master watchmaker consultations.',
          highlight: 'Exclusive VIP Preview'
        },
        {
          id: 'ev-5',
          title: 'Art of Tableware & Living Exhibition',
          category: 'Lifestyle & Home',
          tag: 'Home Living & Décor &bull; Level 4',
          startDate: '2026-10-16',
          endDate: '2026-11-05',
          time: '11:00 AM – 9:00 PM',
          desc: 'Curated artisanal tableware, Japanese porcelain collections, and exclusive Le Creuset and Royal Selangor seasonal pieces.',
          highlight: 'Up to 25% Off Featured Sets'
        },
        {
          id: 'ev-6',
          title: 'Winter Festive Preview & Early Gifting',
          category: 'Seasonal Campaign',
          tag: 'Storewide &bull; All Floors',
          startDate: '2026-11-01',
          endDate: '2026-11-30',
          time: '10:00 AM – 9:30 PM',
          desc: 'Be the first to browse holiday gift hampers, boutique beauty advent calendars, and personalized gifting services at the Concierge.',
          highlight: 'Complimentary Gift Wrapping'
        },
        {
          id: 'ev-7',
          title: 'Japanese Craft & Tea Ceremony Workshop',
          category: 'Cultural Workshop',
          tag: 'Japanese Concept Area &bull; B2 / L4',
          startDate: '2026-10-24',
          endDate: '2026-10-25',
          time: '2:00 PM – 4:00 PM',
          desc: 'Experience traditional matcha preparation and authentic wagashi pairing guided by certified Japanese tea masters.',
          highlight: 'Limited Sessions &bull; Pre-booking Recommended'
        }
      ];

      // Calendar state: default to current date
      const today = new Date();
      let currentCalYear = today.getFullYear();
      let currentCalMonth = today.getMonth(); // 0-indexed
      let selectedDate = new Date(currentCalYear, currentCalMonth, today.getDate());

      const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
      ];
      const dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

      function formatDateIso(d) {
        const y = d.getFullYear();
        const m = String(d.getMonth() + 1).padStart(2, '0');
        const day = String(d.getDate()).padStart(2, '0');
        return `${y}-${m}-${day}`;
      }

      function hasEventsOnDate(dateStr) {
        return takashimayaEvents.some(ev => dateStr >= ev.startDate && dateStr <= ev.endDate);
      }

      function getEventsOnDate(dateStr) {
        return takashimayaEvents.filter(ev => dateStr >= ev.startDate && dateStr <= ev.endDate);
      }

      function renderCalendar() {
        const monthDisplay = $('calMonthDisplay');
        const daysGrid = $('calDaysGrid');
        if (!monthDisplay || !daysGrid) return;

        monthDisplay.textContent = `${monthNames[currentCalMonth]} ${currentCalYear}`;
        daysGrid.innerHTML = '';

        const firstDayIndex = new Date(currentCalYear, currentCalMonth, 1).getDay();
        const daysInCurrentMonth = new Date(currentCalYear, currentCalMonth + 1, 0).getDate();
        const daysInPrevMonth = new Date(currentCalYear, currentCalMonth, 0).getDate();

        const selectedIso = formatDateIso(selectedDate);
        const todayIso = formatDateIso(today);

        // Previous month padding days
        for (let x = firstDayIndex; x > 0; x--) {
          const dayNum = daysInPrevMonth - x + 1;
          const prevDate = new Date(currentCalYear, currentCalMonth - 1, dayNum);
          const dateIso = formatDateIso(prevDate);
          const cell = createDayCell(dayNum, dateIso, true);
          daysGrid.appendChild(cell);
        }

        // Current month days
        for (let d = 1; d <= daysInCurrentMonth; d++) {
          const thisDate = new Date(currentCalYear, currentCalMonth, d);
          const dateIso = formatDateIso(thisDate);
          const isSelected = dateIso === selectedIso;
          const isToday = dateIso === todayIso;
          const cell = createDayCell(d, dateIso, false, isSelected, isToday);
          daysGrid.appendChild(cell);
        }

        // Trailing days to complete the calendar grid rows (multiple of 7)
        const totalCells = firstDayIndex + daysInCurrentMonth;
        const trailingDays = (7 - (totalCells % 7)) % 7;
        for (let t = 1; t <= trailingDays; t++) {
          const nextDate = new Date(currentCalYear, currentCalMonth + 1, t);
          const dateIso = formatDateIso(nextDate);
          const cell = createDayCell(t, dateIso, true);
          daysGrid.appendChild(cell);
        }
      }

      function createDayCell(dayNum, dateIso, isOtherMonth, isSelected = false, isToday = false) {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'cal-day-cell';
        if (isOtherMonth) btn.classList.add('other-month');
        if (isSelected) btn.classList.add('selected');
        if (isToday) btn.classList.add('is-today');

        const hasEv = hasEventsOnDate(dateIso);
        if (hasEv) btn.classList.add('has-event');

        btn.setAttribute('data-date', dateIso);
        btn.setAttribute('aria-label', `${dateIso}${hasEv ? ' (Special Taka Day)' : ''}`);

        let html = `<span class="day-number">${dayNum}</span>`;
        if (hasEv) {
          html += `<span class="event-dot" title="Special Taka Day offers"></span>`;
        }
        btn.innerHTML = html;

        btn.addEventListener('click', () => {
          const [y, m, d] = dateIso.split('-').map(Number);
          selectedDate = new Date(y, m - 1, d);
          currentCalYear = y;
          currentCalMonth = m - 1;
          renderCalendar();
          updateSelectedDateDetails();
        });

        return btn;
      }

      function updateSelectedDateDetails() {
        const chosenDisplay = $('chosenDateDisplay');
        const cardBox = $('takaConfirmationCard');
        const gridEl = $('eventsCardsGrid');
        const dateIso = formatDateIso(selectedDate);

        const monthName = monthNames[selectedDate.getMonth()];
        const dayNum = selectedDate.getDate();
        const year = selectedDate.getFullYear();
        const formattedDisplay = `${dayNum} ${monthName} ${year}`;

        if (chosenDisplay) {
          chosenDisplay.textContent = formattedDisplay;
        }

        // Gentle confirmation card animation
        if (cardBox) {
          cardBox.classList.remove('pulse-highlight');
          void cardBox.offsetWidth;
          cardBox.classList.add('pulse-highlight');
        }

        const events = getEventsOnDate(dateIso);

        if (gridEl) {
          // Curated experience recommendation items matching mockup
          let recsHtml = '';

          // Offer card
          recsHtml += `
            <div class="rec-item-card" data-type="offer">
              <div class="rec-thumb">
                <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=260&q=80" alt="Fashion and beauty accessories" loading="lazy">
              </div>
              <div class="rec-content">
                <span class="rec-pill-badge badge-offer">EXCLUSIVE OFFER</span>
                <h5 class="rec-title">20% Off Fashion &amp; Beauty</h5>
                <p class="rec-sub">Only on your Taka Day (${dayNum} ${monthName})</p>
              </div>
              <span class="rec-chevron">&rsaquo;</span>
            </div>
          `;

          // Event / workshop card
          const currentEv = events[0] || takashimayaEvents[1]; // Autumn Beauty Atelier
          recsHtml += `
            <div class="rec-item-card" data-type="event">
              <div class="rec-thumb">
                <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=260&q=80" alt="In-store makeover beauty workshop" loading="lazy">
              </div>
              <div class="rec-content">
                <span class="rec-pill-badge badge-event">EVENT</span>
                <h5 class="rec-title">In-Store Workshop: ${currentEv.title}</h5>
                <p class="rec-sub">${currentEv.tag} &bull; ${currentEv.time}</p>
              </div>
              <span class="rec-chevron">&rsaquo;</span>
            </div>
          `;

          // Reminder card
          recsHtml += `
            <div class="rec-item-card" data-type="reminder">
              <div class="rec-icon-thumb">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="#b5122b" fill="none" stroke-width="1.8"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/><circle cx="12" cy="15" r="1.5" fill="#b5122b"/></svg>
              </div>
              <div class="rec-content">
                <span class="rec-pill-badge badge-reminder">REMINDER</span>
                <h5 class="rec-title">Your Taka Day is Almost Here!</h5>
                <p class="rec-sub">Don't forget &mdash; see you on ${dayNum} ${monthName} at 391 Orchard Road!</p>
              </div>
              <span class="rec-chevron">&rsaquo;</span>
            </div>
          `;

          gridEl.innerHTML = recsHtml;
        }
      }

      function formatEventEndDate(iso) {
        const [y, m, d] = iso.split('-').map(Number);
        const dt = new Date(y, m - 1, d);
        return `${monthNames[dt.getMonth()]} ${dt.getDate()}`;
      }

      // Calendar Navigation
      const prevBtn = $('calPrevMonth');
      const nextBtn = $('calNextMonth');

      if (prevBtn) {
        prevBtn.addEventListener('click', () => {
          currentCalMonth--;
          if (currentCalMonth < 0) {
            currentCalMonth = 11;
            currentCalYear--;
          }
          renderCalendar();
        });
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', () => {
          currentCalMonth++;
          if (currentCalMonth > 11) {
            currentCalMonth = 0;
            currentCalYear++;
          }
          renderCalendar();
        });
      }

      // Save My Visit (.ics) Generation
      const btnSaveVisit = $('btnSaveVisit');
      const reminderSelect = $('reminderSelect');
      const saveStatusMsg = $('saveStatusMsg');

      if (btnSaveVisit) {
        btnSaveVisit.addEventListener('click', () => {
          try {
            const dateIso = formatDateIso(selectedDate);
            const events = getEventsOnDate(dateIso);
            const reminderVal = reminderSelect ? reminderSelect.value : '1day';

            // Visit timing: 10:00 to 14:00 local time
            const y = selectedDate.getFullYear();
            const m = String(selectedDate.getMonth() + 1).padStart(2, '0');
            const d = String(selectedDate.getDate()).padStart(2, '0');

            const startStr = `${y}${m}${d}T100000`;
            const endStr = `${y}${m}${d}T140000`;
            const nowStamp = new Date().toISOString().replace(/[-:]/g, '').split('.')[0] + 'Z';
            const uid = `takashimaya-visit-${Date.now()}@takashimaya.com.sg`;

            let eventNotes = `Takashimaya Department Store Singapore Shopping Visit\\nLocation: Ngee Ann City, 391 Orchard Road, Singapore 238872\\nStore Hours: 10:00 AM - 9:30 PM\\nWebsite: https://www.takashimaya.com.sg\\n`;
            if (events.length > 0) {
              eventNotes += `\\nWhat's On Highlights on your visit:\\n` + events.map(e => `- ${e.title} (${e.tag})`).join('\\n');
            }

            // Trigger for VALARM
            let alarmBlock = '';
            if (reminderVal === '1day') {
              alarmBlock = `BEGIN:VALARM\\nACTION:DISPLAY\\nDESCRIPTION:Takashimaya Singapore Visit Reminder (Tomorrow)\\nTRIGGER:-P1D\\nEND:VALARM\\n`;
            } else if (reminderVal === '2hours') {
              alarmBlock = `BEGIN:VALARM\\nACTION:DISPLAY\\nDESCRIPTION:Takashimaya Singapore Visit in 2 Hours\\nTRIGGER:-PT2H\\nEND:VALARM\\n`;
            } else if (reminderVal === 'morning') {
              alarmBlock = `BEGIN:VALARM\\nACTION:DISPLAY\\nDESCRIPTION:Takashimaya Singapore Visit Today\\nTRIGGER:-PT1H\\nEND:VALARM\\n`;
            }

            const icsContent = [
              'BEGIN:VCALENDAR',
              'VERSION:2.0',
              'PRODID:-//Takashimaya Singapore//Plan Your Visit//EN',
              'CALSCALE:GREGORIAN',
              'METHOD:PUBLISH',
              'BEGIN:VEVENT',
              `UID:${uid}`,
              `DTSTAMP:${nowStamp}`,
              `DTSTART:${startStr}`,
              `DTEND:${endStr}`,
              'SUMMARY:Visit to Takashimaya Singapore (Orchard Road)',
              'LOCATION:Takashimaya Department Store, 391 Orchard Road, Singapore 238872',
              `DESCRIPTION:${eventNotes}`,
              'URL:https://www.takashimaya.com.sg',
              alarmBlock ? alarmBlock.trim() : '',
              'END:VEVENT',
              'END:VCALENDAR'
            ].filter(Boolean).join('\r\n');

            const blob = new Blob([icsContent], { type: 'text/calendar;charset=utf-8' });
            const link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.setAttribute('download', `takashimaya-visit-${dateIso}.ics`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

            if (saveStatusMsg) {
              saveStatusMsg.innerHTML = `<span style="color:#1b7340;font-weight:600;">✓ Calendar invite downloaded!</span> Double-click the saved file to add it directly to Apple Calendar, Outlook, or Google Calendar.`;
            }
            toast(`Visit for ${monthNames[selectedDate.getMonth()]} ${selectedDate.getDate()} saved to calendar!`);
          } catch (err) {
            console.error('Save visit error:', err);
            toast('Calendar file could not be generated. Please try again.');
          }
        });
      }

      // Initial Calendar Render
      renderCalendar();
      updateSelectedDateDetails();
    })();
    </script>



    <script>
    (function () {
      'use strict';
      const floorPlans = {
        B2: { label: 'Basement 2', image: 'assets/floor-B2.png' },
        B1: { label: 'Basement 1', image: 'assets/floor-B1.png' },
        L1: { label: 'Level L1', image: 'assets/floor-L1.png' },
        L2: { label: 'Level L2', image: 'assets/floor-L2.png' },
        L3: { label: 'Level L3', image: 'assets/floor-L3.png' },
        L4: { label: 'Level L4', image: 'assets/floor-L4.png' }
      };
      // Replace this sample array with confirmed events and verified percentage coordinates.
      // x/y are percentages relative to the relevant floor-plan image.
      const popUps = [
        { id: 'sample-1', title: 'Example pop-up listing', subtitle: 'Replace with confirmed event', floor: 'L3', x: 37, y: 43, dates: 'Add event dates', image: 'assets/floor-L3.png' },
        { id: 'sample-2', title: 'Example seasonal experience', subtitle: 'Replace with confirmed event', floor: 'B2', x: 63, y: 57, dates: 'Add event dates', image: 'assets/floor-B2.png' }
      ];
      const floorImage = document.getElementById('popUpFloorImage');
      const markers = document.getElementById('popUpMarkers');
      const list = document.getElementById('popUpEventList');
      const floorLabel = document.getElementById('popUpFloorLabel');
      const count = document.getElementById('popUpCount');
      const mapFoot = document.getElementById('popUpMapFoot');
      if (!floorImage || !markers || !list) return;
      let activeFloor = 'L3';
      let selectedId = 'sample-1';
      const safeText = value => String(value == null ? '' : value);
      function selectEvent(id) {
        const item = popUps.find(event => event.id === id);
        if (!item) return;
        selectedId = id;
        if (item.floor !== activeFloor) renderFloor(item.floor);
        renderMarkers();
        renderList();
        mapFoot.textContent = item.title + ' · ' + floorPlans[item.floor].label + ' · ' + item.dates + '. Pin positions are illustrative until verified.';
      }
      function renderFloor(floor) {
        if (!floorPlans[floor]) return;
        activeFloor = floor;
        floorImage.src = floorPlans[floor].image;
        floorImage.alt = floorPlans[floor].label + ' floor plan showing pop-up locations';
        floorLabel.textContent = floorPlans[floor].label;
        document.querySelectorAll('[data-pop-floor]').forEach(button => button.setAttribute('aria-pressed', button.dataset.popFloor === floor ? 'true' : 'false'));
        renderMarkers();
        renderList();
      }
      function renderMarkers() {
        markers.replaceChildren();
        popUps.filter(item => item.floor === activeFloor).forEach((item, index) => {
          const pin = document.createElement('button');
          pin.type = 'button'; pin.className = 'pop-up-pin'; pin.textContent = String(index + 1);
          pin.style.left = item.x + '%'; pin.style.top = item.y + '%';
          pin.setAttribute('aria-label', item.title); pin.setAttribute('aria-pressed', item.id === selectedId ? 'true' : 'false');
          pin.addEventListener('click', () => selectEvent(item.id));
          markers.appendChild(pin);
        });
      }
      function renderList() {
        const visible = popUps.filter(item => item.floor === activeFloor);
        count.textContent = 'Example content';
        list.replaceChildren();
        if (!visible.length) {
          const empty = document.createElement('p'); empty.style.cssText = 'font-size:13px;line-height:1.6;color:#766961;margin:0';
          empty.textContent = 'No pop-up entries have been added for this floor yet. Select another floor or add a verified event in the content list.';
          list.appendChild(empty); return;
        }
        visible.forEach(item => {
          const button = document.createElement('button'); button.type = 'button'; button.className = 'pop-up-event-card';
          button.setAttribute('aria-pressed', item.id === selectedId ? 'true' : 'false');
          const img = document.createElement('span'); img.className = 'pop-up-event-thumb'; img.setAttribute('aria-hidden', 'true'); img.textContent = 'POP-UP';
          const copy = document.createElement('span'); copy.className = 'pop-up-event-copy';
          const title = document.createElement('strong'); title.textContent = item.title;
          const subtitle = document.createElement('span'); subtitle.textContent = item.subtitle;
          const date = document.createElement('span'); date.textContent = item.dates;
          const floor = document.createElement('span'); floor.className = 'pop-up-event-floor'; floor.textContent = floorPlans[item.floor].label;
          copy.append(title, subtitle, date, floor); button.append(img, copy); button.addEventListener('click', () => selectEvent(item.id)); list.appendChild(button);
        });
      }
      document.querySelectorAll('[data-pop-floor]').forEach(button => button.addEventListener('click', () => renderFloor(button.dataset.popFloor)));
      renderFloor(activeFloor);
      const initial = popUps.find(item => item.id === selectedId);
      if (initial) selectEvent(initial.id);
    })();
    </script>

<?php include 'footer.php'; ?>
