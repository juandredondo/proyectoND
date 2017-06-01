<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_sexos".
 *
 * @property integer $SEX_ID
 * @property string $SEX_NOMBRE
 *
 * @property TblPersnaturales[] $tblPersnaturales
 */
class ModelSexos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sexos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SEX_NOMBRE'], 'required'],
            [['SEX_NOMBRE'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SEX_ID' => 'ID del Sexo',
            'SEX_NOMBRE' => 'Nombre de Sexo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblPersnaturales()
    {
        return $this->hasMany(ModelPersNaturales::className(), ['SEX_ID' => 'SEX_ID']);
    }
}
