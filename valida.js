$("#email").keyup(function(e){
    var email = $(this).val();
    $.post('ajaxvalidaemail.php',{'email':email}, function(data){
        $("#resultadoemail").html(data);
    })
});