<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $iduser
 * @property string $surname
 * @property string $name
 * @property string $email
 *
 * @property Orders[] $orders
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'email'], 'required'],
            [['surname', 'name', 'email'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iduser' => 'Iduser',
            'surname' => 'Surname',
            'name' => 'Name',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['user_id' => 'iduser']);
    }
}
