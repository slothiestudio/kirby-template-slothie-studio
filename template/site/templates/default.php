<?php snippet('layout', slots: true) ?>
  <h1><?= $page->title()->esc() ?></h1>
  <?= $page->text()->kt() ?>
<?php endsnippet() ?>
