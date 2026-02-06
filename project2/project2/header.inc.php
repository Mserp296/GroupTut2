<header class="header">  
  <div class="header__wrapper">
    <h1 class="header__heading">Art Store</h1>
    <nav class="navigation">
      <ul class="navigation__list">

      <?php foreach ($links as $item): ?>

        <li class="navigation__list-item">

          <a href="<?= htmlspecialchars($item['url']) ?>">
            
            <?= htmlspecialchars($item['label']) ?>

          </a>
        </li>
      <?php endforeach; ?>

      </ul>
    </nav>  
  </div>
</header>
