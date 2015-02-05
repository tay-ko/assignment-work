<?php

namespace app\models;

use Yii;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

 /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'username', 'password'], 'required'],
            [['id'], 'integer'],
            [['username', 'password'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'username',
            'password' => 'password'
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return User::find()->where(['id' => $id])->one();
    }    

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    public function getId(){}

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return User::find()->where(['username' => $username])->one();
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return User::find()->where(['password' => $password])->one();
    }


    public function getAuthKey(){}

    public function validateAuthKey($authKey){}
}
