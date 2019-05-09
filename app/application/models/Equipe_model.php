<?php
/* Classe model da tabela gincana do DB
 * @author Yang  
 */
class Equipe_model extends CI_Model{
    const table = 'equipe';
    
    public function getAll(){
        $query = $this->db->get(self::table);
        return $query->result();
    }
}
?>