<?php
/*
 * TODO Отныне надо добавлять ко всем фразам, относящимся к шаблону, префикс вида template-кодШаблона__ (template-wbtg__header-menu-1, например). Это для того, чтобы из словаря конкретной транзитки было можно обратиться к словарю конкретного шаблона.
 * */
$defaultCommentsTemplate = 'facebook';
?>

<!DOCTYPE html>
<html lang="<?= $geoCode ?>">
<head>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/system/templates/head-default.php'; ?>
  <link rel="shortcut icon" href="<?= $templateWebPath ?>/favicon.png">

  <style>
    <?php include SERVERROOT . $templateWebPath . "/css/style.css"?>
  </style>

  <script>
    function GetToday(offset) {
      // Array of day names

      var dayNames = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

      // Array of month Names
      var monthNames = new Array(
        "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli",

        "Agustus", "September", "Oktober", "November", "Desember");
      var now = new Date();

      now.setDate(now.getDate() + parseInt(offset));

      return dayNames[now.getDay()] + ", " +
        (now.getDate()) + " " +
        monthNames[now.getMonth()] + ", " +
        now.getFullYear();
    }
  </script>
</head>

<body>

<header class="page_header container">

  <div class="header_top">

    <div class="header_top__title"><?= $wording['template-nwt__header_top__title'] ?><span><?= $wording['template-nwt__header_span__title'] ?></span></div>
    <a target="_blank" href="http://lestsbane-sockgles.com/click" class="header_top__button"><?= $wording['template-nwt__header_top__button'] ?></a>

  </div>


  <div class="header_bottom">
    <nav class="left_menu">
      <ul class="menu__list">
        <li class="menu__item"><a target="_blank"
               href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__header-menu-1'] ?></a></li>
        <li class="menu__item"><a target="_blank"
               href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__header-menu-2'] ?></a></li>
        <li class="menu__item"><a target="_blank"
               href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__header-menu-3'] ?></a></li>
      </ul>
    </nav>

    <div class="header_logo">
      <img src="<?= $templateWebPath ?>/img/logo.svg">
    </div>

    <nav class="right_menu">
      <ul class="menu__list">
        <li class="menu__item"><a target="_blank"
               href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__header-menu-4'] ?></a></li>
        <li class="menu__item"><a target="_blank"
               href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__header-menu-5'] ?></a></li>
      </ul>
    </nav>

  </div>

  <div class="menu_mobile">
    <nav class="mobile-menu container">
    <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
    <label for="checkbox" class="mobile-menu__btn">
      <div class="mobile-menu__icon">
    </div>
    </label>
      <div class="page_header__logo page_header__logo--mobile"><img src="<?= $templateWebPath ?>/img/logo_mobile.svg"></div>
    <div class="mobile-menu__container">
    <ul class="mobile-menu__list">
        <li class="mobile-menu__item"><a target="_blank"
               href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__header-menu-1'] ?></a></li>
        <li class="mobile-menu__item"><a target="_blank"
               href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__header-menu-2'] ?></a></li>
        <li class="mobile-menu__item"><a target="_blank"
               href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__header-menu-3'] ?></a></li>
        <li class="mobile-menu__item"><a target="_blank"
               href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__header-menu-4'] ?></a></li>
        <li class="mobile-menu__item"><a target="_blank"
               href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__header-menu-5'] ?></a></li>
    </ul>
    </div>
  </nav>
  </div>
</header>

<main>

  <section class="heading container">

    <div class="heading__img"><img src="<?= $templateWebPath ?>/img/bitmap.jpg"></div>
    <h1 class="heading__title"><?= $wording['text-title'] ?></h1>

  </section>


  <section class="main_info container">
    <div class="main_info__content">
      <div class="tranzitka main_content">
          <?php if (file_exists('template.php')) {
            include "template.php";
          } else {
            include "translate/text__{$textGeoCode}.php";
          }
          ?>
      </div>

      <a href="http://lestsbane-sockgles.com/click" target="_blank" class="big-blue-link"><?= $wording['template-nwt__main_info__button'] ?></a>
    </div>

    <div class="main_info__sidebar">

      <h3 class="sidebar__title"><?= $wording['template-nwt__sidebar__title'] ?></h3>

      <div class="sidebar__block">
        <img src="<?= $templateWebPath ?>/img/sidebar_1.png">
        <img src="img/sidebar_1.png" alt="Sidebar_1">
        <p class="sidebar__text"><?= $wording['template-nwt__sidebar__text-1'] ?></p>
      </div>

      <div class="sidebar__block">
        <img src="<?= $templateWebPath ?>/img/sidebar_2.png">
        <p class="sidebar__text"><?= $wording['template-nwt__sidebar__text-2'] ?></p>
      </div>

      <div class="sidebar__block">
        <img src="<?= $templateWebPath ?>/img/sidebar_3.png">
        <p class="sidebar__text"><?= $wording['template-nwt__sidebar__text-3'] ?></p>
      </div>

    </div>

  </section>

  <section class="bottom_button container">
    <a href="http://lestsbane-sockgles.com/click" target="_blank" class="big-blue-link"><?= $wording['template-nwt__bottom_button'] ?></a>
  </section>

</main>

<footer class="page_footer container">

  <div class="footer_mobile">

    <div class="footer_logo"><a href="#"><img src="<?= $templateWebPath ?>/img/logo_footer.svg"></a></div>

    <ul class="footer_mobile_top">
      <li class="footer__item"><a href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__footer-menu-1'] ?></li>
      <li class="footer__item"><a href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__footer-menu-2'] ?></li>
    </ul>
    <ul class="footer_mobile_bottom">
      <li class="footer__item"><a href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__footer-menu-3'] ?></li>
      <li class="footer__item"><a href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__footer-menu-4'] ?></li>
      <li class="footer__item"><a href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__footer-menu-5'] ?></li>
    </ul>

  </div>

  <div class="footer_top">

    <ul class="footer__list">
      <li class="footer__item footer__item--logo"><img src="<?= $templateWebPath ?>/img/logo_footer_mobile.svg"></li>
      <li class="footer__item"><a href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__footer-menu-1'] ?></li>
      <li class="footer__item"><a href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__footer-menu-2'] ?></li>
      <li class="footer__item"><a href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__footer-menu-3'] ?></li>
      <li class="footer__item"><a href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__footer-menu-4'] ?></li>
      <li class="footer__item"><a href="<?= $siteSectionOffer ?>"><?= $wording['template-nwt__footer-menu-5'] ?></li>
    </ul>

  </div>

  <div class="footer_bottom">
     <p class="footer_info">&#169; <?= $wording['template-nwt__footer_info'] ?></p>
     <p class="footer_info footer_info--year">2019</p>
  </div>
</footer>

</body>
</html>
