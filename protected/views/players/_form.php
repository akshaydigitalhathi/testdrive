<?php
/* @var $this PlayersController */
/* @var $model Players */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'players-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableClientValidation' => true,
	'clientOptions'=> array('validateOnSubmit'=>true),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PLAYER_FIRSTNAME'); ?>
		<?php echo $form->textField($model,'PLAYER_FIRSTNAME',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'PLAYER_FIRSTNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PLAYER_LASTNAME'); ?>
		<?php echo $form->textField($model,'PLAYER_LASTNAME',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'PLAYER_LASTNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PLAYER_DOB'); ?>
		<?php echo $form->textField($model,'PLAYER_DOB'); ?>
		<?php echo $form->error($model,'PLAYER_DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PLAYER_GENDER'); ?>
		<?php echo $form->textField($model,'PLAYER_GENDER',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'PLAYER_GENDER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PLAYER_STATE'); ?>
		<?php echo $form->textField($model,'PLAYER_STATE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PLAYER_STATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PLAYER_COUNTRY'); ?>
		<?php echo $form->textField($model,'PLAYER_COUNTRY',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PLAYER_COUNTRY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PLAYER_IMAGE'); ?>
		<?php echo $form->textField($model,'PLAYER_IMAGE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PLAYER_IMAGE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PLAYER_STATUS'); ?>
		<?php echo $form->textField($model,'PLAYER_STATUS',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'PLAYER_STATUS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UPDATEDON'); ?>
		<?php echo $form->textField($model,'UPDATEDON'); ?>
		<?php echo $form->error($model,'UPDATEDON'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
