<?php 
include_once '../database/connection.php';

if(isset($_POST['register'])){
if(!$_POST['username']){
    echo 'Digite um usuário';
} else if(!$_POST['password']){
    echo 'Digite uma senha';
} else if(!$_POST['email']){
    echo 'Digite um email';
} else if(!$_POST['password_repeat']){
    echo 'Repita sua senha!';
} else if($_POST['password'] != $_POST['password_repeat']){
    echo 'As senhas não se coicidem';
}else{
    $password = md5(sha1($_POST['password']));
    $sql = $dbh->prepare('SELECT * FROM users WHERE username = :username');
    $sql->bindParam(':username', $_POST['username']);
    $sql->execute();

    $total_registros = $sql->rowCount();
    if($total_registros == 1){
        echo 'Essa conta já existe!';
    }else if($total_registros == 0){
        $rank = 1;
        $sql2 = $dbh->prepare("INSERT INTO users (username, password, email, rank) VALUES (:username, :password, :email, :rank)");
        $sql2->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
        $sql2->bindParam(':password', $password, PDO::PARAM_STR);
        $sql2->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $sql2->bindParam(':rank', $rank);


        $mensagem =  "Conta registrada username = ". $_POST['username']. " ip =". $_SERVER['HTTP_CF_CONNECTING_IP'];
        $tipo = "Registro";

        $logs = $dbh->prepare('INSERT INTO logs(tipo, mensagem, author, data) VALUES (?, ?, ?, ?)');
        $logs->bindValue(1, $tipo);
        $logs->bindValue(2, $mensagem);
        $logs->bindValue(3, $_POST['username']);
        $logs->bindValue(4, date('d/m/Y H:i'));
        $logs->execute();

        if($sql2->execute()){
            header('Location: ../index.php');
            echo 'Conta criada com sucesso!';
        }
    }
}
}

?>