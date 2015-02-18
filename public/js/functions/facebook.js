var facebook_user_id = false;
var facebook_user_accesstoken = false;

var postToFacebookDialog = function(url, title, subtitle, description, image_url, redirect_to, display_ui) {
    if(display_ui === ''){
        display_ui = 'dialog';
    }
    FB.ui({
        method: 'feed',
        link: url,
        caption: subtitle,
        name: title,
        redirect_url: redirect_to,
        picture: image_url,
        description: description,
        display: display_ui
    }, function(response) {
        return response;
    });
};
var postToFacebook = function(url, title, subtitle, description, image_url, redirect_to) {
    if (facebook_user_id != false && facebook_user_accesstoken != false) {
        FB.api('/me/feed', 'post', {
            link: url,
            caption: subtitle,
            name: title,
            redirect_url: redirect_to,
            picture: image_url,
            description: description
        }, function(response) {
            return response;
        });
    }
};

facebookInviteFriends = function(message, url){
	FB.ui({
		method: 'send',
		name: message,
		link: url,
	});
};
/*facebookInviteFriends = function(message){
	FB.ui({
	method: 'apprequests',
	message: message
	});
};*/

jQuery(function() {
    jQuery.ajaxSetup({cache: true});
    jQuery.getScript('//connect.facebook.net/en_US/all.js', function() {
        FB.init({
            appId: '1476123785965298',
            xfbml: true, 
            cookie: true
        });
       /*FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                facebook_user_id = response.authResponse.userID;
                facebook_user_accesstoken = response.authResponse.accessToken;
            }
        }, true);*/
    });
});