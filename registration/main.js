$(document).ready(function(){
    $("#login").click(function(){
       let username = $("#username").val();
       let password = $("#password").val();
       if(username == ""){
        $(".u-error").html("Field Required");
      //  return false
       }
       if(password == ""){
        $(".u-pass").html("Field Required")
        //return false
       }
     $.ajax({
        url: "login.php",
        method: 'POST' ,
        data : {'uname': username,'pass':password},
        success: function(result){
            if(result == 1){
                $("#message").html("<div class='alert alert-success'>Crednetails Match</div>");
                window.location.href  = "dashboard.php";
            } else {
                $("#message").html("<div class='alert alert-danger'>Crednetails Not Match</div>");
            }
            if(username){
                
            }
          
        }
    });
      
    })
})