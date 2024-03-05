<?php 
  //include header file
  include ('include/header.php');


  if (isset($_POST['submit'])) {
	if (isset($_POST['term'])===true) {
		if (isset($_POST['name'])&&!empty($_POST['name'])) {
			if (preg_match('/^[A-Za-z\s]+$/',$_POST['name'])) {
				$name=$_POST['name'];
			}else {
				$nameError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Only lower and upper case and space are allowed</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
			}
		}else {
			$nameError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please fill the name</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
		}
		//gender
		if (isset($_POST['gender'])&&!empty($_POST['gender'])) {
			$gender=$_POST['gender'];
		}else {
			$genderError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please Select your gender</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
		}

	//date of birth
		if (isset($_POST['day'])&&!empty($_POST['day'])) {
			$day=$_POST['day'];
		}else {
			$dayError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please Select DOB</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
		}
		if (isset($_POST['month'])&&!empty($_POST['month'])) {
			$month=$_POST['month'];
		}else {
			$monthError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please Select Month</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
		}
		if (isset($_POST['year'])&&!empty($_POST['year'])) {
			$year=$_POST['year'];
		}else {
			$yearError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please Select Year</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
		}
		// bloood group
        if (isset($_POST['blood_group'])&&!empty($_POST['blood_group'])) {
			$blood_group=$_POST['blood_group'];
		}else {
			$blood_groupError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please Select your blood group</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
		}
//city
		if (isset($_POST['city'])&&!empty($_POST['city'])) {
			if (preg_match('/^[A-Za-z\s]+$/',$_POST['city'])) {
				$city=$_POST['city'];
			}else {
				$cityError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Only lower and upper case and space are allowed</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
			}
		}else {
			$cityError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please fill the city</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
		}
		//contact number
		if (isset($_POST['contact_no'])&&!empty($_POST['contact_no'])) {
			if (preg_match('/\d{10}/',$_POST['contact_no'])) {
				$contact=$_POST['contact_no'];
			}else {
				$contactError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>contact should consist 11 size</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
			}
		}else {
			$contactError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please fill the contact number</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
		}
		// password
		if (isset($_POST['password'])&&!empty($_POST['password']) &&
		 isset($_POST['c_password']) &&!empty($_POST['c_password'])) {
			# code...
			if (strlen($_POST['password'])>=6) {
				# code...
				if ($_POST['password']==$_POST['c_password']) {
					$password=$_POST['password'];
				}else {
					$passwordError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>the password are not same</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
				}
			}
			else {
				$passwordError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>the password should be greater than 6</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}
		}else {
			$passswordError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please field password</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		}
		//email
		if (isset($_POST['email'])&&!empty($_POST['email'])) {
			$pattern ='/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
			if (preg_match($pattern,$_POST['email'])) {
				$check_email=$_POST['email'];
			 $sql ="SELECT email FROM donor WHERE email='$check_email'";
			 $result =mysqli_query($connection,$sql);
			 if (mysqli_num_rows($result)>0) {
				$emailError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Sorry this email is alredy exist</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
			 }else {
				$email=$_POST['email'];
			 }
				
			}else {
				$emailError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please enter valid email</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
			}
		}else {
			$emailError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please fill the email</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
		}
		// insert into data into database
		if (isset($name)&& isset($blood_group)&&isset($gender)&&isset($day)
		&&isset($month)&&isset($year)&&isset($email)&&isset($contact)&&isset($city)
	    &&isset($password) ) {
			$DonorDOB=$year."-".$month."-".$day;
			$password =md5($password);
			$sql ="INSERT INTO donor(name,gender,email,city,dob,contact_no,save_life_data,password,blood_group) 
			VALUES('$name','$gender','$email','$city','$DonorDOB','$contact','0','$password','$blood_group')";
        if (mysqli_query($connection,$sql)) {
			# code...
		   header("Location: signin.php");
		}else {
			# code...
			$submitError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Data Not insertde try again</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
		}

		}
		
		
	}
	
	else {
		$termError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Please agree with our term and conditions</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>';
	}
	
	
  }
