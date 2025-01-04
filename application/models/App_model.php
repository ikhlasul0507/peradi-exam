<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App_model extends CI_Model
{
    public function __construct()
    {
        // $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
    }

    public function create($table, $data, $batch = false)
    {
        if ($batch === false) {
            $insert = $this->db->insert($table, $data);
        } else {
            $insert = $this->db->insert_batch($table, $data);
        }
        return $insert;
    }

    public function update($table, $data, $pk, $id = null, $batch = false)
    {
        if ($batch === false) {
            $insert = $this->db->update($table, $data, array($pk => $id));
        } else {
            $insert = $this->db->update_batch($table, $data, $pk);
        }
        return $insert;
    }

    public function delete($table, $data, $pk)
    {   
        $this->db->where_in($pk, $data);
        return $this->db->delete($table);
    }

    function getWhere($table, $data)
	{
		return $this->db->get_where($table,$data)->row_array();
	}

    public function getListDataByColumnGeneral($table, $kolom, $value_kolom)
    {
        $this->db->where_in($kolom, $value_kolom);
        $query = $this->db->get($table)->row_array();
        return $query;
    }

    public function getListData($table, $order_by, $search = null, $kolom_search = null, $typeSearch = null)
    {
        if ($search == null || $typeSearch == null){
            $result = $this->db->query("SELECT * FROM $table ORDER BY $order_by DESC")->result_array();
        } else if ($search != null && $typeSearch == 'like'){
            $result = $this->db->query("SELECT * FROM $table WHERE $kolom_search LIKE '%$search%' ORDER BY $order_by DESC")->result_array();
        } else if ($search != null && $typeSearch == 'equals'){
            $result = $this->db->query("SELECT * FROM $table WHERE $kolom_search = '$search' ORDER BY $order_by DESC")->row_array();
        }

        return $result;
    }

    public function getListDataQuestions($kolom_search = null, $type_search = null, $value_search = null)
    {
        if ($kolom_search != null && $type_search == 'like' && $value_search != null){
            $result = $this->db->query("SELECT q.*, c.course_name FROM m_questions q, m_course c WHERE q.id_course = c.id_course AND $kolom_search LIKE '%$value_search%' ORDER BY q.id_questions DESC")->result_array();
        } else if ($kolom_search != null && $type_search == 'equals' && $value_search != null){
            $result = $this->db->query("SELECT q.*, c.course_name FROM m_questions q, m_course c WHERE q.id_course = c.id_course AND $kolom_search = '$value_search' ORDER BY q.id_questions DESC")->result_array();
        } else if ($kolom_search != null && $type_search == 'do' && $value_search != null){
            $result = $this->db->query("SELECT
                                          q.`id_questions`,
                                          q.`question_description`,
                                          q.`option_a`,
                                          q.`option_b`,
                                          q.`option_c`,
                                          q.`option_d`,
                                          q.`option_e`,
                                          q.`question_type`,
                                          c.`course_name`,
                                          c.`course_duration`,
                                          c.`id_course`
                                        FROM
                                          m_questions q,
                                          m_course c
                                        WHERE q.`id_course` = c.`id_course`
                                        AND $kolom_search = '$value_search' ORDER BY RAND()")->result_array();
        } else if ($kolom_search != null && $type_search == 'list_to' && $value_search != null){
            $idAnswer = json_decode($value_search['id_answer']);
            $idUser = json_decode($value_search['id_users']);
            $result = $this->db->query("SELECT
                                          *,
                                          TIMEDIFF(end_time, start_time) AS selisih
                                        FROM
                                          list_answers
                                        WHERE $kolom_search = '$idAnswer' AND id_users = '$idUser'
                                        ORDER BY dateCreated DESC")->result_array();
        } else if ($kolom_search != null && $type_search == 'result_to' && $value_search != null){
            $result = $this->db->query("SELECT
                                          *,
                                          TIMEDIFF(end_time, start_time) AS selisih
                                        FROM
                                          list_answers
                                        WHERE $kolom_search = '$value_search'
                                        ORDER BY dateCreated DESC")->row_array();
        } else {
            $result = $this->db->query("SELECT q.*, c.course_name FROM m_questions q, m_course c WHERE q.id_course = c.id_course ORDER BY q.id_questions DESC")->result_array();
        }
       
        return $result;
    }

    public function getListDataMyTryout($kolom_search = null, $type_search = null, $value_search = null)
    {
        if ($kolom_search != null && $type_search == 'like' && $value_search != null){
            $result = $this->db->query("SELECT (SELECT COUNT(id_course) AS total FROM m_questions WHERE id_course = a.id_course) AS total,a.* FROM m_course a WHERE a.course_type='T' AND $kolom_search LIKE '%$value_search%' ORDER BY id_course DESC")->result_array();
        }else if ($kolom_search != null && $type_search == 'list' && $value_search != null){
            $result = $this->db->query("SELECT (SELECT COUNT(id_course) AS total FROM m_questions WHERE id_course = a.id_course) AS total,a.* FROM m_course a WHERE a.course_type='T' AND $kolom_search IN ('$value_search') ORDER BY id_course DESC")->result_array();
        }else if ($kolom_search != null && $type_search == 'list_like' && $value_search != null){
            $kol_name = $kolom_search[0];
            $kol_id = $kolom_search[1];
            $val_name = json_decode($value_search['value']);
            $val_id = join("','",json_decode($value_search['list_id']));

            $result = $this->db->query("SELECT (SELECT COUNT(id_course) AS total FROM m_questions WHERE id_course = a.id_course) AS total,a.* FROM m_course a WHERE a.course_type='T' AND $kol_name LIKE '%$val_name%'  AND $kol_id IN ('$val_id') ORDER BY id_course DESC")->result_array();
        }else{
            $result = $this->db->query("SELECT (SELECT COUNT(id_course) AS total FROM m_questions WHERE id_course = a.id_course) AS total,a.* FROM m_course a WHERE a.course_type='T' ORDER BY id_course DESC")->result_array();
        }
        return $result;
    }

    public function getListDataMyBimbel($kolom_search = null, $type_search = null, $value_search = null)
    {
        if ($kolom_search != null && $type_search == 'list_like' && $value_search != null){

        }else{
            $result = $this->db->query("SELECT (SELECT COUNT(id_course) AS total FROM m_questions WHERE id_course = a.id_course) AS total,a.* FROM m_course a WHERE a.course_type='C' ORDER BY id_course DESC")->result_array();
        }
        return $result;
    }

    public function getListDataMyPackages($kolom_search = null, $type_search = null, $value_search = null)
    {
        if ($kolom_search != null && $type_search == 'equals' && $value_search != null){
            $result = $this->db->query("SELECT * FROM m_packages WHERE $kolom_search = '$value_search' ORDER BY id_package DESC")->row_array();
            if($result != null){
                    $id_course = join("','",json_decode($result['package_includes']));
                    $cek = $this->db->query("SELECT * FROM m_course WHERE id_course IN ('$id_course')")->result_array();
                    $result['list_course'] = $cek;
            }
            return $result;
        }else{
            $data = [];
            $result = $this->db->query("SELECT * FROM m_packages ORDER BY id_package DESC")->result_array();
            if($result != null){
                foreach ($result as $key) {
                    $id_course = join("','",json_decode($key['package_includes']));
                    $cek = $this->db->query("SELECT * FROM m_course WHERE id_course IN ('$id_course')")->result_array();
                    $key['list_course'] = $cek;
                    array_push($data, $key);
                }
            }
            return $data;
        }

    }

    public function getDataAllAnswers()
    {
        $query = "SELECT 
                        ls.id_users, 
                        MAX(ls.value_answers) AS score, 
                        us.id_user_master,
                        mc.course_name
                    FROM 
                        list_answers ls
                    INNER JOIN 
                        users us ON ls.id_users = us.id_users
                    INNER JOIN 
                        m_course mc ON ls.id_course = mc.id_course
                    GROUP BY 
                        ls.id_users, us.id_user_master";

        return $this->db->query($query)->result_array();
    }
}
