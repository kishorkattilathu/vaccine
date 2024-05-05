<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital_model extends CI_Model 

{
	public function hospital_register_model($data)
	{
		return $this->db->insert('hospital_registration',$data);
	}

	public function count_hospital($hospital_email)
	{
		$this->db->where('hospital_email',$hospital_email);
		return $this->db->count_all_results('hospital_registration');
	}

	public function login_model($data)
	{
		$this->db->where($data);
		return $this->db->count_all_results('hospital_registration');	

	}

	public function home_model()
	{
		$email=$this->session->userdata('hospital_mail');
		$this->db->select('*');
		$this->db->from('hospital_registration');
		$this->db->where('hospital_email',$email);
		return $this->db->get()->result();
	}

	public function profile_update_model($profile_data)
	{
		// echo "<pre>"; print_r($data); echo "</pre>"; die('end of code');
		$email=$this->session->userdata('hospital_mail');
		// echo "<pre>"; print_r($email); echo "</pre>"; die('end of code');
		$check = $this->db->where('hospital_email',$email);
		// echo "<pre>"; print_r($check); echo "</pre>"; die('end of code');
		return $this->db->update('hospital_registration',$profile_data);

	}

	public function display_data_model()
	{
		$this->db->select('*');
		$this->db->from('categories');
		return $this->db->get()->result();
	}

	public function new_vaccine_model($data)
	{
		return $this->db->insert('vaccines',$data);
	}

	public function manage_vaccine_model()
	{
		$email=$this->session->userdata('hospital_mail');
		$this->db->select('*');
		$this->db->from('vaccines');
		$this->db->where('hos_email',$email);
		$this->db->join('categories','categories.cat_id=vaccines.cat_id');
		
		return $this->db->get()->result();
	}

	public function vaccine_fetch_model($id)
	{
		$this->db->select('*');
		$this->db->from('vaccines');
		$this->db->where('vac_id',$id);
		$this->db->join('categories','categories.cat_id=vaccines.cat_id');
		return $this->db->get()->result();
	}

	public function delete_vaccine_model($id)
	{
		$this->db->where('vac_id',$id);
		return $this->db->delete('vaccines');
	}

	public function edit_new_vaccine_model($id,$data)
	{
		$this->db->where('vac_id',$id);
		return $this->db->update('vaccines',$data);
	}

	public function pending_bookings_model()
	{
		$email=$this->session->userdata('hospital_mail');
		$this->db->select('*');
		$this->db->from('bookings');
		$this->db->where('hosp_email',$email);
		$this->db->where('status','Pending');
		$this->db->join('user','user.user_id=bookings.user_id');
		// $this->db->join('vaccines','vaccines.vac_id=bookings.vacc_id');
		return $this->db->get()->result();
	}

	public function approve_user_model($booking_id,$data)
	{	
		$this->db->where('booking_id',$booking_id);
		return $this->db->update('bookings',$data);
	}

	public function all_bookings_model()
	{	
		$email=$this->session->userdata('hospital_mail');
		$this->db->select('*');
		$this->db->from('bookings');
		$this->db->where('hosp_email',$email);
		$this->db->join('user','bookings.user_id=user.user_id');
		return $this->db->get()->result();
	}

	public function contact_model($data)
	{
		return $this->db->insert('complaint',$data);
	}

	public function all_complaints_model()
	{
		$email=$this->session->userdata('hospital_mail');
		$this->db->select('*');
		$this->db->from('complaint');
		$this->db->where('user_email',$email);
		return $this->db->get()->result();
	}
	

}