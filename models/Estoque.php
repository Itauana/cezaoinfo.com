<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estoque".
 *
 * @property integer $produto_id
 * @property integer $quantidade
 *
 * @property Produto $produto
 */
class Estoque extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estoque';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['produto_id', 'quantidade'], 'required'],
            [['produto_id', 'quantidade'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'produto_id' => 'Produto ID',
            'quantidade' => 'Quantidade Estoque',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produto::className(), ['id' => 'produto_id']);
    }
}
