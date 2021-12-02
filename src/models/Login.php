<?php

class Login extends Model{

    public function validate() {
        $errors = [];

        if(!$this->email) {
            $errors['email'] = 'Por favor, informe o e-mail';
        }

        if(!$this->password) {
            $errors['password'] = 'A senha inserida está incorreta';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }


    public function checkLogin() {
        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        if($user) { 
            if($user->end_date) {
                throw new AppException('Usuario está desligado da empresa');
            }
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }
        throw new AppException('Usuario/Senha inválidos');
    }
}