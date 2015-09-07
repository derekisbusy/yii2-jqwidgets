<?php

namespace dumuro\yii2_widget_jqwidgets;

use yii\base\Widget;
use yii\helpers\Json;

/**
 * Class Widgets
 * @package yii2_widget_jqwidgets
 */
class JqWidgets extends Widget
{
    /** @var string  */
    public $id = 'jqxTree';

    /** @var array */
    public $options = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->registerAsset();
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function registerAsset()
    {
        $view = $this->getView();
        JqWidgetsAsset::register($view);

        $id = $id = 'jQuery("#' . $this->id . '")';

        if( count($this->options) > 0 )
            $js_core  = "{$id}.jqxTree(".Json::decode($this->options).')';
        else
            $js_core  = "{$id}.jqxTree()";

        $view->registerJs($js_core);
    }

}