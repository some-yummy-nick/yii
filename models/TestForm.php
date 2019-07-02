<?php


namespace app\models;

use yii\db\ActiveRecord;


class TestForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'posts';
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя 1',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
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
