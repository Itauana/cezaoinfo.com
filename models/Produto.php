<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property integer $id
 * @property string $descricao
 * @property string $valor
 * @property integer $marca_id
 * @property integer $modelo_id
 *
 * @property Estoque $estoque
 * @property Marca $marca
 * @property Modelo $modelo
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao', 'valor', 'marca_id', 'modelo_id'], 'required'],
            [['valor'], 'number'],
            [['marca_id', 'modelo_id'], 'integer'],
            [['descricao'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
            'valor' => 'Valor',
            'marca_id' => 'Marca ID',
            'modelo_id' => 'Modelo ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstoque()
    {
        return $this->hasOne(Estoque::className(), ['produto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarca()
    {
        return $this->hasOne(Marca::className(), ['id' => 'marca_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModelo()
    {
        return $this->hasOne(Modelo::className(), ['id' => 'modelo_id']);
    }
}
