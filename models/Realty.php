<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "realty".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_user
 * @property integer $id_type
 * @property integer $id_status
 * @property string $date
 * @property double $price
 * @property string $address
 * @property double $long
 * @property double $lat
 *
 * @property Phone[] $phones
 * @property Status $idStatus
 * @property Type $idType
 * @property User $idUser
 */
class Realty extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'realty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_user', 'id_type', 'id_status', 'date', 'price', 'address', 'long', 'lat'], 'required'],
            [['id_user', 'id_type', 'id_status'], 'integer'],
            [['date'], 'safe'],
            [['image'], 'file'],
            [['price', 'long', 'lat'], 'number'],
            [['name', 'address','file'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'id_user' => 'User',
            'id_type' => 'Type',
            'id_status' => 'Status',
            'date' => 'Date',
            'price' => 'Price',
            'address' => 'Address',
            'long' => 'Long',
            'lat' => 'Lat',
        ];
    }

    public function getImagePath() {
        if (!empty($this->file)) {
            return '/uploads/'. $this->file;
        } else {
            return 'http://placehold.it/150';
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhones()
    {
        return $this->hasMany(Phone::className(), ['id_realty' => 'id'])->all();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'id_status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'id_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
