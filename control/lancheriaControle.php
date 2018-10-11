<?php
session_start();
session_unset();
include_once '../model/lancheria.php';
$l = new Lancheria();
$l->cpf = $_POST['cpf'];
$l->end = $_POST['end'];
$l->lanche = $_POST['lanche'];
$l->bebida = $_POST['bebida'];
$l->valor = $_POST['valor'];

if ($l->validaDados()){
    $_SESSION['lancheria']= serialize($l);
    header('location:../view/Resposta.php');
}else{
    $_SESSION['erro']="Há Variáveis Vazias!!";
    header('location:../view/ErroResposta.php');
}
