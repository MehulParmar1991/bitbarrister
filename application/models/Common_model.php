<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Common_model extends CI_Model {

    public function &__get($key) {
        $CI = & get_instance();
        return $CI->$key;
    }

    function select_all($tbl) {
        $data = $this->db->get($tbl);
        return $data->result_array();
    }

    function select_where($table, $id) {
        $qry = $this->db->get_where($table, $id);
        $respond = $qry->result();
        return $respond;
    }

    function select_where_row($table, $id) {
        $qry = $this->db->get_where($table, $id);
        return $qry->row();
    }

    function select_update($table, $data, $id) {
        $query = $this->db->update($table, $data, $id);
        return $query;
    }

    function insert($table, $data) {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    function delete_where($tbl, $where) {
        $query = $this->db->delete($tbl, $where);
        return $query;
    }

    function inserted_id($table, $data) {
        $insert_id = $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    function get_donor_prices($donor_id) {
        $qry = $this->db->get_where('donors_prices', $donor_id);
        $respond = $qry->result_array();
        return $respond;
    }

    public function fetch_data($table_name, $limit = null, $start = null, $search_location = null, $search_amount = null, $search_key = null) {

        $limit_string = '';
        $search_by_name = '';
        $search_by_location = '';
        if ($limit != null || $start != null) {
            $limit_string = 'limit '.$start.','.$limit.'';
        }

        if ($search_location != null) {
            //$this->db->like('location', $search_location);            
            $search_by_location = 'AND donors.location like "%'.$search_location.'%"';
        }
        if ($search_key != null) {
            //$this->db->like('name', $search_key);
            $search_by_name = 'AND donors.name like "%'.$search_key.'%"';
        }
        //$this->db->where('status', 1);

        $query = $this->db->query('SELECT donors.donor_id,donors.name,donors.location as location,donors.image as image,donors.contactno as contactno,donors.email as email,donors.status,(select sum(amount) from donors_prices where donors_prices.donor_id = donors.donor_id) as donation
                FROM `donors` where donors.status = 1 '.$search_by_location.$search_by_name.' order by donation desc ' . $limit_string . '');

//        $donor_search = array('search_location' => $search_location, 'search_amount' => $search_amount, 'search_key' => $search_key);
//        $this->session->set_userdata('donor_search', $donor_search);
//        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) {
            $final_data = array();
            foreach ($query->result() as $key => $row) {
//                $data[] = $row;
//                $donar_prices = $this->get_donor_prices(array('donor_id' => $row->donor_id));
//                $total_donation = array_sum(array_column($donar_prices, 'amount'));
//                if ($search_amount != null) {
//                    if ($search_amount == " > 50000" && $total_donation > 50000) {
//                        $final_data[$key] = $row;
//                        $final_data[$key]->donation = $total_donation;
//                    } else if ($search_amount == "10000 - 500000" && ($total_donation > 10000 || $total_donation < 50000)) {
//                        $final_data[$key] = $row;
//                        $final_data[$key]->donation = $total_donation;
//                    } else if ($search_amount == " < 50000" && $total_donation < 50000) {
//                        $final_data[$key] = $row;
//                        $final_data[$key]->donation = $total_donation;
//                    }
                //} else {
                    $final_data[$key] = $row;
                    //$final_data[$key]->donation = $total_donation;
                //}
            }
            $final_data['counts'] = $query->num_rows();
//            echo "<pre>";
//            print_r($final_data);
//            die();
            return $final_data;
        }
        return false;
    }

    function committee_data($table_name, $limit = null, $start = null, $search_designation = null, $search_key = null) {
        if ($limit != null || $start != null) {
            $this->db->limit($limit, $start);
        }
        $this->db->select('committee.*,designation.name as designation_name');
        $this->db->where('committee.status', 1);
        $this->db->join('designation', 'designation.id = committee.designation');

        $committe_search = array('search_designation' => $search_designation, 'search_key' => $search_key);
        $this->session->set_userdata('committe_search', $committe_search);

        if ($search_designation != null) {
            $this->db->where('committee.designation', $search_designation);
        }
        if ($search_key != null) {
            $this->db->like('committee.name', $search_key);
            $this->db->or_like('committee.email', $search_key);
            $this->db->or_like('committee.contactno', $search_key);
        }
        $this->db->order_by('committee.created_date desc');
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) {
            $final_data = array();
            foreach ($query->result() as $key => $row) {
                $data[] = $row;
                $final_data[$key] = $row;
            }
            $final_data['counts'] = $query->num_rows();
            return $final_data;
        }
        return false;
    }

    function business_data($table_name, $limit = null, $start = null, $search_location = null, $search_amount = null, $search_key = null) {
        if ($limit != null || $start != null) {
            $this->db->limit($limit, $start);
        }
        $this->db->where('business_info.status', 1);
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) {
            $final_data = array();
            foreach ($query->result() as $key => $row) {
                $data[] = $row;
                $final_data[$key] = $row;
            }
            $final_data['counts'] = $query->num_rows();
            return $final_data;
        }
        return false;
    }

    function events_data($event_type_id, $table_name, $limit = null, $start = null, $search_location = null, $search_amount = null, $search_key = null) {
        if ($limit != null || $start != null) {
            //$this->db->limit($limit, $start);
        }
        $this->db->where('events.status', 1);
        if ($event_type_id != null) {
            $this->db->where('events.event_type', $event_type_id);
        }
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) {
            $final_data = array();
            foreach ($query->result() as $key => $row) {
                $data[] = $row;
                $final_data[$key] = $row;
            }
            $final_data['counts'] = $query->num_rows();
            return $final_data;
        }
        return false;
    }

    function matrimonial_data($table_name, $limit = null, $start = null, $search_name = null, $search_surname = null, $search_height = null, $search_education = null, $search_gender = null, $search_social_status = null, $search_birthplace = null, $search_key = null) {
        if ($limit != null || $start != null) {
            $this->db->limit($limit, $start);
        }
        $this->db->where('matrimonial.status', 1);
        if ($search_height != null) {
            if ($search_height == '4 - 5') {
                $this->db->where('matrimonial.height >= ', 4);
                $this->db->where('matrimonial.height <= ', 5);
            } else if ($search_height == '5 - 6') {
                $this->db->where('matrimonial.height >= ', 5);
                $this->db->where('matrimonial.height <= ', 6);
            } else if ($search_height == ' > 6') {
                $this->db->where('matrimonial.height > ', 6);
            }
        }
        if ($search_education != null) {
            $this->db->where('matrimonial.education != ', null);
            $this->db->like('matrimonial.education', $search_education);
        }
        if ($search_name != null) {
            $this->db->like('matrimonial.name', $search_name);
        }
        if ($search_surname != null) {
            $this->db->like('matrimonial.surname', $search_surname);
        }
        if ($search_gender != null) {
            $this->db->where('matrimonial.gender != ', null);
            $this->db->where('matrimonial.gender', $search_gender);
        }
        if ($search_social_status != null) {
            $this->db->where('matrimonial.social_status != ', null);
            $this->db->where('matrimonial.social_status', $search_social_status);
        }
        if ($search_birthplace != null) {
            $this->db->where('matrimonial.birth_place != ', null);
            $this->db->where('matrimonial.birth_place', $search_birthplace);
        }
        if ($search_key != null) {
            $this->db->like('matrimonial.name', $search_key);
            $this->db->or_like('matrimonial.whatsapp_no', $search_key);
            $this->db->or_like('matrimonial.mobile_no', $search_key);
            $this->db->or_like('matrimonial.email', $search_key);
            $this->db->or_like('matrimonial.color', $search_key);
            $this->db->or_like('matrimonial.birth_date', $search_key);
            $this->db->or_like('matrimonial.gotra', $search_key);
        }
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) {
            $final_data = array();
            foreach ($query->result() as $key => $row) {
                $data[] = $row;
                $final_data[$key] = $row;
            }
            $final_data['counts'] = $query->num_rows();
            return $final_data;
        }
        return false;
    }

    function expenses_data($table_name, $type, $limit = null, $start = null, $search_location = null, $search_amount = null, $search_key = null) {
        if ($limit != null || $start != null) {
            $this->db->limit($limit, $start);
        }
        $this->db->select('income/expense.*,events.event_name as main_event_name,event_types.name as event_type_name');
        $this->db->where('income/expense.status', 1);
        $this->db->where('income/expense.type', $type);
        $this->db->join('events', 'events.event_id = income/expense.event_id');
        $this->db->join('event_types', 'event_types.id = events.event_id');
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) {
            $final_data = array();
            foreach ($query->result() as $key => $row) {
                $data[] = $row;
                $final_data[$key] = $row;
            }
            $final_data['counts'] = $query->num_rows();
            return $final_data;
        }
        return false;
    }

    function get_donorcities() {
        $result = $this->db->query('SELECT DISTINCT(`location`) FROM `donors` where `location` != ""');
        return $result->result();
    }

    public function record_count($table_name) {
        return $this->db->count_all($table_name);
    }

    function get_expense_info($id, $type) {
        $this->db->select('income/expense.*,events.event_name as main_event_name,event_types.name as event_type_name');
        $this->db->where('income/expense.status', 1);
        $this->db->where('income/expense.type', $type);
        $this->db->where('income/expense.id', $id);
        $this->db->join('events', 'events.event_id = income/expense.event_id');
        $this->db->join('event_types', 'event_types.id = events.event_id');
        $query = $this->db->get('income/expense');
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return false;
    }

    function get_unique_data($tablename, $coloumname) {
        $this->db->distinct();
        $this->db->select($coloumname);
        $this->db->where('"' . $coloumname . '"!=', null);
        $this->db->order_by($coloumname . ' asc');
        $query = $this->db->get($tablename);
        return $query->result();
    }

}
