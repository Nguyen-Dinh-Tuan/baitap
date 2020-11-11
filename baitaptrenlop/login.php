<body>
<form method="post" style="position: absolute; left: 40%;background: azure;top:100px; border: 1px solid black; width: 300px; height: 200px">
    <h1>Đăng nhập</h1>
    <input type="text" name="Account" placeholder="Tài khoản"> <br><br>
    <input type="password" name="Password" placeholder="Mật khẩu"> <br><br>
    <button type="submit" name="btn" id="submit" style="background: yellowgreen">Logn in</button>
</form>
</body>
<?php
$arr = array(["admin","admin"],
             ["tuan",'123456'],
             ['thao', '456789']
    );
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['Account']) && (!empty($_POST['Password']))) {
        $user = $_POST["Account"];
        $pass = $_POST["Password"];
        $login = false;
        foreach ($arr as $value) {
            if ($user == $value[0] && $pass == $value[1]) {
                header("location: https://github.com/Nguyen-Dinh-Tuan/baitap/tree/master/baitaptrenlop");
                $login = true;
                break;
            }
        }
        if ($login) {
            echo "Dang nhap thanh cong";
        } else {
            echo "Dang nhap sai";
        }
    }
    else{
        echo " Ban chua nhap gi";
    }
}
?>