?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>
					
					<hr class="red-bar">
					<?php
					if (isset($termError)) echo $termError;
					if (isset($submitSuccess))echo $submitSuccess;
					if (isset($submitError))echo $submitError;	
				
					?>
					
					
          <!-- Error Messages -->

				<form class="form-group" action="" method="post" >
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" 
						value="<?php
					if (isset($name)) echo $name;
					?>">
						<?php
					if (isset($nameError)) echo $nameError;
					?>
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
				<?php if (isset($blood_group))echo'  <option selected="" value="'.$blood_group.'"
				>'.$blood_group.'</option>';?>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div><!--End form-group-->
			<?php
			if (isset($blood_groupError)) echo $blood_groupError;
					?>
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;">
				    </div><!--gender-->
					<?php
					if (isset($genderError)) echo $genderError;
					?>
				    <div class="form-inline">
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
               
			  <option value="">---Date---</option>
			  <?php if (isset($day))echo'  <option selected="" value="'.$day.'"
				>'.$day.'</option>';?>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
				<?php if (isset($month))echo'  <option selected="" value="'.$month.'"
				>'.$month.'</option>';?>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
				<?php if (isset($year))echo'  <option selected="" value="'.$year.'"
				>'.$year.'</option>';?>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select>
            </div><!--End form-group-->
			<?php
			if (isset($dayError)) echo $dayError;
					?>
			<?php
			if (isset($monthError)) echo $monthError;
					?>
					<?php
			if (isset($yearError)) echo $yearError;
					?>
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control"
						value="<?php
					if (isset($email)) echo $email;
					?>">
					</div>
					<?php
			if (isset($emailError)) echo $emailError;
					?>
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no"  placeholder="91********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11"
			  value="<?php
					if (isset($contact)) echo $contact;
					?>">
            </div><!--End form-group-->
			<?php
			if (isset($contactError)) echo $contactError;
					?>
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>

	<option value="">-- Select --</option>
	<?php if (isset($city))echo'  <option selected="" value="'.$city.'"
				>'.$city.'</option>';?>
	<option value="Delhi" >Delhi</option>
