<?php
/**
 * Created by PhpStorm.
 * User: WebTech
 * Date: 3/20/2017
 * Time: 1:42 PM
 */
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>
<?php
$form = ActiveForm::begin([
    'action' => ['site/profile'],
    'id' => 'form-input-example',
    'options' => [
        'class' => 'form-horizontal col-lg-11 hr-form',
        'enctype' => 'multipart/form-data'
    ],
]);

$items =[
    'key1' => 'val1',
    'key2' => 'val2',
    'key3' => 'val2',
    'key4' => 'val2',
    'key5' => 'val2',
    'key6' => 'val2',
]



?>
<div>
    <div id="profile_step">
        <div id="circles">
            <div class="big circle ">1</div>
            <div class="connector"></div>
            <div class="small circle active">2</div>
        </div>
        <div>
            <div class="title">resume creation</div>
            <div class="note">Focus on creation of your resume to get matched vacancies with maximum accuracy</div>
        </div>
    </div>
    <div id="block_general_info">
        <div class="block-title block-title-nobgr grid grid400" style="margin-top:0;">General information</div>
        <div class="grid grid440 marginleft120">
            <div>
                <div class="note paddingleft40 attach-ico grid grid180 margintop15 paddingright20" id="attached_file">You can attach your resume if you already have one.</div>
                <fieldset class="grid grid200">
                    <div class="margintop10" id="fileaddbtn" attr-type="vacancy">Upload Resume</div>
                    <input id="upload_file" name="upload-file" class="fileselect" accept=".txt, .doc, docx, .xls, .xlsx, .ppt, pptx, .pdf" type="file">
                    <input id="temp_file" name="temp-resume" value="" type="hidden">
                </fieldset>
            </div>
        </div>
        <div class="clear"></div>

        <div class="note paddingbottom10">Fields denoted with * are required</div>
        <div class="input-group-border padding28">
            <fieldset class="grid grid230">
                <section class="filefield">
                    <div id="profile_photo" class="grid photo profile-photo">
                    </div>
                    <div id="photoaddbtn">Add Photo</div>
                    <input id="upload_picture" class="fileselect" name="upload-picture" accept=".jpg, .jpeg, .png, .gif" type="file">
                    <input id="temp_picture" name="temp-picture" value="" type="hidden">
                </section>
            </fieldset>
            <fieldset class="grid grid290 marginright30">
                <section>
                    <label for="fullname" class="input label105">First name and last name *
                        <input id="fullname" name="full-name" value="Veronica Voskanyan" attr-validate="notEmpty, isLatin" type="text">
                        <b class="tooltip tooltip-bottom-left for-input">Only latin characters</b>
                    </label>
                    <?=$form->field($user, 'email')->textInput()?>
                    <label for="email" class="input label105">E-mail *
                        <input id="email" name="email" value="veronica.voskanyan@gmail.com" attr-validate="notEmpty, isEmailAddress, notAlreadyUsed|user:81415" type="text">
                        <b class="tooltip tooltip-bottom-left for-input">Your sign-in e-mail</b>
                    </label>
                    <label for="location" class="input label105">Location
                        <input id="location" name="location" value="" type="text">
                        <b class="tooltip tooltip-bottom-left for-input">City, Country</b>
                    </label>
                </section>
            </fieldset>
            <fieldset class="grid grid290">
                <section>
                    <label for="linkedin" class="input label105">Linked in profile link
                        <input id="linkedin" name="linkedin" value="" attr-validate="isLinkedIn" type="text">
                    </label>
                    <label for="birth_date" class="input label105">Birth date
                        <i class="icon-append icon-calendar"></i>
                        <input id="birth_date" name="birth-date" value="" attr-validate="isDate" gldp-id="gldp-9032467994" class="gldp-el" type="text">
                        <div class="note">Click on the year to change it</div>
                    </label>
                </section>
            </fieldset>
            <div class="clear"></div>
        </div>
    </div>
    <div class="block_education">
        <div>Education</div>
        <div>
            <?= Html::dropDownList('name', 'key3', $items) ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
