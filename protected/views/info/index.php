<style type="text/css" >
    #infoTable td{
        vertical-align: middle;
        text-align: center
    }
</style>


<div class="row">

    <div style="float:right; margin-top: 5px; margin-bottom: -10px;margin-right: 5px;">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'label'=>'创建新条目',
            'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'size'=>'small', // null, 'large', 'small' or 'mini'
            'url'=>$this->createUrl('info/create')
        )); ?>
    </div>
</div>

<section id = "infoTable">
    <?php
    $this->widget('bootstrap.widgets.TbGridView', array(
        'type'=>'striped bordered condensed',
        'dataProvider'=>$dataProvider,
        'template'=>"{items}",
        'columns'=>array(
            array('name'=>'id', 'header'=>'#'),
            array('name'=>'type', 'header'=>'类型', 'htmlOptions'=>array('style'=>'width: 60px')),
            array('name'=>'host', 'header'=>'服务器地址', 'htmlOptions'=>array('style'=>'width: 85px')),
            array('name'=>'port', 'header'=>'端口号', 'htmlOptions'=>array('style'=>'width: 50px')),
            array('name'=>'owner', 'header'=>'管理者','htmlOptions'=>array('style'=>'width: 70px')),
            array('name'=>'deployment_address', 'header'=>'环境部署目录', 'htmlOptions'=>array('style'=>'width: 250px')),
            array('name'=>'web_address', 'header'=>'对外访问地址', 'htmlOptions'=>array('style'=>'width: 220px')),
            array('name'=>'description', 'header'=>'服务描述', 'htmlOptions'=>array('style'=>'width: 280px')),
            array(
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'htmlOptions'=>array('style'=>'width: 80px'),
            ),
        ),
    )); ?>
</section>
