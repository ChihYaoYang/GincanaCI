<?php

/* Classe model da tabela gincana do DB
 * @author Yang  
 */

class Pontuacao_model extends CI_Model {

    const table = 'pontuacao';

    public function getAll() {
        $query = $this->db->get(self::table);
        return $query->result();
    }

    //Create
    public function insert($data = array()) {
         $this->db->insert(self::table, $data);
        return $this->db->affected_rows();
    }

}

?>