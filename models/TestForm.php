<?php


namespace app\models;

use yii\base\Model;


class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'Имя 1',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email', 'message' => 'Невалидный email'],
            ['name', 'string', 'min' => 2],
            ['name', 'myRule'],
            [['text', 'name', 'email'], 'trim']
        ];
    }

    public function myRule($attr)
    {
        if (!in_array($this->$attr, ['hello', 'name'])) {
            $this->addError($attr,'Wrong!');
        }
    }
}
