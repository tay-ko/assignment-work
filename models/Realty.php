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
            [['price', 'long', 'lat'], 'number'],
            [['name', 'address'], 'string', 'max' => 255]
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
            'id_user' => 'Id User',
            'id_type' => 'Id Type',
            'id_status' => 'Id Status',
            'date' => 'Date',
            'price' => 'Price',
            'address' => 'Address',
            'long' => 'Long',
            'lat' => 'Lat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhones()
    {
        return $this->hasMany(Phone::className(), ['id_realty' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'id_status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdType()
    {
        return $this->hasOne(Type::className(), ['id' => 'id_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
