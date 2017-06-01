<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_detallepedido".
 *
 * @property integer $DEPE_ID
 * @property double $DEPE_CANTIDAD
 * @property integer $PROD_ID
 * @property integer $PEDI_ID
 *
 * @property TblPedidos $pEDI
 * @property TblProductos $pROD
 */
class ModelDetallePedidos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_detallepedido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DEPE_CANTIDAD'], 'number'],
            [['PROD_ID', 'PEDI_ID'], 'required'],
            [['PROD_ID', 'PEDI_ID'], 'integer'],
            [['PEDI_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelPedidos::className(), 'targetAttribute' => ['PEDI_ID' => 'PEDI_ID']],
            [['PROD_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelProductos::className(), 'targetAttribute' => ['PROD_ID' => 'PROD_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DEPE_ID' => 'ID de Detalle de Pedido',
            'DEPE_CANTIDAD' => 'Cantidad de Detalle de Pedido',
            'PROD_ID' => 'ID del Producto',
            'PEDI_ID' => 'Id del Pedido',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPEDI()
    {
        return $this->hasOne(ModelPedidos::className(), ['PEDI_ID' => 'PEDI_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPROD()
    {
        return $this->hasOne(ModelProductos::className(), ['PROD_ID' => 'PROD_ID']);
    }
}
