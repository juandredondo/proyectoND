<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_estados".
 *
 * @property integer $ESTA_ID
 * @property string $ESTA_DETALLE
 *
 * @property TblPedidos[] $tblPedidos
 */
class ModelEstados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_estados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ESTA_DETALLE'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ESTA_ID' => 'ID del Estado',
            'ESTA_DETALLE' => 'Estado del Detalle',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblPedidos()
    {
        return $this->hasMany(ModelPedidos::className(), ['ESTA_ID' => 'ESTA_ID']);
    }
}
