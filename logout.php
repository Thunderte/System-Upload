<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['id'])){
    session_destroy();
    header('Location: index');
}
else if(!isset($_SESSION['id'])){
    echo 'Você não tem nenhum login!';
    header('Location: index');
}

?>