<?php

include 'mysqlcon.php';
class Users{
    private $name;
    private $email;
    private $password;
    private $phone;



//  Getters and Setters

    public function getName()
    {
        return $this->name;
    }

    
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

   
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    
    public function getPhone()
    {
        return $this->phone;
    }

    
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }


    public function valitationFields(){
        $patternName = "/^[a-z0-9]+$/i";
        $patternEmail = "/^[a-z0-9\_\-]+@[a-z0-9]+.(com|br|com.br)$/i";
        $patternPassword = "/^[a-z0-9]{5,35}$/i";
        $patternPhone = "/^[0-9]{5,25}$/";
        if(!preg_match($patternName, $this->name) && !preg_match($patternEmail, $this->email) && !preg_match($patternPassword, $this->password) && !preg_match($patternPhone, $this->phone)):
            echo "Inválidos<br><br>
            Nome: {$this->name}<br>
            Email: {$this->email}<br>
            Senha: {$this->password}<br>
            Telefone: {$this->phone}";

        else: 
            return true;
        endif;
    }
    public function init(){
        return $this->valitationFields();
    }
}
?>
