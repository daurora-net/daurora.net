jQuery(function ($) {
  // Navi
  var $menu = $(".header_menu");
  var $slideNav = $(".header_links");
  var $body = $("body");
  $menu.on("click", function () {
    if ($menu.hasClass("is-active") == false) {
      $slideNav.addClass("is-active");
      $menu.addClass("is-active");
    } else {
      $slideNav.find(".header_nav").hide();
      $slideNav.removeClass("is-active");
      $menu.removeClass("is-active");
      setTimeout(function () {
        $slideNav.find(".header_nav").show();
      }, 1000);
    }
  });

  //ナビゲーションのリンクがクリックされたら非表示
  $(".gnav a").click(function () {
    $(".header_links").removeClass("is-active");
    $(".header_menu").removeClass("is-active");
  });

  // PageTop
  $(".js-pagetop").on("click", function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      10,
    );
  });

  //flow画像ずらし
  // $(function () {
  //     var i = 0;
  //     for (i; i < 9; i++) {

  //       $(".flow_img").eq(i).css({
  //         "top" : ((i + 1) * 3) + "%",
  //         "left": (i * 7) + "%"
  //       })
  //     }

  //   })

  // スクロールでコンテンツをジャスト表示
  // $(function() {
  //     $.scrollify({
  //       section : ".scrollify_box",
  //     });
  //   });

  // コンテンツ高さをブラウザに合わせる
  //   $(window).on('resize',function(){
  //     winH = $(window).height();
  //     $('.scrollify_box').outerHeight(winH);
  // });

  // 動きのきっかけの起点となるアニメーションの名前を定義
  function fadeAnime() {
    // ふわっ
    $(".fadeUpTrigger").each(function () {
      //fadeUpTriggerというクラス名が
      var elemPos = $(this).offset().top + 100; //要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass("fadeUp"); // 画面内に入ったらfadeUpというクラス名を追記
      } else {
        $(this).removeClass("fadeUp"); // 画面外に出たらfadeUpというクラス名を外す
      }
    });
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    fadeAnime(); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面をスクロールをしたら動かしたい場合の記述

  // 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on("load", function () {
    fadeAnime(); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

  function delayScrollAnime() {
    var time = 0.2; //遅延時間を増やす秒数の値
    var value = time;
    $(".delayScroll").each(function () {
      var parent = this; //親要素を取得
      var elemPos = $(this).offset().top; //要素の位置まで来たら
      var scroll = $(window).scrollTop(); //スクロール値を取得
      var windowHeight = $(window).height(); //画面の高さを取得
      var childs = $(this).children(); //子要素を取得

      if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) {
        //指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
        $(childs).each(function () {
          if (!$(this).hasClass("fadeUp")) {
            //アニメーションのクラス名が指定されているかどうかをチェック

            $(parent).addClass("play"); //親要素にクラス名playを追加
            $(this).css("animation-delay", value + "s"); //アニメーション遅延のCSS animation-delayを追加し
            $(this).addClass("fadeUp"); //アニメーションのクラス名を追加
            value = value + time; //delay時間を増加させる

            //全ての処理を終わったらplayを外す
            var index = $(childs).index(this);
            if (childs.length - 1 == index) {
              $(parent).removeClass("play");
            }
          }
        });
      } else {
        $(childs).removeClass("fadeUp"); //アニメーションのクラス名を削除
        value = time; //delay初期値の数値に戻す
      }
    });
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    delayScrollAnime(); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面をスクロールをしたら動かしたい場合の記述

  // 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on("load", function () {
    delayScrollAnime(); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

  // ローディングアニメ
  //テキストのカウントアップ+バーの設定
  var bar = new ProgressBar.Line(splash_text, {
    //id名を指定
    easing: "easeInOut", //アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
    duration: 2000, //時間指定(1000＝1秒)
    strokeWidth: 0.2, //進捗ゲージの太さ
    color: "#555", //進捗ゲージのカラー
    trailWidth: 0.2, //ゲージベースの線の太さ
    trailColor: "#bbb", //ゲージベースの線のカラー
    text: {
      //テキストの形状を直接指定
      style: {
        //天地中央に配置
        position: "absolute",
        left: "50%",
        top: "50%",
        padding: "0",
        margin: "-30px 0 0 0", //バーより上に配置
        transform: "translate(-50%,-50%)",
        "font-size": "2rem",
        color: "#fff",
      },
      autoStyleContainer: false, //自動付与のスタイルを切る
    },
    step: function (state, bar) {
      bar.setText(Math.round(bar.value() * 100) + " %"); //テキストの数値
    },
  });
  //アニメーションスタート
  bar.animate(1.0, function () {
    //バーを描画する割合を指定します 1.0 なら100%まで描画します
    $("#splash_text").fadeOut(10); //フェイドアウトでローディングテキストを削除
    $(".loader_cover-up").addClass("coveranime"); //カバーが上に上がるクラス追加
    $(".loader_cover-down").addClass("coveranime"); //カバーが下に下がるクラス追加
    $("#splash").fadeOut(); //#splashエリアをフェードアウト
  });

  $(".sidebar").parents().css("overflow", "visible");
  $(".blog_container").parents().css("overflow", "visible");
});

// サイド目次固定
// $(window).on('load', function () {
//     $(function ($) {
//       // 追従させたい要素のクラス名を宣言
//       var side_contents = $('.side_contents');
//       offset = side_contents.offset();
//       $(window).scroll(function () {
//         if ($(window).scrollTop() > offset.top) {
//           // 追従させたい要素の位置までスクロールしたらクラス付与
//           side_contents.addClass('side_contents_fixed');
//         } else {
//           // それ以外はクラスを外す
//           side_contents.removeClass('side_contents_fixed');
//         }
//       });
//     });
//   });
