<?php

/**
 * Classe model da tabela usuario do DB
 * @author Yang
 */
class Usuario_model extends CI_Model {
    const password = 'ryanSENAC';
    const table = 'usuario';
    //GET_ID
    public function getId($id) {
        $this->db->where('id', $id);
        $query = $this->db->get(self::table);
        //retorna apenas a primeira linha
        return $query->row(0);
    }

    //Método que busca usuario no banco de dados
    //Recebe parametro email e senha
    public function getUsuario($email, $senha) {
        //Validar Email or Username and senha
        $this->db->where('(email = "' . $email . '" OR nome = "' . $email . '") AND senha ="' . sha1($senha . 'ryanSENAC') . '"');
        //$this->db->where('(email = "'.$email.'" OR nome = "' . $email . '") AND senha ="'. $senha.'"');
        $query = $this->db->get(self::table);
        return $query->row(0);
    }

    //Insert
    //Passa $data no conttroller como array
    public function insert($data = array()) {
        $data['senha'] = sha1($data['senha'] . self::password);
        $this->db->insert(self::table, $data);
        return $this->db->affected_rows();
    }

    //Método que valida na sessão se o usuário esta logado
    public function verificaLogin() {
        //resgata na sessão o status logado e o id do usuario
        $logado = $this->session->userdata('logado');
        $idUsuaio = $this->session->userdata('idUsuario');
        //verifica se o status está setado, ou não está true, ou não tem isUsuario
        if ((!isset($logado)) || ($logado != TRUE) || ($idUsuaio <= 0)) {
            //redireciona obrigando o login...
            redirect(base_url() . 'Usuario/login');
        }
    }

}
