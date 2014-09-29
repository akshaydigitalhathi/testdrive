<?php
/* @var $this PlayersController */
/* @var $model Players */

$this->breadcrumbs=array(
	'Players'=>array('index'),
	$model->PLAYER_ID,
);

$this->menu=array(
	array('label'=>'List Players', 'url'=>array('index')),
	array('label'=>'Create Players', 'url'=>array('create')),
	array('label'=>'Update Players', 'url'=>array('update', 'id'=>$model->PLAYER_ID)),
	array('label'=>'Delete Players', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PLAYER_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Players', 'url'=>array('admin')),
);
?>

<h1>View Players #<?php echo $model->PLAYER_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PLAYER_ID',
		'PLAYER_FIRSTNAME',
		'PLAYER_LASTNAME',
		'PLAYER_DOB',
		'PLAYER_GENDER',
		'PLAYER_STATE',
		'PLAYER_COUNTRY',
		'PLAYER_IMAGE',
		'PLAYER_STATUS',
		'UPDATEDON',
	),
)); ?>
