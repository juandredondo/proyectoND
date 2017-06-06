<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_persnaturales".
 *
 * @property integer $PENA_ID
 * @property string $PENA_NOMBRE
 * @property string $PENA_APELLIDO
 * @property string $PENA_FECHANAC
 * @property integer $PERS_ID
 * @property integer $SEX_ID
 * @property integer $TIID_ID
 *
 * @property TblPersonas $pERS
 * @property TblSexos $sEX
 * @property TblTipoidentificacion $tIID
 */
class ModelPersNaturales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_persnaturales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PENA_FECHANAC'], 'safe'],
            [['PERS_ID', 'SEX_ID', 'TIID_ID'], 'required'],
            [['PERS_ID', 'SEX_ID', 'TIID_ID'], 'integer'],
           
            [['PERS_ID'], 'unique'],
            [['PERS_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelPersonas::className(), 'targetAttribute' => ['PERS_ID' => 'PERS_ID']],
            [['SEX_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelSexos::className(), 'targetAttribute' => ['SEX_ID' => 'SEX_ID']],
            [['TIID_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelTipoIden::className(), 'targetAttribute' => ['TIID_ID' => 'TIID_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PENA_ID' => 'ID Persona Natural',
            'PENA_FECHANAC' => 'Fecha de Nacimiento',
            'PERS_ID' => 'ID Persona',
            'SEX_ID' => 'ID del Sexo',
            'TIID_ID' => 'ID Tipo de Identificación',
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
    public function getSEX()
    {
        return $this->hasOne(ModelSexos::className(), ['SEX_ID' => 'SEX_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTIID()
    {
        return $this->hasOne(ModelTipoIden::className(), ['TIID_ID' => 'TIID_ID']);
    }
}
