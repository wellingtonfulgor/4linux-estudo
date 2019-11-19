<?php

class Email{
    public static function validar(string $email){
        $email_validade = filter_var($email, FILTER_VALIDATE_EMAIL);
        if($email_validade){
            return $email;
        }else{
            throw new Exception("Email nao existe", 500);
            
        }
    }
}


