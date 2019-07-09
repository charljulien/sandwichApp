<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $idorder
 * @property int $user_id
 * @property int $product_id
 * @property double $price
 * @property string $date
 * @property int $paid
 * @property int $process
 *
 * @property Products $product
 * @property Users $user
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'price', 'date', 'paid', 'process'], 'required'],
            [['user_id', 'product_id', 'paid', 'process'], 'integer'],
            [['price'], 'number'],
            [['date'], 'safe'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'idproducts']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'iduser']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idorder' => 'Idorder',
            'user_id' => 'User ID',
            'product_id' => 'Product ID',
            'price' => 'Price',
            'date' => 'Date',
            'paid' => 'Paid',
            'process' => 'Process',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['idproducts' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['iduser' => 'user_id']);
    }
}
