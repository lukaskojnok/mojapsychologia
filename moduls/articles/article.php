<?php
$currentArticle = [
  'slug' => $page2 ?? 'ako-zacat-odznova',
  'img' => 'https://images.unsplash.com/photo-1499209974431-9dddcece7f88?auto=format&fit=crop&w=1400&q=80',
  'cat' => $CATEGORY_NAME ?? 'Rozhovory',
  'title' => 'Ako začať odznova, keď sa všetko známe rozpadne',
  'lead' => 'Niekedy nepríde veľké rozhodnutie naraz. Prichádza potichu, po malých uvedomeniach, že takto už ďalej žiť nechceme.',
  'date' => '16. jún 2026'
];

$relatedArticles = [
  ['slug' => 'minulost-a-vztahy', 'img' => 'https://images.unsplash.com/photo-1516585427167-9f4af9627e6c?auto=format&fit=crop&w=900&q=80', 'cat' => 'Vzťahy', 'title' => 'Prečo nás minulosť ovplyvňuje viac, než si myslíme'],
  ['slug' => 'hranice-bez-vycitiek', 'img' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=900&q=80', 'cat' => 'Poradňa', 'title' => 'Ako si nastaviť hranice bez výčitiek'],
  ['slug' => 'male-ritualy', 'img' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=900&q=80', 'cat' => 'Psychológia', 'title' => 'Malé rituály, ktoré vedia upokojiť deň']
];
?>

<article class="article-page">
  <header class="article-hero">
    <nav class="article-breadcrumbs">
      <a href="/">Domov</a>
      <span>/</span>
      <a href="/<?= htmlspecialchars($page ?? 'rozhovory') ?>"><?= htmlspecialchars($CATEGORY_NAME ?? 'Články') ?></a>
    </nav>

    <span class="article-category"><?= htmlspecialchars($currentArticle['cat']) ?></span>
    <h1 class="article-title"><?= htmlspecialchars($currentArticle['title']) ?></h1>
    <p class="article-lead"><?= htmlspecialchars($currentArticle['lead']) ?></p>

    <div class="article-meta">
      <span>Autor: Redakcia Moja psychológia</span>
      <span>•</span>
      <time datetime="2026-06-16"><?= htmlspecialchars($currentArticle['date']) ?></time>
      <span>•</span>
      <span>5 min čítania</span>
    </div>

    <figure class="article-image">
      <img src="<?= htmlspecialchars($currentArticle['img']) ?>" alt="<?= htmlspecialchars($currentArticle['title']) ?>">
      <figcaption>Ilustračná fotografia k článku.</figcaption>
    </figure>
  </header>

  <div class="article-body">
    <p>Začať odznova neznamená zabudnúť na všetko, čo bolo. Často to znamená konečne si priznať, čo už dlhšie cítime, ale nechceli sme tomu dať meno.</p>

    <p>V psychológii sa o zmene často hovorí ako o procese. Nie je to jeden okamih, ale séria malých rozhodnutí, v ktorých si človek začne viac všímať vlastné hranice, potreby a únavu.</p>

    <blockquote>Nie každá zmena je útek. Niekedy je to návrat k sebe.</blockquote>

    <h2>Keď starý spôsob života prestane fungovať</h2>

    <p>Veľa ľudí čaká, kým budú mať úplnú istotu. Lenže istota pri veľkých zmenách často nepríde. Prichádza skôr vnútorný nepokoj, únava alebo pocit, že už hráme rolu, ktorá nám nesedí.</p>

    <p>Dôležité je nehodnotiť sa príliš tvrdo. Aj malé kroky majú význam. Niekedy stačí začať tým, že si dovolíme pomenovať realitu bez prikrášľovania.</p>

    <h2>Čo môže pomôcť</h2>

    <ul>
      <li>napísať si, čo už nechcem ďalej niesť,</li>
      <li>oddeliť vlastné potreby od očakávaní okolia,</li>
      <li>porozprávať sa s človekom, pri ktorom nemusím nič predstierať,</li>
      <li>robiť rozhodnutia postupne, nie pod tlakom.</li>
    </ul>

    <p>Nový začiatok nemusí vyzerať dramaticky. Niekedy je to len pokojnejší rytmus, úprimnejší rozhovor alebo prvé nie po rokoch automatického áno.</p>

    <div class="article-share">
      <span>Zdieľať:</span>
      <a href="#">Facebook</a>
      <a href="#">Instagram</a>
      <a href="#">E-mail</a>
    </div>

    <div class="article-author">
      <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=300&q=80" alt="Redakcia Moja psychológia">
      <div>
        <small>Autor článku</small>
        <h3>Redakcia Moja psychológia</h3>
        <p>Prinášame rozhovory, príbehy a praktické texty o vzťahoch, psychike, rodine a každodennom živote.</p>
      </div>
    </div>
  </div>

  <section class="related-articles">
    <h2>Súvisiace články</h2>

    <div class="related-grid">
      <?php foreach ($relatedArticles as $relatedArticle) { ?>
        <a href="/<?= htmlspecialchars($page ?? 'rozhovory') ?>/<?= htmlspecialchars($relatedArticle['slug']) ?>" class="related-card">
          <img src="<?= htmlspecialchars($relatedArticle['img']) ?>" alt="<?= htmlspecialchars($relatedArticle['title']) ?>">
          <small><?= htmlspecialchars($relatedArticle['cat']) ?></small>
          <h3><?= htmlspecialchars($relatedArticle['title']) ?></h3>
        </a>
      <?php } ?>
    </div>
  </section>
</article>