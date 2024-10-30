/*
 * Shamelessly copied and modified from https://what-if.xkcd.com/
 */

$(document).ready(function(){
    $(".refnum").click(function(event){
        $(this.nextSibling).toggle();
        event.stopPropagation();
    });
    $(".refbody").click(function(event){
        event.stopPropagation();
    });
    $("body").click(function(){
        $(".refbody").hide();
    });
});
