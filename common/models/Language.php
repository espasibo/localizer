<?php

namespace common\models;

use Yii;
use yii\base\Model;

class Language extends Model {

    public string $name;
    public string $code;

    public function rules() {
        return [
            [['name', 'code'], 'required'],
            ['name', 'string'],
            ['code', 'string', ['max' => 2]]
        ];
    }
}