<?php

    class Padaria extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("PadariaModel");
        }

        // Renderiza as páginas
        public function index() {
            $padaria = $this->PadariaModel->selecionarSalgados();
            $tabela = $tabela = $this->gerar_tabela($padaria);

            $variavel = array(
                "titulo" => "Padaria do Barba",
                "tabela" => $tabela
            );

            $this->template->load('templates/userTemp', 'padaria/index', $variavel);
        }
        public function bebidas(){
            $bebidas = $this->PadariaModel->selecionarBebidas();
            $tabela = $this->gerar_tabela($bebidas);

            $variavel = array(
                "titulo" => "Padaria do Barba",
                "tabela" => $tabela
            );

            $this->template->load('templates/userTemp', 'padaria/bebidas', $variavel);
        }
        public function doces(){
            $doces = $this->PadariaModel->selecionarDoces();
            $tabela = $this->gerar_tabela($doces);

            $variavel = array(
                "titulo" => "Padaria do Barba",
                "tabela" => $tabela
            );

            $this->template->load('templates/userTemp', 'padaria/doces', $variavel);
        }
        public function alterar(){            
            $id = $_GET["codigo"];
            $retorno = $this->PadariaModel->buscarId($id);
            
            $data = array(
                "titulo"=>"Alteração de produto",
                "data"=>$retorno[0]
            );

            $this->load->view("padaria/formAlterar", $data);
        }
        public function formNovo(){
            // Carregar formInserir.php
            $data = array(
                "titulo"=>"Novo produto"
            );

            $this->load->view("padaria/formNovo", $data);
        }

        // Funções que chamam a PadariaModel para salvar/validar coisas no banco
        public function gerar_tabela($dados){
            $tabela = "";

            foreach($dados as $item ) {
                $tabela = $tabela .'
                    <div class="card">
                        <div class="imgBx">
                            <img src="'. $item->imagem .'" alt="">
                        </div>
                        <div class="information">
                            <div class="informationBx">
                                <h3>'. $item->produto .'<br><span>R$'. $item->valor .'</span></h3>
                            </div>
                        </div>
                    </div>               
                ';
            }
            return $tabela;
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
                header("location: /admin");
            }
            else{
                echo "Não foi possível salvar a alteração!";
            }
        }
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
                header("location: /admin");
            }
            else{
                echo "Não foi possível salvar a alteração!";
            }
        }
    }
?>