$(function(){

    $("#submit").click(function(){
        if($("#form8").valid()==false){
            $("#edad").css("border-color","red")
            $("#estudia").css("border-color","red")
                
        }
        
    });

})