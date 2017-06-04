<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_detallepedido".
 *
 * @property integer $DEPE_ID
 * @property double $DEPE_CANTIDAD
 * @property integer $INVE_ID
 * @property integer $PEDI_ID
 *
 * @property TblInvetarios $iNVE
 * @property TblPedidos $pEDI
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
            [['INVE_ID', 'PEDI_ID'], 'required'],
            [['INVE_ID', 'PEDI_ID'], 'integer'],
            [['INVE_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelInventarios::className(), 'targetAttribute' => ['INVE_ID' => 'INVE_ID']],
            [['PEDI_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelPedidos::className(), 'targetAttribute' => ['PEDI_ID' => 'PEDI_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DEPE_ID' => 'Depe  ID',
            'DEPE_CANTIDAD' => 'Depe  Cantidad',
            'INVE_ID' => 'Inve  ID',
            'PEDI_ID' => 'Pedi  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getINVE()
    {
        return $this->hasOne(ModelInventarios::className(), ['INVE_ID' => 'INVE_ID']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPEDI()
    {
        return $this->hasOne(ModelPedidos::className(), ['PEDI_ID' => 'PEDI_ID']);
    }
}
