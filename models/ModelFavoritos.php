<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_favoritos".
 *
 * @property integer $FAVO_ID
 * @property integer $PROD_ID
 * @property integer $PERS_ID
 *
 * @property TblPersonas $pERS
 * @property TblProductos $pROD
 */
class ModelFavoritos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_favoritos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PROD_ID', 'PERS_ID'], 'required'],
            [['PROD_ID', 'PERS_ID'], 'integer'],
            [['PERS_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelPersonas::className(), 'targetAttribute' => ['PERS_ID' => 'PERS_ID']],
            [['PROD_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelProductos::className(), 'targetAttribute' => ['PROD_ID' => 'PROD_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FAVO_ID' => 'ID del Favorito',
            'PROD_ID' => 'ID del Producto',
            'PERS_ID' => 'ID de la Persona',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERS()
    {
        return $this->hasOne(ModelPersonas::className(), ['PERS_ID' => 'PERS_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPROD()
    {
        return $this->hasOne(ModelProductos::className(), ['PROD_ID' => 'PROD_ID']);
    }
}
