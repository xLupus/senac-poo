<?php

require_once("DatabaseConnection.class.php");
require_once("src/PHPMailer.php");
require_once("src/SMTP.php");
require_once("src/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Registro extends DatabaseConnection{
    private $id_cli;
    private $login;
    private $email;
    private $telefone;
    private $validado;
    private $codAcesso;
    private $tipo;



    public function setUsuario($login, $email, $telefone)
    {
        $this->login    = $login;
        $this->email    = $email;
        $this->telefone = $telefone;
    }



    public function setRegistrar()
    {
        $mail = new PHPMailer(true);
        $conn = $this->setConnection();

        for ($i = 0; $i < 6; $i++) {
            $this->codAcesso .= rand(0, 9);
        }

        $stmt = $conn->prepare("INSERT INTO usuarios (login, email, telefone, codAcesso, validado, tipo)
                                VALUES (:login, :email, :telefone, :codAcesso, '0', '0')");

        $stmt->bindParam(':login',     $this->login);
        $stmt->bindParam(':email',     $this->email);
        $stmt->bindParam(':telefone',  $this->telefone);
        $stmt->bindParam(':codAcesso', $this->codAcesso);

        if($stmt->execute()){
            $mail->isSMTP();
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

            $mail->Host       = 'smtp.hostinger.com';
            $mail->Username   = 'temporario@topsecuritty.com';
            $mail->Password   = '@#Els2556';
            $mail->Port       = 465;

            $mail->setFrom ('temporario@topsecuritty.com');
            $mail->addAddress($this->email, $this->login);
            $mail->Subject    = 'Chave de Acesso';
            $mail->Body       = 'Sua chave de Acesso é: <strong>'. $this->codAcesso . '</strong>';
            $mail->AltBody    = 'Texto sem HTML ou link';

            if ( !$mail->send() ){
                echo 'Não foi possível enviar a mensagem.<br>';
                //echo 'Erro: ' . $mail->ErrorInfo;
            }
        }

        $conn = '';
        $mail = '';
    }



    public function setLogin($login, $codAcesso){
        $conn    = $this->setConnection();
        $getPass = $conn->prepare("SELECT codAcesso
                                   FROM usuarios
                                   where login = :login");

        $getPass->bindParam(':login', $login);
        $getPass->execute();

        if($getPass = $getPass->fetch(PDO::FETCH_ASSOC)){

            if($getPass['codAcesso'] == $codAcesso)
                return true;
            else
                return false;

        }else {
            return false;
        }
    }



    public function setValidar($senha){
        $conn    = $this->setConnection();
        $getPass = $conn->prepare("SELECT codAcesso
                                   FROM usuarios
                                   where email = :email");

        $getPass->bindParam(':email', $this->email);
        $getPass->execute();

        echo "<pre>";
        var_dump($this->email);
        echo "</pre>";

        echo "<pre>";
        var_dump($senha);
        echo "</pre>";

        if ($getPass = $getPass->fetch(PDO::FETCH_ASSOC)) {
            if($getPass['codAcesso'] == $senha){
                $validade = $conn->prepare("UPDATE usuarios
                                            SET validado = 1
                                            WHERE email = :email");

                $validade->bindParam(':email', $this->email);
                $validade->execute();

            }else {
                echo "Codigo de Acesso invalido";
            }
        } else {
            echo "Codigo de Acesso invalido";
        }



    }
}
