<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_member_id= $_GET['edit']; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="all.js"> </script>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Updat Member Details</title>

 <!-- CSS -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
 <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/form-elements.css">
 <link rel="stylesheet" href="assets/css/style.css">
 <link rel="stylesheet" href="assets/css/media-queries.css">
</head>
<body>



<?php

if (isset($_GET['edit'])) {
  $id     =  $_GET['edit'];
  $query = mysql_query("select * from members where keyu = '$id'")or die(mysql_error());
  $row = mysql_fetch_array($query);

  // $child =json_decode($row['children']);
  // for ($i=0; $i <count($tags) ; $i++) {
  //   $child = $tags[$i];
  // }
}

 ?>
 <nav class="navbar navbar-inverse" role="navigation">
   <div class="container align-items-center text-center">
     <h2>Update Member Details</h2>
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

                   <form role="form" action="update_member.php" method="post" class="form-inline"  >

                     <fieldset>
                   <h4>Personal Information <span class="step">(Step 1 / 7)</span></h4>
                   <div class="form-group">
                         <label for="first-name">*SurName:</label><br>
                         <input type="text" name="upsur-name" class="first-name form-control" id="first-name" value="<?= $row['sname']; ?>" >
                     </div>
                     <div class="form-group">
                         <label for="last-name">*First Name:</label><br>
                         <input type="text" name="upfirst-name" class="last-name form-control" id="last-name" value ="<?= $row['fname']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="height">Other Name:</label><br>
                         <input type="text" name="upothername" class="height form-control" id="height"  value="<?= $row['oname']; ?>">
                     </div>

                     <div class="form-group">
                  <p>Gender</p>
                          <select class="form-control" name="upgender" >
                            <option value=""><?= $row['Gender']; ?></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>

                          </select>
                </div>
                <div class="form-group">
                  <p>Blood Group</p>
                     <select class="form-control" name="upblood-group">
                       <option value=""><?= $row['Bloodgroup']; ?></option>
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
                 <input type="text" name="upbirth-city" class="birth-city form-control" id="birth-city" value="<?= $row['city']; ?>">
             </div>
             <div class="form-group">
                 <p>Region / State:</p>
                    <select class="form-control" name="upregion">
                      <option value=""><?= $row['region']; ?></option>
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
                 <input type="text" name="upbirth-date" class="birth-state form-control" id="birth-state" value="<?= $row['Birthday']; ?>">
             </div>




             <div class="form-group">
               <p>Nationality</p>
                  <select class="form-control" name="upNationality">
                    <option value=""><?= $row['Nationality']; ?></option>
                    <option value="Ghanaian">Ghanaian</option>
                    <option value="Non-Ghanaian">Non-Ghanaian</option>

                  </select>
        </div>

                        <div class="form-group">
                          <p>Profession</p>
                             <select class="form-control" name="upprof">
                               <option value=""><?= $row['prof']; ?></option>
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
                         <input type="text" name="upphonenumber" class="address form-control" id="address" value="<?= $row['mobile']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="">other number (if any):</label><br>
                         <input type="text" name="upotherphone" class="address-city form-control" id="address-city" value="<?= $row['other_mobile']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="">Email:</label><br>
                         <input type="text" name="upemail" class="address-state form-control" id="address-state" value="<?= $row['email']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="">Next of kin:</label><br>
                         <input type="text" name="upnextofkin" class="address-country form-control" id="address-country" value="<?= $row['nok']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="">Relation to next:</label><br>
                         <input type="text" name="uprelation-to-next-kin" class="address-postal-code form-control" id="address-postal-code" value="<?= $row['rnok']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="">Next of kin's Phone Number:</label><br>
                         <input type="text" name="upphone-of-nok" class="telephone form-control" id="telephone" value="<?= $row['mobilenok']; ?>">
                     </div>

                   <br>
                   <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                   <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
                 </fieldset>

                     <fieldset>
                   <h4>Residential Address <span class="step">(Step 3 / 7)</span></h4>
                   <div class="form-group">
                         <label for="address">*Town / City of Residence:</label><br>
                         <input type="text" name="uprescident-city" class="address form-control" id="address" value="<?= $row['town']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="">suburb:</label><br>
                         <input type="text" name="upsuburb" class="address-city form-control" id="address-city" value="<?= $row['suburd']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="">Street Name:</label><br>
                         <input type="text" name="upstreetname" class="address-state form-control" id="address-state" value="<?= $row['streetname']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="">House Number:</label><br>
                         <input type="text" name="uphousenumber" class="address-country form-control" id="address-country" value="<?= $row['housenumber']; ?>">
                     </div>
                     <div class="form-group">
                         <label for="">Region of Residence:</label><br>
                         <input type="text" name="upregionofresidence" class="address-country form-control" id="address-country"  value="<?= $row['regofresidence']; ?>">
                     </div>

                     <div class="form-group">
                         <label for="">Postal address:</label><br>
                         <input type="text" name="uppostaladdress" class="address-country form-control" value="<?= $row['postaladd']; ?>">
                     </div>
                     <div class="form-group">
                       <p>Marital Status</p>
                          <select class="form-control" name="upmarital-status">
                            <option value=""><?= $row['maritalstat']; ?></option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">widowed</option>

                          </select>
                </div>
                     <div class="form-group">
                         <label for="">Name of spouse:</label><br>
                         <input type="text" name="upspouse-name" class="address-country form-control" value="<?= $row['nameofspouse']; ?>">
                     </div>
                      <br>
                     <div class="input_fields_container_part form-group">
                       <div><input type="text" name="uptags[]" hidden  value="<?= $row['chidlren']; ?>">
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
                        <select class="form-control" name="upfatherlivingstat">
                          <option value=""><?= $row['living_dad']; ?></option>
                          <option value="dead">Dead</option>
                          <option value="live">Alive</option>

                        </select>
              </div>
                   <div class="form-group">
                       <label for="">House Number:</label><br>
                       <input type="text" name="uphousenumberdod" class="address-country form-control" value="<?= $row['hn_dad']; ?>">
                   </div>
                   <div class="form-group">
                       <label for="">Name:</label><br>
                       <input type="text" name="upfadaname" class="address-country form-control" value="<?= $row['dad_name']; ?>">
                   </div>
                   <div class="form-group">
                       <label for="">Nationality:</label><br>
                       <input type="text" name="upnationalityoffada" class="address-country form-control" value="<?= $row['nationality_dad']; ?>">
                   </div>
                   <div class="form-group">
                       <label for="">Residential address:</label><br>
                       <input type="text" name="upresisdentofdad" class="address-country form-control" value="<?= $row['Residence_dad']; ?>">
                   </div>
                   <div class="form-group">
                       <label for="">Home Town:</label><br>
                       <input type="text" name="uphometowofdad" class="address-country form-control" value="<?= $row['dad_home']; ?>">
                   </div>
                   <div class="form-group">
                     <p>Profession</p>
                        <select class="form-control" name="upprof-of-dad">
                          <option value=""><?= $row['dad_prof']; ?></option>
                          <option value="Employed">Employed</option>
                          <option value="Non-Employed">Non-Employed</option>
                          <option value="self_employed">Self-Employed</option>
                          <option value="student">Student</option>

                        </select>
              </div>
              <div class="form-group">
                    <label for="address">*Phone Number:</label><br>
                    <input type="text" name="upphonenumberofdad" class="address form-control" value="<?= $row['dad_phone']; ?>">
                </div>
                   <br>
                   <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                   <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
                 </fieldset>

                 <fieldset>
                   <h4>Mother Information <span class="step">(Step 6 / 7)</span></h4>
                   <div class="form-group">
                     <p>Living Status</p>
                        <select class="form-control" name="upmotherlivingstat">
                          <option value=""><?= $row['living_mum']; ?></option>
                          <option value="dead">Dead</option>
                          <option value="live">Alive</option>

                        </select>
              </div>
                   <div class="form-group">
                       <label for="">Name:</label><br>
                       <input type="text" name="upmodaname" class="address-country form-control" value="<?= $row['name_mum']; ?>">
                   </div>
                   <div class="form-group">
                       <label for="">House Number:</label><br>
                       <input type="text" name="uphousenumberofmum" class="address-country form-control" value="<?= $row['hn_mum']; ?>">
                   </div>
                   <div class="form-group">
                       <label for="">Nationality:</label><br>
                       <input type="text" name="upnationalityofmoda" class="address-country form-control" value="<?= $row['mum_nationility']; ?>">
                   </div>
                   <div class="form-group">
                       <label for="">Residential address:</label><br>
                       <input type="text" name="upresisdentofmum" class="address-country form-control" value="<?= $row['res_mum']; ?>">
                   </div>
                   <div class="form-group">
                       <label for="">Home Town:</label><br>
                       <input type="text" name="uphometownofmom" class="address-country form-control" value="<?= $row['home_mum']; ?>">
                   </div>
                   <div class="form-group">
                     <p>Profession</p>
                        <select class="form-control" name="upprof-of-mum">
                          <option value=""><?= $row['mum_prof']; ?></option>
                          <option value="Employed">Employed</option>
                          <option value="Non-Employed">Non-Employed</option>
                          <option value="self_employed">Self-Employed</option>
                          <option value="student">Student</option>

                        </select>
              </div>
              <div class="form-group">
                    <label for="address">*Phone Number:</label><br>
                    <input type="text" name="upphonenumberofmum" class="address form-control" value="<?= $row['mum_phone']; ?>">
                </div>
                   <div class="form-group">

               <label for="why-join">Please input any relevant Information here:</label><br>
                         <textarea name="upotherinfo" class="why-join form-control" id="why-join" value="<?= $row['other_info']; ?>"></textarea>
                     </div>
                   <br>
                   <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                   <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
                 </fieldset>

                 <fieldset>
                   <h4>Church Information <span class="step">(Step 7 / 7)</span></h4>
                   <div class="form-group">
                       <label for="">Local Congregation:</label><br>
                       <input type="text" name="uplocal-congre" class="address-country form-control" value="<?= $row['local_congre']; ?>">
                   </div>
                   <div class="form-group">
                     <p>Baptismal Status</p>
                        <select class="form-control" name="upbap-stat">
                          <option value=""><?= $row['Baptismal_stat']; ?></option>
                          <option value="Baptised">Baptised</option>
                          <option value="not Baptised">Not Baptised</option>

                        </select>
              </div>
              <div class="form-group">
                  <label for="">Place of Baptism:</label><br>
                  <input type="text" name="upplace-of-baptism" class="address-country form-control" value="<?= $row['place_of_bap']; ?>">
              </div>
              <div class="form-group">
                  <label for="birth-date">Date of Baptism:</label><br>
                  <input type="text" name="upbaptism-date" class="birth-date form-control" id="birth-date" value="<?= $row['date_of_bap']; ?>">
              </div>

              <h4>Educational Information</h4>
              <div class="form-group">
                  <label for="">Name of school:</label><br>
                  <input type="text" name="upname-of-school" class="address-country form-control" value="<?= $row['name_of_school']; ?>">
              </div>
              <div class="form-group">
                  <label for="">Programme / Course:</label><br>
                  <input type="text" name="upProgramme-course" class="address-country form-control" value="<?= $row['programme']; ?>">
              </div>
              <div class="form-group">

                  <P>Form / Level:</P>
                  <select class="form-control" name="upform-level">
                    <option value=""><?= $row['form']; ?></option>
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
                  <input type="text" name="upDuration" class="address-country form-control" value="<?= $row['duration']; ?>">
              </div>


                   <br>
                   <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                   <button type="Submit" class="btn" name="Update">Update</button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="jquery-3.4.1.min.js"></script>
<script src="main.js">

</script>
</body>
</html>
