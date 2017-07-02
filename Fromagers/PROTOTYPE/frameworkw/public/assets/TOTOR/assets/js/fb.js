$(function(){

FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});

FB.login();

});
