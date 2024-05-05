<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller 
{
	public function index()
	{
		$this->load->view('User/index');
	}

	public function register()
	{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$pass=$this->input->post('pass');
			$confirm_pass=$this->input->post('confirm_pass');

			$this->load->model('User_model');
			$count=$this->User_model->count_model($email);
			if ($count==0) 
		{
			

			if ($pass==$confirm_pass) 
			{
				$data=array('user_name'=>$name,'user_email'=>$email,'phone'=>$phone,'password'=>$pass);
				$this->load->model('User_model');
				$execute=$this->User_model->register_model($data);
				if ($execute==1) 
				{
					echo "<script>alert('Registered Successfully')</script>";
					$this->index();
				}
			}
			else
			{
				echo "<script>alert('Password does not match')</script>";
				$this->index();
			}
		}
		 else
		{
		 	echo "<script>alert('Email Already Exist')</script>";
		 	$this->index();
		}
	}

	public function login()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$data=array('user_email'=>$email,'password'=>$password);
		
		$this->load->model('User_model');
		$count=$this->User_model->count_login_model($data);

		if ($count>0) 
		{
			echo "<script>alert('Login Successfully')</script>";
			$this->session->set_userdata('user_mail',$email);
			$this->home();
		}
		else
		{
			echo "<script>alert('Failed Please Try Again')</script>";
			$this->index();
		}
	}

	public function home()
	{
		if ($this->session->has_userdata('user_mail')) 
		{	
			$this->load->model('User_model');
			$data['details']=$this->User_model->total_hospital_model();
			$this->load->view('User/home',$data);
		}
		else
		{
			$this->index();
		}
	}

	public function hospital_single_page($hospital_id)
	{
		$this->load->model('User_model');
		$data['details']=$this->User_model->hospital_single_page_model($hospital_id);
		$this->load->view('User/hospital_single_page',$data);
	}

	public function categories_single_page($hospital_id)
	{
		$this->load->model('User_model');
		$data['details']=$this->User_model->hospital_single_page_model($hospital_id);
		$data['categories']=$this->User_model->categories_single_page_model($hospital_id);
		$this->load->view('User/categories_single_page',$data);
	}

	public function hospital_vaccine_page($cat_id,$hospital_id)
	{
		if ($this->session->userdata('user_mail')) 
		{
			$this->load->model('User_model');
			$data['vaccines']=$this->User_model->hospital_vaccine_page_model($cat_id,$hospital_id);
			$data['details']=$this->User_model->hospital_single_page_model($hospital_id);
			$this->load->view('User/hospital_vaccine_page',$data);
		}
	}

	public function my_profile()
	{
		if ($this->session->has_userdata('user_mail')) 
		{
			$this->load->model('User_model');
			$data['profile']=$this->User_model->my_profile_model();
			$this->load->view('User/my_profile',$data);

		}
		else
		{
			$this->index();
		}
	}

	public function profile_update()
	{
		$name=$this->input->post('name');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');

		$data=array('user_name'=>$name,'phone'=>$phone,'password'=>$password);

		$this->load->model('User_model');
		$execute=$this->User_model->profile_update_model($data);
		if ($execute==1) 
		{
			echo"<script>alert('Updated Successfully')</script>";
			$this->my_profile();
		}
		else
		{
			echo "<script>alert('Failed Please try again')</script>";
			$this->my_profile();
		}
	}

	public function book_vaccine($vaccine_id)
	{
		if ($this->session->has_userdata('user_mail')) 
		{
			$this->load->model('User_model');
			$data['profile']=$this->User_model->my_profile_model();
			$data['vaccine']=$this->User_model->book_vaccine_model($vaccine_id);
			$this->load->view('User/book_vaccine',$data);
		}
		else
		{
			$this->index();
		}

	}

	public function book_appointment()
	{
		$user_id=$this->input->post('user_id');
		$hospital_id=$this->input->post('hospital_id');
		$vaccine_id=$this->input->post('vaccine_id');
		$hospital_email=$this->input->post('hospital_email');
		$vaccine_name=$this->input->post('vaccine_name');
		$timing=$this->input->post('timing');
		$quantity=$this->input->post('quantity');
		$gender=$this->input->post('gender');
		$phone=$this->input->post('phone');
		$user_email=$this->input->post('user_email');
		$date=$this->input->post('date');
		$vaccine_price=$this->input->post('vaccine_price');

		$this->load->model('User_model');

		// $count = $this->User_model->count_booked_appointment($user_id,$hospital_id,$vaccine_id,$date);
		// echo "<pre>"; print_r($count); echo "</pre>"; die('end of code');
		// if ($count) {

		// 	echo "<script>alert('Already Booked')</script>";
		// 	$this->home();
		// }else{

		$data=array(
			'user_id' =>$user_id,
			'hosp_id'=>$hospital_id,
			'vacc_id'=>$vaccine_id,
			'hosp_email'=>$hospital_email,
			'vacc_name'=>$vaccine_name,
			'timing'=>$timing,
			'quantity'=>$quantity,
			'gender'=>$gender,
			'phone'=>$phone,
			'user_email'=>$user_email,
			'date'=>$date,
			'status'=>'Pending',
			'payment_status'=>'Pending',
			'vaccine_price'=>$vaccine_price);

		$count = $this->User_model->count_booked_appointment($data);
// echo "<pre>"; print_r($count); echo "</pre>"; die('end of code');
		if ($count) {

			echo "<script>alert('Already Booked')</script>";
			$this->home();
		}else{
			$execute=$this->User_model->book_appointment_model($data);

			if ($execute==1) 
			{
				echo "<script>alert('Booking Successfull Waiting for Approval')</script>";
				$this->pending_bookings();
			}
			else
			{
				echo "<script>alert('Failed Please Try Again')</script>";
				$this->home();
			}
		}
	}

	public function bookings()
	{
		if ($this->session->has_userdata('user_mail')) 
		{
			$this->load->model('User_model');
			$data['details']=$this->User_model->bookings_model();
			$this->load->view('User/bookings',$data);
		}
		else
		{
			$this->index();
		}
	}

	public function delete_bookings($book_id)
	{
		$this->load->model('User_model');
		$execute=$this->User_model->delete_bookings_model($book_id);
		if ($execute==1) 
		{
			echo"<script>alert('Bookings Cancelled Successfully')</script>";
			$this->pending_bookings();
		}
		else
		{
			echo "<script>slert('Failed Please Try Again')</script>";
			$this->bookings();
		}
	}

	public function pay_bookings($book_id)
	{
		if ($this->session->has_userdata('user_mail')) 
		{	
			$this->load->model('User_model');
			$data['details']=$this->User_model->pay_bookings_model($book_id);

			$this->load->view('User/payment',$data);
		}
		else
		{
			$this->index();
		}
	}

	public function payment($book_id)
	{
		 $quantity=$this->input->post('quantity');
		 $booking_id=$this->input->post('booking_id');
		$user_id=$this->input->post('user_id');
		$user_email=$this->input->post('user_email');
		$hosp_id=$this->input->post('hosp_id');
		$vacc_id=$this->input->post('vacc_id');
		$name=$this->input->post('name');
		$card_no=$this->input->post('card_no');
		$cvv=$this->input->post('cvv');
		$amount=$this->input->post('amount');
		$expiry_month=$this->input->post('expiry_month');
		$expiry_year=$this->input->post('expiry_year');

		$data=array('user_id'=>$user_id,'user_email'=>$user_email,'hosp_id'=>$hosp_id,'vacc_id'=>$vacc_id,'name'=>$name,'card'=>$card_no,'cvv'=>$cvv,'amount'=>$amount,'expiry_month'=>$expiry_month,'expiry_year'=>$expiry_year,'payment_status'=>'Paid');
		 $this->load->model('User_model');
		 // echo "<pre>"; print_r($data); echo "</pre>"; die('end of code');
		 $execute=$this->User_model->payment_model($data);
		 if ($execute==1) 
		 {	
		 	$pay=array('payment_status'=>'Paid');
		 	$this->load->model('User_model');
		 	$paymentexe=$this->User_model->booking_payment_model($pay,$book_id);
		 	if($paymentexe==1)
		 	{
		 			$quantitydecrement=($quantity-1);
		 			$vaccine_count=array('vac_quantity'=>$quantitydecrement);
		 			$vac_book_count=array('quantity'=>$quantitydecrement);
		 			$this->load->model('User_model');

			    	$decrement=$this->User_model->count_decrement_model($hosp_id,$vacc_id,$vaccine_count);
			    	if($decrement==1)
			    	{
			    		$this->load->model('User_model');
			    		$bookingcountupdate=$this->User_model->vac_book_count_model($book_id,$vac_book_count);
			    		if($bookingcountupdate==1)
			    		{
			    		 echo "<script>alert('Payment Done successfully')</script>";
			 			 $this->all_bookings();
			 			}
			 			else
			 			{
			 				echo "<script>alert('Failed Please Try Again')</script>";
		 		 			$this->bookings();
			 			}
			    	}
			    	else
			    	{
			    		echo "<script>alert('Failed Please Try Again')</script>";
		 		 		$this->bookings();
			    	}

		 		

			 	
			 }
			 else
			 {
			 	echo "<script>alert('Failed Please Try Again')</script>";
		 		 $this->bookings();
			 }
		 }
		 else
		 {
		 	echo "<script>alert('Failed Please Try Again')</script>";
		 	$this->bookings();
		 }
	}

	public function all_bookings()
	{
		$this->load->model('User_model');
		$data['details'] = $this->User_model->all_booking_model();
		$this->load->view('User/all_bookings',$data);
	}

	public function pending_bookings()
	{
		// echo "<pre>"; print_r('hi'); echo "</pre>"; die('end of code');
		$this->load->model('User_model');
		$data['details']=$this->User_model->pending_bookings_model();
		$this->load->view('User/pending_bookings',$data);

	}

	public function receipts()
	{
		$this->load->model('User_model');
		$data['details']=$this->User_model->receipts_model();
		$this->load->view('User/receipts',$data);
	}

	public function contact()
	{	
		$this->load->model('User_model');
		$data['details']=$this->User_model->my_profile_model();
		$this->load->view('User/contact.php',$data);
	}

	public function complaint()
	{
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$msg=$this->input->post('msg');

		$data = array('user_id'=>$id,'user_name'=>$name,'user_email'=>$email,'message'=>$msg,'reply'=>'Pending');
		$this->load->model('User_model');
		$execute=$this->User_model->complaint_model($data);
		if ($execute==1) 
		{
			echo "<script>alert('Complaint Registered Successfully')</script>";
			$this->contact();
		}
		else
		{
			echo "<script>alert('Failed Please Try Again')</script>";
			$this->contact();
		}
	}

	public function all_complaint()
	{	
		$this->load->model('User_model');
		$data['details']=$this->User_model->all_complaint_model();
		$this->load->view('User/all_complaint',$data);
	}

	public function new_user_complaint()
	{
		$this->load->view('User/new_user_complaint');
	}

	public function new_complaint()
	{
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$msg=$this->input->post('msg');

		$data = array('user_id'=>$id,'user_name'=>$name,'user_email'=>$email,'message'=>$msg,'reply'=>'Pending');
		$this->load->model('User_model');
		$execute=$this->User_model->complaint_model($data);
		if ($execute==1) 
		{
			echo "<script>alert('Complaint Registered Successfully')</script>";
			$this->index();
		}
		else
		{
			echo "<script>alert('Failed Please Try Again')</script>";
			$this->index();
		}
	}
}