<option value="Mumbai" >Mumbai</option>
<option value="Kolkata" >Kolkata</option>
<option value="Chennai" >Chennai</option>
<option value="Bengaluru" >Bengaluru</option>
<option value="Hyderabad" >Hyderabad</option>
<option value="Jaipur" >Jaipur</option>
<option value="Lucknow" >Lucknow</option>
<option value="Ahmedabad" >Ahmedabad</option>
<option value="Surat" >Surat</option>
<option value="Pune" >Pune</option>
<option value="Kanpur" >Kanpur</option>
<option value="Nagpur" >Nagpur</option>
<option value="Visakhapatnam" >Visakhapatnam</option>
<option value="Indore" >Indore</option>
<option value="Thane" >Thane</option>
<option value="Bhopal" >Bhopal</option>
<option value="Patna" >Patna</option>
<option value="Vadodara" >Vadodara</option>
<option value="Ghaziabad" >Ghaziabad</option>
<option value="Ludhiana" >Ludhiana</option>
<option value="Agra" >Agra</option>
<option value="Nashik" >Nashik</option>
<option value="Faridabad" >Faridabad</option>
<option value="Meerut" >Meerut</option>
<option value="Rajkot" >Rajkot</option>
<option value="Kalyan-Dombivli" >Kalyan-Dombivli</option>
<option value="Vasai-Virar" >Vasai-Virar</option>
<option value="Varanasi" >Varanasi</option>
<option value="Srinagar" >Srinagar</option>
<option value="Aurangabad" >Aurangabad</option>
<option value="Dhanbad" >Dhanbad</option>
<option value="Amritsar" >Amritsar</option>
<option value="Navi Mumbai" >Navi Mumbai</option>
<option value="Allahabad" >Allahabad</option>
<option value="Ranchi" >Ranchi</option>
<option value="Haora" >Haora</option>
<option value="Coimbatore" >Coimbatore</option>
<option value="Jabalpur" >Jabalpur</option>
<option value="Gwalior" >Gwalior</option>
<option value="Vijayawada" >Vijayawada</option>
<option value="Jodhpur" >Jodhpur</option>
<option value="Madurai" >Madurai</option>
<option value="Raipur" >Raipur</option>
<option value="Kota" >Kota</option>
<option value="Guwahati" >Guwahati</option>
<option value="Chandigarh" >Chandigarh</option>
<option value="Hubli and Dharwad" >Hubli and Dharwad</option>
<option value="Amroha" >Amroha</option>
<option value="Moradabad" >Moradabad</option>
<option value="Gurgaon" >Gurgaon</option>
<option value="Aligarh" >Aligarh</option>
<option value="Solapur" >Solapur</option>
<option value="Ranchi" >Ranchi</option>
<option value="Jalandhar" >Jalandhar</option>
<option value="Tiruchirappalli" >Tiruchirappalli</option>
<option value="Bhubaneswar" >Bhubaneswar</option>
<option value="Salem" >Salem</option>
<option value="Warangal" >Warangal</option>
<option value="Mira and Bhayander" >Mira and Bhayander</option>
<option value="Thiruvananthapuram" >Thiruvananthapuram</option>
<option value="Bhiwandi" >Bhiwandi</option>
<option value="Saharanpur" >Saharanpur</option>
<option value="Guntur" >Guntur</option>
<option value="Amravati" >Amravati</option>
<option value="Bikaner" >Bikaner</option>
<option value="Noida" >Noida</option>
<option value="Jamshedpur" >Jamshedpur</option>
<option value="Bhilai Nagar" >Bhilai Nagar</option>
<option value="Cuttack" >Cuttack</option>
<option value="Kochi" >Kochi</option>
<option value="Udaipur" >Udaipur</option>
<option value="Bhavnagar" >Bhavnagar</option>
<option value="Dehradun" >Dehradun</option>
<option value="Asansol" >Asansol</option>
<option value="Nanded Waghala" >Nanded Waghala</option>
<option value="Ajmer" >Ajmer</option>
<option value="Jamnagar" >Jamnagar</option>
<option value="Ujjain" >Ujjain</option>
<option value="Sangli" >Sangli</option>
<option value="Loni" >Loni</option>
<option value="Jhansi" >Jhansi</option>
<option value="Pondicherry" >Pondicherry</option>
<option value="Nellore" >Nellore</option>
<option value="Jammu" >Jammu</option>
<option value="Belagavi" >Belagavi</option>
<option value="Raurkela" >Raurkela</option>
<option value="Mangaluru" >Mangaluru</option>
<option value="Tirunelveli" >Tirunelveli</option>
<option value="Malegaon" >Malegaon</option>
<option value="Gaya" >Gaya</option>
<option value="Tiruppur" >Tiruppur</option>
<option value="Davanagere" >Davanagere</option>
<option value="Kozhikode" >Kozhikode</option>
<option value="Akola" >Akola</option>
<option value="Kurnool" >Kurnool</option>
<option value="Bokaro Steel City" >Bokaro Steel City</option>
<option value="Rajahmundry" >Rajahmundry</option>
<option value="Ballari" >Ballari</option>
<option value="Agartala" >Agartala</option>
<option value="Bhagalpur" >Bhagalpur</option>
<option value="Latur" >Latur</option>
<option value="Dhule" >Dhule</option>
<option value="Korba" >Korba</option>
<option value="Bhilwara" >Bhilwara</option>
<option value="Brahmapur" >Brahmapur</option>
<option value="Mysore" >Mysore</option>
<option value="Muzaffarpur" >Muzaffarpur</option>
<option value="Ahmednagar" >Ahmednagar</option>
<option value="Kollam" >Kollam</option>
<option value="Raghunathganj" >Raghunathganj</option>
<option value="Bilaspur" >Bilaspur</option>
<option value="Shahjahanpur" >Shahjahanpur</option>
<option value="Thrissur" >Thrissur</option>
<option value="Alwar" >Alwar</option>
<option value="Kakinada" >Kakinada</option>
<option value="Nizamabad" >Nizamabad</option>
<option value="Sagar" >Sagar</option>
<option value="Tumkur" >Tumkur</option>
<option value="Hisar" >Hisar</option>
<option value="Rohtak" >Rohtak</option>
<option value="Panipat" >Panipat</option>
<option value="Darbhanga" >Darbhanga</option>
<option value="Kharagpur" >Kharagpur</option>
<option value="Aizawl" >Aizawl</option>
<option value="Ichalkaranji" >Ichalkaranji</option>
<option value="Tirupati" >Tirupati</option>
<option value="Karnal" >Karnal</option>
<option value="Bathinda" >Bathinda</option>
<option value="Rampur" >Rampur</option>
<option value="Shivamogga" >Shivamogga</option>
<option value="Chandrapur" >Chandrapur</option>
<option value="Junagadh" >Junagadh</option>
<option value="Bokaro" >Bokaro</option>
<option value="Rewa" >Rewa</option>
<option value="Nandyal" >Nandyal</option>
<option value="Barasat" >Barasat</option>
<option value="Karimnagar" >Karimnagar</option>
<option value="Anantapur" >Anantapur</option>
<option value="Etawah" >Etawah</option>
<option value="Ramagundam" >Ramagundam</option>
<option value="Hapur" >Hapur</option>
<option value="Arrah" >Arrah</option>
<option value="Karimnagar" >Karimnagar</option>
<option value="Parbhani" >Parbhani</option>
<option value="Baranagar" >Baranagar</option>
<option value="Tumakuru" >Tumakuru</option>
<option value="Munger" >Munger</option>
<option value="Purnia" >Purnia</option>
<option value="Mathura" >Mathura</option>
<option value="Bhilai" >Bhilai</option>
<option value="Kamarhati" >Kamarhati</option>
<option value="Sambalpur" >Sambalpur</option>
<option value="Shahjanpur" >Shahjanpur</option>
<option value="Satara" >Satara</option>
<option value="Bijapur" >Bijapur</option>
<option value="Rampur" >Rampur</option>
<option value="Shimoga" >Shimoga</option>
<option value="Chandrapur" >Chandrapur</option>
<option value="Junagadh" >Junagadh</option>
<option value="Thrissur" >Thrissur</option>
<option value="Alappuzha" >Alappuzha</option>
<option value="Bareilly" >Bareilly</option>
<option value="Morvi" >Morvi</option>
<option value="Sonipat" >Sonipat</option>
<option value="Farrukhabad" >Farrukhabad</option>
<option value="Orai" >Orai</option>
<option value="Panipat" >Panipat</option>
<option value="Aligarh" >Aligarh</option>
<option value="Bharatpur" >Bharatpur</option>
<option value="Machilipatnam" >Machilipatnam</option>
<option value="Raayachuru" >Raayachuru</option>
<option value="Hindupur" >Hindupur</option>
<option value="Kasaragod" >Kasaragod</option>
<option value="Serilingampalle" >Serilingampalle</option>
<option value="Vizianagaram" >Vizianagaram</option>
<option value="Katihar" >Katihar</option>
<option value="Hardwar" >Hardwar</option>
<option value="Sonipat" >Sonipat</option>
<option value="Nagercoil" >Nagercoil</option>
<option value="Thanjavur" >Thanjavur</option>
<option value="Murwara" >Murwara</option>
<option value="Naihati" >Naihati</option>
<option value="Sambhal" >Sambhal</option>
<option value="Nadiad" >Nadiad</option>
<option value="Yamunanagar" >Yamunanagar</option>
<option value="English Bazar" >English Bazar</option>
<option value="Eluru" >Eluru</option>
<option value="Munger" >Munger</option>
<option value="Panchkula" >Panchkula</option>
<option value="Raiganj" >Raiganj</option>
<option value="Sirsa" >Sirsa</option>
<option value="Danapur" >Danapur</option>
<option value="Serampore" >Serampore</option>
<option value="Sultan Pur Majra" >Sultan Pur Majra</option>
<option value="Guna" >Guna</option>
<option value="Jaunpur" >Jaunpur</option>
<option value="Panvel" >Panvel</option>
<option value="Shivpuri" >Shivpuri</option>
<option value="Surendranagar Dudhrej" >Surendranagar Dudhrej</option>
<option value="Unnao" >Unnao</option>
<option value="Chinsurah" >Chinsurah</option>
<option value="Alappuzha" >Alappuzha</option>
<option value="Kottayam" >Kottayam</option>
<option value="Machilipatnam" >Machilipatnam</option>
<option value="Shimla" >Shimla</option>
<option value="Adilabad" >Adilabad</option>
<option value="Tenali" >Tenali</option>
<option value="Proddatur" >Proddatur</option>
<option value="Medinipur" >Medinipur</option>
<option value="Yavatmal" >Yavatmal</option>
<option value="Kollam" >Kollam</option>
<option value="Kangra" >Kangra</option>
<option value="Ratlam" >Ratlam</option>
<option value="Alappuzha" >Alappuzha</option>
<option value="Kottayam" >Kottayam</option>
<option value="Kanyakumari" >Kanyakumari</option>
<option value="Nagercoil" >Nagercoil</option>
<option value="Kalyan-Dombivli" >Kalyan-Dombivli</option>
<option value="Gaya" >Gaya</option>
<option value="Vizianagaram" >Vizianagaram</option>
<option value="Dewas" >Dewas</option>
<option value="Khanna" >Khanna</option>
<option value="Sagar" >Sagar</option>
<option value="Berhampur" >Berhampur</option>
<option value="Pudukkottai" >Pudukkottai</option>
<option value="Hosur" >Hosur</option>
<option value="Sikar" >Sikar</option>
<option value="Navsari" >Navsari</option>
<option value="Mahbubnagar" >Mahbubnagar</option>
<option value="Porbandar" >Porbandar</option>
<option value="Palghar" >Palghar</option>
<option value="Oudh" >Oudh</option>
<option value="Adoni" >Adoni</option>
<option value="Yavatmal" >Yavatmal</option>
<option value="Rajapalaiyam" >Rajapalaiyam</option>
<option value="Udupi" >Udupi</option>
<option value="Machilipatnam" >Machilipatnam</option>
<option value="Shimla" >Shimla</option>
<option value="Karaikudi" >Karaikudi</option>
<option value="Hassan" >Hassan</option>
<option value="Deoghar" >Deoghar</option>
<option value="Nagercoil" >Nagercoil</option>
<option value="Kolar" >Kolar</option>
<option value="Bankura" >Bankura</option>
<option value="Giridih" >Giridih</option>
<option value="Bhimavaram" >Bhimavaram</option>
<option value="Kumbakonam" >Kumbakonam</option>
<option value="Bongaigaon" >Bongaigaon</option>
<option value="Dharmavaram" >Dharmavaram</option>
<option value="Raichur" >Raichur</option>
<option value="Guntakal" >Guntakal</option>
<option value="Ongole" >Ongole</option>
<option value="Srikakulam" >Srikakulam</option>
<option value="Warangal" >Warangal</option>
<option value="Haldia" >Haldia</option>
<option value="Hosur" >Hosur</option>
<option value="Saharsa" >Saharsa</option>
<option value="Krishnanagar" >Krishnanagar</option>
<option value="Nabadwip" >Nabadwip</option>
<option value="Puri" >Puri</option>
<option value="Robertson Pet" >Robertson Pet</option>
<option value="Barrackpur" >Barrackpur</option>
<option value="Kadapa" >Kadapa</option>
<option value="Chittoor" >Chittoor</option>
<option value="Kanchrapara" >Kanchrapara</option>
<option value="Berhampore" >Berhampore</option>
<option value="Batala" >Batala</option>
<option value="Kolar" >Kolar</option>
<option value="Palakollu" >Palakollu</option>
</select>
            </div><!--city en-->
			<?php
			if (isset($cityError)) echo $cityError;
					?>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern=".{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
            </div><!--End form-group-->
			<?php
			if (isset($passswordError)) echo $passswordError;
					?>
            <div class="form-inline">
              <input  type="checkbox" checked="" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>