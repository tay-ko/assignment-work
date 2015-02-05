<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phone".
 *
 * @property integer $id
 * @property integer $id_realty
 * @property integer $number
 *
 * @property Realty $idRealty
 */
class Phone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_realty', 'number'], 'required'],
            [['id_realty', 'number'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_realty' => 'Id Realty',
            'number' => 'Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRealty()
    {
        return $this->hasOne(Realty::className(), ['id' => 'id_realty']);
    }
}
