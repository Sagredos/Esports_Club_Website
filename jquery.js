$(function (){

    $(window).bind("resize",function(){
        console.log($(this).width())
        if($(this).width() <1000){
        $('div').removeClass('greenBgTeams')
        }
    })
    }).trigger('resize');