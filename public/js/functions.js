$(document).ready(function(){
    $(".trigger").click(function() {
        $(".create").fadeIn( "slow" );
        $(".createimg").css("display","none");  
        $(".trigger").css("display","none");  
        $(".chooseimg").css("display","block");  
    });
})
