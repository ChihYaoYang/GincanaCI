<?php

/* Classe model da tabela gincana do DB
 * @author Yang  
 */

class User_model extends CI_Model {

    const password = 'ryanSENAC';
    const table = 'usuario';

    public function getAll() {
        $query = $this->db->get(self::table);
        $this->db->select('*,(SELECT COUNT(id_usuario) FROM pontuacao WHERE id_usuario=usuario.id) as user');
        return $query->result();
    }

    //GetID
    public function getId($id) {
        $this->db->where('id', $id);
        $query = $this->db->get(self::table);
        return $query->row(0);
    }

    //Update
    public function update($id, $data = array()) {
        if ($id > 0) {
            $this->db->where('id', $id);
            $data['senha'] = sha1($data['senha'] . self::password);
            $this->db->update(self::table, $data);
            return $this->db->affected_rows();
        } else {
            return false;
        }
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

}
