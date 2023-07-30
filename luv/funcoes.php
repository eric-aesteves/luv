<?php 
    //Incluindo a conexão do banco
    include_once "conexao.php";

    //Função para cadastrar usuário
    function cadastrandoUsuario($conexao){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $hobbies = $_POST['hobbies'];
    $sexo = $_POST['sexo'];
    $orientacao = $_POST['orientacao'];
    $senha = $_POST['senha'];

    $inserindo = mysqli_query($conexao,"INSERT INTO user(nome,email,data_nascimento,genero,hobbies,sexo,orientacao,senha) VALUES('$nome','$email','$data_nascimento','$genero','$hobbies','$sexo','$orientacao','$senha')");

    header("location:index.php");
    }

    //Função para verificar se o login está correto
    function verificandoUser($conexao){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $selecionando = mysqli_query($conexao,"SELECT * FROM user WHERE email = '$email' and senha = '$senha'");
    
        $num = mysqli_num_rows($selecionando);
        if($num == 1){
            while($row = mysqli_fetch_array($selecionando)){
                $id = $row['id'];
                $nome = $row['nome'];
                $email = $row['email'];
                $data_nascimento = $row['data_nascimento'];
                $sexo = $row['sexo'];
                $orientacao = $row['orientacao'];
                
                //Iniciando uma sessão para o usuário
                session_start();

                //Armazenando o id do usuário em uma sessão
                $_SESSION['id'] = $id;

                //Armazenando o nome do usuário em uma sessão
                $_SESSION['nome'] = $nome;

                //Armazenando o email do usuário em uma sessão
                $_SESSION['email'] = $email;

                //Armazenando o sexo do usuário em uma sessão
                $_SESSION['sexo'] = $sexo;

                //Armazenando a orientação do usuário em uma sessão
                $_SESSION['orientacao'] = $orientacao;

                //Armazenando a data de nascimento do usuário em uma sessão
                $_SESSION['data_nascimento'] = $data_nascimento;
                
                //Enviando o usuário para a tela do menu
                header("Location: menu.php");
            }   
        }
        else{
            //Login não existe
            echo "Email ou senha inválido";
            
        }
    }
    //Função para dar like e verificar possivel match
    function likeUser($conexao,$idUser1,$idUser2){
        //Inserindo o like no usuário
        mysqli_query($conexao,"INSERT INTO match(id_user1,id_user2) VALUES('$idUser1'.'$idUser2')");

        //Verificando um possivel match
        $VerificandoMatch = mysqli_query($conexao,"SELECT * FROM match where id_user2 = '$idUser2'");
        while($row = mysqli_fetch_array($VerificandoMatch)){
            //armazenando o id do user1
            $id = $row['id_user1'];

            //se o usuário 2 deu like no usuário 1
            if ($id == $idUser1){
                $match = true;
                return $match;
            }
        }
    }

?>