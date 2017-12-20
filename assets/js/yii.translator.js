var messages = {};

yii.t = function(category, message, params) {
    
    params = params || [];
    
    var getMessage = function(category) {
        var inArray = findCategory(category);

        if (inArray) {            
            return translate(category, message, params);
        }

        var json = getMessageAjax(category).responseText;
        messages[category] = JSON.parse(json);

        return translate(category, message, params);
    };

    var findCategory = function(category) {
        return messages.hasOwnProperty(category);
    }

    var getMessageAjax = function(category){

       return $.ajax({
            url: '/translator/translator/index',
            async: false,
            data: {category: category},
        });

    }

    var translate = function(category, message, params){
        if(messages[category][message] != undefined){
            translatedMessage = messages[category][message];

            for (var index in params) {
                translatedMessage = translatedMessage.replace("{" + index + "}", params[index]);
            }

            return translatedMessage;
        }
        return message;
    }

    return getMessage(category);

}
