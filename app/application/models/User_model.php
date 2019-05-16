<?php
/* Classe model da tabela gincana do DB
 * @author Yang  
 */
class User_model extends CI_Model
{
    const table = 'usuario';
    public function getAll()
    {
        $query = $this->db->get(self::table);
        return $query->result();
    }
}
