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
``` "yac/yii18n": "dev-master" ```

Then run in your terminal:
``` composer update ```

Usage
--------
You must add the translator module in your config/web.php

```php
    'modules' => [
        'translator' => [
            'class' => 'yac\yii18n\TranslatorModule'
        ]
    ],
```

-----------------------
``` note: you need set urlmanager > enablePrettyUrl as true ```

in your view you must add the translator asset:

```php
    yac\yii18n\TranslatorAsset::register($this);
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

