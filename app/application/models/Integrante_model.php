<?php

/* Classe model da tabela gincana do DB
 * @author Yang  
 */

class Integrante_model extends CI_model {

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

    //Delete
    public function delete($id) {
        //Valida
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->delete(self::table);
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    //update
    public function getId($id) {
        $this->db->where('id', $id);
        $query = $this->db->get(self::table);
        return $query->row(0);
    }

    public function update($id, $data = array()) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->update(self::table, $data);
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}

?>