<section class="magazine-page">
  <div class="magazine-head">
    <div>
      <span class="magazine-kicker">Archív magazínu</span>
      <h1>Magazíny Moja psychológia</h1>
      <p>Vyberte si konkrétne číslo magazínu a pozrite si články z daného vydania.</p>
    </div>

    <a href="/magazine/predplatne" class="magazine-head_btn">Predplatiť magazín</a>
  </div>

  <div class="magazine-grid">
    <?php
      $magazines = [
        ['slug' => '09-2026', 'title' => 'Moja psychológia', 'issue' => '09/2026', 'year' => 'Ročník 2026', 'img' => 'https://images.unsplash.com/photo-1495020689067-958852a7765e?auto=format&fit=crop&w=700&q=80'],
        ['slug' => '08-2026', 'title' => 'Moja psychológia', 'issue' => '08/2026', 'year' => 'Ročník 2026', 'img' => 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=700&q=80'],
        ['slug' => '07-2026', 'title' => 'Moja psychológia', 'issue' => '07/2026', 'year' => 'Ročník 2026', 'img' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=700&q=80'],
        ['slug' => '06-2026', 'title' => 'Moja psychológia', 'issue' => '06/2026', 'year' => 'Ročník 2026', 'img' => 'https://images.unsplash.com/photo-1519682337058-a94d519337bc?auto=format&fit=crop&w=700&q=80'],
        ['slug' => '05-2026', 'title' => 'Moja psychológia', 'issue' => '05/2026', 'year' => 'Ročník 2026', 'img' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=700&q=80'],
        ['slug' => '04-2026', 'title' => 'Moja psychológia', 'issue' => '04/2026', 'year' => 'Ročník 2026', 'img' => 'https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=700&q=80'],
        ['slug' => '03-2026', 'title' => 'Moja psychológia', 'issue' => '03/2026', 'year' => 'Ročník 2026', 'img' => 'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?auto=format&fit=crop&w=700&q=80'],
        ['slug' => '02-2026', 'title' => 'Moja psychológia', 'issue' => '02/2026', 'year' => 'Ročník 2026', 'img' => 'https://images.unsplash.com/photo-1511108690759-009324a90311?auto=format&fit=crop&w=700&q=80']
      ];

      foreach ($magazines as $magazine) {
    ?>
      <a href="/magazine/<?= htmlspecialchars($magazine['slug']) ?>" class="magazine-card">
        <div class="magazine-card_img">
          <img src="<?= htmlspecialchars($magazine['img']) ?>" alt="<?= htmlspecialchars($magazine['title'] . ' ' . $magazine['issue']) ?>">
          <span><?= htmlspecialchars($magazine['issue']) ?></span>
        </div>

        <div class="magazine-card_text">
          <small><?= htmlspecialchars($magazine['year']) ?></small>
          <h2><?= htmlspecialchars($magazine['title']) ?></h2>
          <p>Číslo <?= htmlspecialchars($magazine['issue']) ?></p>
        </div>
      </a>
    <?php } ?>
  </div>
</section>