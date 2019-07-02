<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sandwich".
 *
 * @property int $idsandwich
 * @property string $name
 * @property string $description
 * @property double $price
 * @property int $check
 */
class Sandwich extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sandwich';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['price'], 'number'],
            [['check'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idsandwich' => 'Idsandwich',
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
            'check' => 'Check',
        ];
    }
}
