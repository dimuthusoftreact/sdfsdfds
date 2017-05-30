<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Blog page. You may modify the following file to customize its content:
    </p>

    <h1><?=$name;?></h1>

    <code><?= __FILE__ ?></code>

</div>
