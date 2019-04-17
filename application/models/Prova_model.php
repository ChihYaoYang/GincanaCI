<?php
/* Classe model da tabela gincana do DB
 * @author Yang  
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

    //Delete
    public function delete($id) {
        if ($id > 0) {
            //filtra o id que sera deletado
            $this->db->where('id', $id);
            //Deleta
            $this->db->delete('prova');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    //Update GET_ID
    public function getId($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('prova');
        //retorna apenas a primeira linha
        return $query->row(0);
    }
    //Update
    public function update($id, $data = array()) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->update('prova', $data);
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
}
?>