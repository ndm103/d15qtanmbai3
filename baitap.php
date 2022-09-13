<!DOCTYPE html>
<html>
    <head>
        <title>Giải phương trình bậc nhất</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $ketqua = "";
            if(isset($_POST["a"]) && $_POST["b"]){
                $a = $_POST["a"];
                $b = $_POST["b"];
                if($a==0 && $b !=0){
                    $ketqua = "PT vô nghiệm";
                }
                else $ketqua = "PT có nghiệm x= ".-$b/$a;
            }
        ?>
        <h1>GIẢI PHƯƠNG TRÌNH BẬC NHẤT</h1>
        <form action="" method="POST">
            <label for="a_number">Nhập a:</label><br>
            <input type="text" name="a" value=""><br>
            <label for="b_number">Nhập b:</label><br>
            <input type="text" name="b" value=""><br><br>
            <input type="submit" value="Submit">
        </form>  
        <div id ="ketqua">
            <?php
                echo $ketqua;
            ?>
        </div>  
    </body>
</html>