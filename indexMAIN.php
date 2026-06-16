<?php
function getString(string $key, string $default = ''): string {
  return trim($_GET[$key] ?? $default);
}

$page = getString('page');
$page2 = getString('page2');


$articlePages = [
  'rozhovory' => 'Rozhovory',
  'vztahy' => 'Vzťahy',
  'rodina' => 'Rodina',
  'tabu' => 'Tabu',
  'cestovanie' => 'Cestovanie',
  'poradna' => 'Poradňa',
  'moda' => 'Móda',
  'recepty' => 'Recepty z našej kuchyne',
  'moje-zdravie' => 'Moje zdravie'
];

if (isset($articlePages[$page])) {
  $CATEGORY_NAME = $articlePages[$page];
  $PAGE_MODUL = ($page2 !== '') ? 'article' : 'articles';
}
?>


<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Moja psychológia</title>
  <meta name="description" content="">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">

  <script src="/js/meniny-sk.js"></script>
  <script src="/js/header.js"></script>

  <link rel="stylesheet" href="/css/css.css?<?= time() ?>">
  <link rel="stylesheet" href="/css/articles.css?<?= time() ?>">
  <link rel="stylesheet" href="/css/responsive.css?<?= time() ?>">
</head>
<body>

<header class="site-header">
  <div class="topbar">
    <div class="container topbar_inner">
      <div class="topbar_left">
        <span id="today-date"></span>
        <span id="today-name-day"></span>
      </div>
      <div class="topbar_right">
        <button type="button" class="btn btn-yellow">Predplatné časopisu</button>
        <a href="#">Aktuálne číslo</a>

        <a href="#" class="social" aria-label="Facebook">
          <i class="fa-brands fa-facebook-f"></i>
        </a>

        <a href="#" class="social" aria-label="Instagram">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>
    </div>
  </div>

  <div class="header-main">
    <div class="container header-main_inner">
      <div class="header-logos">
        <a href="/" class="logo logo-psychologia">
          <img src="/img/moja-psychologia.svg" alt="Moja psychológia">
        </a>
      </div>

      <form class="header-search" action="#" method="get">
        <button type="submit" aria-label="Hľadať">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <input type="text" name="q" placeholder="Vyhľadať...">
      </form>
    </div>
  </div>

  <nav class="main-nav">
    <div class="container">
      <ul>
        <li><a href="/rozhovory">Rozhovory</a></li>
        <li><a href="/vztahy">Vzťahy</a></li>
        <li><a href="/rodina">Rodina</a></li>
        <li><a href="/tabu">Tabu</a></li>
        <li><a href="/cestovanie">Cestovanie</a></li>
        <li><a href="/poradna">Poradňa</a></li>
        <li><a href="/moda">Móda</a></li>
        <li><a href="/recepty">Recepty z našej kuchyne</a></li>
        <li><a href="/moje-zdravie" class="nav-health">Moje zdravie</a></li>
      </ul>
    </div>
  </nav>
</header>


<main class="site-main">
  <div class="container content-layout">

    <div class="content-main">
      <?php
      if (empty($page)) {
        include("moduls/title-page.php");
      } else {
        if ($PAGE_MODUL === 'articles') {
          $pageFile = "moduls/articles/articles.php";
        } elseif ($PAGE_MODUL === 'article') {
          $pageFile = "moduls/articles/article.php";
        }
        include($pageFile);
      }
      ?>
    </div>


    <aside class="content-sidebar">
      <?php
      include("moduls/sidebar.php");
      ?>
    </aside>


  </div>
</main>



<div class="container">

  <section class="quick-links">
    <a href="#" class="quick-link">
      <div class="quick-link_icon">
        <img src="/img/icon-testy-kvizy.svg" alt="">
      </div>

      <div class="quick-link_content">
        <h3 class="cat-purple">Testy a kvízy</h3>
        <p>Otestujte sa a spoznajte sa lepšie</p>
      </div>
    </a>

    <a href="#" class="quick-link">
      <div class="quick-link_icon">
        <img src="/img/icon-ankety.svg" alt="">
      </div>

      <div class="quick-link_content">
        <h3 class="cat-blue">Ankety</h3>
        <p>Čo vás trápi a zaujíma? Dajte nám vedieť</p>
      </div>
    </a>

    <a href="#" class="quick-link">
      <div class="quick-link_icon">
        <img src="/img/icon-psycholog-radi.svg" alt="">
      </div>

      <div class="quick-link_content">
        <h3 class="cat-purple">Psychológ radí</h3>
        <p>Odborné odpovede na vaše otázky</p>
      </div>
    </a>

    <a href="#" class="quick-link">
      <div class="quick-link_icon">
        <img src="/img/icon-lekar-radi.svg" alt="">
      </div>

      <div class="quick-link_content">
        <h3 class="cat-red">Lekár radí</h3>
        <p>Praktické rady a návody od odborníkov</p>
      </div>
    </a>

    <a href="#" class="quick-link">
      <div class="quick-link_icon">
        <img src="/img/icon-moje-zdravie.svg" alt="">
      </div>

      <div class="quick-link_content">
        <h3 class="cat-green">Moje zdravie</h3>
        <p>Prevencia, telo, výživa a psychika v súvislosti so zdravím</p>
      </div>
    </a>
  </section>

</div><!-- container -->  




<footer class="site-footer">
  <div class="container">
    <div class="site-footer_top">

      <div class="site-footer_brand">
        <a href="/" class="site-footer_logo">
          <img src="/img/moja-psychologia.svg" alt="Moja psychológia">
        </a>

        <p>
          Magazín o vzťahoch, psychike, rodine, osobnom rozvoji a každodennom živote.
        </p>

        <div class="site-footer_socials">
          <a href="#" aria-label="Facebook">
            <i class="fa-brands fa-facebook-f"></i>
          </a>

          <a href="#" aria-label="Instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>
      </div>

      <div class="site-footer_col">
        <h3>Rubriky</h3>

        <ul>
          <li><a href="/rozhovory">Rozhovory</a></li>
          <li><a href="/vztahy">Vzťahy</a></li>
          <li><a href="/rodina">Rodina</a></li>
          <li><a href="/tabu">Tabu</a></li>
          <li><a href="/cestovanie">Cestovanie</a></li>
        </ul>
      </div>

      <div class="site-footer_col">
        <h3>Ďalšie</h3>

        <ul>
          <li><a href="/poradna">Poradňa</a></li>
          <li><a href="/moda">Móda</a></li>
          <li><a href="/recepty">Recepty z našej kuchyne</a></li>
          <li><a href="/moje-zdravie">Moje zdravie</a></li>
        </ul>
      </div>

      <div class="site-footer_col site-footer_contact">
        <h3>Kontakt</h3>

        <ul>
          <li>
            <i class="fa-regular fa-envelope"></i>
            <a href="mailto:redakcia@mojapsychologia.sk">redakcia@mojapsychologia.sk</a>
          </li>

          <li>
            <i class="fa-solid fa-phone"></i>
            <a href="tel:+421948123456">+421 948 123 456</a>
          </li>

          <li>
            <i class="fa-solid fa-location-dot"></i>
            <span>Slovensko</span>
          </li>
        </ul>
      </div>

    </div>

    <div class="site-footer_bottom">
      <p>© <?= date('Y') ?> Moja psychológia. Všetky práva vyhradené.</p>

      <div>
        <a href="/reklama">Reklama</a>
        <a href="/ochrana-osobnych-udajov">Ochrana osobných údajov</a>
        <a href="/cookies">Cookies</a>
      </div>
    </div>
  </div>
</footer>



</body>
</html>