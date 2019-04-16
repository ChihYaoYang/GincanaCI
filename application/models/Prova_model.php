<?php
/*Classe model da tabela gincana do DB
 *@author Yang  
 */
class Prova_model extends CI_Model {
    //Busca tabela prova no DataBase e fazer select
    public function getAll() {
        $query = $this->db->get('prova');
        return $query->result();
    }
}
?>