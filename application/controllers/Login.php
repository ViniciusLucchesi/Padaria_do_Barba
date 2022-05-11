<?php

    class Login extends CI_Controller {
        
        private $qqr = "thdkaonntdlkjif2jkl598dnkl4ejki98vnselkj498djdklfds984ejkl32jklds0";

        public function __construct()
        {
            parent::__construct();
            $this->load->model("LoginModel");
        }

        // Renderiza as páginas
        public function Index(){
            $this->template->load('templates/loginTemp', 'login/login');
        }
        public function Registro(){
            // $this->load->view("login/register");
            $this->template->load('templates/loginTemp', 'login/register');
        }
        public function RegistrarSenha(){
            // $this->load->view("login/registrarsenha");
            $this->template->load('templates/loginTemp', 'login/registrarsenha');
        }
        public function SalvarRegistro(){
            // Gerando números aleatórios
            $num1 = rand(0, 9);
            $num2 = rand(0, 9);
            $num3 = rand(0, 9);
            $num4 = rand(0, 9);
            $num5 = rand(0, 9);
            $num6 = rand(0, 9);

            // Concatenando os valore em uma variávevl
            $chave = $num1 .''. $num2 .''. $num3 .'-'. $num4 .''. $num5 .''. $num6;

            $data = array(
                "email" => $_POST["email"],
                "nome" => $_POST["nome"],
                "chave" => $chave
            );

            $retorno =  $this->LoginModel->Registrar($data);
            if ($retorno) {
                echo "Veja seu E-mail, para continuar o Cadastro";
            }
            else{
                echo "Erro ao criar o usuário!";
            }
        }
        
        // Altera os dados do Banco
        public function AlterarSenha(){
            $senha = md5($_POST["senha"] . $this->qqr);
            $email = $_POST["email"];
            $chave = $_POST["chave"];

            // Salva a senha no usuário
            $retorno = $this->LoginModel->CriarSenha($email, $chave, $senha);
            if ($retorno){
                echo "Senha cadastrada com sucesso.";    
            }
            else {
                echo "Senha não pode ser cadastrada."; 
            }
        }
        public function ValidaLogin(){
            // Dados recebidos do formulário
            $email = $_POST["email"];
            $senha = $_POST["senha"];
         
            // Gera o MD5 da senha digitada pelo usuário 
            $senha = md5($senha . $this->qqr);

            // Compara o MD5 gerado com a senha cadastrada no banco
            $retorno = $this->LoginModel->ValidaLogin($email, $senha);
            if ($retorno){
                $_SESSION["admin_page"] = array(
                    "email" => $email,
                    "admin" => true
                );
                
                // Redireciona o usuário para a página principal
                header("location: /admin");
            }
            else {
                echo "Não foi possível logar";
            }
        }
        public function Deslogar(){
            unset($_SESSION["admin_page"]);
            header("location: /padaria");
        }
    }
?>