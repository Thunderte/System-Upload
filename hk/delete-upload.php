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
    $arquivo = filter_input(INPUT_GET, "arquivo", FILTER_SANITIZE_NUMBER_INT);
    $pasta = filter_input(INPUT_GET, "pasta", FILTER_SANITIZE_NUMBER_INT);

    if (empty($id)) {
        echo 'Arquivo não encontrado!';
        exit();
    }else {

        $mensagem = $pasta.$arquivo . " Deletado.";
        $tipo = "Arquivo Deletado";
        $logs = $dbh->prepare("INSERT INTO logs(tipo, mensagem, author, data) VALUES (?,?,?,?)");
        $logs->bindParam(1, $tipo);
        $logs->bindParam(2, $mensagem);
        $logs->bindParam(3, $_SESSION['username']);
        $logs->bindValue(4, date('d/m/Y H:i'));
        $logs->execute();

        $apagando = $dbh->prepare("DELETE FROM uploads WHERE id = :id");
        $apagando->bindParam(':id', $id);
        $apagando->execute();

        @unlink($pasta.$arquivo);
        echo 'Arquivo deletado com sucesso!';

        header('Location: /hk/uploads.php');

    }
}
?>