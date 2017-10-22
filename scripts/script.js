$(document).ready(function(){
    GetData();
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

    function GetData(){
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "read.php", true);

        xhr.send(null);
        xhr.onreadystatechange = function() {
            if((xhr.readyState == 4) && (xhr.status == 200)){
                document.getElementById("res").innerHTML = xhr.responseText;
            }
        };
    }
});