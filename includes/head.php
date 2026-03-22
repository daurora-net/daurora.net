<?php
$isHome = isset($isHome) ? (bool) $isHome : false;
$pageTitle = isset($pageTitle) ? (string) $pageTitle : "daurora.net";
$pageDescription = isset($pageDescription) ? (string) $pageDescription : "ホームページ制作のDAURORA（ドーロラ）です。";
$includeRecaptchaEnterprise = isset($includeRecaptchaEnterprise) ? (bool) $includeRecaptchaEnterprise : false;
$assetPrefix = $isHome ? "./assets" : "/assets";
?>
<head>
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <?php if ($includeRecaptchaEnterprise): ?>
  <script src="https://www.google.com/recaptcha/enterprise.js?render=6LflcckpAAAAAAvQgTq6Olg1XtZBY4dkDRsKMavp"></script>
  <?php endif; ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, "UTF-8"); ?>">
  <link href="<?= $assetPrefix; ?>/css/styles.css" rel="stylesheet">

  <!-- Adobe Fonts -->
  <script>
    (function(d) {
      var config = {
          kitId: "wtb1feg",
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = "https://use.typekit.net/" + config.kitId + ".js";
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || (a && a != "complete" && a != "loaded")) return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, "UTF-8"); ?></title>
  <meta name="robots" content="max-image-preview:large">
  <link rel="dns-prefetch" href="//rawgit.com">
  <link rel="dns-prefetch" href="//use.fontawesome.com">
  <link rel="stylesheet" id="font-awesome-css" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css?ver=6.5" type="text/css" media="all">
  <script type="text/javascript" src="<?= $assetPrefix; ?>/js/jquery/jquery.min.js" id="jquery-core-js"></script>
  <script type="text/javascript" src="<?= $assetPrefix; ?>/js/jquery/jquery-migrate.min.js" id="jquery-migrate-js"></script>
  <script type="text/javascript" src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js?ver=6.5" id="kimmo-brunfeldt-js"></script>
  <script type="text/javascript" src="<?= $assetPrefix; ?>/js/main.js" id="daurora-main-js"></script>
</head>
