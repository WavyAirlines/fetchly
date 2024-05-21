$(window).on("scroll", function(){
    if($(this).scrollTop() > 100){
        $(".default-header").addClass("scrolledHeader");
    }else{
        $(".default-header").removeClass("scrolledHeader");
    }
});