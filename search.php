<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
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
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
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
						</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->
		<?php
		if ((isset($_GET['city']) &&!empty($_GET['city'])) &&
		(isset($_GET['blood_group']) &&!empty($_GET['blood_group'])))
		{   

			$city = $_GET['city'];
			$blood_group=$_GET['blood_group'];
			$sql ="SELECT * FROM donor WHERE city='$city' OR blood_group='$blood_group'";
			$result = mysqli_query($connection,$sql);
			if (mysqli_num_rows($result)>0) {
			 while ($row= mysqli_fetch_assoc($result)) {
				 if ($row['save_life_data']=='0') {
					 echo
					 '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
					 <span class="name">'.$row['name'].'</span>
					 <span>'.$row['city'].'</span>
					 <span>'.$row['blood_group'].'</span>
					 <span>'.$row['gender'].'</span>
					 <span>'.$row['email'].'</span>
					 <span>'.$row['contact_no'].'</span>
					 
					 </div>';
				 }else {
					 echo
					 '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
					 <span class="name">'.$row['name'].'</span>
					 <span>'.$row['city'].'</span>
					 <span>'.$row['blood_group'].'</span>
					 <span>'.$row['gender'].'</span>
					 <h4 class="name text-center">Donated</h4>
					 </div>';
				 }
			 }
			}else {
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Not Found</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
			}

		}
		?>


</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');
	

?>
<script type="text/javascript">
	$(function() {
		
		$("#search").on('click',function(){
          var city = $("#city").val();
		  var blood_group =$("#blood_group").val();
		  $.ajax({
           type : 'GET',
		   url: 'ajaxsearch.php',
		   data : {city:city,blood_group: blood_group},
		   success:function(data){
			if(!data.error){
				$("#data").html(data);
			}
		   }
		  });
		});
	});
 

</script>