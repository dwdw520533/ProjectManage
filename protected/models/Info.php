<?php

/**
 * This is the model class for table "pm_info".
 *
 * The followings are the available columns in table 'pm_info':
 * @property integer $id
 * @property integer $port
 * @property string $type
 * @property string $host
 * @property string $owner
 * @property string $web_address
 * @property string $deployment_address
 * @property string $description
 * @property integer $delete_flag
 */
class Info extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pm_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('port, type, host, deployment_address', 'required','message'=>Yii::t('luben','{attribute} 不能为空白.')),
			array('port, delete_flag', 'numerical', 'integerOnly'=>true),
			array('type, host', 'length', 'max'=>50),
			array('owner', 'length', 'max'=>20),
			array('web_address', 'length', 'max'=>350),
			array('deployment_address', 'length', 'max'=>450),
			array('description', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, port, type, host, owner, web_address, deployment_address, description, delete_flag', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'port' => '端口号',
			'type' => '类型',
			'host' => '服务器地址',
			'owner' => '管理者',
			'web_address' => '对外访问地址',
			'deployment_address' => '环境部署目录',
			'description' => '服务描述',
			'delete_flag' => 'Delete Flag',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('port',$this->port);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('host',$this->host,true);
		$criteria->compare('owner',$this->owner,true);
		$criteria->compare('web_address',$this->web_address,true);
		$criteria->compare('deployment_address',$this->deployment_address,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('delete_flag',$this->delete_flag);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Info the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
