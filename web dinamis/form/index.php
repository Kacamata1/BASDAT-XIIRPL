<html>
    <head>
        <title>Form Get dan Post</title>
    </head>
    <body>
        <form action="">
            <div>
                <label>Nama</label><br>
                <input type="text" name="nama" placeholder="masukin nama">
            </div>
            <div>
            <label>Email</label><br>
                <input type="email" name="email" placeholder="masukin email">
            </div>
            <div>
                <button>Submit</button>
            </div>
            <?php
            //@ berfungsi 
            $nama = @$_GET['nama'];
            $email = @$_GET['email'];

            echo "Nama = {$nama} <br>";
            echo "Email = {$email}";
            ?>
        </form>
    </body>
</html>