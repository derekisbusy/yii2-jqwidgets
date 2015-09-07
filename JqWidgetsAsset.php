<?php

namespace app\extentions\yii2_widget_jqwidgets;

use yii\web\AssetBundle;

/**
 * Class JqWidgetsAsset
 * @package dumuro\JqWidgets
 */
class JqWidgetsAsset extends AssetBundle {

    /** @array */
    public $css = [
        'jqwidgets/styles/jqx.base.css'
    ];

    /** @array */
    public $js  = [
        'jqwidgets/jqxcore.js',
        'jqwidgets/jqxbuttons.js',
        'jqwidgets/jqxscrollbar.js',
        'jqwidgets/jqxpanel.js',
        'jqwidgets/jqxtree.js',
        'jqwidgets/jqxcheckbox.js',
        'jqwidgets/jqxmenu.js',
    ];

    /** @var array  */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapThemeAsset',
        'yii\web\YiiAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__.'/assets';
        parent::init();
    }

}