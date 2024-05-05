<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital_controller extends CI_Controller

{
	public function hospital_login()
	{
		$this->load->view('Hospital/login');
	}

	public function login()
	{	
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$data= array('hospital_email'=>$email,'hospital_password'=>$password,'hospital_status'=>'Approved');

		$this->load->model('Hospital_model');
		$count=$this->Hospital_model->login_model($data);
		if ($count>0) 
		{
			echo "<script>alert('Login Successfully')</script>";
			$this->session->set_userdata('hospital_mail',$email);
			$this->home();
		}
		else
		{
			echo "<script>alert('Failed Wrong Email/Password')</script>";
			$this->hospital_login();
		}
	}

	public function hospital_register()
	{
		$this->load->view('Hospital/register');
	}

	public function register()
	{
		$hospital_name=$this->input->post('hospital_name');
		$hospital_email=$this->input->post('hospital_email');
		$hospital_phone=$this->input->post('hospital_phone');
		$hospital_address=$this->input->post('hospital_address');
		$hospital_password=$this->input->post('hospital_password');
		$confirm_pass=$this->input->post('confirm_pass');

		if ($hospital_password==$confirm_pass) 
		{
			$this->load->model('Hospital_model');
			echo $count=$this->Hospital_model->count_hospital($hospital_email);
			if ($count==0) 
		 {
				
			

			$hospital_image=$_FILES['hospital_image']['name'];
			$Image=explode('.',$hospital_image);
			$time=Time();
			$photo=$time.'.'.end($Image);

			$config['allowed_types']='jpg|jpeg|png';
			$config['upload_path']='./Assets/Admin/hospitals';
			$config['file_name']=$photo;

			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('hospital_image')) 
			
			{

				$hospital_license=$_FILES['hospital_license']['name'];
				$Image1=explode('.', $hospital_license);
				$time1=Time();
				$photo1=$time1.'.'.end($Image1);

				$config1['allowed_types']='jpg|png|jpeg';
				$config1['upload_path']='./Assets/Admin/license';
				$config1['file_name']=$photo1;

				$this->load->library('upload',$config1);
				$this->upload->initialize($config1);

				if ($this->upload->do_upload('hospital_license')) 
				{
					
					$data=array('hospital_name' =>$hospital_name,'hospital_email'=>$hospital_email,'hospital_phone'=>$hospital_phone,'hospital_address'=>$hospital_address,'hospital_image'=>$photo,'hospital_license'=>$photo1,'hospital_password'=>$hospital_password,'type'=>'Owner','hospital_status'=>'Pending');
					$this->load->model('Hospital_model');
					$execute=$this->Hospital_model->hospital_register_model($data);
					if ($execute==1) 
					{
						echo "<script>alert('Registered Successfully')</script>";
						$this->hospital_login();
					}
					else
					{
						echo "<script>alert('Failed please try again')</script>";
						$this->hospital_register();
					}
				}
				else
				{
					echo "<script>alert('Wrong file for license try again')</script>";
					$this->hospital_register();
				}
			}
			else
			{
				echo "<script>alert('Wrong File for hospital Try Again')</script>";
				$this->hospital_register();
			}
		 }
		 else
		 {
		 	echo "<script>alert('Email Already Exist')</script>";
		 	$this->hospital_register();
		 }
		}
		else
		{
			echo "<script>alert('Password does not match')</script>";
			$this->hospital_register();
		}
	}

	public function home()
	{
		// echo "<pre>"; print_r($_SESSION); echo "</pre>"; die('end of code');
		if ($this->session->has_userdata('hospital_mail')) 
		{
			$this->load->model('Hospital_model');
			$data['details']=$this->Hospital_model->home_model();

			$this->load->view('Hospital/home',$data);
		}
		else
		{
			$this->hospital_login();
		}
	}

	public function upload_profile_image($file_image,$colum_name)
	{
		$return_array = ['status'=>false,'image_name'=>''];

		if (!empty($file_image)) {
			$Image=explode('.', $file_image['name']);
			$time=Time();
			$photo=$time.'.'.end($Image);

			$config['allowed_types']='jpeg|png|jpg';
			if ($colum_name == 'hospital_image') 
			{
				$config['upload_path']='./Assets/Admin/hospitals';
			}
			if ($colum_name == 'hospital_license') 
			{
				$config['upload_path']='./Assets/Admin/license';
			}

			$config['file_name']=$photo;

			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload($colum_name)) 
			 {

			 	$return_array['status'] = true;
			 	$return_array['image_name'] = $photo;


			 	// $data=array($colum_name=>$photo);
			 	// $this->load->model('Hospital_model');
			 	// $execute=$this->Hospital_model->profile_update_model($data);
			 	// if ($execute==1) 
			 	// {
			 	// 	echo "<script>alert('Updated Successfully')</script>";
			 	// }
			}
		}
		return $return_array;
	}

	public function profile_update()
	{
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$password = $this->input->post('password');

		$data = array(
					'hospital_name'=>$name,
					'hospital_phone'=>$phone,
					'hospital_address'=>$address,
					'hospital_password'=>$password,
				);

		$hospital_image = $_FILES['hospital_image'];
		$hospital_image_uploaded = $this->upload_profile_image($hospital_image,'hospital_image');
		// echo "<pre>"; print_r($hospital_image_uploaded); echo "</pre>"; die('end of code');

		if ($hospital_image_uploaded['status']) {
			$data['hospital_image'] = $hospital_image_uploaded['image_name'];
		}

		$license_image = $_FILES['hospital_license'];
		$license_image_uploaded = $this->upload_profile_image($license_image,'hospital_license');

		if ($license_image_uploaded['status']) {
			$data['hospital_license'] = $license_image_uploaded['image_name'];
		}
		
		$this->load->model('Hospital_model');
		$execute=$this->Hospital_model->profile_update_model($data);
		// echo "<pre>"; print_r($execute); echo "</pre>"; die('end of code');
		if($execute == 1)
		{
			echo"<script>alert('Updated Successfully')</script>";
			redirect('Hospital_controller/home');
			

		}
		else
		{
			echo"<script>alert('Failed Try Again')</script>";
			redirect('Hospital_controller/home');
			
		}
	}

	public function add_vaccine()
	{
		if ($this->session->has_userdata('hospital_mail')) 
		{
			$this->load->model('Hospital_model');
			 $arrdata['details']=$this->Hospital_model->home_model();
			$arrdata['categories']=$this->Hospital_model->display_data_model();
			$this->load->view('Hospital/add_vaccine',$arrdata);
		}
		else
		{
			$this->hospital_login();
		}
	}

	public function new_vaccine()
	{
		$hos_id=$this->input->post('hos_id');
		$cat_id=$this->input->post('cat_id');
		$hos_email=$this->input->post('hos_email');
    	$name=$this->input->post('name');
    	$timing=$this->input->post('time');
    	$quantity=$this->input->post('quantity');
    	$price=$this->input->post('price');

		$vaccine_image=$_FILES['vaccine_image']['name'];
		$Image=explode('.', $vaccine_image);
		$time=Time();
		$photo=$time.'.'.end($Image);

		$config['allowed_types']='jpeg|png|jpg';
		$config['upload_path']='./Assets/Hospital/vaccines';
		$config['file_name']=$photo;

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('vaccine_image')) 
		{
			$data=array('hos_id' =>$hos_id,'cat_id'=>$cat_id,'hos_email'=>$hos_email,'vac_name'=>$name,'vac_image'=>$photo,'vac_time'=>$timing,'vac_quantity'=>$quantity,'vac_price'=>$price);
			$this->load->model('Hospital_model');
			$execute=$this->Hospital_model->new_vaccine_model($data);
				if ($execute) 
				{
					echo "<script>alert('Vaccine Added Sucessfully')</script>";
					$this->add_vaccine();
				}
				else
				{
					echo "<script>alert('Failed please try again')</script>";
					$this->add_vaccine();
				}
		}
		else
		{
			echo "<script>alert('Wrong File please try again')</script>";
			$this->add_vaccine();
		}
	}

	public function manage_vaccine()
	{
		if ($this->session->has_userdata('hospital_mail')) 
		{
			$this->load->model('Hospital_model');
			$data['details']=$this->Hospital_model->manage_vaccine_model();
			$this->load->view('Hospital/manage_vaccine',$data);
		}
		else
		{
			$this->hospital_login();
		}
	}

	public function edit_vaccine($id)
	{
		if ($this->session->has_userdata('hospital_mail')) 
		{	
			$this->load->model('Hospital_model');
			$fetch['categories']=$this->Hospital_model->display_data_model();
			$fetch['data']=$this->Hospital_model->vaccine_fetch_model($id);
			$this->load->view('Hospital/edit_vaccine',$fetch);			
		}
		else
		{
			$this->hospital_login();
		}
	}

	public function delete_vaccine($id)
	{
		$this->load->model('Hospital_model');
		$execute=$this->Hospital_model->delete_vaccine_model($id);
		if ($execute==1) 
		{
			echo "<script>alert('Deleted Vaccine Successfully')</script>";
			$this->manage_vaccine();
		}
		else
		{
			echo "<script>alert('Failed Please try again')</script>";
			$this->manage_vaccine();
		}
	}

	public function edit_new_vaccine()
	{
		$cat_id=$this->input->post('cat_id');
		$name=$this->input->post('name');
		$id=$this->input->post('vac_id');
		$timing=$this->input->post('time');
		$quantity=$this->input->post('quantity');
		$price=$this->input->post('price');

		$vaccine_image=$_FILES['vaccine_image']['name'];
		
		if (!empty($vaccine_image)) 
	  {
			
		$Image=explode('.', $vaccine_image);
		$time=Time();
		$photo=$time.'.'.end($Image);

		$config['allowed_types']='jpeg|png|jpg';
		$config['upload_path']='./Assets/Hospital/vaccines';
		$config['file_name']=$photo;

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('vaccine_image')) 
		{
			$data=array('cat_id'=>$cat_id,'vac_name'=>$name,'vac_image'=>$photo,'vac_time'=>$timing,'vac_quantity'=>$quantity,'vac_price'=>$price);
			$this->load->model('Hospital_model');
			$execute=$this->Hospital_model->edit_new_vaccine_model($id,$data);
			 if ($execute==1) 
			 {
			 	echo "<script>alert('Vaccine Updated Successfully')</script>";
			 	$this->manage_vaccine();
			 }
			 else
			 {
			 	echo "<script>alert('Failed Please Try Again')</script>";
			 	$this->manage_vaccine();
			 }
		}
		else
		{
			echo "<script>alert('Wrong file please try again')</script>";
			$this->manage_vaccine();
		}
      }
      else
      {
      		$data=array('cat_id'=>$cat_id,'vac_name'=>$name,'vac_time'=>$timing,'vac_quantity'=>$quantity,'vac_price'=>$price);
			$this->load->model('Hospital_model');
			$execute=$this->Hospital_model->edit_new_vaccine_model($id,$data);
			 if ($execute==1) 
			 {
			 	echo "<script>alert('Vaccine Updated Successfully')</script>";
			 	$this->manage_vaccine();
			 }
			 else
			 {
			 	echo "<script>alert('Failed Please Try Again')</script>";
			 	$this->manage_vaccine();
			 }

      }
	}

	public function pending_bookings()
	{	
		if ($this->session->has_userdata('hospital_mail')) 
		{
			$this->load->model('Hospital_model');
			$data['details']=$this->Hospital_model->pending_bookings_model();
			$this->load->view('Hospital/pending_bookings',$data);
		}
		else
		{
			$this->hospital_login();
		}
	}

	public function approve_user($booking_id)
	{
		$data=array('status' =>'Approved');
		$this->load->model('Hospital_model');
		$execute=$this->Hospital_model->approve_user_model($booking_id,$data);
		if ($execute==1) 
		{
			echo "<script>alert('Approved Successfully')</script>";
			$this->pending_bookings();
		}
		else
		{
			echo "<script>alert('Failed Please Try Again')</script>";
			$this->pending_bookings();
		}
	}
	public function reject_user($booking_id)
	{
		$data=array('status'=>'Rejected');
		$this->load->model('Hospital_model');
		$execute=$this->Hospital_model->approve_user_model($booking_id,$data);
		if ($execute==1) 
		{
			echo "<script>alert('Rejected Successfully')</script>";
			$this->pending_bookings();
		}
		else
		{
			echo "<script>alert('Failed Please Try Again')</script>";
			$this->pending_bookings();
		}
	}

	public function all_bookings()
	{
		if($this->session->has_userdata('hospital_mail')) 
			
			{	$this->load->model('Hospital_model');
				$data['details']=$this->Hospital_model->all_bookings_model();
				$this->load->view('Hospital/all_bookings',$data);
			}
			else
			{
				$this->hospital_login();
			}
	}

	public function contact_admin()
	{
		$this->load->model('Hospital_model');
		$data['details']=$this->Hospital_model->home_model();
		$this->load->view('Hospital/contact',$data);

	}

	public function contact($hospital_id)
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$msg=$this->input->post('msg');


		$data=array('user_name' =>$name,'user_email'=>$email,'message'=>$msg,'reply'=>'Pending');
		$this->load->model('Hospital_model');
		$execute=$this->Hospital_model->contact_model($data);

		if ($execute==1) 
		{
			echo "<script>alert('Complaint Sended Successfully')</script>";
			$this->contact_admin();
		}
		else
		{
			echo "<script>alert('Failed try again')</script>";
			$this->contact_admin();
		}
	}

	public function all_complaints()
	{	
		$this->load->model('Hospital_model');
		$data['details']=$this->Hospital_model->all_complaints_model();
		$this->load->view('Hospital/all_complaints',$data);
	}



	// public function profile_update_1()
	// {
	// 	$name=$this->input->post('name');
	// 	$phone=$this->input->post('phone');
	// 	$address=$this->input->post('address');
	// 	$password=$this->input->post('password');

	// 	$mysql='';
	// 	$mysql1='';
	// 	$hospital_image=!empty($_FILES['hospital_image']['name'])?$_FILES['hospital_image']['name']:'';

	// 	if (!empty($hospital_image)) 
	// 	{
	// 		$Image=explode('.', $hospital_image);
	// 		$time=Time();
	// 		$photo=$time.'.'.end($Image);

	// 		$config['allowed_types']='jpeg|png|jpg';
	// 		$config['upload_path']='./Assets/Admin/hospitals';
	// 		$config['file_name']=['$photo'];

	// 		$this->load->library('upload',$config);
	// 		$this->upload->initialize($config);

	// 		if ($this->upload->do_upload('hospital_image')) 
	// 		{
	// 			$mysql=",'hospital_image'=>$photo";
	// 		}
			
	// 	}
	// 	$data=array('hospital_name'=>$name,'hospital_phone'=>$phone,'hospital_address'=>$address,'hospital_password'=>$password."mysql"."mysql1");
	// 	$this->load->model('Hospital_model');
	// 	$execute=$this->Hospiital_model->profile_update_model($data);
	// 	// $hospital_image=$_FILES['hospital_image']['name'];
	// 	// $license_image=$_FILES['license_image']['name'];
	// 	if ($execute==1) 
	// 			{
	// 				echo "<script>alert('Updated Successfully')</script>";
	// 				$this->home();
	// 			}
	// 			else
	// 			{
	// 				echo "<script>alert('Failed please try again')</script>";
	// 				$this->home();
	// 			}
			


	// }


}
