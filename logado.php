<?php
include_once './conexao1.php';
session_start();
if (!isset($_SESSION['sessao_id'])) {
    echo "<script> location.href = ('index.php')</script>";
    echo "<script> alert('Infelizmente terá que fazer novamente o login!')</script>";
}
