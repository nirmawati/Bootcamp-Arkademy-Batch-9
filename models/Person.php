<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string $name
 * @property int $region_id
 * @property string $address
 * @property double $income
 * @property string $created_at
 * @property int $created_by
 *
 * @property Regions $region
 * @property Users $createdBy
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id', 'created_by'], 'default', 'value' => null],
            [['region_id', 'created_by'], 'integer'],
            [['income'], 'number'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 100],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['region_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nama Lengkap',
            'region_id' => 'Wilayah',
            'address' => 'Alamat',
            'income' => 'Pendapatan',
            'created_at' => 'Tanggal Pembuatan',
            'created_by' => 'Dibuat Oleh',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Regions::className(), ['id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(Users::className(), ['id' => 'created_by']);
    }
}
