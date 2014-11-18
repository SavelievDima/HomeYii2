<?php

namespace application\MyModules;

class Module extends \yii\base\Module
{
public function init()
{
parent::init();

$this->params['foo'] = 'bar';
// ...  other initialization code ...
}
} 