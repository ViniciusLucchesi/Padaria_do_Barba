<?php
    class UserModel extends CI_Model {
        
        public function selecionarUsuarios(){
            $retorno = $this->db->query("SELECT * FROM usuario");
            return $retorno->result();
        }
        public function buscarUsuario($id){
            $retorno = $this->db->query("SELECT * FROM usuario WHERE id = " . $id);
            return $retorno->result();
        }
        public function salvar($id, $nome, $email){
            // Criando o UPDATE
            $sql = "UPDATE usuario 
                        SET nome = '".$nome."',
                            email =  '".$email."'
                        WHERE   id = ".$id.";";                                 

            // Realizando o UPDATE
            $this->db->query($sql);
            return true;
        }
        public function excluir($id){
            $sql = "DELETE FROM usuario WHERE id=".$id;
            $this->db->query($sql);
        }
    }
?>