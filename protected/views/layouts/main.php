<?php /* @var $this Controller */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?><?php echo CSS_URL ?>main.css" />
    <?php Yii::app()->bootstrap->register();?>
</head>

<body data-target=".navbar">

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'Project Manage Tool',
    'brandUrl'=>'#',
    'collapse'=>false // requires bootstrap-responsive.css
)); ?>


<div class="container" >

    <?php
    $infoUrl = Yii::app()->createUrl('info/index');
    $userManagerUrl = Yii::app()->createUrl('userManage/index');

    $activeInfo = false;
    $activeUser = false;
    if(Yii::app()->controller->id == 'info')
    {
        $activeInfo = true;
    }else{
        $activeUser = true;
    }

    $this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
        'stacked'=>false, // whether this is a stacked menu
        'items'=>array(
            array('label'=>'服务器信息', 'url'=>"{$infoUrl}", 'active'=>$activeInfo),
            array('label'=>'账户信息', 'url'=>"{$userManagerUrl}", 'active'=>$activeUser)
        ),
        'htmlOptions'=>array('style'=>'margin-top:30px;margin-bottom:-15px')
    )); ?>

    <?php echo $content; ?>
</div><!-- page -->

</body>
</html>
