<?php
/* @var $this UserManageController */
/* @var $model UserManage */

$this->breadcrumbs=array(
    '账户列表'=>array('index')
);

$this->menu=array(
    array('label'=>'List Info', 'url'=>array('index')),
    array('label'=>'Create Info', 'url'=>array('create')),
    array('label'=>'Update Info', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Info', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Info', 'url'=>array('admin')),
);

$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>$this->breadcrumbs,
));
?>

<h1>查看 <?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'address',
		'user',
		'password',
	),
)); ?>
