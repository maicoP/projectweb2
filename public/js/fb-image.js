$(document).ready(function(){

	//images van facebook ophalen
	window.fbAsyncInit = function() {
	FB.init({
	  appId      : '299522950243822',
	  xfbml      : true,
	  version    : 'v2.1'
	});
		FB.getLoginStatus(function(response) {
		  if (response.status === 'connected') {
		    console.log('Logged in.');
		  }
		  else {
		  	console.log('not logd in')
		    FB.login(function(response) {
			   location.reload();
			 }, {scope: 'read_friendlists,user_photos'});
		  }
		  FB.api(
			    "/me/photos",
			    function (response) {
			      if (response && !response.error) {
			      	$.each(response.data,function(i,result){
			      		$('#facebookImages').append("<div class='fbImage'><img src="+result.images[1].source+" alt='facebook image'></div>")
			      	});
			      	console.log(response);
			      }
			      else{
			      	console.log(response.error);
			      }
			    }
			);
		});
		$(document.body).on('click', '.fbImage' ,function(){
			url = $(this).children()[0].currentSrc;
			$('#hiddenField').val(url);
			$('form').submit();
		});
	};

	(function(d, s, id){
	 var js, fjs = d.getElementsByTagName(s)[0];
	 if (d.getElementById(id)) {return;}
	 js = d.createElement(s); js.id = id;
	 js.src = "//connect.facebook.net/en_US/sdk.js";
	 fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
})

