<?php
/* @var $this InfoController */
/* @var $model Info */

$this->breadcrumbs=array(
    '账户列表'=>array('index')
);

$this->menu=array(
    array('label'=>'List Info', 'url'=>array('index')),
    array('label'=>'Manage Info', 'url'=>array('admin')),
);
$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>$this->breadcrumbs,
));
?>

    <h1>创建</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>