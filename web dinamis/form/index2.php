<html>
    <head>
        <title>Form Get dan Post</title>
    </head>
    <body>
        <form method="POST">
            <div>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="masukin email">
            </div>
            <div>
            <label>Email</label><br>
                <input type="password" name="password" placeholder="masukin password">
            </div>
            <div>
                <button>Submit</button>
            </div>
            <?php
            //@ berfungsi 
            $email = @$_POST['email'];
            $password = @$_POST['password'];

            echo "Email = {$email} <br>";
            echo "Password = {$Password}";
            ?>
        </form>
    </body>
</html>