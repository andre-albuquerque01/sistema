<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);

                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });
    </script>
    <style>
        body {
            background: #1B2029;
            color: white;
            font-weight: 100px;
        }

        #titulo {
            color: red;
            font-size: 30px;
            margin-left: 5%;
            width: 90px;
            height: 50px;
            margin-top: 0;
            text-align: center;
            font-family: 'Akaya Telivigala', cursive;
            margin-top: 3%;
            position: absolute;
            /* 
            transform: skew(900deg); */
        }

        #form {
            text-align: center;
            width: 20%;
            margin-left: 42%;
            margin-top: 2%;
            line-break: normal;
            flex-direction: column;
        }

        label {
            display: block;
            line-break: normal;
            flex-direction: column;
            font-size: 18px;
            align-items: center;
        }

        input {
            background: #161923;
            width: 150px;
            height: 22px;
            color: wheat;
            font-size: 14px;
            padding: 0 0.5%;
            margin-top: 0;
            outline: none;
            border: 1px #040B18;
            border-radius: 10px;
            z-index: -1;

        }

        #button {
            cursor: pointer;
            border: none;
            border-radius: 40px;
            width: 150px;
            height: 25px;
            background: #104E8B;
            font-size: 90%;
            margin-left: 2;
            margin-top: 10px;
            color: wheat;
        }

        #cicle1 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #F0F8FF, #6495ED);
            clip-path: circle(30% at right 100%);
            z-index: -1;
        }

        #cicle2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #F0F8FF, #6495ED);
            clip-path: circle(30% at left 0%);
            z-index: -1;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
    </style>
</head>

<body>
    <?php
    include_once 'logado.php';
    include_once 'conexao1.php';
    /* session_start();
          $id = $_SESSION['sessao_id']; */
    ?>
    <div id="cicle1"></div>
    <div id="cicle2"></div>
    <h2 id="titulo">Cadastro de Usuario</h2>
    <div id="form">

        <form action="recebe_usuario.php" method="POST">

            <p>Nome:</p>
            <input type="text" name="nome" placeholder="Nome completo" aria-label="default input example" required><br />
            <p>Telefone:</p>
            <input type="number" name="telefone" placeholder="DDD e Telefone" aria-label="default input example" required><br />
            <p>Cep:</p>
            <input name="cep" type="text" id="cep" placeholder="CEP" value="" size="10" maxlength="9" required /><br />
            <p>Quadra:</p>
            <input name="rua" type="text" id="rua" placeholder="Quadra" size="60" required /><br />
            <p>Bairro:</p>
            <input name="bairro" type="text" id="bairro" placeholder="Bairro" size="40" required /><br />
            <p>Cidade:</p>
            <input name="cidade" type="text" id="cidade" placeholder="Cidade" size="40" required /><br />
            <p>Estado:</p>
            <input name="uf" type="text" id="uf" placeholder="Estado" size="2" required /><br />
            <p>Complemento:</p>
            <input name="complemento" type="text" id="uf" placeholder="Número da casa" size="2" required /><br />
            <button type="submit" id="button" name="id_conta"> Cadastrar </button>

        </form>
    </div>
    <!-- <div id="imagem"> 
            <img src="https://raw.githubusercontent.com/giovannamoeller/sign-up-form/8e94664e87e1e591bf244d352e675dbd5167bcdf/assets/mobile.svg" style="width: 30%; height: 50%;  margin-left: 70%;">
        </div> -->


</body>

</html>