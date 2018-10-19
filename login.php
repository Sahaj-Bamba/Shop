

<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Gen Next</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="style/login.css">
            
    </head>
    <body style="background: url(Images/background.jpg);">
        <div class="box">
            <h2>Login</h2>
            
            <form method="POST" action="login_.php" autocomplete="off" >

                <div class="inputbox">
                    <input type="text" name="name" required>
                    <label>Username</lable>
                </div>
                <div class="inputbox">
                    <input type="password" name="password" required>
                    <label>Password</lable>
                </div>
                <input type="submit" name="submit" value="Submit">
                
            </form>
        </div>
    </body>
</html>
