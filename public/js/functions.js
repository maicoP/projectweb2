$(document).ready(function(){
    $(".trigger").click(function() {
        $(".create").fadeIn( "slow" );
        $(".createimg").css("display","none");  
        $(".trigger").css("display","none");  
        $(".hide").css("display","none");  
        $(".chooseimg").css("display","block");  
    });
    $("#editbgred").click(function(){
    	$(".editimgbg").css("background-color","#b22222");
    });
    $("#editbggreen").click(function(){
    	$(".editimgbg").css("background-color","#6FAA8C");
    });
    $("#editbgwhite").click(function(){
    	$(".editimgbg").css("background-color","#FFFAFA");
    });
    $("#editbggold").click(function(){
    	$(".editimgbg").css("background-color","#D4AF37");
    });
    $("#editbgsilver").click(function(){
    	$(".editimgbg").css("background-color","#D3D3D3");
    });

    $("#editfontred").click(function(){
    	$(".edittext").css("color","#B22222");
    });
    $("#editfontgreen").click(function(){
    	$(".edittext").css("color","#6FAA8C");
    });
    $("#editfontwhite").click(function(){
    	$(".edittext").css("color","#FFFAFA");
    });
    $("#editfontgold").click(function(){
    	$(".edittext").css("color","#D4AF37");
    });
    $("#editfontsilver").click(function(){
    	$(".edittext").css("color","#D3D3D3");
    });

    $('#message').keyup(function(event) {
        $('.edittext').html($(this).val());
    });

    $('#textFrom').keyup(function(event) {
        $('.editfrom').html('from '+$(this).val());
    });

     $("#loginpopup").click(function() {
            $("#popup").fadeIn( "slow" );
            $(".loginpopup").css("display","none");  
            $(".black_overlay").css("display","block");  
        });
    $("#closepopup").click(function() {
            $("#popup").css( "display","none" );
            $(".loginpopup").css("display","block");  
            $("#registercontent").css( "display","none" );
            $("#logincontent").css( "display","block" );
            $(".black_overlay").css("display","none");  
        });
    $("#register").click(function() {
            $("#registercontent").fadeIn( "slow" );
            $("#logincontent").css("display","none");  
        });


})
