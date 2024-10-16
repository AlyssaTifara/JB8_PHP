<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username=="admin" && $password=="1234") {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["status"] = 'login';
        echo "Anda Berhasil Login. silahkan menuju <a href='homeSession.php'> Halaman Home";
    }else{
    echo "Gagal Login. silahkan menuju <a href='sessionLoginForm.html'> Halaman Login";
    }
?>