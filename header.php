<?php
/**
 * Header template for Takashimaya Singapore website
 * Extracted from index page
 */
$page_title = $page_title ?? 'Takashimaya Singapore | Discover Something New';
$page_desc  = $page_desc  ?? 'Discover brands, dining, events and experiences at Takashimaya Singapore.';
$current_page = $current_page ?? basename($_SERVER['PHP_SELF'], '.php');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_desc, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="stylesheet" href="assets/style.css">
  <?php if (!empty($extra_head)) echo $extra_head; ?>
</head>
<body>
  <div class="browser-frame site">
    <div class="browser-dots" aria-hidden="true"><span></span><span></span><span></span></div>
    <header class="site-header">
      <a class="brandmark" href="index.php" aria-label="Takashimaya Singapore homepage">
        <span class="brand-seal" aria-hidden="true">髙</span>
        <span class="brand-name">Takashimaya<small>SINGAPORE</small></span>
      </a>
      <button class="menu-toggle" id="menuToggle" aria-label="Open navigation" aria-expanded="false">☰</button>
      <nav class="main-nav" id="mainNav" aria-label="Main navigation">
        <a href="<?php echo ($current_page === 'index' || $current_page === 'final_HP') ? '#about-us' : 'index.php#about-us'; ?>">About Us</a>
        <a href="brands.php" class="<?php echo ($current_page === 'brands') ? 'active' : ''; ?>">Brands</a>
        <a href="dining.php" class="<?php echo ($current_page === 'dining') ? 'active' : ''; ?>">Dining</a>
        <a href="events.php" class="<?php echo ($current_page === 'events') ? 'active' : ''; ?>">Events and Promotions</a>
        <a href="Takashimaya-Plan-Your-Visit-FINAL-v15.php" class="<?php echo ($current_page === 'pyv' || $current_page === 'Takashimaya-Plan-Your-Visit-FINAL-v15') ? 'active' : ''; ?>">Plan Your Visit</a>
        <a href="Takashimaya-Loyalty-Interactive-FINAL.php" class="<?php echo ($current_page === 'loyalty' || $current_page === 'Takashimaya-Loyalty-Interactive-FINAL') ? 'active' : ''; ?>">Loyalty</a>
        <a href="https://www.takashimaya.com.sg" target="_blank" rel="noopener noreferrer" class="nav-shop-link" title="Shop online at Takashimaya Singapore">Shop with Us ↗</a>
      </nav>
      <div class="header-actions">
        <button class="icon-link" id="searchToggle" type="button" aria-label="Search" title="Search"><svg viewBox="0 0 24 24"><circle cx="10.8" cy="10.8" r="6.5"/><path d="m16 16 4.2 4.2"/></svg></button>
        <button class="icon-link" id="favoriteBtn" type="button" aria-label="Favourites" title="Favourites"><svg viewBox="0 0 24 24" id="heartSvg"><path d="M20.5 8.8c0 4.2-8.5 10-8.5 10s-8.5-5.8-8.5-10A4.5 4.5 0 0 1 12 6.4a4.5 4.5 0 0 1 8.5 2.4Z"/></svg></button>
        <button class="icon-link" id="accountBtn" type="button" aria-label="Account" title="Account"><svg viewBox="0 0 24 24"><circle cx="12" cy="7.5" r="3.5"/><path d="M4.5 20c.4-4.2 3.1-6.3 7.5-6.3s7.1 2.1 7.5 6.3Z"/></svg></button>
      </div>
    </header>
    <div class="search-panel" id="searchPanel" aria-label="Site Search">
      <input id="siteSearch" type="search" placeholder="Search brands, floors, facilities…" aria-label="Search the site">
      <div class="search-results" id="searchResults"></div>
    </div>
