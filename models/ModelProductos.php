<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_productos".
 *
 * @property integer $PROD_ID
 * @property string $PROD_DESCRIPCION
 * @property double $PROD_PRECIO
 *
 * @property TblDetallepedido[] $tblDetallepedidos
 * @property TblFavoritos[] $tblFavoritos
 * @property TblInvetarios[] $tblInvetarios
 */
class ModelProductos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_productos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

           
            [['PROD_FECHA_VENCIMIENTO'], 'safe'], 
            [['PROD_DESCRIPCION'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PROD_ID' => 'ID Producto',
            'PROD_DESCRIPCION' => 'Descripción del Producto',
            'PROD_FECHA_VENCIMIENTO' => 'Prod Fecha Vencimiento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblDetallepedidos()
    {
        return $this->hasMany(ModelDetallePedidos::className(), ['PROD_ID' => 'PROD_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblFavoritos()
    {
        return $this->hasMany(ModelFavoritos::className(), ['PROD_ID' => 'PROD_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblInvetarios()
    {
        return $this->hasMany(ModelInventarios::className(), ['PROD_ID' => 'PROD_ID']);
    }
}
