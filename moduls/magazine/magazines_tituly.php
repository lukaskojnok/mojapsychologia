<section class="magazine-page">
  <div class="magazine-head">
    <div>
      <span class="magazine-kicker">Archív magazínu</span>
      <h1>Magazíny Moja psychológia</h1>
      <p>Vyberte si konkrétne číslo magazínu a pozrite si články z daného vydania.</p>
    </div>

    <a href="/magazin/predplatne" class="magazine-head_btn">Predplatiť magazín</a>
  </div>

  <div class="magazine-grid">
    <?php
$magazines = [
  [
    'slug' => '01-2025',
    'title' => 'Moja psychológia',
    'issue' => '01/2025',
    'year' => 'Január 2025',
    'img' => 'https://www.ciarka.sk/data/magazines/moja-psychologia/moja-psychologia-c-1-2025/moja_psychologia_2501.jpg'
  ],
  [
    'slug' => '06-2024',
    'title' => 'Moja psychológia',
    'issue' => '06/2024',
    'year' => 'Jún 2024',
    'img' => 'https://www.ciarka.sk/data/magazines/moja-psychologia/moja-psychologia-c-6-2024/moja_psychologia_2406.jpg'
  ],
  [
    'slug' => '05-2024',
    'title' => 'Moja psychológia',
    'issue' => '05/2024',
    'year' => 'Máj 2024',
    'img' => 'https://www.ciarka.sk/data/magazines/moja-psychologia/moja-psychologia-c-5-2024/moja_psychologia_2405.jpg'
  ],
  [
    'slug' => '04-2024',
    'title' => 'Moja psychológia',
    'issue' => '04/2024',
    'year' => 'Apríl 2024',
    'img' => 'https://www.ciarka.sk/data/magazines/moja-psychologia/moja-psychologia-c-4-2024/moja_psyachologia_2404.jpg'
  ],
  [
    'slug' => '03-2024',
    'title' => 'Moja psychológia',
    'issue' => '03/2024',
    'year' => 'Marec 2024',
    'img' => 'https://www.ciarka.sk/data/magazines/moja-psychologia/moja-psychologia-c-3-2024/moja_psychologia_2403.jpg'
  ],
  [
    'slug' => '02-2024',
    'title' => 'Moja psychológia',
    'issue' => '02/2024',
    'year' => 'Február 2024',
    'img' => 'https://www.ciarka.sk/data/magazines/moja-psychologia/moja-psychologia-c-2-2024/moja_psychologia_2402.jpg'
  ],
  [
    'slug' => '01-2024',
    'title' => 'Moja psychológia',
    'issue' => '01/2024',
    'year' => 'Január 2024',
    'img' => 'https://www.ciarka.sk/data/magazines/moja-psychologia/moja-psychologia-c-1-2024/moja_psychologia_2401.jpg'
  ],
  [
    'slug' => '06-2023',
    'title' => 'Moja psychológia',
    'issue' => '06/2023',
    'year' => 'Jún 2023',
    'img' => 'https://www.ciarka.sk/data/magazines/moja-psychologia/moja-psychologia-c-6-2023/moja_psychologia_2306.jpg'
  ],
  [
    'slug' => '05-2023',
    'title' => 'Moja psychológia',
    'issue' => '05/2023',
    'year' => 'Máj 2023',
    'img' => 'https://www.ciarka.sk/data/magazines/moja-psychologia/moja-psychologia-2023-5/mp_2305.jpg'
  ],
  [
    'slug' => '04-2023',
    'title' => 'Moja psychológia',
    'issue' => '04/2023',
    'year' => 'Apríl 2023',
    'img' => 'https://www.ciarka.sk/data/magazines/moja-psychologia/moja-psychologia-2023-4/moja_psychologia_2304.jpg'
  ],
  [
    'slug' => '03-2023',
    'title' => 'Moja psychológia',
    'issue' => '03/2023',
    'year' => 'Marec 2023',
    'img' => 'https://www.ciarka.sk/data/magazines/moja-psychologia/moja-psychologia-2023-3/moja_psychologia_2303-1.jpg'
  ]
];

      foreach ($magazines as $magazine) {
    ?>
      <a href="/magazin/<?= htmlspecialchars($magazine['slug']) ?>" class="magazine-card">
        <div class="magazine-card_img">
          <img src="<?= htmlspecialchars($magazine['img']) ?>" alt="<?= htmlspecialchars($magazine['title'] . ' ' . $magazine['issue']) ?>">
        </div>

        <div class="magazine-card_text">
          <h2><?= htmlspecialchars($magazine['issue']) ?></h2>
          <p><?= htmlspecialchars($magazine['year']) ?></p>
        </div>
      </a>
    <?php } ?>
  </div>
</section>