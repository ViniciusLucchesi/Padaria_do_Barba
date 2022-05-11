<?php

    class PadariaModel extends CI_Model {

        // Retorna todos os produtos do banco
        public function selecionarTodos() {
            $retorno = $this->db->query("SELECT * FROM produto");
            return $retorno->result();
        }
        public function selecionarSalgados(){
            $retorno = $this->db->query("SELECT * FROM produto WHERE tipo = 'salgado'");
            return $retorno->result();
        }
        public function selecionarBebidas(){
            $retorno = $this->db->query("SELECT * FROM produto WHERE tipo = 'bebida'");
            return $retorno->result();
        }
        public function selecionarDoces(){
            $retorno = $this->db->query("SELECT * FROM produto WHERE tipo = 'doce'");
            return $retorno->result();
        }

        // Realiza alterações no banco 
        public function buscarId($id){
            $retorno = $this->db->query("SELECT * FROM produto WHERE id=". $id);
            return $retorno->result();
        }
        public function salvar($id, $produto, $perecivel, $valor, $tipo, $imagem){
            // Criando o UPDATE
            $sql = "UPDATE produto 
                        SET produto = '".$produto."', 
                            perecivel =  ".$perecivel.",  
                            valor =  ".$valor.",  
                            tipo =  '".$tipo."',  
                            imagem =  '".$imagem."'
                        WHERE   id = ".$id.";";                                 

            // Realizando o UPDATE
            $this->db->query($sql);
            return true;
        }
        public function inserir($produto, $perecivel, $valor, $tipo, $imagem){
            // Montando o INSERT
            $sql = "
                    INSERT INTO produto (produto, perecivel, valor, tipo, imagem) 
                    VALUES ('".$produto."', ".$perecivel.", ".$valor.", '".$tipo."', '".$imagem."');
                ";

            // Realizando o INSERT
            $this->db->query($sql);
            return true;
        }
        public function excluir($id){
            $sql = "DELETE FROM produto WHERE id=".$id;
            $this->db->query($sql);
        }
        
    }
?>