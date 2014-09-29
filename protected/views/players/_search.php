<?php
/* @var $this PlayersController */
/* @var $model Players */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PLAYER_ID'); ?>
		<?php echo $form->textField($model,'PLAYER_ID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PLAYER_FIRSTNAME'); ?>
		<?php echo $form->textField($model,'PLAYER_FIRSTNAME',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PLAYER_LASTNAME'); ?>
		<?php echo $form->textField($model,'PLAYER_LASTNAME',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PLAYER_DOB'); ?>
		<?php echo $form->textField($model,'PLAYER_DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PLAYER_GENDER'); ?>
		<?php echo $form->textField($model,'PLAYER_GENDER',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PLAYER_STATE'); ?>
		<?php echo $form->textField($model,'PLAYER_STATE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PLAYER_COUNTRY'); ?>
		<?php echo $form->textField($model,'PLAYER_COUNTRY',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PLAYER_IMAGE'); ?>
		<?php echo $form->textField($model,'PLAYER_IMAGE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PLAYER_STATUS'); ?>
		<?php echo $form->textField($model,'PLAYER_STATUS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UPDATEDON'); ?>
		<?php echo $form->textField($model,'UPDATEDON'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->