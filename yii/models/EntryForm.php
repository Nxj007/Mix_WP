<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $details;

    public function rules()
    {
        return [
            [['name', 'email', 'password', 'details'], 'required'],
            ['email', 'email'],
        ];
    }
}
// $model = new EntryForm();
// $model->name = 'Qiang';
// $model->email = 'bad';
// if ($model->validate()) {
//     // Good!
// } else {
//     // Failure!
//     // Use $model->getErrors()
// }
?>