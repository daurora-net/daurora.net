<?php
$isHome = isset($isHome) ? (bool) $isHome : false;
$homePath = $isHome ? './' : '../';
$homeAnchorPrefix = $isHome ? '' : '../';
$flowPath = $isHome ? 'flow/' : '../flow/';
$pricePath = $isHome ? 'price/' : '../price/';
$privacyPath = $isHome ? 'privacy_policy/' : '../privacy_policy/';
$footerLinks = $isHome
    ? [
        ['href' => $homePath, 'label' => 'HOME'],
        ['href' => $homeAnchorPrefix . '#consept', 'label' => 'CONSEPT'],
        ['href' => $flowPath, 'label' => 'FLOW'],
        ['href' => $pricePath, 'label' => 'PRICE'],
        ['href' => $homeAnchorPrefix . '#contact', 'label' => 'CONTACT'],
        ['href' => $privacyPath, 'label' => 'PRIVACY POLICY'],
    ]
    : [
        ['href' => $homePath, 'label' => 'HOME'],
        ['href' => $homeAnchorPrefix . '#consept', 'label' => 'CONSEPT'],
        ['href' => $flowPath, 'label' => 'FLOW'],
        ['href' => $pricePath, 'label' => 'PRICE'],
        ['href' => $homeAnchorPrefix . '#contact', 'label' => 'CONTACT'],
        ['href' => $privacyPath, 'label' => 'PRIVACY POLICY'],
    ];
?>
<div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

<footer class="footer" id="footer">
  <div class="container">
    <div class="footer_inner">
      <nav>
        <ul>
          <?php foreach ($footerLinks as $link): ?>
          <li>
            <a href="<?= htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8'); ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
    <div class="footer_copyright">
      <small>&copy; daurora.net <?= date('Y'); ?></small>
    </div>
  </div>
</footer>
