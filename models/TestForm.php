<?php

namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    
    // public function fullName()
    // {
    //     return 'abc';
    // }

    function rules()
    {
        return[
            [['name','email'],'required'],
            ['email','email'],
        ];
    }
}