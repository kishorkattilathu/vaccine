<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller

{
	public function admin_login()
	{
		$this->load->view('Admin/login');
	}

	public function register_admin()
	{
		$this->load->view('Admin/register_admin');
	}
	public function registered_admin()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');
		$confirm_pass=$this->input->post('confirm_pass');

		if ($password==$confirm_pass) 
		{
			$this->load->model('Admin_model');
			$count=$this->Admin_model->count_admin_email($email);
			if ($count==0)
			{
			
		

				$data= array('admin_name' =>$name,'admin_email'=>$email,'admin_phone'=>$phone,'admin_password'=>$password);
				$this->load->model('Admin_model');
				$execute=$this->Admin_model->register_admin_model($data);

				if ($execute==1) 
				{
					echo "<script>alert('Registered Successfully')</script>";
					$this->admin_login();
				}
				else
				{
					echo "<script>alert('Failed Please try again')</script>";
					$this->register_admin();
				}
			}
			else
			{
				echo "<script>alert('Email Already Registered')</script>";
				$this->register_admin();
			}	

		}
		else
		{
			echo "<script>alert('Password does not match')</script>";
			$this->register_admin();
		}
	}

	public function login()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$data=array('admin_email' =>$email, 'admin_password'=>$password);
		
		$this->load->model('Admin_model');
		$count=$this->Admin_model->login_model($data);
		if ($count>0) 
		{
			echo "<script>alert('Login Successfully')</script>";
			$this->session->set_userdata('admin_mail',$email);
			$this->profile();
		}
		else
		{
			echo "<script>alert('Something went wrong try again')</script>";
			$this->admin_login();
		}


	}
	public function profile()
	{
		if ($this->session->has_userdata('admin_mail')) 
		{
			$this->load->model('Admin_model');
			$data['profile']=$this->Admin_model->profile_model();
			$this->load->view('Admin/profile',$data);
		}
		else
		{
			$this->admin_login();
		}
		
	}

	public function profile_update($id)
	{
		if ($this->session->has_userdata('admin_mail')) 
		{
			$name=$this->input->post('name');
			$phone=$this->input->post('phone');	
			$password=$this->input->post('password');
			$data=array('admin_name'=>$name,'admin_phone'=>$phone,'admin_password'=>$password);

			$this->load->model('Admin_model');
			$execute=$this->Admin_model->profile_update_model($id,$data);
			if ($execute==1) 
			{
				echo "<script>alert('Updated successfully')</script>";
				$this->profile();
			}
			else
			{
				echo "<script>alert('Failed please try again')</script>";
				$this->profile();
			}
		}
		else
		{
			$this->admin_login();
		}
	}

		public function add_hospitals()
		{
			if ($this->session->has_userdata('admin_mail')) 
			{
				$this->load->view('Admin/add_hospitals');
			}
			else
			{
				$this->admin_login();
			}
		}

		public function add_hospital_details()
		{
			$hospital_name=$this->input->post('hospital_name');
			$hospital_email=$this->input->post('hospital_email');
			$hospital_phone=$this->input->post('hospital_phone');
			$hospital_address=$this->input->post('hospital_address');
			$hospital_password=$this->input->post('hospital_password');
			$confirm_pass=$this->input->post('confirm_pass');

			if ($hospital_password==$confirm_pass) 
		  {
				
			

			$hospital_image=$_FILES['hospital_image']['name'];
			$Image=explode('.',$hospital_image);
			$time=Time();
			$photo=$time.'.'.end($Image);

			$config['allowed_types']='jpeg|png|jpg';
			$config['upload_path']='./Assets/Admin/hospitals';
			$config['file_name']=$photo;

			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('hospital_image')) 
			{

				$hospital_license=$_FILES['hospital_license']['name'];
				$license=explode('.', $hospital_license);
				$time1=Time();
				$photo1=$time1.'.'.end($license);

				$config1['allowed_types']='jpeg|png|jpg';
				$config1['upload_path']='./Assets/Admin/license';
				$config1['file_name']='$photo1';

				$this->load->library('upload',$config1);
				$this->upload->initialize($config1);

				if ($this->upload->do_upload('hospital_license')) 
			  {
					
				

				$data= array('hospital_name'=>$hospital_name,'hospital_email'=>$hospital_email,'hospital_phone'=>$hospital_phone,'hospital_phone'=>$hospital_phone,'hospital_address'=>$hospital_address,'hospital_image'=>$photo,'hospital_license'=>$photo1,'hospital_password'=>$hospital_password,'type'=>'Admin','hospital_status'=>'Approved');
				$this->load->model('Admin_model');
				$execute=$this->Admin_model->add_hospitals_detail_model($data);

				if ($execute==1) 
				{
					echo "<script>alert('Registered Successfully')</script>";
					$this->profile();
				}
				else
				{
					echo "<script>alert('Failed Please try again')</script>";
					$this->add_hospitals();
				}
			  }
			  else
			  {
			  	echo "<script>alert('Wrong File for License')</script>";
				$this->add_hospitals();
			  }

			}
			else
			{
				echo "<script>alert('Invalid Image type try again')</script>";
				$this->add_hospitals();
			}

		  }
		  else
		  {
		  	echo "<script>alert('Password does not match')</script>";
		  	$this->add_hospitals();
		  }

		}

		public function manage_hospitals()
		{
			if ($this->session->has_userdata('admin_mail')) 
			{
				
				
				$this->load->model('Admin_model');
				$data['details']=$this->Admin_model->manage_hospitals_model();

				$this->load->view('Admin/manage_hospitals',$data);
			}
			else
			{
				$this->admin_login();
			}
		}

		public function approve_hospital($id)
		{
			$data=array('hospital_status'=>'Approved');
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->approve_hospital_model($id,$data);
			if ($execute==1) 
			{
				echo "<script>alert('Approved Hospital Successfully')</script>";
				$this->manage_hospitals();
			}
			else
			{
				echo "<script>alert('Failed Try Again')</script>";
				$this->manage_hospitals();
			}
		}

		public function reject_hospital($id)
		{
			$data=array('hospital_status'=>'Rejected');
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->approve_hospital_model($id,$data);
			if ($execute==1) 
			{
				echo "<script>alert('Rejected Hospital Successfully')</script>";
				$this->manage_hospitals();
			}
			else
			{
				echo "<script>alert('Failed Please Try Again')</script>";
				$this->manag_hospitals();
			}
		}

		public function categories()
		{
			if ($this->session->has_userdata('admin_mail')) 
			{
			$this->load->view('Admin/add_categories.php');
			}
			else
			{
				$this->admin_login();
			}
		}

		public function add_category()
		{
			 $name=$this->input->post('name');
			
			$image=$_FILES['cat_image']['name'];
			$Image=explode('.', $image);
			$time=Time();
			$photo=$time.'.'.end($Image);

			$config['allowed_types']='jpeg|png|jpg';
			$config['upload_path']='./Assets/Admin/category';
			$config['file_name']=$photo;

			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('cat_image')) 
			{
			
			$data=array('cat_name'=>$name,'cat_image'=>$photo);	
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->add_category_model($data);
			if ($execute==1) 
			{
				echo "<script>alert('Category Added Successfully')</script>";
				$this->categories();
			}
			else
			{
				echo "<script>alert('Failed please try again')</script>";
				$this->categories();
			}
			}
			else
			{
				echo "<script>alert('Wrong File Please Try Again')</script>";
				$this->categories();
			}

		}

		public function manage_categories()
		{
			if ($this->session->has_userdata('admin_mail')) 
			{
				$this->load->model('Admin_model');
				$data['details']=$this->Admin_model->manage_categories_model();
				$this->load->view('Admin/manage_categories.php',$data);
			}
			else
			{
				$this->admin_login();
			}
		}

		public function edit_category($id)
		{
			if ($this->session->has_userdata('admin_mail')) 
			{
				$this->load->model('Admin_model');
			    $data['details']=$this->Admin_model->edit_categories_model($id);
				$this->load->view('Admin/edit_category',$data);
			}
			else
			{
				$this->admin_login();
			}

		}

		public function delete_category($id)
		{
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->delete_category_model($id);
			if ($execute==1) 
			{
				echo "<script>alert('Category Deleted Successfully')</script>";
				$this->manage_categories();
			}
			else
			{
				echo "<script>alert('Failed please try again')</script>";
				$this->manage_categories();
			}
		}

		public function update_category($id)
		{
			$name=$this->input->post('name');
			$cat_image=$_FILES['cat_image']['name'];

			if (!empty($cat_image)) 
		 {
				
			$Image=explode('.', $cat_image);
			$time=Time();
			$photo=$time.'.'.end($Image);

			$config['allowed_types']='jpeg|png|jpg';
			$config['upload_path']='./Assets/Admin/category';
			$config['file_name']=$photo;

			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('cat_image')) 
		  {
			
			$update=array('cat_name'=>$name,'cat_image'=>$photo);
			$this->load->model('Admin_model');
			$execute=$this->Admin_model->update_category_model($id,$update);
			if ($execute==1) 
			{
				echo "<script>alert('Updated Successfully')</script>";
				$this->manage_categories();
			}
			else
			{
				echo "<script>alert('Failed please try again')</script>";
				$this->manage_categories();
			}
		  }
		  else
		  {
		  	echo "<script>alert('Wrong File try again')</script>";
		  	$this->manage_categories();
		  }	
		 }
		 else
		 {
		 		$update=array('cat_name'=>$name);
				$this->load->model('Admin_model');
				$execute=$this->Admin_model->update_category_model($id,$update);
			if ($execute==1) 
			{
				echo "<script>alert('Updated Successfully')</script>";
				$this->manage_categories();
			}
			else
			{
				echo "<script>alert('Failed please try again')</script>";
				$this->manage_categories();
			}
		 }
		}

		public function logout()
		{
			$this->session->sess_destroy();
			$this->load->view('User/index');

		}
		public function pending_complaints()
		{
			$this->load->model('Admin_model');
			$data['details']=$this->Admin_model->pending_complaints_model();
			$this->load->view('Admin/pending_complaints',$data);
		}

		public function reply_complaints($comp_id)
		{
			$this->load->model('Admin_model');
			$data['details']=$this->Admin_model->reply_complaints_model($comp_id);

			$this->load->view('Admin/reply_complaints',$data);
		}

		public function update_complaints($comp_id)
		{
			$your_msg=$this->input->post('your_msg');

			$data=array('reply'=>$your_msg);

			$this->load->model('Admin_model');
			$execute=$this->Admin_model->update_complaints_model($comp_id,$data);

			if ($execute==1) 
			{
				echo "<script>alert('Replied Successfully') </script>";
				$this->all_complaints();
			}
			else
			{
				echo "<script>alert('Failed Try Again')</script>";
				$this->pending_complaints();
			}
		}

		public function all_complaints()
		{
			$this->load->model('Admin_model');
			$data['details']=$this->Admin_model->all_complaints_model();
			$this->load->view('Admin/all_complaints',$data);
		}

		public function all_bookings()
		{
			$this->load->model('Admin_model');
			$data['details'] = $this->Admin_model->all_bookings_model();
			// echo "<pre>"; print_r($this->db->last_query()); echo "</pre>"; die('end of code');
			$this->load->view('Admin/all_bookings',$data);
		}


		
}