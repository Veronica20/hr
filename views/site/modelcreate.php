<?php
/**
 * Created by PhpStorm.
 * User: WebTech
 * Date: 3/15/2017
 * Time: 13:58
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$model_company = new \app\models\Company();
$model_user = new \app\models\User();

?>

<div class="create-account-body">
	<div class="tab-switch">
		<a title="user" class="active">USER</a>
		<a title="company">COMPANY</a>
	</div>
	<div id="company" class="tab">
		<div class="user_form">
			<?php
			$form_user = ActiveForm::begin([
							'action' => ['site/userreg'],
							'id' => 'form-input-example',
							'options' => [
											'class' => 'form-horizontal col-lg-11',
											'enctype' => 'multipart/form-data'
							],
			]);?>
			<div class="row">
				<div class="col-md-6">
					<?= $form_user->field($model_user, 'email')->textInput()->label('User Email '); ?>
				</div>
				<div class="col-md-6">
					<?= $form_user->field($model_user, 'password')->textInput()->label('User Password '); ?>
				</div>
				<div class="col-md-6">
					<?= $form_user->field($model_user, 'first_name')->textInput()->label('First Name '); ?>
				</div>
				<div class="col-md-6">
					<?= $form_user->field($model_user, 'last_name')->textInput()->label('Last Name'); ?>
				</div>
			</div>
			<?= Html::submitButton('SIGN UP', ['class' => 'sing_form']) ?>
			<?php ActiveForm::end(); ?>
		</div>

		<div class="company_form">
			<?php
			$form = ActiveForm::begin([
							'action' => ['site/companyreg'],
							'id' => 'form-input-example',
							'options' => [
											'class' => 'form-horizontal col-lg-11',
											'enctype' => 'multipart/form-data'
							],
			]);?>
			<div class="row">
				<div class="col-md-6">
					<?= $form->field($model_company, 'name')->textInput()->label('Company Name '); ?>
				</div>
				<div class="col-md-6">
					<?= $form->field($model_company, 'tin')->textInput()->label('Company TIN '); ?>
				</div>
				<div class="col-md-6">
					<?= $form->field($model_company, 'email')->textInput()->label('Company Email '); ?>
				</div>
				<div class="col-md-6">
					<?= $form->field($model_company, 'phone')->textInput()->label('Company Phone '); ?>
				</div>
				<div class="col-md-6">
					<?= $form->field($model_company, 'password')->textInput()->label('Password'); ?>
				</div>
				<div class="col-md-6">
					<?= $form->field($model_company, 'person_title')->textInput()->label('Contact Person / Title'); ?>
				</div>
			</div>
			<?= Html::submitButton('SIGN UP', ['class' => 'sing_form']) ?>
			<?php ActiveForm::end(); ?>
		</div>

	</div>
</div>

