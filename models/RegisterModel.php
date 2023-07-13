<?php

namespace app\models;

class RegisterModel extends Model
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $confirmPassword;


    public function register(){

        echo "Creating new User";
    }

    public function rules(): array
    {
        return [
            'firstname'=>[self::RULE_REQUIRED],
            'lastname'=>[self::RULE_REQUIRED],
            'email'=>[self::RULE_REQUIRED,self::RULE_EMAIL],
            'password'=>[self::RULE_REQUIRED],
            'confirmPassword'=>[self::RULE_REQUIRED, [self::RULE_MATCH,'matchAttribute']],
        ];
    }
}