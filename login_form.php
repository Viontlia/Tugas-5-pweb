<?php
    $username = $_POST['nim'];
    $password = $_POST['password'];

    $u = 'A12.2022.06796';
    $p = 'polke001';

    if ($username == $u AND $password == $p)
    {
        session_start();
        $_SESSION['nim'] = $username;
        $_SESSION['is_logged_in'] = TRUE;

        header("Location: halaman1.php"); //memindahkan halaman re-direct secara otomatis
    }
    else
    {
        echo "NIM atau Password Salah";
    }