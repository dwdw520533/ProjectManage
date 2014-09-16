<?php
/* @var $this InfoController */
/* @var $model Info */

$this->breadcrumbs=array(
    '条目列表'=>array('index')
);

$this->menu=array(
	array('label'=>'List Info', 'url'=>array('index')),
	array('label'=>'Create Info', 'url'=>array('create')),
	array('label'=>'View Info', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Info', 'url'=>array('admin')),
);
$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>$this->breadcrumbs,
));
?>

<h1>修改</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>