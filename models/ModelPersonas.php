<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_personas".
 *
 * @property integer $PERS_ID
 * @property string $PERS_IDENTIFICACION
 * @property string $PERS_TELEFONO
 * @property string $PERS_DIRECCION
 * @property string $PERS_EMAIL
 *
 * @property TblFavoritos[] $tblFavoritos
 * @property TblPedidos[] $tblPedidos
 * @property TblPersjuridica $tblPersjuridica
 * @property TblPersnaturales $tblPersnaturales
 * @property TblUsuarios[] $tblUsuarios
 */
class ModelPersonas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_personas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PERS_IDENTIFICACION', 'PERS_TELEFONO', 'PERS_DIRECCION', 'PERS_EMAIL'], 'string', 'max' => 30],
           [['PERS_NOMBRE'], 'string', 'max' => 45],
            [['PERS_IDENTIFICACION'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PERS_ID' => 'Id Persona',
            'PERS_IDENTIFICACION' => 'Identificacion',
            'PERS_TELEFONO' => 'Telefono',
            'PERS_DIRECCION' =>'Direccion',
            'PERS_EMAIL' => '  Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblFavoritos()
    {
        return $this->hasMany(ModelFavoritos::className(), ['PERS_ID' => 'PERS_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblPedidos()
    {
        return $this->hasMany(ModelPedidos::className(), ['PERS_ID' => 'PERS_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblPersjuridica()
    {
        return $this->hasOne(ModelPersJuridicas::className(), ['PERS_ID' => 'PERS_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblPersnaturales()
    {
        return $this->hasOne(ModelPersNaturales::className(), ['PERS_ID' => 'PERS_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblUsuarios()
    {
        return $this->hasMany(TblUsuarios::className(), ['PERS_ID' => 'PERS_ID']);
    }
}
