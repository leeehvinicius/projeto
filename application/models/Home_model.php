<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Esta classe é a responsável por gerenciar os acessórios contidos nas locações.
 * @author Mauricio Nascimento de Oliveira <mauricio_oliven.10@hotmail.com>
 * @version 0.5
 * @copyright Copyright © 2019, KAELE LTDA.
 * @access public
 * @package model 
 */
class Home_model extends CI_Model {
    function __construct() {
        $this->load->database();
    }


    public function listar() {
        $this->db->select("*");
        $this->db->from('categorias');
      
        $query = $this->db->get();      

            return $query->result_array();
        
    }
    public function listar_id($id) {
        $this->db->select("*");
        $this->db->from('categorias');
        $this->db->where('id_categorias',$id);
      
        $query = $this->db->get();      

            return $query->row_array();
        
    }
    public function salvar($data) {
        $this->db->insert('categorias', $data);
        return $this->db->insert_id();
    }
    public function update($id, $data) {
        $this->db->where('id_categorias', $id);
        $this->db->update('categorias', $data);
    }
    public function delete($id) {
        $this->db->where('id_categorias', $id);
        $this->db->delete('categorias');
    }


    













//     public function salvar_abastecimento($data) {
//         $this->db->insert('carro_abastecimento', $data);
//         return $log_registro = $this->db->insert_id();
//     }

//     public function update_abastecimento($id, $dados) {
//         $this->db->where('id_ca', $id);
//         $this->db->update('carro_abastecimento', $dados);
//     }

//     public function get_total_abastecimento($condicoes) {
//         $this->db->select("*");
//         $this->db->from('carro_abastecimento');
//         $this->db->join('carro', 'id_car=carro_id_ca', 'inner');
//         $this->db->join('usuario', 'id_usu=usuario_id_ca');
//         if ($condicoes['status'] != 'todos') {
//             $this->db->where('status_ca', $condicoes['status']);
//         }
//         if ($condicoes['placa'] != '' || $condicoes['placa'] != null) {
//             $this->db->like('placa_car', $condicoes['placa']);
//         } elseif ($condicoes['nota'] != '' || $condicoes['nota'] != null) {
//             $this->db->like('n_nota_ca', $condicoes['nota']);
//         }else {

//             $this->db->where('YEAR(data_ca) =', $condicoes['ano']);
//             if ($condicoes['mes'] != '' && $condicoes['mes'] != 0) {
//                 $this->db->where('MONTH(data_ca) =', $condicoes['mes']);
//                 if ($condicoes['dia'] != '' && $condicoes['dia'] != 0) {
//                     $this->db->where('DAY(data_ca) =', $condicoes['dia']);
//                 }
//             }
//         }

//         return $this->db->count_all_results();
//     }

//     public function get_abastecimento($condicoes) {
//         $this->db->select("*");
//         $this->db->from('carro_abastecimento');
//         $this->db->join('carro', 'id_car=carro_id_ca', 'inner');
//         $this->db->join('usuario', 'id_usu=usuario_id_ca');
//         if ($condicoes['status'] != 'todos') {
//             $this->db->where('status_ca', $condicoes['status']);
//         }
//         if ($condicoes['placa'] != '' || $condicoes['placa'] != null) {
//             $this->db->like('placa_car', $condicoes['placa']);
//         } elseif ($condicoes['nota'] != '' || $condicoes['nota'] != null) {
//             $this->db->like('n_nota_ca', $condicoes['nota']);
//         } else {

//             $this->db->where('YEAR(data_ca) =', $condicoes['ano']);
//             if ($condicoes['mes'] != '' && $condicoes['mes'] != 0) {
//                 $this->db->where('MONTH(data_ca) =', $condicoes['mes']);
//                 if ($condicoes['dia'] != '' && $condicoes['dia'] != 0) {
//                     $this->db->where('DAY(data_ca) =', $condicoes['dia']);
//                 }
//             }

//             if (array_key_exists("start", $condicoes) && array_key_exists("limit", $condicoes)) {
//                 $this->db->limit($condicoes['limit'], $condicoes['start']);
//             } elseif (!array_key_exists("start", $condicoes) && array_key_exists("limit", $condicoes)) {
//                 $this->db->limit($condicoes['limit']);
//             }
//         }
//         $this->db->order_by('data_ca', 'DESC');
//         $query = $this->db->get();

//         if ($query->num_rows() > 0) {

//             return $query->result_array();
//         }
//         return FALSE;
//     }

//     public function get_abastecimento_historico($condicoes) {
//         $this->db->select("*");
//         $this->db->from('carro_abastecimento');
//         $this->db->join('carro', 'id_car=carro_id_ca', 'inner');
//         $this->db->join('usuario', 'id_usu=usuario_id_ca');
//         $this->db->where('(status_ca="aprovado" or status_ca="finalizado")');
//         $this->db->like('placa_car', $condicoes['placa']);
//         $query = $this->db->get();

//         if ($query->num_rows() > 0) {

//             return $query->result_array();
//         }
//         return FALSE;
//     }
//      public function get_abastecimento_id($id) {
//         $this->db->select("*");
//         $this->db->from('carro_abastecimento');
//         $this->db->join('carro', 'id_car=carro_id_ca', 'inner');
//         $this->db->where('id_ca', $id);
//         $query = $this->db->get();

//         if ($query->num_rows() > 0) {

//             return $query->row_array();
//         }
//         return FALSE;
//     }
//    function delete_carro_abastecimento($id)
//     {
//         return $this->db->delete('carro_abastecimento',array('id_ca'=>$id));
//     }
}
