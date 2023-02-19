<?php

use yii\bootstrap5\LinkPager;
use yii\helpers\Html;

?>

<h1>Countries</h1>

<ul>
  <?php foreach ($countries as $country) : ?>
    <li>
      <?= Html::encode("$country->code ($country->name)") ?>:
      <?= $country->population ?>:
    </li>
  <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>