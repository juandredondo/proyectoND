<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_pedidos".
 *
 * @property integer $PEDI_ID
 * @property string $PEDI_FECHA
 * @property string $PEDI_OBSERVACION
 * @property string $PEDI_DIRECCION
 * @property integer $ESTA_ID
 * @property integer $PERS_ID
 *
 * @property TblDetallepedido[] $tblDetallepedidos
 * @property TblEstados $eSTA
 * @property TblPersonas $pERS
 */
class ModelPedidos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_pedidos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PEDI_FECHA'], 'safe'],
            [['ESTA_ID', 'PERS_ID'], 'required'],
            [['ESTA_ID', 'PERS_ID'], 'integer'],
            [['PEDI_OBSERVACION'], 'string', 'max' => 30],
            [['PEDI_DIRECCION'], 'string', 'max' => 45],
            [['ESTA_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelEstados::className(), 'targetAttribute' => ['ESTA_ID' => 'ESTA_ID']],
            [['PERS_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelPersonas::className(), 'targetAttribute' => ['PERS_ID' => 'PERS_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PEDI_ID' => 'Pedi  ID',
            'PEDI_FECHA' => 'Pedi  Fecha',
            'PEDI_OBSERVACION' => 'Pedi  Observacion',
            'PEDI_DIRECCION' => 'Pedi  Direccion',
            'ESTA_ID' => 'Esta  ID',
            'PERS_ID' => 'Pers  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblDetallepedidos()
    {
        return $this->hasMany(ModelDetallePedidos::className(), ['PEDI_ID' => 'PEDI_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getESTA()
    {
        return $this->hasOne(ModelEstados::className(), ['ESTA_ID' => 'ESTA_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERS()
    {
        return $this->hasOne(ModelPersonas::className(), ['PERS_ID' => 'PERS_ID']);
    }
}
