var messages = {};

yii.t = function(category, message, params = []) {
    //var messages = {};

    var getMessage = function(category) {
        var inArray = findCategory(category);

        if (inArray) {
            //console.log(messages);
            return translate(category, message, params);
        }

        let json = getMessageAjax(category).responseText;
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
            return messages[category][message];
        }
        return message;
    }

    return getMessage(category);

}
