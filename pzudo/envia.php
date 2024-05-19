<?php
    //Guardar os dados do usuario em uma variavel
    $nome = addslashes($_POST('name'));
    $escolha1 = addslashes($_POST('esc1'));
    $escolha2 = addslashes($_POST('esc2'));
    $quantidade = addslashes($_POST('quantity'));
    $email = addslashes($_POST('email'));

    $para = "gabriellvillarejos@gmail.com";
    $assunto = "Coleta de Dados - Ze do Milho";

    $corpo = "Nome: ".$nome."\n"."Escolha1: ".$escolha1."\n"."Escolha2: ".$quantidade."\n"."Email: ".$email;
    $cabeca = "From: ga923290@gamil.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }
?>