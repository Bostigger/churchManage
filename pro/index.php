<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Membership signup page</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container align-items-center text-center">
        <h2>Church Management System</h2>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- <a class="navbar-brand" href="index.html">Membership signup Page</a> -->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">

				</div>
			</div>
		</nav>

        <!-- Description -->
		<div class="description-container">
	        <div class="container">
	        	<div class="row">
	                <div class="col-sm-12 description-title">

	                </div>
	            </div>

			</div>
		</div>

		<!-- Multi Step Form -->
		<div class="msf-container">
	        <div class="container">
	        	<div class="row">
	                <div class="col-sm-12 msf-title">
	                    <h3>Membership form</h3>
	                    <p>Please complete the form below.</p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-12 msf-form">

	                    <form role="form" action="reg.php" method="post" class="form-inline"  autocomplete="on">

	                    	<fieldset>
	            				<h4>Personal Information <span class="step">(Step 1 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="first-name">*SurName:</label><br>
				                    <input type="text" name="sur-name" class="first-name form-control" id="first-name" placeholder="Surname" >
				                </div>
				                <div class="form-group">
				                    <label for="last-name">*First Name:</label><br>
				                    <input type="text" name="first-name" class="last-name form-control" id="last-name" placeholder="First Name">
				                </div>
				                <div class="form-group">
				                    <label for="height">Other Name:</label><br>
				                    <input type="text" name="othername" class="height form-control" id="height" placeholder="optional">
				                </div>

                        <div class="form-group">
                     <p>Gender</p>
                             <select class="form-control" name="gender">
                               <option value="">Choose Gender</option>
                               <option value="male">Male</option>
                               <option value="female">Female</option>

                             </select>
                   </div>
                   <div class="form-group">
                     <p>Blood Group</p>
                        <select class="form-control" name="blood-group">
                          <option value="">Choose Blood Group</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="O-">O-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                          <option value="O+">O+</option>

                        </select>
              </div>
              <div class="form-group">
                    <label for="birth-city">City / Town of Birth:</label><br>
                    <input type="text" name="birth-city" class="birth-city form-control" id="birth-city" placeholder="Place of birth">
                </div>
                <div class="form-group">
                    <p>Region / State:</p>
                       <select class="form-control" name="region">
                         <option value="">Choose Region</option>
                         <option value="Ashanti">Ashanti</option>
                         <option value="Western">Western</option>
                         <option value="Eastern">Eastern</option>
                         <option value="Brong Ahafo">Brong Ahafo</option>
                         <option value="Volta">Volta</option>
                         <option value="Upper East">Upper East</option>
                         <option value="upper West">Upper West</option>
                         <option value="Central">Central</option>
                         <option value="Western North">Western North</option>
                         <option value="Savanah Region">Western North</option>
                         <option value="North East">North East</option>
                         <option value="Oti Region">Oti Region</option>
                         <option value="Bono Region">Bono  Region</option>

                       </select>
                </div>

                <div class="form-group">
                    <label for="birth-date">Date of bith:</label><br>
                     <input type="text" name="birth-date" class="birth-state form-control" id="birth-state" placeholder="1990-11-02(yy-mm-dd)">
                </div>




                <div class="form-group">
                  <p>Nationality</p>
                     <select class="form-control" name="Nationality">
                       <option value="">Choose Nationality</option>
                       <option value="Ghanaian">Ghanaian</option>
                       <option value="Non-Ghanaian">Non-Ghanaian</option>

                     </select>
           </div>

                           <div class="form-group">
                             <p>Profession</p>
                                <select class="form-control" name="prof">
                                  <option value="">Choose Working Status</option>
                                  <option value="Employed">Employed</option>
                                  <option value="Non-Employed">Non-Employed</option>
                                  <option value="self_employed">Self-Employed</option>
                                  <option value="student">Student</option>

                                </select>
                      </div>
	            				<br>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>


	            			</fieldset>



	            			<fieldset>
	            				<h4>Address and Contact Information <span class="step">(Step 2 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="address">*Phone Number:</label><br>
				                    <input type="text" name="phonenumber" class="address form-control" id="address" placeholder="0200000000">
				                </div>
				                <div class="form-group">
				                    <label for="">other number (if any):</label><br>
				                    <input type="text" name="otherphone" class="address-city form-control" id="address-city" placeholder="other phone number">
				                </div>
				                <div class="form-group">
				                    <label for="">Email:</label><br>
				                    <input type="text" name="email" class="address-state form-control" id="address-state" placeholder="ama@gmail.com">
				                </div>
				                <div class="form-group">
				                    <label for="">Next of kin:</label><br>
				                    <input type="text" name="nextofkin" class="address-country form-control" id="address-country" placeholder="Next of kin">
				                </div>
				                <div class="form-group">
				                    <label for="">Relation to next:</label><br>
				                    <input type="text" name="relation-to-next-kin" class="address-postal-code form-control" id="address-postal-code" placeholder="relation to next of kin">
				                </div>
				                <div class="form-group">
				                    <label for="">Next of kin's Phone Number:</label><br>
				                    <input type="text" name="phone-of-nok" class="telephone form-control" id="telephone" placeholder="0300000000">
				                </div>

	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>

	                    	<fieldset>
	            				<h4>Residential Address <span class="step">(Step 3 / 7)</span></h4>
                      <div class="form-group">
				                    <label for="address">*Town / City of Residence:</label><br>
				                    <input type="text" name="rescident-city" class="address form-control" id="address" placeholder="Town">
				                </div>
				                <div class="form-group">
				                    <label for="">suburb:</label><br>
				                    <input type="text" name="suburb" class="address-city form-control" id="address-city" placeholder="suburb">
				                </div>
				                <div class="form-group">
				                    <label for="">Street Name:</label><br>
				                    <input type="text" name="streetname" class="address-state form-control" id="address-state" placeholder="streetname">
				                </div>
				                <div class="form-group">
				                    <label for="">House Number:</label><br>
				                    <input type="text" name="housenumber" class="address-country form-control" id="address-country" placeholder="House number">
				                </div>
                        <div class="form-group">
				                    <label for="">Region of Residence:</label><br>

                            <select class="form-control" name="regionofresidence">
                              <option value="">Choose Region</option>
                              <option value="Ashanti">Ashanti</option>
                              <option value="Western">Western</option>
                              <option value="Eastern">Eastern</option>
                              <option value="Brong Ahafo">Brong Ahafo</option>
                              <option value="Volta">Volta</option>
                              <option value="Upper East">Upper East</option>
                              <option value="upper West">Upper West</option>
                              <option value="Central">Central</option>
                              <option value="Western North">Western North</option>
                              <option value="Savanah Region">Western North</option>
                              <option value="North East">North East</option>
                              <option value="Oti Region">Oti Region</option>
                              <option value="Bono Region">Bono  Region</option>

                            </select>


                        </div>

                        <div class="form-group">
				                    <label for="">Postal address:</label><br>
				                    <input type="text" name="postaladdress" class="address-country form-control" id="address-country">
				                </div>
                        <div class="form-group">
                          <p>Marital Status</p>
                             <select class="form-control" name="marital-status">
                               <option value="">Choose marital status</option>
                               <option value="single">Single</option>
                               <option value="married">Married</option>
                               <option value="divorced">Divorced</option>
                               <option value="widowed">widowed</option>

                             </select>
                   </div>
                        <div class="form-group">
                            <label for="">Name of spouse:</label><br>
                            <input type="text" name="spouse-name" class="address-country form-control" id="address-country">
                        </div>
                         <br>
                        <div class="input_fields_container_part form-group">
                          <div><input type="text" name="tags" hidden  >
                               <button class="btn-info btn-primary add_more_button" style="margin-top:25px; padding:5px;">Click here if you have children</button>
                          </div>
                        </div>

	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>

	            			<fieldset>
	            				<h4>Father Information <span class="step">(Step 5 / 7)</span></h4>
                      <div class="form-group">
                        <p>Living Status</p>
                           <select class="form-control" name="fatherlivingstat">
                             <option value="">Choose living status</option>
                             <option value="dead">Dead</option>
                             <option value="live">Alive</option>

                           </select>
                 </div>
                      <div class="form-group">
                          <label for="">House Number:</label><br>
                          <input type="text" name="housenumberdod" class="address-country form-control" id="address-country">
                      </div>
                      <div class="form-group">
                          <label for="">Name:</label><br>
                          <input type="text" name="fadaname" class="address-country form-control" id="address-country">
                      </div>
                      <div class="form-group">
                          <label for="">Nationality:</label><br>
                          <input type="text" name="nationalityoffada" class="address-country form-control" id="address-country">
                      </div>
                      <div class="form-group">
                          <label for="">Residential address:</label><br>
                          <input type="text" name="resisdentofdad" class="address-country form-control" id="address-country">
                      </div>
                      <div class="form-group">
                          <label for="">Home Town:</label><br>
                          <input type="text" name="hometowofdad" class="address-country form-control" id="address-country">
                      </div>
                      <div class="form-group">
                        <p>Profession</p>

                           <select class="form-control" name="prof-of-dad">
                             <option value="">Choose Working Status</option>
                             <option value="Employed">Employed</option>
                             <option value="Non-Employed">Non-Employed</option>
                             <option value="self_employed">Self-Employed</option>
                             <option value="student">Student</option>

                           </select>
                 </div>
                 <div class="form-group">
                       <label for="address">*Phone Number:</label><br>
                       <input type="text" name="phonenumberofdad" class="address form-control" id="address">
                   </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>

	            			<fieldset>
	            				<h4>Mother Information <span class="step">(Step 6 / 7)</span></h4>
                      <div class="form-group">
                        <p>Living Status</p>
                           <select class="form-control" name="motherlivingstat">
                             <option value="">Choose living status</option>
                             <option value="dead">Dead</option>
                             <option value="live">Alive</option>

                           </select>
                 </div>
                      <div class="form-group">
                          <label for="">Name:</label><br>
                          <input type="text" name="modaname" class="address-country form-control" id="address-country">
                      </div>
                      <div class="form-group">
                          <label for="">House Number:</label><br>
                          <input type="text" name="housenumberofmum" class="address-country form-control" id="address-country">
                      </div>
                      <div class="form-group">
                          <label for="">Nationality:</label><br>
                          <input type="text" name="nationalityofmoda" class="address-country form-control" id="address-country">
                      </div>
                      <div class="form-group">
                          <label for="">Residential address:</label><br>
                          <input type="text" name="resisdentofmum" class="address-country form-control" id="address-country">
                      </div>
                      <div class="form-group">
                          <label for="">Home Town:</label><br>
                          <input type="text" name="hometownofmom" class="address-country form-control" id="address-country">
                      </div>
                      <div class="form-group">
                        <p>Profession</p>

                           <select class="form-control" name="prof-of-mum">
                             <option value="">Choose Working Status</option>
                             <option value="Employed">Employed</option>
                             <option value="Non-Employed">Non-Employed</option>
                             <option value="self_employed">Self-Employed</option>
                             <option value="student">Student</option>

                           </select>

                 </div>
                 <div class="form-group">
                       <label for="address">*Phone Number:</label><br>
                       <input type="text" name="phonenumberofmum" class="address form-control" id="address">
                   </div>
	            				<div class="form-group">

									<label for="why-join">Please input any relevant Information here:</label><br>
				                    <textarea name="otherinfo" class="why-join form-control" id="why-join"placeholder="Example:
                            Place of work, etc"></textarea>
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>

	            			<fieldset>
	            				<h4>Church Information <span class="step">(Step 7 / 7)</span></h4>
                      <div class="form-group">
                          <label for="">Local Congregation:</label><br>
                          <input type="text" name="local-congre" class="address-country form-control" id="address-country">
                      </div>
                      <div class="form-group">
                        <p>Baptismal Status</p>
                           <select class="form-control" name="bap-stat">
                             <option value="">Choose Baptismal status</option>
                             <option value="Baptised">Baptised</option>
                             <option value="not Baptised">Not Baptised</option>

                           </select>
                 </div>
                 <div class="form-group">
                     <label for="">Place of Baptism:</label><br>
                     <input type="text" name="place-of-baptism" class="address-country form-control" id="address-country">
                 </div>
                 <div class="form-group">
                     <label for="birth-date">Date of Baptism:</label><br>
                     <input type="date" name="baptism-date" class="birth-date form-control" id="birth-date" placeholder="eg. 1990-12-01 (YY-MM-DAY)">
                 </div>

                 <h4>Educational Information</h4>
                 <div class="form-group">
                     <label for="">Name of school:</label><br>
                     <input type="text" name="name-of-school" class="address-country form-control" id="address-country">
                 </div>
                 <div class="form-group">
                     <label for="">Programme / Course:</label><br>
                     <input type="text" name="Programme-course" class="address-country form-control" id="address-country">
                 </div>
                 <div class="form-group">
                     <P>Form / Level:</P>
                     <select class="form-control" name="form-level">
                       <option value="">Choose Educational level</option>
                       <option value="Creche">Creche</option>
                       <option value="Nursery">Nursery</option>
                       <option value="Kindergaten">Kindergaten</option>
                       <option value="Primary">Primary</option>
                       <option value="JHS">JHS</option>
                       <option value="SHS">SHS</option>
                       <option value="Tertiary">Tertiary</option>

                     </select>

                 </div>
                 <div class="form-group">
                     <label for="">Duration in years :</label><br>
                     <input type="text" name="Duration" class="address-country form-control" id="address-country">
                 </div>


	            				<br>

                      <!-- <div class="controls form-group">
                        <label for="">Upload member Picture</label><br>
      									<input name="image" class="input-file uniform_on form-control" id="profileimage" type="file">
      								</div> -->
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="Submit" class="btn" name="Submit">Submit</button>
	            			</fieldset>

	                    </form>

	                </div>
	            </div>
			</div>
		</div>



        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
