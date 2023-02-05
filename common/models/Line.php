<?php

namespace common\models;

use Yii;
use yii\base\Model;

class Line extends Model {

    public int $language_id;
    public int $key_id;
    public string $value;
}