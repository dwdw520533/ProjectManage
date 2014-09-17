<style type="text/css" >
    #infoTable td{
        vertical-align: middle;
        text-align: center
    }
</style>


<div class="row">

    <div style="float:right; margin-top: 5px; margin-bottom: -10px;margin-right: 5px;">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'label'=>'创建账户条目',
            'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'size'=>'small', // null, 'large', 'small' or 'mini'
            'url'=>$this->createUrl('userManage/create')
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
            array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 40px')),
            array('name'=>'type', 'header'=>'类型', 'htmlOptions'=>array('style'=>'width: 100px')),
            array('name'=>'address', 'header'=>'服务器地址', 'htmlOptions'=>array('style'=>'width: 300px')),
            array('name'=>'user', 'header'=>'登陆账户', 'htmlOptions'=>array('style'=>'width: 120px')),
            array('name'=>'password', 'header'=>'密码','htmlOptions'=>array('style'=>'width: 120px')),
            array(
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'htmlOptions'=>array('style'=>'width: 80px'),
            ),
        ),
    )); ?>
</section>
