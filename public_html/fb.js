window.fbAsyncInit = function() {
    FB.init({
      appId      : '659708550798330',
      xfbml      : true,
      status     : true,
      cookie     : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  // Login in the current user via Facebook and ask for email permission
  function authUser() {
    FB.login(checkLoginStatus, {scope:'email,user_birthday'});
  }

function logout() {
FB.logout(function(response) {
  // user is now logged out
});

}

  // Check the result of the user status and display login button if necessary
  function checkLoginStatus(response) {
    if(response && response.status == 'connected') {
      //alert('User is authorized');
      var userInfo = document.getElementById('loginButton');
        FB.api('/me', function(response) {
        console.log(response);
	document.getElementById("Name").innerHTML='Hey '+response.name+'!';
	userInfo.innerHTML = '<img src="https://graph.facebook.com/' + response.id + '/picture" height="20" width="20">';
        });
    } else {
      // Display the login button
      document.getElementById('loginButton').innerHTML='<li><a id="loginButton" href="#" onclick="authUser();">Login</a></li>';
    }
  }
