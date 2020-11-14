<?php
/**
 * @link https://nativeweb.ru/
 * @copyright Copyright (c) 2020 Dmitry Brusensky
 */

namespace NativeWeb\Assets\SortableJS;

use yii\web\AssetBundle;

/**
 * Class SortableJSAsset
 * @package NativeWeb\Assets\SortableJS
 */
class SortableJSAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@npm/jquery-sortablejs';

    /**
     * @var array
     */
    public $js = [
        'jquery-sortable.js'
    ];

    /**
     * @var array
     */
    public $publishOptions = [
        'only' => [
            'jquery-sortable.js',
            'jquery-sortable.min.js',
        ],
    ];
}