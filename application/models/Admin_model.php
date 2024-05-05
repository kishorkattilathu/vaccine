<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 

{
	public function register_admin_model($data)
	{
		return $this->db->insert('admin',$data);
	}

	public function count_admin_email($email)
	{
		$this->db->where('admin_email',$email);
	return	$this->db->count_all_results('admin');
	}

	public function login_model($data)
	{
		$this->db->where($data);
		return $this->db->count_all_results('admin');
	}

	public function profile_model()
	{
		$email=$this->session->userdata('admin_mail');
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('admin_email',$email);
		return $this->db->get()->result();
	}

	public function profile_update_model($id,$data)
	{
		$this->db->where('admin_id',$id);
		return $this->db->update('admin',$data);

	}

	public function add_hospitals_detail_model($data)
	{
		return $this->db->insert('hospital_registration',$data);
	}

	public function manage_hospitals_model()
	{
		$this->db->select('*');
		$this->db->from('hospital_registration');
		$this->db->where('hospital_status','Pending');
		return $this->db->get()->result();
	}

	public function approve_hospital_model($id,$data)
	{
		
		$this->db->where('hospital_id',$id);
		return $this->db->update('hospital_registration',$data);
	}

	Public function add_category_model($data)
	{
		return $this->db->insert('categories',$data);
	}

	public function manage_categories_model()
	{
		$this->db->select('*');
		$this->db->from('categories');
		return $this->db->get()->result();
	}

	public function edit_categories_model($id)
	{
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->where('cat_id',$id);
		return $this->db->get()->result();
	}

	public function update_category_model($id,$update)
	{
		$this->db->where('cat_id',$id);
		return $this->db->update('categories',$update);
	}
	public function delete_category_model($id)
	{
		$this->db->where('cat_id',$id);
		return $this->db->delete('categories');
	}

	public function pending_complaints_model()
	{
		$this->db->select('*');
		$this->db->from('complaint');
		$this->db->where('reply','Pending');
		return $this->db->get()->result();
	}

	public function reply_complaints_model($comp_id)
	{
		$this->db->select('*');
		$this->db->from('complaint');
		$this->db->where('comp_id',$comp_id);
		return $this->db->get()->result();

	}

	public function update_complaints_model($comp_id,$data)
	{
		$this->db->where('comp_id',$comp_id);
		return $this->db->update('complaint',$data);
	}

	public function all_complaints_model()
	{
		$this->db->select('*');
		$this->db->from('complaint');
		$this->db->where('reply !=','Pending');
		return $this->db->get()->result();
	}

	public function all_bookings_model()
	{
		$this->db->select('*');
		$this->db->from('bookings');
		$this->db->join('user','user.user_id=bookings.user_id');
		$this->db->join('vaccines','vaccines.vac_id=bookings.vacc_id');
		$this->db->join('hospital_registration','hospital_registration.hospital_id=bookings.hosp_id');
		
		return $this->db->get()->result();

	}

	
}