$(document).ready(function () {
    
    $("#dark-bg-check").click(function(){

        if($("#dark-bg-check").is(":checked")){
            $("#parent-div").addClass("text-light");
            $("#parent-div").addClass("bg-dark");
        }else{
            $("#parent-div").removeClass("text-light");
            $("#parent-div").removeClass("bg-dark");

        }


    });


});
