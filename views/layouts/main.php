<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Carousel;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

$genFooterNav = function ($item, $index) {
  $content = Html::a($item['label'], $item['url']);
  return Html::tag('li', $content);
};

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <header id="navbar-main">
      <?php
        NavBar::begin([
            'brandLabel' => 'Karateverein <br> Samurai Maximiliansau',
            'options' => [
              'class' => 'navbar-default navbar-static-top header-top',
              'tag' => 'div',
            ],
           'containerOptions' => [
              'tag' => 'nav',
            ],
          ]);

          echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => require(__DIR__ . '/menu.php'),
          ]);
        NavBar::end();
      ?>
      <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        'options' => ['class' => 'container breadcrumb'],
      ]) ?>
    </header>
    <?php
      $index = false;
      if(Yii::$app->controller->id === 'site' && (Yii::$app->controller->action->id === 'index' || (Yii::$app->controller->action->id === 'page' && (! array_key_exists(Yii::$app->controller->action->viewParam, $_GET) || $_GET[Yii::$app->controller->action->viewParam] === 'index'))))
      {
        echo Carousel::widget([
          'items' => [
            // the item contains only the image
            [
              'content' => '<img src="http://localhost/cms2/web/img/1900x1080.gif"/>',
              'caption' => '<h2>Capiton 1</h2><p>This is the caption text</p>',
              'options' => ['style' => 'height: 300px;'],
            ],
            // equivalent to the above
            [
              'content' => '<img src="http://localhost/cms2/web/img/1900x1080.gif"/>',
              'caption' => '<h2>Capiton 2</h2><p>This is the caption text</p>',
              'options' => ['style' => 'height: 300px;'],
            ],
            // the item contains both the image and the caption
            [
              'content' => '<img src="http://localhost/cms2/web/img/1900x1080.gif"/>',
              'caption' => '<h2>Capiton 3</h2><p>This is the caption text</p>',
              'options' => ['style' => 'height: 300px;'],
            ],
          ],
          'options' => ['class' => 'slide']
        ]);
        $index = true;
      }
    ?>
        
    <div class="container">
      <div class="main-content">
        <?= $content ?>
      </div>
    </div>

    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>Über uns</h3>
              Hier steht dann n bissel bla über uns. Ich weiß noch net was aber irendwas
              sollten wir hier hin schreiben. Damit jetzt mal n bissel Text da steht hab
              ich einfach mal was hin geschrieben. Hoffe es is lang genug
              <h3>Newsletter</h3>
              Anmeldung zum Newsletter
            </div>
            <div class="col-md-4">
              <h3>Neuigkeiten</h3>
            </div>
            <div class="col-md-4">
              <h3>Neue Bilder</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="footer-nav">
            <?= Html::ul(require(__DIR__ . '/footernav.php'), ['item'=>$genFooterNav]) ?>
          </div>
          <div class="clearfix"></div>
          <div class="footer-text text-center">
            Copyright &copy; Karate Samurai Maximiliansau <?= date('Y') ?>. All Rights Reserved. <br>
            Created by Maurice Busch. <?= Yii::powered() ?>.
          </div>
        </div>
      </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
