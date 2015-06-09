$('#form_input').submit(function(){

    var message = $('#message').val();
    var sender = $('#sender').val();

    $.ajax({
        url:'scripts/php/send.php',
        data:{sender:sender ,message:message},
        success:function(data){
            $('#feedback').html(data);
            var interval = setInterval(function(){
                $('#feedback').css({display:'none'});
                clearInterval(interval);
            },2000);
            $('#message').val('');
            $('#sender').val('');
        }
    });
    return false;
});
