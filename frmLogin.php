<?php
ob_start();
session_start();
if(isset($_SESSION['usuariosy']) && (isset($_SESSION['senhasy']))){
	header("location: home.php"); exit;
}
include("conexao/conexao.php");

// recuperando dados dos forms
//trim retira todos os espaços
//strip tags retira tags em php
	

    if(!isset($_POST['login'])){
        $usuario = trim(strip_tags($_POST['login']));
    $senha = trim(strip_tags($_POST['senha']));
    
    //selecionando o banco de dados
    $select = "SELECT * FROM login WHERE usuario="+$usuario+" AND senha="+$senha;
    try{
        $result = $conexao->prepare($select);
        $result->bindParam(':login', $usuario, PDO::PARAM_STR);
        $result->bindParam(':senha', $senha, PDO::PARAM_STR);
        $result->execute();
        
        $contar = $result->rowCount();
        if($contar>0){
            $usuario = $_POST['login'];
            $senha = $_POST['senha'];
            $_SESSION['usuariosy'] = $usuario;
            $_SESSION['senhasy'] = $senha;
            echo '<div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert"></button>
				<strong>Parabéns!</strong> Você esta logado.
                </div>';
            
         
            
        }else{
            echo '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert"></button>
				<strong>Atenção!</strong> Os dados estão incorreto.
                </div>';
        }
        
    }
    catch(PDOException $e){
        echo $e;
		
    }
}

?>
<!DOCTYPE html>

<head id="Head1" runat="server">
    <link href="Css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="Css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="Css/bootstrap.css" rel="stylesheet" />
    <link href="Css/bootstrap.min.css" rel="stylesheet" />
    <link href="Css/estilos.css" rel="stylesheet" />
    <link href="Css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" />
    <link href="Css/jquery.bxslider.css" rel="stylesheet" />
    <link href="Css/sexyalertbox.css" rel="stylesheet" />

    <script src="Js/bootstrap.js"></script>
    <script src="Js/bootstrap.min.js"></script>
    <link href="Js/estilos.css" rel="stylesheet" />
    <script src="Js/jquery-2.0.1.min.js"></script>
    <link href="Js/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" />
    <script src="Js/jquery.bxslider.js"></script>
    <script src="Js/jquery.bxslider.min.js"></script>
    <script src="Js/jquery.easing.1.3.js"></script>
    <script src="Js/jquery.fitvids.js"></script>
    <script src="Js/jquery.plugins.js"></script>
    <script src="Js/scripts.js"></script>

</head>

<form class="form-horizontal" >
    <div>
            <ul class="bxslider" align="center">                
                <img src="Imagem/imagem3.jpg" />
                <img src="Imagem/imagem1.jpg" />
                <img src="Imagem/imagem2.jpg" />
            </ul>
      </div>

      <li>
          <div class="control-group">
            <label class="control-label" for="inputEmail">Login</label>
            <div class="controls">
            <input type="text" id="inputEmail" name="login" value="" placeholder="Login">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputPassword">Senha</label>
            <div class="controls">
              <input type="password" id="inputPassword"  value="" name="senha" placeholder="Senha">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn">Entrar</button>
            </div>
          </div>
          </li>
    </form>


