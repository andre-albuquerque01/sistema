<html lang="pt-br">
    <head>
        <title>Logado</title>
    </head>
    <body>
        <?php
        include_once './conexao1.php';
        session_start();
        $log = $_SESSION['sessao_id'];
        if ($log == null) {
            //header("Location: 'index.php'");
            echo "<script> location.href = ('index.php')</script>";
            //echo "<script> alert('foi')</script>";
        } else {
            //header("Location: 'index.php'"); 
            //echo "<script> location.href = index.php</script>";
            //echo "<script> alert('houve erro')</script>";
        }

/*
        session_start();
        $id = isset($_SESSION['sessao_id']);
        if ($id == null || $_SESSION['sessao_id'] !== null) {
            //header("Location: index.php");
        } else {
            $username = $_SESSION['sessao_nome'];
        }*/
        ?>
    </body>
</html>