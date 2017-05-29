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
            [['PENA_ID', 'PERS_ID', 'SEX_ID', 'TIID_ID'], 'required'],
            [['PENA_ID', 'PERS_ID', 'SEX_ID', 'TIID_ID'], 'integer'],
            [['PENA_FECHANAC'], 'safe'],
            [['PENA_NOMBRE', 'PENA_APELLIDO'], 'string', 'max' => 30],
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
            'PENA_ID' => 'Pena  ID',
            'PENA_NOMBRE' => 'Pena  Nombre',
            'PENA_APELLIDO' => 'Pena  Apellido',
            'PENA_FECHANAC' => 'Pena  Fechanac',
            'PERS_ID' => 'Pers  ID',
            'SEX_ID' => 'Sex  ID',
            'TIID_ID' => 'Tiid  ID',
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
