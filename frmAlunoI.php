<!DOCTYPE html>

    <head id="Head1" >
        <link href="Css/bootstrap-responsive.css" rel="stylesheet" />
        <link href="Css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="Css/bootstrap.css" rel="stylesheet" />
        <link href="Css/bootstrap.min.css" rel="stylesheet" />
        <link href="Css/estilos.css" rel="stylesheet" />
        <link href="Css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" />
        <link href="Css/jquery.bxslider.css" rel="stylesheet" />
        <link href="Css/sexyalertbox.css" rel="stylesheet" />
        <link rel="Stylesheet" type="text/css" href="Css/estilos.css" />
        <link rel="Stylesheet" type="text/css" href="Css/jquery.bxslider.css" />
        <link href="Css/sexyalertbox.css" rel="stylesheet" type="text/css" />
        <link href="Css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />
  

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

    <head id="Head2" runat="server">
         <div align="rigth"><li><label>Usuario</label><button title="Sair" style="width: 49px"></button></li></div>
         <div align="center"><img src="Imagem/SCA.png" /></div>
        <title></title>
    </head>

    <body>
        <form id="form2" background="Imagens/fundo_original.jpg" runat="server">
        
        <asp:Panel ID="pnlDadosUsuario"  runat="server" Visible="false" GroupingText="Informações pessoais">
              <label id="lblEntidade" runat="server"></label>
              <label id="lblErro" runat="server"></label>
            <ul class="listaForm">
                <li>
                    <label id="lblCPF" for="txtCPf">CPF:</label>
                   <input type="text" id="txtLogin" runat="server" placeholder="Cpf">                    
                </li> 
                <li>
                    <label id="lblNome" for="txtNome">Nome:</label>
                   <input type="text" id="Text1" runat="server" placeholder="Nome"> 
                </li> 
                <li>
                    <label id="lblEmail" for="txtEmail">Email</label>
                    <input type="text" id="Text2" runat="server" placeholder="Email"> 
                </li>
                <li>
                    <label id="lblCurso" for="txtCurso">Curso:</label>
                    <select id="Select1" ><option></option></select>
                </li>
            </ul> 
             <button type="submit" id="confirmar" class="btn" >Confirmar</button>
        </asp:Panel>


            <script>

                $(document).ready(function(){
                    $("#confirmar").click(function () {
                        onclick = "inserirNoBanco()"
                    });
                });
         </script>

            <?php

            function inserirNoBanco(){
                $servername = "localhost";
                $username = "root";
                $password = "1234";
                $dbname = "SCA";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                
                $sql = "INSERT INTO Aluno (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                }

                mysqli_close($conn);
            }
            ?>

    </form>
</body>