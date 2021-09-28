<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style link=" {{ asset ('css/bootstrap.min.css')}}"></style>
    <title>Document</title>
</head>
<body>

<div class="container">
    <form method="POST" action="{{ action("LoginController@register") }}">
    @csrf
    <label for="fname"> Name</label><br>
    <input type="text"  name="fname" value=""><br>
    <label for="email">Email</label><br>
    <input type="email" name="email" value=""><br>
    <label for="password">Password</label><br>  
    <input type="password" name="password" value=""><br><br>
    <input type="submit" value="Register">
    </form> 

</div>
    
</body>
</html>