<?php

/**
 * @link https://github.com/mrbirne/cms2
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * 
 * @author Maurice Busch <busch.maurice@gmx.net>
 */

/* @var $this yii\web\View */
$this->title = 'Vorstand';
$this->params['breadcrumbs'] = [
  [
    'label' => 'Verein',
    'url' => ['site/view', 'view' => 'about']
  ],
  $this->title
];

?>

<h1>Vorstand</h1>
<p>Unser Vorstand und ein bisschen Text.</p>
<div class="row">
  <div class="col-md-4 col-sm-4">
    <div class="thumbnail">
      <img class="img-circle img-rounded" src="<?=Yii::getAlias('@web') ?>/img/trainer/gert.png" alt="...">
      <div class="caption text-center">
        <h3>Vorname Nachname <br> <small>Vorstand</small></h3>
        <p>Das sind die Informationen zu dem Vorstandsmitglied. Hier steht einfach ein bisschen Text.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-4">
    <div class="thumbnail">
      <img class="img-circle img-rounded" src="<?=Yii::getAlias('@web') ?>/img/trainer/gert.png" alt="...">
      <div class="caption text-center">
        <h3>Vorname Nachname <br> <small>Zweitervorstand</small></h3>
        <p>Das sind die Informationen zu dem Vorstandsmitglied. Hier steht einfach ein bisschen Text.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-4">
    <div class="thumbnail">
      <img class="img-circle img-rounded" src="<?=Yii::getAlias('@web') ?>/img/trainer/gert.png" alt="...">
      <div class="caption text-center">
        <h3>Vorname Nachname <br> <small>Schriftführer</small></h3>
        <p>Das sind die Informationen zu dem Vorstandsmitglied. Hier steht einfach ein bisschen Text.</p>
      </div>
    </div>
  </div>
</div>
