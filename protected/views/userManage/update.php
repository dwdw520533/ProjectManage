<?php
/* @var $this UserManageController */
/* @var $model UserManage */

$this->breadcrumbs=array(
    '账户列表'=>array('index')
);

$this->menu=array(
	array('label'=>'List UserManage', 'url'=>array('index')),
	array('label'=>'Create UserManage', 'url'=>array('create')),
	array('label'=>'View UserManage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserManage', 'url'=>array('admin')),
);

$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>$this->breadcrumbs,
));
?>

    <h1>修改</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>