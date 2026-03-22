
<!DOCTYPE html>
<html lang="ja">

<?php
$isHome = false;
$pageTitle = "PRICE | daurora.net";
include dirname(__DIR__) . "/includes/head.php";
?>



<body class="home page-template-default page page-id-20">
  <?php $isHome = false; include dirname(__DIR__) . "/includes/header.php"; ?>
<main class="main page_main">
  <section class="sec sec_price">
    <div class="container">
      <header class="border_title" title="price">
        <span></span>
        <span></span>
        <span></span>
      </header>

      <p class="has-text-align-center page_txt">制作にかかる料金の目安です。<br>無料お見積もりは、お気軽にお問い合わせください。</p>

      <div class="wp-block-columns are-vertically-aligned-center detail_price_list pc">
        <div class="wp-block-column is-vertically-aligned-center">
          <figure class="wp-block-image size-large pc"><img src="/assets/img/price/lite_pc.svg" alt="" /></figure>
        </div>


        <div class="wp-block-column is-vertically-aligned-center">
          <figure class="wp-block-image size-large pc"><img src="/assets/img/price/basic_pc.svg" alt="" /></figure>
        </div>


        <div class="wp-block-column is-vertically-aligned-center">
          <figure class="wp-block-image size-large pc"><img src="/assets/img/price/special_pc.svg" alt="" /></figure>
        </div>
      </div>

      <div class="wp-block-columns detail_price_list">
        <div class="wp-block-column">
          <figure class="wp-block-image size-large sp"><img src="/assets/img/price/lite_sp.svg" alt="" /></figure>
        </div>

        <div class="wp-block-column">
          <figure class="wp-block-image size-large sp"><img src="/assets/img/price/basic_sp.svg" alt="" /></figure>

        </div>

        <div class="wp-block-column">
          <figure class="wp-block-image size-large sp"><img src="/assets/img/price/special_sp.svg" alt="" /></figure>
        </div>
      </div>

      <div class="wp-block-group detail_price">
        <div class="wp-block-columns">
          <div class="wp-block-column">
            <div id="detail_price"></div>
            <header class="detail_price_border_title" id="detail_price" title="くわしい料金">
              <span></span>
              <span></span>
              <span></span>
            </header>
          </div>
        </div>

        <h2 class="has-text-align-center detail_price_ttl">基本料金</h2>
        <figure class="wp-block-table detail_price_table">
          <table>
            <tbody>
              <tr>
                <td>企画、構成</td>
                <td class="has-text-align-center" data-align="center">制作費の20%</td>
                <td>コンテンツの企画提案、画面設計、構成の作成</td>
              </tr>
              <tr>
                <td>ディレクション</td>
                <td class="has-text-align-center" data-align="center">ディレクション</td>
                <td>制作進行、スケジュール管理、打ち合わせ、確認作業</td>
              </tr>
            </tbody>
          </table>
        </figure>

        <h2 class="has-text-align-center detail_price_ttl">デザイン</h2>
        <figure class="wp-block-table detail_price_table">
          <table>
            <tbody>
              <tr>
                <td>トップページ</td>
                <td class="has-text-align-center" data-align="center">¥10,000 〜 ¥30,000</td>
                <td>コンテンツの企画提案、画面設計、構成の作成</td>
              </tr>
              <tr>
                <td>下層ページ</td>
                <td class="has-text-align-center" data-align="center">¥5,000 〜 ¥20,000</td>
                <td>新規、リニューアル、ボリュームに応じて料金は変動</td>
              </tr>
            </tbody>
          </table>
        </figure>

        <p>※料金は、スマホ対応含みます。（スマホ対応不要の場合は値下げいたしますので、ご相談ください。） </p>
        <p>※LPのみ、デザインのみ、スマホサイトデザインのみ、等のご依頼にも対応いたします。 </p>
        <p>※ライティングは対応しておりませんので、必要な画像やテキストはご用意ください。</p>

        <h2 class="has-text-align-center detail_price_ttl">実装</h2>
        <figure class="wp-block-table detail_price_table">
          <table>
            <tbody>
              <tr>
                <td>トップページ</td>
                <td class="has-text-align-center" data-align="center">¥10,000 〜 ¥30,000</td>
                <td>デザインを元に、テーマに合った動きなども実装</td>
              </tr>
              <tr>
                <td>下層ページ</td>
                <td class="has-text-align-center" data-align="center">¥5,000 〜 ¥20,000</td>
                <td>必要コンテンツ、ボリュームに応じて料金は変動</td>
              </tr>
            </tbody>
          </table>
        </figure>
        <p>※料金は、スマホ対応含みます。（スマホ対応不要の場合は値下げいたしますので、ご相談ください。）</p>

        <h2 class="has-text-align-center detail_price_ttl">更新</h2>
        <figure class="wp-block-table detail_price_table">
          <table>
            <tbody>
              <tr>
                <td>WordPress設定</td>
                <td class="has-text-align-center" data-align="center">〜 ¥20,000</td>
                <td>インストール、基本設定、ニーズに応じた設定、更新作業</td>
              </tr>
              <tr>
                <td>WordPressカスタマイズ</td>
                <td class="has-text-align-center" data-align="center">お見積もり</td>
                <td>必要なカスタマイズ内容によって料金は変動</td>
              </tr>
            </tbody>
          </table>
        </figure>
        <p>※必要に応じて、お客様に合わせたWordPressの手引きを、無料にて提供いたします。</p>

        <h2 class="has-text-align-center detail_price_ttl">オプション</h2>
        <figure class="wp-block-table detail_price_table">
          <table>
            <tbody>
              <tr>
                <td>ショッピングシステム設置</td>
                <td class="has-text-align-center" data-align="center">お見積もり</td>
                <td>ご利用のBASEなどのショップシステム、または新たに開設してサイトを作成</td>
              </tr>
              <tr>
                <td>ロゴ作成</td>
                <td class="has-text-align-center" data-align="center">¥10,000 〜 ¥30,000</td>
                <td>テーマに沿ったロゴを新たに作成、またはリニューアル</td>
              </tr>
            </tbody>
          </table>
        </figure>
        <p>※画像加工、お問い合わせフォーム、スマホ対応、地図や動画埋め込み、などの作業は、各ページ作成料金に含まれます。</p>
      </div>
</main>

<?php $isHome = false; include dirname(__DIR__) . "/includes/footer.php"; ?>
</body>

</html>
