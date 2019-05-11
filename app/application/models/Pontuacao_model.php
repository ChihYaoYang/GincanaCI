<?php

/* Classe model da tabela gincana do DB
 * @author Yang  
 */

class Pontuacao_model extends CI_Model {

    const table = 'pontuacao';

    public function getAll() {
        $this->db->order_by('pontos', 'DESC');
        //Join tabela Equipe
        $this->db->select('pontuacao.*, equipe.nome as nome_equipe');
        $this->db->select('pontuacao.*, prova.nome as nome_prova');
        $this->db->select('pontuacao.*, usuario.nome as nome_usuario');
        $this->db->from('pontuacao');
        $this->db->join('equipe', 'equipe.id=pontuacao.id_equipe', 'inner');
        $this->db->join('prova', 'prova.id=pontuacao.id_prova', 'inner');
        $this->db->join('usuario', 'usuario.id=pontuacao.id_usuario', 'inner');
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
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->delete(self::table);
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    //GetId
    public function getId($id) {
        $this->db->where('id', $id);
        $query = $this->db->get(self::table);
        return $query->row(0);
    }

    //Update
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