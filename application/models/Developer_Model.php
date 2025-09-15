<?php 
defined('BASEPATH') OR exit ('no direct script access allowed');

/**
 * 
 */
class Developer_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function developerVerification()
	{
		$devEmailID = $_POST['email'];
		$devPassword = $_POST['password'];
		$secretID = $_POST['secretUID'];

		$devEmail = array('support@aidcom.in','chandanjaiswallove@gmail.com','robinkujur@aidcom.in');
		$devCredentials = array('Admin1234#@','RobinR2204#@','PCLaptop@2025');
		$secretCode = array('7292818092','9264453821','9199450345');

		if(isset($_POST['webmasterLogin']))
		{
			if(in_array($devEmailID, $devEmail) && in_array($devPassword, $devCredentials) && in_array($secretID, $secretCode))
			{
				$_SESSION['activeDeveloper'] = $devEmailID;

				echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { 
				        swal("Welcome!","Welcome Onboard '.$devEmailID.' now you can access your database. ","success")
				        .then(function(){ 
				            window.location.href = "'.base_url('webmaster_dashboard').'"; 
				        });
				      }, 200);';
				echo '</script>';
			}
			else
			{
				echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { 
				        swal("Sorry!","Unauthorised access found, redirecting to login page!","error")
				        .then(function(){ 
				            window.location.href = "'.base_url('webmaster').'"; 
				        });
				      }, 200);';
				echo '</script>';

			}
		}
	}

	// public function registerInstitute()
	// {
	// 	$directorName = $_POST['directorAdmin'];
	// 	$instituteName = $_POST['instituteName'];
	// 	$directorEmail = $_POST['directorEmail'];
	// 	$portalPassword = $_POST['adminPassword'];
	// 	$adminContact = $_POST['adminContact'];
	// 	$secretUID = $_POST['secretUID'];
	// 	$dummyData = 'To be Updated';

	// 	$checkExistingAdmin = $this->db->query("SELECT * FROM admin_directory WHERE admin_personal_email = '$directorEmail' AND admin_whatsapp_contact = '$adminContact'");

	// 	$adminOTP = random_string('alnum',8);

		

	// 	if(isset($_POST['enrollNewAdmin']))
	// 	{
	// 	  if($checkExistingAdmin->num_rows()>0)
	// 	  {
	// 	  	echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
	// 		echo '<script type="text/javascript">';
	// 		echo 'setTimeout(function () { 
	// 		        swal("Duplicate Data Found!","Sorry, we could not register the admin with the email you provided. Another Admin with same details exist. To avoid duplicacy, we do not allow multiple registration.","error")
	// 		        .then(function(){ 
	// 		            window.location.href = "'.base_url('enroll_newAdmin').'"; 
	// 		        });
	// 		      }, 200);';
	// 		echo '</script>';
	// 	  }
	// 	  else
	// 	  {
	// 	  	$adminData = array(
	// 	  		'institute_name' => $instituteName,
	// 	  		'admin_name' => $directorName,
	// 	  		'admin_personal_email' => $directorEmail,
	// 	  		'admin_email_otp' => 


	// 	  	);


	// 	  	echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
	// 		echo '<script type="text/javascript">';
	// 		echo 'setTimeout(function () { 
	// 		        swal("Duplicate Data Found!","Sorry, we could not register the admin with the email you provided. Another Admin with same details exist. To avoid duplicacy, we do not allow multiple registration.","error")
	// 		        .then(function(){ 
	// 		            window.location.href = "'.base_url('enroll_newAdmin').'"; 
	// 		        });
	// 		      }, 200);';
	// 		echo '</script>';
	// 	  }
	// 	}
	// }

	public function webmasterLogout()
	{
		session_unset();
		unset($_SESSION['activeDeveloper']);
		session_destroy();
		redirect(base_url('webmaster'));
	}
}
?> 