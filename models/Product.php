<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $idproducts
 * @property int $category_id
 * @property int $ingredient_id
 * @property string $name
 * @property double $price
 *
 * @property Orders[] $orders
 * @property Categories $category
 * @property Ingredients $ingredient
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'ingredient_id', 'name', 'price'], 'required'],
            [['category_id', 'ingredient_id'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 45],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'idcategories']],
            [['ingredient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingredient_id' => 'idingredients']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idproducts' => 'Idproducts',
            'category_id' => 'Category ID',
            'ingredient_id' => 'Ingredient ID',
            'name' => 'Name',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['product_id' => 'idproducts']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['idcategories' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIngredient()
    {
        return $this->hasOne(Ingredients::className(), ['idingredients' => 'ingredient_id']);
    }
}
