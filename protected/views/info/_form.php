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
		<?php echo $form->textFieldRow($model,'port', array('class'=>'span4')); ?>
		<?php echo $form->textFieldRow($model,'type',array('class'=>'span4','maxlength'=>50)); ?>
		<?php echo $form->textFieldRow($model,'host',array('class'=>'span4','maxlength'=>50)); ?>
		<?php echo $form->textFieldRow($model,'owner',array('class'=>'span4','maxlength'=>20)); ?>
		<?php echo $form->textFieldRow($model,'web_address',array('class'=>'span4','maxlength'=>350)); ?>
		<?php echo $form->textFieldRow($model,'deployment_address',array('class'=>'span4','maxlength'=>450)); ?>
		<?php echo $form->textAreaRow($model,'description',array('class'=>'span4', 'rows'=>5, 'maxlength'=>500)); ?>

    <div class="form-actions">
        <?php
            $label = $model->isNewRecord ? '新建' : '修改';
            $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','type'=>'primary', 'label'=>"{$label}")); ?>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->