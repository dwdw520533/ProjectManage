<?php

/**
 * This is the model class for table "pm_user_manage".
 *
 * The followings are the available columns in table 'pm_user_manage':
 * @property integer $id
 * @property string $type
 * @property string $address
 * @property string $user
 * @property string $password
 */
class UserManage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pm_user_manage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type', 'length', 'max'=>50),
			array('address', 'length', 'max'=>200),
			array('user, password', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, address, user, password', 'safe', 'on'=>'search'),
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
			'type' => '类型',
			'address' => '服务器地址',
			'user' => '登陆账户',
			'password' => '密码',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('user',$this->user,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserManage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
