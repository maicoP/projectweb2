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
        $(".editfrom").css("color","#B22222");
    });
    $("#editfontgreen").click(function(){
    	$(".edittext").css("color","#6FAA8C");
        $(".editfrom").css("color","#6FAA8C");
    });
    $("#editfontwhite").click(function(){
    	$(".edittext").css("color","#FFFAFA");
        $(".editfrom").css("color","#FFFAFA");
    });
    $("#editfontgold").click(function(){
    	$(".edittext").css("color","#D4AF37");
        $(".editfrom").css("color","#D4AF37");
    });
    $("#editfontsilver").click(function(){
    	$(".edittext").css("color","#D3D3D3");
        $(".editfrom").css("color","#D3D3D3");
    });

    $('#message').keyup(function(event) {
        $('.edittext').html($(this).val());
    });

    $('#textFrom').keyup(function(event) {
        $('.editfrom').html('From '+$(this).val());
    });

    $('.extraImage input:radio').change(function(){
        $('.editimgextra').html('');
        if($(this).val() != 'none')
        {
            $('.editimgextra').append('<img src="/backgrounds/'+$(this).val()+'" alt="'+$(this).val()+'">');       
        } 
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

    $("#font1").click(function() {
            $(".edittext").css( "font-family","Bad Script" );
            $(".editfrom").css("font-family","Bad Script");  
            $(".edittext").css( "font-size","24px" );
            $(".editfrom").css("font-size","24px");  
        });
    $("#font2").click(function() {
            $(".edittext").css( "font-family","Coming Soon" );
            $(".editfrom").css("font-family","Coming Soon");  
            $(".edittext").css( "font-size","16px" );
            $(".editfrom").css("font-size","16px");  
        });
    $("#font3").click(function() {
            $(".edittext").css( "font-family","Courgette" );
            $(".editfrom").css("font-family","Courgette");  
            $(".edittext").css( "font-size","17px" );
            $(".editfrom").css("font-size","17px");  
        });
    $("#font4").click(function() {
            $(".edittext").css( "font-family","Dancing Script" );
            $(".editfrom").css("font-family","Dancing Script");  
            $(".edittext").css( "font-size","24px" );
            $(".editfrom").css("font-size","24px");  
        });
    $("#font5").click(function() {
            $(".edittext").css( "font-family","Just Another Hand" );
            $(".editfrom").css("font-family","Just Another Hand");  
            $(".edittext").css( "font-size","35px" );
            $(".editfrom").css("font-size","35px");  
        });
    $("#font6").click(function() {
            $(".edittext").css( "font-family","Marck Script" );
            $(".editfrom").css("font-family","Marck Script");  
            $(".edittext").css( "font-size","21px" );
            $(".editfrom").css("font-size","21px");  
        });
    $("#font7").click(function() {
            $(".edittext").css( "font-family","Poly" );
            $(".editfrom").css("font-family","Poly");  
            $(".edittext").css( "font-size","17px" );
            $(".editfrom").css("font-size","17px");  
        });
    $("#font8").click(function() {
            $(".edittext").css( "font-family","Quicksand" );
            $(".editfrom").css("font-family","Quicksand");
            $(".edittext").css( "font-size","14px" );
            $(".editfrom").css("font-size","14px");    
        });

    if($(".errorsLogin").children().length > 0)
    {
        $("#popup").fadeIn( "slow" );
        $(".loginpopup").css("display","none");  
        $(".black_overlay").css("display","block"); 
    }

    if($(".errorsRegistratie").children().length > 0)
    {
        $("#popup").fadeIn( "slow" );
        $(".loginpopup").css("display","none");  
        $(".black_overlay").css("display","block"); 
        $("#registercontent").fadeIn( "slow" );
        $("#logincontent").css("display","none");  
    }
})
