<?php




class Login {
    private $email;
    private $pass;
    private $nome;

    public function __construct($email,$pass,$nome){
        $this -> nome = $nome;
        $this -> setEmail( $email);
        $this -> setPass( $pass);
        
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getEmail(){
       
        return $this->email;
    }
    public function setEmail($e){
        $email = filter_var($e,FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    public function getPass(){
        return $this->pass;
    }
    public function setPass($p){
        $this->pass = $p;
    }
    
    public function SignIn(){
        if($this->email == "teste@teste.com" and $this->pass == "1234"){
            echo "Logado";
        }else {
            echo "dados invalidos";
        }
            
    }

}

$logar = new Login('teste@teste.com','1234','Rafael');

$logar -> SignIn();

echo "<br>";
echo $logar -> getNome();
echo "<br>";
echo $logar -> getEmail();
echo "<br>";
echo $logar -> getPass();
