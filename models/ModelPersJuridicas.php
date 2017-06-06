<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_persjuridicas".
 *
 * @property integer $PEJU_ID
 * @property string $PEJU_NOMBRE
 * @property string $PEJU_OBJETOCOMERCIAL
 * @property integer $PERS_ID
 *
 * @property TblPersonas $pERS
 */
class ModelPersJuridicas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_persjuridicas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PERS_ID'], 'required'],
            [['PERS_ID'], 'integer'],
            [[ 'PEJU_OBJETOCOMERCIAL'], 'string', 'max' => 30],
            [['PERS_ID'], 'unique'],
            [['PERS_ID'], 'exist', 'skipOnError' => true, 'targetClass' => ModelPersonas::className(), 'targetAttribute' => ['PERS_ID' => 'PERS_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PEJU_ID' => 'ID de la Pesona Juridica',
            'PEJU_OBJETOCOMERCIAL' => 'Objeto comercial',
            'PERS_ID' => 'ID Persona',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPERS()
    {
        return $this->hasOne(ModelPersonas::className(), ['PERS_ID' => 'PERS_ID']);
    }
}
