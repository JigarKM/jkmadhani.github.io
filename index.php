<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate COVID-19 Plasma</h1>
						<p class="text-center">When Getting Back to Normal is Priority</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="TEXAS" label="&raquo; TEXAS"></optgroup><option value="Abernathy" >Abernathy</option><option value="addison" >Addison</option><option value="Austin" >Austin</option><option value="Baytown" >Baytown</option><option value="Beaumont" >Beaumont</option><option value="Dallas" >Dallas</option><option value="Longview" >Longview</option></select>
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
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							If you have fully recovered from COVID-19, you may be able to help patients currently fighting the infection by donating your plasma. Because you fought the infection, your plasma now contains COVID-19 antibodies. These antibodies provided one way for your immune system to fight the virus when you were sick, so your plasma may be able to be used to help others fight off the disease.
						</p>
						<a href="http://localhost/donatetheblood/donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Convalescent Plasma</h3>
								<img src="img/plasmared.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									Convalescent plasma is the liquid part of blood that is collected from patients who have recovered from the novel coronavirus disease, COVID-19, caused by the virus SARS-CoV-2.COVID-19 patients develop antibodies in the blood against the virus. 
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Recovered COVID-19</h3>
								<img src="img/recovered.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									People who have fully recovered from COVID-19    for at least two weeks are encouraged to consider donating plasma, which may help save the lives of other patients.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/usaflag.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									United States continues to provide generous support to all nations to assist them to respond to the COVID-19 pandemic. We urge all countries to embrace full and transparent information sharing.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>