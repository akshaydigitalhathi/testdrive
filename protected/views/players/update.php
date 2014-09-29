<?php
/* @var $this PlayersController */
/* @var $model Players */

$this->breadcrumbs=array(
	'Players'=>array('index'),
	$model->PLAYER_ID=>array('view','id'=>$model->PLAYER_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Players', 'url'=>array('index')),
	array('label'=>'Create Players', 'url'=>array('create')),
	array('label'=>'View Players', 'url'=>array('view', 'id'=>$model->PLAYER_ID)),
	array('label'=>'Manage Players', 'url'=>array('admin')),
);
?>

<h1>Update Players <?php echo $model->PLAYER_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>