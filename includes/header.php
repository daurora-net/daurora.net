<?php
$isHome = isset($isHome) ? (bool) $isHome : false;
$homePath = $isHome ? './' : '../';
$homeAnchorPrefix = $isHome ? '' : '../';
?>
<header class="header" id="header">
  <!-- ナビゲーションメニュー -->
  <div class="header_links">
    <nav class="gnav">
      <ul>
        <li>
          <a href="<?= $homePath; ?>">
            <span><i class="fas fa-home"></i></span>
            <span>HOME</span>
          </a>
        </li>
        <li>
          <a href="<?= $homeAnchorPrefix; ?>#consept">
            <span><i class="fas fa-pencil-alt"></i></span>
            <span>CONSEPT</span>
          </a>
        </li>
        <li>
          <a href="<?= $homeAnchorPrefix; ?>#flow">
            <span><i class="fas fa-desktop"></i></span>
            <span>FLOW</span>
          </a>
        </li>
        <li>
          <a href="<?= $homeAnchorPrefix; ?>#price">
            <span><i class="fas fa-calculator"></i></span>
            <span>PRICE</span>
          </a>
        </li>
        <li>
          <a href="<?= $homeAnchorPrefix; ?>#contact">
            <span><i class="far fa-paper-plane"></i></span>
            <span>CONTACT</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <!-- ハンバーガー -->
  <div class="header_menu">
    <div id="nav_toggle">
      <div>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
</header>
