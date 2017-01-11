<?php

namespace yac\yii18n;

use yii\i18n\GettextMessageSource;

class Messages extends GettextMessageSource
{
    public function loadMessages($category, $language)
    {
        return parent::loadMessages($category, $language);
    }

    public function loadFallbackMessages($category, $fallbackLanguage, $messages, $originalMessageFile)
    {
        return parent::loadFallbackMessages($category, $fallbackLanguage, $messages, $originalMessageFile);
    }

    public function getMessageFilePath($language)
    {
        return parent::getMessageFilePath($language);
    }

    public function loadMessagesFromFile($messageFile, $category)
    {
        return parent::loadMessagesFromFile($messageFile, $category);
    }
}
