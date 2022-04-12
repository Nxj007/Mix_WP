<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $ID
 * @property string $Name
 * @property string $Designation
 * @property int $Contact
 * @property string $Email
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Designation', 'Contact', 'Email'], 'required'],
            [['Contact'], 'integer'],
            [['Name', 'Designation', 'Email'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'Designation' => 'Designation',
            'Contact' => 'Contact',
            'Email' => 'Email',
        ];
    }
}
