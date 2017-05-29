<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_invetarios".
 *
 * @property integer $INVE_ID
 * @property double $INVE_PRECIO
 * @property double $INVE_STOK
 * @property double $INVE_STOK_MIN
 * @property string $INVE_ESTADO
 * @property integer $PROD_ID
 *
 * @property TblProductos $pROD
 */
class ModelInventarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_invetarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['INVE_PRECIO', 'INVE_STOK', 'INVE_STOK_MIN', 'PROD_ID'], 'required'],
            [['INVE_PRECIO', 'INVE_STOK', 'INVE_STOK_MIN'], 'number'],
            [['PROD_ID'], 'integer'],
            [['INVE_ESTADO'], 'string', 'max' => 20],
            [['PROD_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelProductos::className(), 'targetAttribute' => ['PROD_ID' => 'PROD_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'INVE_ID' => 'Inve  ID',
            'INVE_PRECIO' => 'Inve  Precio',
            'INVE_STOK' => 'Inve  Stok',
            'INVE_STOK_MIN' => 'Inve  Stok  Min',
            'INVE_ESTADO' => 'Inve  Estado',
            'PROD_ID' => 'Prod  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPROD()
    {
        return $this->hasOne(ModelProductos::className(), ['PROD_ID' => 'PROD_ID']);
    }
}
