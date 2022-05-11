<?php

    class LoginModel extends CI_Model {

        public function Registrar($data){

            try{
                if ($this->ValidaEmail($data["email"])){
                    //Faz insert dinamicamente
                    $this->db->insert("usuario", $data);                    
                    
                    return true;
                }
                else{
                    return false;
                }
            } 
            catch(Exception $ex){
                return false;
            }
        }
        public function ValidaEmail($email){
            // Armazenando o SELECT
            $sql = "SELECT  COUNT(1) as total
                    FROM    usuario
                    WHERE   email='". $email ."'";

            // Armazena o resultado do SELECT
            $retorno = $this->db->query($sql)->result();

            // Se retornar algum registro retorna Falso
            if ($retorno[0]->total == 0){
                return true;
            }
            return false;
        }
        public function CriarSenha($email, $chave, $senha){
            
            if ($this->ValidaChave($email, $chave)){
                $sql = "UPDATE  usuario
                            SET  senha='". $senha ."'
                            WHERE   email='". $email ."'
                              AND   chave='". $chave ."'";

                try{
                    $this->db->query($sql);
                    return true;
                }
                catch(Exception $ex){
                    return false;
                }
            }
            return false;
        }
        public function ValidaChave($email, $chave){
            // Armazenando o SELECT
            $sql = "SELECT  COUNT(1) as total
                    FROM    usuario
                    WHERE   email='". $email ."'
                        AND chave='". $chave ."'
                ";

            // Armazena o resultado do SELECT
            $retorno = $this->db->query($sql)->result();

            // Se retornar algum registro retorna Falso
            if ($retorno[0]->total == 0){
                return false;
            }
            return true;
        }
        public function ValidaLogin($email, $senha){
            $sql = "SELECT COUNT(1) as total
                    FROM usuario 
                    WHERE email='". $email ."' 
                        AND senha='". $senha ."'";

            $retorno = $this->db->query($sql)->result();

            if ($retorno[0]->total == 0){
                return false;
            }
            return true;
        }
    }
?>