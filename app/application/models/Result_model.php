<?php
/* Classe model da tabela gincana do DB
 * @author Yang  
 */
class Result_model extends CI_Model
{
    public function resultado()
    {
              //Join tabela Equipe
              $this->db->select('pontuacao.*, equipe.nome as nome_equipe');
              $this->db->select_SUM('pontos');
              $this->db->from('pontuacao');
              $this->db->join('equipe', 'equipe.id=pontuacao.id_equipe', 'inner');
              $this->db->group_by('id_equipe');
              $this->db->order_by('pontos DESC');
              $this->db->limit(6);
              $query = $this->db->get();
              return $query->result();  
    }
}