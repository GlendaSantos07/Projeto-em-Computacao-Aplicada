<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
$nome=addslashes($_POST['name']);
$email=addslashes($_POS['email']);
$opcao=addslashes($_POST['opcao']);
$mensagem=addslashes($_POST['message']);

$to = "glendasantossilva334@uni9.edu.br";
$subject = "Chatbot LogIT";

$body = "Nome: " .$nome. "\r\n";
        "E-mail: " .$email. "\r\n";
        "Mensagem: " .$mensagem. "\r\n";

  $header = "from:fdb30.awardspace.net". "\r\n". "Reply-to: " .$email. "\r\n" ."X=Mailer:PHP/" .phpversion();

    if(mail($to, $subject, $body, $header)){
        echo"E-mail successfully sent";
    }else{
        echo("Unsent E-mail");
    }
}
?>