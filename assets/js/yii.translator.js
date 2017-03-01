var messages = {};

yii.t = function(category, message, params = []) {
    //var messages = {};

    var getMessage = function(category) {
        var inArray = findCategory(category);

        if (inArray) {
            //console.log(messages);
            return translate(category, message, params);
        }

        getMessageAjax(category);

        return 'Test';

    };

    var findCategory = function(category) {
        return messages.hasOwnProperty(category);
    }

    var getMessageAjax = function(category){

        $.ajax({
            url: '/translator/translator/index',
            data: {category: category},
            success: function(response){
                messages[category] = response;
                getMessage(category);
                //return true;
            }
        });

    }

    var translate = function(category, message, params){
        //console.log(messages[category][message]);
        return messages[category][message];
    }

    return getMessage(category);

}
