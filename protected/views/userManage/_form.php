<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'info-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'htmlOptions'=>array('class'=>'well'),
        'type'=>'horizontal',
    )); ?>
    <?php echo $form->errorSummary($model); ?>
    <?php
    if ($model->isNewRecord == false)
        echo $form->textFieldRow($model,'id', array('class'=>'span1','disabled'=>true));
    ?>
    <?php echo $form->textFieldRow($model,'type', array('class'=>'span4')); ?>
    <?php echo $form->textFieldRow($model,'address',array('class'=>'span4')); ?>
    <?php echo $form->textFieldRow($model,'user',array('class'=>'span4')); ?>
    <?php echo $form->textFieldRow($model,'password',array('class'=>'span4')); ?>

    <div class="form-actions">
        <?php
        $label = $model->isNewRecord ? '新建' : '修改';
        $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','type'=>'primary', 'label'=>"{$label}")); ?>
    </div>
    <?php $this->endWidget(); ?>

</div><!-- form -->