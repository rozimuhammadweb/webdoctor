<?php

namespace backend\widgets;

class Index extends \yii\base\Widget
{
    public function run()
    {
        return $this->render('index');
    }
}