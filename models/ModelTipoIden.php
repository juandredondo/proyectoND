<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_tipoidentificacion".
 *
 * @property integer $TIID_ID
 * @property string $TIID_DESCRIPCION
 *
 * @property TblPersnaturales[] $tblPersnaturales
 */
class ModelTipoIden extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_tipoidentificacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TIID_DESCRIPCION'], 'required'],
            [['TIID_DESCRIPCION'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TIID_ID' => 'ID Tipo de Identificación',
            'TIID_DESCRIPCION' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblPersnaturales()
    {
        return $this->hasMany(ModelPersNaturales::className(), ['TIID_ID' => 'TIID_ID']);
    }
}
