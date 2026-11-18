<?php snippet('layout', slots: true) ?>
  <h1><?= $site->title()->esc() ?></h1>
  <?= $page->text()->kt() ?>
<?php endsnippet() ?>
