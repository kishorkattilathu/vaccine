<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 

{
	public function register_model($data)
	{
		return $this->db->insert('user',$data);
	}

	public function count_model($email)
	{
		$this->db->where('user_email',$email);
		return $this->db->count_all_results('user');
	}
	public function count_login_model($data)
	{
		$this->db->where($data);
		return $this->db->count_all_results('user');
	}

	public function total_hospital_model()
	{
		$this->db->select('*');
		$this->db->from('hospital_registration');
		$this->db->where('hospital_status','Approved');
		return $this->db->get()->result();
	}

	public function hospital_single_page_model($hospital_id)
	{
		$this->db->select('*');
		$this->db->from('hospital_registration');
		$this->db->where('hospital_id',$hospital_id);
		// $this->db->join('hospital_registration','hospital_registration.hospital_id=vaccines.hos_id');
		return $this->db->get()->result();
	}

	public function categories_single_page_model($hospital_id)
	{
		$this->db->select('*');
		$this->db->from('categories');
		return $this->db->get()->result();
		
	}

	public function hospital_vaccine_page_model($cat_id,$hospital_id)
	{
		$this->db->select('*');
		$this->db->from('vaccines');
		$this->db->where('cat_id',$cat_id);
		$this->db->where('hos_id',$hospital_id);
		return $this->db->get()->result();
	}

	public function my_profile_model()
	{
		$email=$this->session->userdata('user_mail');
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email',$email);
		return $this->db->get()->result();
	}

	public function profile_update_model($data)
	{
		$email=$this->session->userdata('user_mail');
		$this->db->where('user_email',$email);
		return $this->db->update('user',$data);
	}

	public function book_vaccine_model($vaccine_id)
	{
		$this->db->select('*');
		$this->db->from('vaccines');
		$this->db->where('vac_id',$vaccine_id);
		return $this->db->get()->result();
	}

	// public function count_booked_appointment($user_id,$hospital_id,$vaccine_id,$date)
	public function count_booked_appointment($data)
	{
		$this->db->select('*');
	    $this->db->from('bookings');
	    $this->db->where('user_id', $data['user_id']);
	    $this->db->where( 'hosp_id',$data['hosp_id']);
	    $this->db->where('vacc_id', $data['vacc_id']);
	    $this->db->where('date',$data['date']);

		$count = $this->db->count_all_results();
		return $count;
	}

	public function book_appointment_model($data)
	{
			return $this->db->insert('bookings',$data);
	}

	public function all_booking_model()
	{
		$email=$this->session->userdata('user_mail');
		$this->db->select('*');
		$this->db->from('bookings');
		$this->db->join('user','user.user_id=bookings.user_id');
		$this->db->join('vaccines','vaccines.vac_id=bookings.vacc_id');
		$this->db->join('hospital_registration','hospital_registration.hospital_id=bookings.hosp_id');
		$this->db->where('bookings.user_email',$email);
		$this->db->where('payment_status','Paid');
		$this->db->where('status','Approved');

		return $this->db->get()->result();
	}

	public function bookings_model()
	{
		$email=$this->session->userdata('user_mail');
		$this->db->select('*');
		$this->db->from('bookings');
		$this->db->where('user_email',$email);
		$this->db->where('payment_status','Pending');
		$this->db->where('status','Approved');
		return $this->db->get()->result();
	}

	public function delete_bookings_model($book_id)
	{
		$this->db->where('booking_id',$book_id);
		return $this->db->delete('bookings');
	}

	public function pay_bookings_model($book_id)
	{
		$this->db->select('*');
		$this->db->from('bookings');
		$this->db->where('booking_id',$book_id);
		return $this->db->get()->result();
	}

	public function payment_model($data)
	{
		return $this->db->insert('payment',$data);
	}

	public function booking_payment_model($pay,$book_id)
	{	
		$this->db->where('booking_id',$book_id);
		return $this->db->update('bookings',$pay);
	}
	// public function vaccinecount_check_model($vaccinecount_check)
	// {
	// 	$this->db->where($vaccinecount_check);
	// 	return $this->db->count_all_results('vaccines');
	// }
	public function count_decrement_model($hosp_id,$vacc_id,$vaccine_count)
	{
		$this->db->where('vac_id',$vacc_id);
		$this->db->where('hos_id',$hosp_id);
		return $this->db->update('vaccines',$vaccine_count);
	}

	public function vac_book_count_model($book_id,$vac_book_count)
	{
		$this->db->where('booking_id',$book_id);
		return $this->db->update('bookings',$vac_book_count);
	}

	public function pending_bookings_model()
	{
		$email=$this->session->userdata('user_mail');
		$this->db->select('*');
		$this->db->from('bookings');
		$this->db->where('user_email',$email);
		$this->db->where('status','Pending');
		$this->db->where('payment_status','Pending');
		return $this->db->get()->result();
	}

	public function receipts_model()
	{
		$email=$this->session->userdata('user_mail');
		$this->db->select('*');
		$this->db->from('payment');
		$this->db->join('user','payment.user_id=user.user_id');
		$this->db->join('hospital_registration','payment.hosp_id=hospital_registration.hospital_id');
		$this->db->join('bookings','user.user_id=bookings.user_id');
		$this->db->where('bookings.payment_status','Paid');
		$this->db->where('user.user_email',$email);

		return $this->db->get()->result();
	}

	public function complaint_model($data)
	{
		return $this->db->insert('complaint',$data);
	}

	public function all_complaint_model()
	{
		$email=$this->session->userdata('user_mail');
		$this->db->select('*');
		$this->db->from('complaint');
		$this->db->where('user_email',$email);
		return $this->db->get()->result();
	}

}