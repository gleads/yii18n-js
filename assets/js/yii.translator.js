yii.t = function(category, message, params = []) {
    var messages = {
        'contatos':  {
            'mykey': 'hello'
        },
    };

    var getMessage = function(category) {
        var messages = findCategory(category);
        if (messages) {
            //found categories
        }
        getMessageAjax(category);

        getMessage(category);
    };

    var findCategory = function(category) {
        return messages.hasOwnProperty(category);
    }

    var getMessageAjax = function(category){
        alert('asd');
        $.ajax({
            url: 'translator',
            data: {category: category},
            success: function(response){
                messages += response;
            }
        });
    }

    getMessage(category);

    return {

    }
}
