<?php snippet('layout', slots: true) ?>
  <h1><?= t('notFound.title') ?></h1>
  <?= $page->text()->or(t('notFound.text'))->kt() ?>
  <p><a href="<?= $site->url() ?>"><?= t('notFound.back') ?></a></p>
<?php endsnippet() ?>
