<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regions".
 *
 * @property int $id
 * @property string $name
 * @property string $created_ad
 * @property int $created_by
 *
 * @property Person[] $people
 * @property Users $createdBy
 */
class Regions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_ad'], 'safe'],
            [['created_by'], 'default', 'value' => null],
            [['created_by'], 'integer'],
            [['name'], 'string', 'max' => 50],
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
            'name' => 'Nama Wilayah',
            'created_ad' => 'Dibuat Tanggal',
            'created_by' => 'Dibuat Oleh',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(Person::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(Users::className(), ['id' => 'created_by']);
    }
}
