<?php
/* @var $this PlayersController */
/* @var $data Players */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLAYER_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PLAYER_ID), array('view', 'id'=>$data->PLAYER_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLAYER_FIRSTNAME')); ?>:</b>
	<?php echo CHtml::encode($data->PLAYER_FIRSTNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLAYER_LASTNAME')); ?>:</b>
	<?php echo CHtml::encode($data->PLAYER_LASTNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLAYER_DOB')); ?>:</b>
	<?php echo CHtml::encode($data->PLAYER_DOB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLAYER_GENDER')); ?>:</b>
	<?php echo CHtml::encode($data->PLAYER_GENDER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLAYER_STATE')); ?>:</b>
	<?php echo CHtml::encode($data->PLAYER_STATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLAYER_COUNTRY')); ?>:</b>
	<?php echo CHtml::encode($data->PLAYER_COUNTRY); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PLAYER_IMAGE')); ?>:</b>
	<?php echo CHtml::encode($data->PLAYER_IMAGE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLAYER_STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->PLAYER_STATUS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UPDATEDON')); ?>:</b>
	<?php echo CHtml::encode($data->UPDATEDON); ?>
	<br />

	*/ ?>

</div>