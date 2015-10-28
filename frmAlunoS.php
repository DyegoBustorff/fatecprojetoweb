<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="frmAlunoS.aspx.cs" Inherits="SAC_CSHARP.frmAlunoS" %>

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

<head runat="server">
     <p>
     <button title="Sair" style="width: 49px"></button>
     </p>
     <div align="center"><img src="Imagem/SCA.png" /></div>
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <label>Aluno</label>
    <div>
        <label>Pesquisar</label><textbox id="txtPesquisa" runat="server"></textbox>
        <asp:GridView ID="GridView1" runat="server" class="table table-condensed">
            <Columns>
                <asp:ButtonField ButtonType="Button" CommandName="Edit" HeaderText="Alterar" ShowHeader="True" Text="Alterar" />
                <asp:ButtonField ButtonType="Button" CommandName="Delete" HeaderText="Excluir" ShowHeader="True" Text="Excluir" />
            </Columns>
        </asp:GridView>
        
    </div>
    </form>
</body>
