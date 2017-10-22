$(document).ready(function(){
    $("#text").animate({
        fontSize : "3em",
        left : "100px",
        position : "absolute"
    }, 1000, function(){
        $("#rBtn").show("slow");
    });
    
    $("#type").change(function (){
        var choice = $("#type option:selected").text();
        if(choice == "Lit"){
            $(".lit").show();
        }else{
            $(".lit").hide();
        }
    });
});