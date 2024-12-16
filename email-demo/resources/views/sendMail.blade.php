<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

    <title>Event Listener</title>
</head>
<body>
<h1>Email Event Demo</h1>
<button id="sendEmailButton">Send Email</button>

<script>
$('#sendEmailButton').on('click',function(){
    $.ajax({
        url:'/sendMail',
        method:'post',
        headers:{
            'X-CSRF-TOKEN':'{{ csrf_token() }}'
        },
        success:function(response){
            alert(response.message);
        },
        error:function(){
            alert('Error sending email');
        }
    });
});
</script>


</body>
</html>