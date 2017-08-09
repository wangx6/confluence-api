(function() {
    'use strict';

    //This creates a page in a space.
    var username = "wangx6@gmail.com";
    var password = "xhgk9qey";
    // var jsondata = {
    //     "type": "page",
    //     "title": "My Test Page",
    //     "space": { "key": "TST" },
    //     "body": { "storage": { "value": "<p>This is a new page</p>", "representation": "storage" } }
    // };

    $.ajax({
        type: "POST",
        url: "https://yinghan.atlassian.net/wiki/rest/api/content?expand=body.storage",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        //async: false,
        headers: {
            "Authorization": "Basic " + btoa(username + ":" + password)
        },
        //data: JSON.stringify(jsondata),
        success: function(res) {
            console.log(res);
            console.log('Page saved!');
        },
        error: function(xhr, errorText) {
            console.log('Error ' + xhr.responseText);
        }
    });



})();