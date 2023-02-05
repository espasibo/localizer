<?php

namespace common\models;

use Yii;
use yii\base\Model;

class Key extends Model {

    public string $name;

    public function rules() {
        return [
            ['name', 'string']
        ];
    }
}