<?php
error_reporting(0);
include 'db.php'; ?>
<?php
if (isset($_POST['Submit'])){
$sname = $_POST['sur-name'];
$fname = $_POST['first-name'];
$oname = $_POST['othername'];
$Gender = $_POST['gender'];
$bloodgroup = $_POST['blood-group'];
$city = $_POST['birth-city'];
$region = $_POST['region'];
$birthday = $_POST['birth-date'];
$nationality= $_POST['Nationality'];
$profession = $_POST['prof'];
$mobile= $_POST['phonenumber'];
$othermobile = $_POST['otherphone'];
$email  = $_POST['email'];
$nextkin = $_POST['nextofkin'];
$relanok = $_POST['relation-to-next-kin'];
$nokphone = $_POST['phone-of-nok'];
$towm = $_POST['rescident-city'];
$sub = $_POST['suburb'];
$streetname = $_POST['streetname'];
$hnum = $_POST['housenumber'];
$regionofres = $_POST['regionofresidence'];
$postalad = $_POST['postaladdress'];
$marital = $_POST['marital-status'];
$spouse = $_POST['spouse-name'];
$children = json_encode($_POST['tags']);
$dadlive = $_POST['fatherlivingstat'];
$dadhn = $_POST['housenumberdod'];
$dadname =$_POST['fadaname'];
$dadnation = $_POST['nationalityoffada'];
$dadres = $_POST['resisdentofdad'];
$dadhometown = $_POST['hometowofdad'];
$dadprof = $_POST['prof-of-dad'];
$dadphone =$_POST['phonenumberofdad'];
$mumlives = $_POST['motherlivingstat'];
$mumname = $_POST['modaname'];
$mumhousenum = $_POST['housenumberofmum'];
$mumnation = $_POST['nationalityofmoda'];
$mumres = $_POST['resisdentofmum'];
$mumtown = $_POST['hometownofmom'];
$mumprof = $_POST['prof-of-mum'];
$mumphone = $_POST['phonenumberofmum'];
$otherinfo = $_POST['otherinfo'];
$localcongre = $_POST['local-congre'];
$bapstat = $_POST['bap-stat'];
$pobatism = $_POST['place-of-baptism'];
$dateofbap = $_POST['baptism-date'];
$schoolname = $_POST['name-of-school'];
$course = $_POST['Programme-course'];
$level =$_POST['form-level'];
$duration = $_POST['Duration'];
$pic = $_POST['image'];




// mysql_query("insert into members (fname,sname,lname,Gender,birthday,residence,pob,ministry,mobile,email,thumbnail,password,id)
// values('$fname','$sname','$lname','$Gender','$birthday','$residence','$pob','$ministry','$mobile','$email','uploads/none.png','$password','$mobile')")or die(mysql_error());

 // mysqli_query("insert into members (sname, fname, oname, Gender, Bloodgroup, city,region, Birthday, Nationality, prof, mobile, other_mobile, email, nok, rnok, mobilenok, town, suburd, streetname, housenumber, regofresidence, postaladd, maritalstat, nameofspouse, chidlren, living_dad, hn_dad, dad_name, nationality_dad, Residence_dad, dad_home, dad_prof,dad_phone, living_mum, name_mum, hn_mum, mum_nationility, res_mum, home_mum, mum_prof, mum_phone, other_info, local_congre, Baptismal_stat, place_of_bap, date_of_bap, name_of_school, programme, form, duration, thumbnail, id, date)
 // values('$sname', '$fname','$oname', '$Gender', '$bloodgroup', '$city', '$region', '$birthday', '$nationality', '$profession', '$mobile', '$othermobile','$email', '$nextkin', '$relanok', '$nokphone', '$towm', '$sub', '$streetname', '$hnum', '$regionofres', '$postalad', '$marital', '$spouse', '$children', '$dadlive', '$dadhn', '$dadname', '$dadnation', '$dadres', '$dadhometown', '$dadprof','$dadphone',
 // '$mumlives', '$mumname', '$mumhousenum', '$mumnation', '$mumres', '$mumtown','$mumprof', '$mumphone', '$otherinfo', '$localcongre', '$bapstat', '$pobatism', '$dateofbap', '$schoolname', '$course', '$level', '$duration','$mobile')");
 //
$query = "insert into members(sname, fname, oname, Gender, Bloodgroup, city,region, Birthday, Nationality, prof, mobile, other_mobile, email, nok, rnok, mobilenok, town, suburd, streetname, housenumber, regofresidence, postaladd, maritalstat, nameofspouse, chidlren, living_dad, hn_dad, dad_name, nationality_dad, Residence_dad, dad_home, dad_prof,dad_phone, living_mum, name_mum, hn_mum, mum_nationility, res_mum, home_mum, mum_prof, mum_phone, other_info, local_congre, Baptismal_stat, place_of_bap, date_of_bap, name_of_school, programme, form, duration,thumbnail,id)
 values('$sname', '$fname','$oname', '$Gender', '$bloodgroup', '$city', '$region', '$birthday', '$nationality', '$profession', '$mobile', '$othermobile','$email', '$nextkin', '$relanok', '$nokphone', '$towm', '$sub', '$streetname', '$hnum', '$regionofres', '$postalad', '$marital', '$spouse', '$children', '$dadlive', '$dadhn', '$dadname', '$dadnation', '$dadres', '$dadhometown', '$dadprof','$dadphone',
 '$mumlives', '$mumname', '$mumhousenum', '$mumnation', '$mumres', '$mumtown','$mumprof', '$mumphone', '$otherinfo', '$localcongre', '$bapstat', '$pobatism', '$dateofbap', '$schoolname', '$course', '$level', '$duration','uploads/none.png','$mobile')";

$runquery = mysqli_query($conn,$query);
if ($runquery) {
  echo "success";
   header("location:http://localhost/pro/admin/membersDetail.php");
}else {
  echo "error";
  echo (mysqli_error());
}






}
?>
