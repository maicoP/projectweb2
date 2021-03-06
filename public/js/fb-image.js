$(document).ready(function(){

	nextpage = '';
	previouspage = '';
	//images van facebook ophalen
	window.fbAsyncInit = function() {
	FB.init({
	  appId      : '299522950243822',
	  //maico: 299522950243822
	  //matthias: 1593930580838839
	  xfbml      : true,
	  version    : 'v2.1'
	});
		FB.getLoginStatus(function(response) {
		  if (response.status === 'connected') {
		    console.log('Logged in.');
		  }
		  else {
		  	FB.login(function(response) {
			   window.location.reload();
			 }, {scope:'user_photos', 
   				return_scopes: true});
		  }
		  FB.api(
			    "/me/photos",
			    function (response) {
			      if (response && !response.error) {
			      	readResults(response);
			      }
			      else{
			      	console.log(response.error);
			      }
			    }
			);
		});
		$(document.body).on('click', '.fbImage' ,function(){
			url = $(this).children()[0].src;
			$('#hiddenField').val(url);
			$('form').submit();
		});
		$('#next').click(function(){
			$.ajax({
				url: nextpage,
				dataType: "jsonp",
				success: function(json){
	                readResults(json);
				}
			});
		});
		$('#previous').hide();
		$('#previous').click(function(){
			if(previouspage !== '')
			{
				$.ajax({
					url: previouspage,
					dataType: "jsonp",
					success: function(json){
		                readResults(json);
					}
				});
			}
		});
	};

	(function(d, s, id){
	 var js, fjs = d.getElementsByTagName(s)[0];
	 if (d.getElementById(id)) {return;}
	 js = d.createElement(s); js.id = id;
	 js.src = "//connect.facebook.net/en_US/sdk.js";
	 fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	function readResults(response)
	{
		$('#facebookImages').html('');
		$.each(response.data,function(i,result){
      		$('#facebookImages').append("<div class='fbImage effect8'><img src="+result.images[1].source+" alt='Loading Facebook image'></div>")
      	});
      	nextpage = response.paging.next;
      	if(response.paging.previous)
      	{
      		previouspage = response.paging.previous;
      		$('#previous').show();
      	}
      	else{
      		$('#previous').hide();
      	}
	}
})

