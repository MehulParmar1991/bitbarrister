<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function &__get($key) {
        $CI = & get_instance();
        return $CI->$key;
    }

    function get_donors() {
        $this->load->library('Datatables');
        $this->datatables->select('donors.image as image,donors.donor_id as donor_id,donors.name as name,donors.location as location,donors.email as email,donors.contactno as contactno,donors.status as status');
        $this->datatables->from('donors');
        return $this->datatables->generate();
    }

    function get_news() {
        $this->load->library('Datatables');
        $this->datatables->select('news.news_id as news_id,news.subject as subject,news.description as description,news.date as date,news.status as status');
        $this->datatables->from('news');
        return $this->datatables->generate();
    }

    function get_vistingcards() {
        $this->load->library('Datatables');
        $this->datatables->select('visitingcards.id as id,visitingcards.name as name,visitingcards.image as image,visitingcards.status as status');
        $this->datatables->from('visitingcards');
        return $this->datatables->generate();
    }

    function get_events() {
        $this->load->library('Datatables');
        $this->datatables->select('events.event_type as event_type,event_types.name as event_type_name,events.event_id as event_id,events.event_name as event_name,events.city as city,events.description as description,events.image as image,events.date as date,events.address as address,events.status as status');
        $this->datatables->from('events');
        $this->datatables->join('event_types', 'events.event_type = event_types.id');
        return $this->datatables->generate();
    }

    function get_business() {
        $this->load->library('Datatables');
        $this->datatables->select('business_info.business_name as business_name,business_info.name as name,business_info.business_type as business_type,business_info.status as status,business_info.id as id,business_info.office_address as office_address,business_info.email as email,business_info.mobile_no as mobile_no,business_info.landline_no as landline_no');
        $this->datatables->from('business_info');
        return $this->datatables->generate();
    }

    function get_committee() {
        $this->load->library('Datatables');
        $this->datatables->select('committee.name as name,committee.image as image,committee.id as id,committee.designation as designation,committee.email as email,committee.contactno as contactno,committee.address as address,committee.status as status,designation.name as designation_name');
        $this->datatables->from('committee');
        $this->datatables->join('designation', 'committee.designation = designation.id');
        return $this->datatables->generate();
    }

    function get_link() {
        $this->load->library('Datatables');
        $this->datatables->select('usefull_links.link as link,usefull_links.title as title,usefull_links.id as id,usefull_links.description as description,usefull_links.status as status');
        $this->datatables->from('usefull_links');
        return $this->datatables->generate();
    }

    function get_tributes() {
        $this->load->library('Datatables');
        $this->datatables->select('tributes.name as name,tributes.image as image,tributes.id as id,tributes.address  as address ,tributes.to_date as to_date,tributes.from_date as from_date,tributes.status as status');
        $this->datatables->from('tributes');
        return $this->datatables->generate();
    }

    function get_designation() {
        $this->load->library('Datatables');
        $this->datatables->select('designation.name as name,designation.id as id,designation.description as description,designation.status as status');
        $this->datatables->from('designation');
        return $this->datatables->generate();
    }

    function get_downloads() {
        $this->load->library('Datatables');
        $this->datatables->select('downloads.document as document,downloads.id as id,downloads.name as name,downloads.status as status');
        $this->datatables->from('downloads');
        return $this->datatables->generate();
    }

    function get_event_type() {
        $this->load->library('Datatables');
        $this->datatables->select('event_types.name as name,event_types.id as id,event_types.description as description,event_types.status as status');
        $this->datatables->from('event_types');
        return $this->datatables->generate();
    }

    function get_donors_prices() {
        $this->load->library('Datatables');
        $this->datatables->select('donors_prices.donor_id as donor_id,donors_prices.donor_price_id as donor_price_id,donors_prices.payment_mode as payment_mode,donors_prices.receipt_no as receipt_no,donors_prices.date as date,donors_prices.amount as amount,donors_prices.status as status,donors.name as name');
        $this->datatables->from('donors_prices');
        $this->datatables->join('donors', 'donors_prices.donor_id = donors.donor_id');
        return $this->datatables->generate();
    }

    function dashboard_data() {
        $query = $this->db->query('SELECT
  (SELECT COUNT(*) FROM donors WHERE status = 1) as total_donors, 
  (SELECT COUNT(*) FROM events WHERE status = 1) as total_events,
  (SELECT COUNT(*) FROM donors_prices WHERE status = 1) as total_donation,
  (SELECT COUNT(*) FROM tributes WHERE status = 1) as total_tributes,
  (SELECT COUNT(*) FROM matrimonial WHERE status = 1) as total_matrimonials,
  (SELECT COUNT(*) FROM committee WHERE status = 1) as committee_members,
  (SELECT COUNT(*) FROM tributes WHERE status = 1) as total_tributes,
  (SELECT COUNT(*) FROM business_info WHERE status = 1) as total_business,
  (SELECT COUNT(*) FROM `income/expense` WHERE status = 1 AND `income/expense`.`type` = "Income") as total_income,
  (SELECT COUNT(*) FROM `income/expense` WHERE status = 1 AND `income/expense`.`type` = "Expense") as total_expense,
  (SELECT COUNT(*) FROM matrimonial WHERE status = 1 AND `matrimonial`.`gender` = "Male") as total_male_matrimonial,
  (SELECT COUNT(*) FROM matrimonial WHERE status = 1 AND `matrimonial`.`gender` = "Female") as total_female_matrimonial,
  (SELECT COUNT(*) FROM visitingcards WHERE status = 1) as total_visitingcards');
        return $query->row();
    }

    function get_matrimonial() {
        $this->load->library('Datatables');
        $this->datatables->select('matrimonial.image as image,matrimonial.candidate_business as candidate_business,matrimonial.mobile_no as mobile_no,matrimonial.whatsapp_no as whatsapp_no,matrimonial.id as id,matrimonial.name as name,matrimonial.fathers_name as fathers_name,matrimonial.email as email,matrimonial.education as education,matrimonial.created_date as created_date,matrimonial.status as status');
        $this->datatables->from('matrimonial');
        return $this->datatables->generate();
    }

    function get_income_expense() {
        $this->load->library('Datatables');
        $this->datatables->select('events.event_name as event_name,income/expense.image as image,income/expense.event_id as event_id,income/expense.id as id,income/expense.type as type,income/expense.date as date,income/expense.address as address,income/expense.description as description,income/expense.document as document,income/expense.status as status');
        $this->datatables->from('income/expense');
        $this->datatables->join('events', 'events.event_id = income/expense.event_id');
        return $this->datatables->generate();
    }

    function get_banners() {
        $this->load->library('Datatables');
        $this->datatables->select('banners.name as name,banners.id as id,banners.image as image,banners.status as status');
        $this->datatables->from('banners');
        return $this->datatables->generate();
    }

    function get_business_ad() {
        $this->load->library('Datatables');
        $this->datatables->select('business_ad.name as name,business_ad.id as id,business_ad.image as image,business_ad.status as status');
        $this->datatables->from('business_ad');
        return $this->datatables->generate();
    }

}
