<?php include('header.php'); ?>
<?php include('session.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link href="bootstrap/css/index_background.css" rel="stylesheet" media="screen"/>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="all.js"> </script>
</head>
<body>
 <main>


<?php

if (isset($_GET['view'])) {
  $id     =  $_GET['view'];

  $query = mysql_query("select * from members where id = '$id'")or die(mysql_error());
  $row = mysql_fetch_array($query);

//   $child =json_decode($row['chidlren']);
//   for ($i=0; $i <count($tags) ; $i++) {
//     $child = $tags[$i];
// }
}



 ?>

<div class="container">
  	<?php include('sidebar_member.php'); ?>
    <link href="bootstrap/css/admin_background.css" rel="stylesheet" media="screen"/>
   <link rel="shortcut icon" href="images/logo.png" />
    <div class="span3" id="sidebar">

                 <img id="admin_avatar" class="img-circle" src="<?= $row['thumbnail'];?>" alt="no pic">



     </div>
  <h1 class="text-center justify-content-center py-5" style="font-weight:bold"> Member details</h1>
 <hr>

    <div class="col-md-12 mt-3 bg-light p-4 rounded">

      <div class="text-center">
        <table class="table table-striped">
        <h4 class="text-info special" style="font-weight:bold">Personal Information</h4>
        <
        <thead class="thead-dark">

    <tr>


          <th>FirstName</th>
          <th>Surname</th>
          <th>OtherName</th>
          <th>Gender</th>
          <th>Bloodgroup</th>
          <th>City</th>
          <th>Region</th>
          <th>Birthday</th>
          <th>Nationality</th>
          <th>Profession</th>
  </tr>
    </thead>
          <tr>
          <td> <?= $row['fname'];?></td>
          <td> <?=$row['sname'];?></td>
          <td> <?=$row['oname'];?></td>
          <td> <?=$row['Gender'];?></td>
         <td> <?=$row['Bloodgroup'];?></td>
          <td> <?=$row['city'];?></td>
          <td> <?=$row['region'];?></td>
          <td> <?=$row['Birthday'];?></td>
          <td> <?=$row['Nationality'];?></td>
          <td> <?=$row['prof'];?></td>

          </tr>

        </table>

        <table class="table table-striped">

      <br>  <br> <h4 class="text-info special" style="font-weight:bold">Address and Contact Information</h4>
     <thead class="thead-dark">


     <tr>


          <th>Mobile</th>
          <th>OtherMobile</th>
          <th>email</th>
          <th>Next of Kin</th>
          <th>Relation to NOK</th>
          <th>Phone Number of NOK</th>
               </tr>
</thead>
          <tr>
          <td> <?= $row['mobile'];?></td>
          <td> <?=$row['other_mobile'];?></td>
          <td> <?=$row['email'];?></td>
          <td> <?=$row['nok'];?></td>
         <td> <?=$row['rnok'];?></td>
          <td> <?=$row['mobilenok'];?></td>


          </tr>
        </table>

        <table class="table table-striped">
      <br> <br>  <h4 class="text-info special" style="font-weight:bold">Residential Address</h4>
        <thead class="thead-dark">

    <tr>


          <th>Town</th>
          <th>Surburb</th>
          <th>StreetName</th>
          <th>House Number</th>
          <th>Region of Residence</th>
          <th>Postal Address</th>
          <th>Marital Status</th>
          <th>Name of spouse</th>
          <th>Name of Children</th>

  </tr>
    </thead>
          <tr>
          <td> <?= $row['town'];?></td>
          <td> <?=$row['suburd'];?></td>
          <td> <?=$row['streetname'];?></td>
          <td> <?=$row['housenumber'];?></td>
         <td> <?=$row['regofresidence'];?></td>
          <td> <?=$row['postaladd'];?></td>
          <td> <?=$row['maritalstat'];?></td>
          <td> <?=$row['nameofspouse'];?></td>
          <td> <?=$row['chidlren'];?></td>

          </tr>

        </table>
        <table class="table table-striped">
        <br><br> <h4 class="text-info special" style="font-weight:bold">Father Information</h4>
        <thead class="thead-dark">

    <tr>


          <th>Living Status</th>
          <th>Name</th>
          <th>House Number</th>
          <th>Nationality</th>
          <th>Residential address</th>
          <th>Home Town</th>
          <th>Profession</th>
          <th>Phone Number</th>

  </tr>
    </thead>
          <tr>
          <td> <?= $row['living_dad'];?></td>
          <td> <?=$row['dad_name'];?></td>
          <td> <?=$row['hn_dad'];?></td>
          <td> <?=$row['nationality_dad'];?></td>
         <td> <?=$row['Residence_dad'];?></td>
          <td> <?=$row['dad_home'];?></td>
          <td> <?=$row['dad_prof'];?></td>
          <td> <?=$row['dad_phone'];?></td>

          </tr>

        </table>
        <table class="table table-striped">
        <br><br> <h4 class="text-info special" style="font-weight:bold">Mother Information</h4>
        <thead class="thead-dark">

    <tr>


          <th>Living Status</th>
          <th>House Number</th>
          <th>Name</th>

          <th>Nationality</th>
          <th>Residential address</th>
          <th>Home Town</th>
          <th>Profession</th>
          <th>Phone Number</th>

  </tr>
    </thead>
          <tr>
          <td> <?= $row['living_mum'];?></td>
        <td> <?=$row['name_mum'];?></td>
          <td> <?=$row['hn_mum'];?></td>

          <td> <?=$row['mum_nationility'];?></td>
         <td> <?=$row['res_mum'];?></td>
          <td> <?=$row['home_mum'];?></td>
          <td> <?=$row['mum_prof'];?></td>
          <td> <?=$row['mum_phone'];?></td>

          </tr>

        </table>

        <table class="table table-striped">
        <br><br> <h4 class="text-info special" style="font-weight:bold">Church Information</h4>
        <thead class="thead-dark">

    <tr>


          <th>Local Congregation</th>
          <th>Baptismal Status</th>
          <th>House Number</th>
          <th>Place of Baptism</th>


  </tr>
    </thead>
          <tr>
          <td> <?= $row['local_congre'];?></td>
          <td> <?=$row['Baptismal_stat'];?></td>
          <td> <?=$row['place_of_bap'];?></td>
          <td> <?=$row['date_of_bap'];?></td>


          </tr>

        </table>

        <table class="table table-striped">
        <br><br> <h4 class="text-info special" style="font-weight:bold">School Information</h4>
        <thead class="thead-dark">

    <tr>


          <th>Name of School</th>
          <th>Programme</th>
          <th>Form / Level</th>
          <th>Duration</th>


  </tr>
    </thead>
          <tr>
          <td> <?= $row['name_of_school'];?></td>
          <td> <?=$row['programme'];?></td>
          <td> <?=$row['form'];?></td>
          <td> <?=$row['duration'];?></td>


          </tr>

        </table>

        <table class="table table-striped">
        <br><br> <h4 class="text-info special" style="font-weight:bold">Other Relevant Information</h4>
        <thead class="thead-dark">

    <tr>

          <th>Other Information</th>


  </tr>
    </thead>
          <tr>

          <td> <?=$row['other_info'];?></td>


          </tr>

        </table>






    </div>

  <br>  <a href="update.php?edit=<?= $row['id']; ?>"
                class="badge badge-warning p-2" style="float: right;">Edit Record</a>
     <a href="http://localhost/pro/admin/membersDetail.php"class="badge badge-info p-2" >Go Back</a>

  </div>







</div>
