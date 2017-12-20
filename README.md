Yii18n Javascript
===================
----------

Requirements
------------

 - PHP >= 5.6.x
 - Yii >= 2.0.x


Installation
-------------

Add in your composer.json file
``` "gleads/yii18n": "dev-master" ```

Then run in your terminal:
``` composer update ```

Usage
--------
You must add the translator module in your config/web.php

```php
    'modules' => [
        'translator' => [
            'class' => 'gleads\yii18n\TranslatorModule'
        ]
    ],
```

Add the class message source with class 'gleads\yii18n\PhpMessageSource'

```
    'components' => [
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'gleads\yii18n\PhpMessageSource',  // Add This class
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
    ],

```

-----------------------
``` note: you need set urlmanager > enablePrettyUrl as true ```

in your view you must add the translator asset:

```php
    gleads\yii18n\TranslatorAsset::register($this);
```

then it's already to use you can use like yii::t() style

in your js file:
```javascript
    yii.t('category', 'message', 'params');
```

Todo
----
 - Remove sync request
 - Add plural
 - Add ordinal


----------
