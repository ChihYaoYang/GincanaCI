<?php
/* Classe model da tabela gincana do DB
 * @author Yang  
 */
class Equipe_model extends CI_Model{
    const table = 'equipe';
    //Read
    public function getAll(){
        //Orderna tabela por nome
        $this->db->order_by('nome', 'ASC');
        $query = $this->db->get(self::table);
        return $query->result();
    }
    /*
    public function countrow(){
        $query = $this->db->query('SELECT id FROM equipe');
        return $query->num_rows();
    }
    */
    //Create
    public function insert($data = array()) {
        $this->db->insert(self::table, $data);
        return $this->db->affected_rows();
    }
    //Delete
    public function deletar($id) {
        if($id > 0) {
            $this->db->where('id',$id);
            $this->db->delete(self::table);
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
    //GetID
    public function getId($id){
        $this->db->where('id', $id);
        $query = $this->db->get(self::table);
        return $query->row(0);
    }
    //Update
    public function update($id, $data=array()) {
        if($id > 0){
            $this->db->where('id' , $id);
            $this->db->update(self::table , $data);
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
}
?>