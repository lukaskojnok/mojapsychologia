<section class="articles-page">
  <div class="articles-head">
    <div>
      <h1 class="articles-title"><?= htmlspecialchars($CATEGORY_NAME ?? 'Články') ?></h1>
    </div>
  </div>


  <div class="articles-toolbar">
    <div class="articles-tabs">
      <a href="#" class="articles-tab is-active">Podkategória 1</a>
      <a href="#" class="articles-tab">Podkategória 2</a>
      <a href="#" class="articles-tab">Rozhovory</a>
      <a href="#" class="articles-tab">Poradňa a podobne</a>
    </div>
  </div>

  <div class="articles-grid">
    <?php
$articles = [
  ['slug' => 'mami-kam-sa-ponahlame', 'img' => 'https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?auto=format&fit=crop&w=900&q=80', 'cat' => 'Rodičia na slovíčko', 'title' => 'Mami, kam sa ponáhľame?', 'text' => 'Výber článku z magazínu Moja psychológia.', 'date' => '01. apríl 2025'],
  ['slug' => 'prenatalna-komunikacia', 'img' => 'https://images.unsplash.com/photo-1492725764893-90b379c2b6e7?auto=format&fit=crop&w=900&q=80', 'cat' => 'Mix téma', 'title' => 'Prenatálna komunikácia', 'text' => 'Výber článku z magazínu Moja psychológia.', 'date' => '31. marec 2025'],
  ['slug' => 'ako-si-zvysit-sexualne-sebavedomie', 'img' => 'https://images.unsplash.com/photo-1516585427167-9f4af9627e6c?auto=format&fit=crop&w=900&q=80', 'cat' => 'Vzťahy', 'title' => 'Ako si zvýšiť sexuálne sebavedomie', 'text' => 'Výber článku z magazínu Moja psychológia.', 'date' => '30. marec 2025'],
  ['slug' => 'psiky-ucia-deti-aj-dospelych', 'img' => 'https://images.unsplash.com/photo-1517849845537-4d257902454a?auto=format&fit=crop&w=900&q=80', 'cat' => 'Fenomén', 'title' => 'Psíky učia deti aj dospelých', 'text' => 'Výber článku z magazínu Moja psychológia.', 'date' => '29. marec 2025'],
  ['slug' => 'su-dnesni-muzi-este-muzmi', 'img' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=900&q=80', 'cat' => 'Interview', 'title' => 'Sú dnešní muži ešte mužmi?', 'text' => 'Muži dneška majú potenciál byť ozajstnými mužmi.', 'date' => '28. marec 2025'],
  ['slug' => 'umenie-chvalit-a-lichotit', 'img' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=900&q=80', 'cat' => 'Vzťahy', 'title' => 'Umenie chváliť a lichotiť', 'text' => 'Ako zareagujete, keď vás niekto pochváli?', 'date' => '21. marec 2025'],
  ['slug' => 'pamat-muzov-a-pamat-zien', 'img' => 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&fit=crop&w=900&q=80', 'cat' => 'Fenomén', 'title' => 'Pamäť mužov a pamäť žien', 'text' => 'Výber článku z magazínu Moja psychológia.', 'date' => '20. marec 2025'],
  ['slug' => 'vyliecte-sa-upratovanim', 'img' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=900&q=80', 'cat' => 'Energia tela', 'title' => 'Vyliečte sa upratovaním', 'text' => 'Výber článku z magazínu Moja psychológia.', 'date' => '19. marec 2025'],
  ['slug' => 'jedna-zena-nestaci', 'img' => 'https://images.unsplash.com/photo-1516822003754-cca485356ecb?auto=format&fit=crop&w=900&q=80', 'cat' => 'Tabu', 'title' => 'Jedna žena nestačí?', 'text' => 'Výber článku z magazínu Moja psychológia.', 'date' => '18. marec 2025'],
  ['slug' => 'ako-nas-ovplyvnuju-moderne-technologie', 'img' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=900&q=80', 'cat' => 'Mix téma', 'title' => 'Ako nás ovplyvňujú moderné technológie?', 'text' => 'Uľahčujú nám moderné technológie život alebo sú našou cestou do pekla?', 'date' => '16. marec 2025'],
  ['slug' => 'tpl-vztah-k-sebe', 'img' => 'https://images.unsplash.com/photo-1499209974431-9dddcece7f88?auto=format&fit=crop&w=900&q=80', 'cat' => 'Vzťahy', 'title' => 'Vzťah k sebe je základ všetkých ostatných vzťahov', 'text' => 'Ukážkový článok pre nový web Moja psychológia.', 'date' => '15. marec 2025'],
  ['slug' => 'tpl-ked-telo-povie-dost', 'img' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=900&q=80', 'cat' => 'Energia tela', 'title' => 'Keď telo povie dosť skôr ako myseľ', 'text' => 'Ukážkový článok pre nový web Moja psychológia.', 'date' => '14. marec 2025']
];

      foreach ($articles as $article) {
    ?>
      <a href="/<?= htmlspecialchars($page ?? 'rozhovory') ?>/<?= htmlspecialchars($article['slug']) ?>" class="article-card">
        <div class="article-card_img">
          <img src="<?= htmlspecialchars($article['img']) ?>" alt="">
        </div>
        <span class="article-card_cat"><?= htmlspecialchars($article['cat']) ?></span>
        <h2><?= htmlspecialchars($article['title']) ?></h2>
        <p><?= htmlspecialchars($article['text']) ?></p>
        <div class="article-card_meta">
          <span><?= htmlspecialchars($article['date']) ?></span>
          <span>•</span>
          <span>4 min čítania</span>
        </div>
      </a>
    <?php } ?>
  </div>

  <div class="articles-more">
    <a href="#">Načítať ďalšie</a>
  </div>
</section>