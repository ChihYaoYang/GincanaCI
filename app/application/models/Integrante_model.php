<?php
/* Classe model da tabela gincana do DB
 * @author Yang  
 */
 class Integrante_model extends CI_model{
    const table = 'integrante';
    //Read
    public function getAll() {
        $this->db->order_by('nome_equipe', 'ASC');
        //Fazer join pega dados de equipe
        $this->db->select('integrante.*, equipe.nome as nome_equipe');
        $this->db->from('integrante');
        $this->db->join('equipe', 'equipe.id=integrante.id_equipe', 'inner');
        $query = $this->db->get();
        return $query->result();
    }    
    //Create
    public function insert($data = array()) {
        $this->db->insert(self::table, $data);
        return $this->db->affected_rows();
    }
 }
 ?>