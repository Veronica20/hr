<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use  yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
	<div class="menu-prt">
		<div class="menu row">
			<a href="<?= Yii::$app->homeUrl ?>" class="logo col-md-2">
			</a>
			<div class="col-md-10 menu-class">
				<ul class="menu-ul">
					<li><a href="<?= Yii::$app->homeUrl ?>site/about">About</a></li>
					<li><a href="<?= Yii::$app->homeUrl ?>site/faq">FAQ</a></li>
				</ul>
				<ul class="language_menu">
					<li><a>en</a></li>
					<li><a>Հայ</a></li>
				</ul>
				<div class="create">
					<a>create account</a>
					<span>or</span>
					<a>log in </a>
				</div>
				<div class="search-menu">
				<div class="clear_"></div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="image_header_pr">
			<?= Html::img("@web/image/teaser-bg.png", array('class' => 'image_header')) ?>
			<div class="layer">
				<div class="content">
					<div class="slogan">Your dream job is here!</div>
					<div class="buttons">
						<a class="popup green">post job opening</a>
						<a class="orange">view job openings</a>
					</div>
				</div>
			</div>
		</div>
		<div class="info-bar">
				<div class="info-centralize">
					<div id="users_info" class="info-block">
						<div>
							<?= Html::img("@web/image/info-candidates.png") ?>
						</div>
						<div class="info">
							<div class="digit">80,693</div>
							<div class="label">
								<?= Html::img("@web/image/info-icon-cand.png") ?>
								Registered candidates
							</div>
						</div>
					</div>
					<div id="companies_info" class="info-block">
						<div>
							<?= Html::img("@web/image/info-companies.png") ?>
						</div>
						<div class="info">
							<div class="digit">5,957</div>
							<div class="label">
								<?= Html::img("@web/image/info-icon-comp.png") ?>
								Registered candidates
							</div>
						</div>
					</div>
					<div id="jobs_info" class="info-block">
						<div>
							<?= Html::img("@web/image/info-jobs.png") ?>
						</div>
						<div class="info">
							<div class="digit">610</div>
							<div class="label">
								<?= Html::img("@web/image/info-icon-job.png") ?>
								Registered candidates
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	<!-- Trigger/Open The Modal -->
	<button id="myBtn">Open Modal</button>

		<!-- The Modal -->
		<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header create-account-header">
					<span class="close">&times;</span>
					<div class="account-title"> Welcome to HR.am! </div>
					<div class="account-title-sub">
						<span> Already have an account?</span>
						<a>CLICK HERE TO LOG IN</a>
					</div>
				</div>
				<div class="modal-body">
					<?= $this->render('/site/modelcreate'); ?>
				</div>
			</div>
		</div>

    <div class="container ">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
