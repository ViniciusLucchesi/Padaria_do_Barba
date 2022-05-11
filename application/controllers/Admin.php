<?php

    class Admin extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("PadariaModel");
            $this->load->model("UserModel");

            if (    !isset($_SESSION["admin_page"]) ) {
                header("location: login");
            }
        }

        // Renderiza as páginas
        public function index() {
            $padaria = $this->PadariaModel->selecionarTodos();
            $tabela = "";

            foreach($padaria as $item ) {
                $tabela = $tabela .'
                    <div class="card">
                        <div class="imgBx">
                            <img src="'. $item->imagem .'" alt="">
                        </div>
                        <div class="content">
                            <div class="contentBx">
                                <h3>'. $item->produto .'<br><span>R$'. $item->valor .'</span></h3>';
                            if (isset($_SESSION["admin_page"])){
                                $tabela = $tabela .'                                    
                                    <a href="/admin/alterar?codigo='. $item->id .'">✏️</a>
                                    <a href="/admin/excluir?codigo='. $item->id .'">❌</a>
                                '; 
                            }
                            
                            $tabela = $tabela .'
                            </div>
                        </div>
                    </div>               
                ';
            }

            $variavel = array(
                "titulo" => "Padaria do Barba",
                "tabela" => $tabela
            );

            $this->template->load('templates/adminTemp', 'admin/index', $variavel);
        }
        public function alterar(){            
            $id = $_GET["codigo"];
            $retorno = $this->PadariaModel->buscarId($id);
            
            $data = array(
                "titulo"=>"Alteração de produto",
                "data"=>$retorno[0]
            );

            $this->template->load('templates/adminTemp', 'admin/formAlterar', $data);
        }
        public function alterarUser(){
            $id = $_GET["codigo"];
            $retorno = $this->UserModel->buscarUsuario($id);

            $data = array(
                "titulo"=>"Alteração de Usuário",
                "data"=>$retorno[0]
            );

            $this->template->load('templates/adminTemp', 'admin/alteraUser', $data);
        }
        public function formNovo(){
            // Carregar formInserir.php
            $data = array(
                "titulo"=>"Novo produto"
            );

            // $this->load->view("padaria/formNovo", $data);
            $this->template->load('templates/adminTemp', 'admin/formNovo', $data);
        }
        public function tableUsers(){
            $usuario = $this->UserModel->selecionarUsuarios();
            $tabela = '
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuários Administradores</h5>
                        <!-- Table Variants -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">E-mail</th>
                                </tr>
                            </thead>
                            <tbody>';

            foreach($usuario as $item ) {
                $tabela = $tabela .'                    
                        <tr>
                            <th scope="row">'. $item->nome .'</th>
                            <td>'. $item->email .'</td>
                            <td>
                                <a class="edit-user" href="/admin/alterarUser?codigo='. $item->id .'">✏️</a>
                            </td>
                            <td>
                                <a class="exclude-user" href="/admin/excluirUser?codigo='. $item->id .'">❌</a>
                            </td>
                        </tr>';
            }

            $tabela = $tabela .'           
                        </tbody>
                        </table>
                        <!-- End Table Variants -->
                    </div>
                </div>';

            $variavel = array(
                "tabela" => $tabela
            );

            $this->template->load('templates/adminTemp', 'admin/tableUser', $variavel);
        }

        // Alterações no Banco
        public function salvarAlteracao(){            
            // Buscando os valores do formulário
            $id = $_POST["id"];
            $produto = $_POST["produto"];
            $perecivel = $_POST["perecivel"];
            $valor = $_POST["valor"];
            $tipo = $_POST["tipo"];
            $imagem = $_POST["imagem"];

            // Fazendo o UPDATE
            $retorno = $this->PadariaModel->salvar($id, $produto, $perecivel, $valor, $tipo, $imagem);

            if($retorno == true){
                header("location: /padaria");
            }
            else{
                echo "Não foi possível salvar a alteração!";
            }
        }
        public function salvarAlteracaoUser(){
            // Buscando os valores do formulário
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];

            // Fazendo o UPDATE
            $retorno = $this->UserModel->salvar($id, $nome, $email);

            if($retorno == true){
                header("location: /admin/tableUsers");
            }
            else{
                echo "Não foi possível salvar a alteração!";
            }
        }
        public function salvarNovo(){            
            // Buscando os valores do formulário
            $produto = $_POST["produto"];
            $perecivel = $_POST["perecivel"];
            $valor = $_POST["valor"];
            $tipo = $_POST["tipo"];
            $imagem = $_POST["imagem"];

            // Fazendo o INSERT
            $retorno = $this->PadariaModel->inserir($produto, $perecivel, $valor, $tipo, $imagem);
            
            // Retornando para a tela inicial
            if($retorno == true){
                header("location: /padaria");
            }
            else{
                echo "Não foi possível salvar a alteração!";
            }
        }
        public function excluir(){            
            $id = $_GET["codigo"];

            $this->PadariaModel->excluir($id);
            header("location: /padaria");
        }
        public function excluirUser(){            
            $id = $_GET["codigo"];

            $this->UserModel->excluir($id);
            header("location: /admin/tableUsers");
        }
    }
?>