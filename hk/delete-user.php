<?php
if(!$_SESSION){
    session_start();
}
if($_SESSION['rank'] == 1 || $_SESSION['rank'] == 0) {
    header('Location: /upload');
} else if($_SESSION['rank'] == 2) {

    ob_start();

    include_once '../database/connection.php';

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    $user = filter_input(INPUT_GET, "username", FILTER_SANITIZE_NUMBER_INT);
    $rank = filter_input(INPUT_GET, "rank", FILTER_SANITIZE_NUMBER_INT);

    if (empty($id)) {
        echo 'User não encontrado!';
        exit();
    }


    if($id = $_SESSION['id']){
        echo 'Você não pode deletar sua própria conta';
        header('Location: /hk/');
    }
    else if($_SESSION['rank'] < $rank) {
        echo 'Seu rank é menor do que a da pessoa que você quer excluir';
        header('Location: /hk/');
    } else {

        $mensagem = "Usuário" . $user . "deletado";
        $tipo = "User Delete";
        $logs = $dbh->prepare("INSERT INTO logs(tipo, mensagem, author, data) VALUES (?,?,?,?)");
        $logs->bindParam(1, $tipo);
        $logs->bindParam(2, $timensagem);
        $logs->bindParam(3, $_SESSION['username']);
        $logs->bindValue(4, date('d/m/Y H:i'));
        $logs->execute();

        $apagando = $dbh->prepare("DELETE FROM users WHERE id = :id");
        $apagando->bindParam(':id', $id);
        $apagando->execute();

        echo 'Usuário deletado com sucesso!';

        header('Location: /hk/');

    }
}
?>