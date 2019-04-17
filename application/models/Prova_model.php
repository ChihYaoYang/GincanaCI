<?php
/*Classe model da tabela gincana do DB
 *@author Yang  
 */
class Prova_model extends CI_Model {
    //Read
    
    //Busca tabela prova no DataBase e fazer select
    public function getAll() {
        $query = $this->db->get('prova');
        return $query->result();
    }
    //Create
    public function insert($data = array()) {
        $this->db->insert('prova', $data);
        return $this->db->affected_rows();
    }
}
?>