<?php
error_reporting(0);
include 'db.php'; ?>
<?php
if (isset($_POST['Update'])){
$userid =  $_GET['edit'];
$snameup = $_POST['upsur-name'];
$fnameup = $_POST['upfirst-name'];
$onameup = $_POST['upothername'];
$Genderup = $_POST['upgender'];
$bloodgroupup = $_POST['upblood-group'];
$cityup = $_POST['upbirth-city'];
$regionup = $_POST['upregion'];
$birthdayup = $_POST['upbirth-date'];
$nationalityup= $_POST['upNationality'];
$professionup = $_POST['upprof'];
$mobileup= $_POST['upphonenumber'];
$othermobileup = $_POST['upotherphone'];
$emailup  = $_POST['upemail'];
$nextkinup = $_POST['upnextofkin'];
$relanokup = $_POST['uprelation-to-next-kin'];
$nokphoneup = $_POST['upphone-of-nok'];
$towmup = $_POST['uprescident-city'];
$subup = $_POST['upsuburb'];
$streetnameup = $_POST['upstreetname'];
$hnumup = $_POST['uphousenumber'];
$regionofresup = $_POST['upregionofresidence'];
$postaladup = $_POST['uppostaladdress'];
$maritalup = $_POST['upmarital-status'];
$spouseup = $_POST['upspouse-name'];
$childrenup = json_encode($_POST['uptags']);
$dadliveup = $_POST['upfatherlivingstat'];
$dadhnup = $_POST['uphousenumberdod'];
$dadnameup =$_POST['upfadaname'];
$dadnationup = $_POST['upnationalityoffada'];
$dadresup = $_POST['upresisdentofdad'];
$dadhometownup = $_POST['uphometowofdad'];
$dadprofup = $_POST['upprof-of-dad'];
$dadphoneup =$_POST['upphonenumberofdad'];
$mumlivesup = $_POST['upmotherlivingstat'];
$mumnameup = $_POST['upmodaname'];
$mumhousenumup = $_POST['uphousenumberofmum'];
$mumnationup = $_POST['upnationalityofmoda'];
$mumresup = $_POST['upresisdentofmum'];
$mumtownup = $_POST['uphometownofmom'];
$mumprofup = $_POST['upprof-of-mum'];
$mumphoneup = $_POST['upphonenumberofmum'];
$otherinfoup = $_POST['upotherinfo'];
$localcongreup = $_POST['uplocal-congre'];
$bapstatup = $_POST['upbap-stat'];
$pobatismup = $_POST['upplace-of-baptism'];
$dateofbapup = $_POST['upbaptism-date'];
$schoolnameup = $_POST['upname-of-school'];
$courseup = $_POST['upProgramme-course'];
$levelup =$_POST['upform-level'];
$durationup = $_POST['upDuration'];



// mysql_query("insert into members (fname,sname,lname,Gender,birthday,residence,pob,ministry,mobile,email,thumbnail,password,id)
// values('$fname','$sname','$lname','$Gender','$birthday','$residence','$pob','$ministry','$mobile','$email','uploads/none.png','$password','$mobile')")or die(mysql_error());

 // mysqli_query("insert into members (sname, fname, oname, Gender, Bloodgroup, city,region, Birthday, Nationality, prof, mobile, other_mobile, email, nok, rnok, mobilenok, town, suburd, streetname, housenumber, regofresidence, postaladd, maritalstat, nameofspouse, chidlren, living_dad, hn_dad, dad_name, nationality_dad, Residence_dad, dad_home, dad_prof,dad_phone, living_mum, name_mum, hn_mum, mum_nationility, res_mum, home_mum, mum_prof, mum_phone, other_info, local_congre, Baptismal_stat, place_of_bap, date_of_bap, name_of_school, programme, form, duration, thumbnail, id, date)
 // values('$sname', '$fname','$oname', '$Gender', '$bloodgroup', '$city', '$region', '$birthday', '$nationality', '$profession', '$mobile', '$othermobile','$email', '$nextkin', '$relanok', '$nokphone', '$towm', '$sub', '$streetname', '$hnum', '$regionofres', '$postalad', '$marital', '$spouse', '$children', '$dadlive', '$dadhn', '$dadname', '$dadnation', '$dadres', '$dadhometown', '$dadprof','$dadphone',
 // '$mumlives', '$mumname', '$mumhousenum', '$mumnation', '$mumres', '$mumtown','$mumprof', '$mumphone', '$otherinfo', '$localcongre', '$bapstat', '$pobatism', '$dateofbap', '$schoolname', '$course', '$level', '$duration','$mobile')");
 //
$update_query ="update members set sname ='".$snameup."', fname='".$fnameup."',oname='".$onameup."', Gender='".$Genderup."', Bloodgroup='".$bloodgroupup."',city='".$cityup."',region='".$regionup."',Birthday='".$birthdayup."', Nationality='".$nationalityup."', prof='".$professionup."', mobile='".$mobileup."', other_mobile='".$othermobileup."', email='".$emailup."',
nok='".$nextkinup."', rnok='".$relanokup."', mobilenok='".$nokphoneup."', town='".$towmup."', suburd='".$subup."', streetname='".$streetnameup."', housenumber='".$hnumup."', regofresidence='".$regionofresup."', postaladd='".$postaladup."', maritalstat='".$maritalup."', nameofspouse='".$spouseup."', chidlren='".$childrenup."', living_dad='".$dadliveup."', hn_dad='".$dadhnup."',
dad_name='".$dadnameup."', nationality_dad='".$dadnationup."', Residence_dad='".$dadresup."', dad_home='".$dadhometownup."', dad_prof='".$dadprofup."',dad_phone='".$dadphoneup."', living_mum='".$mumlivesup."', name_mum='".$mumnameup."', hn_mum='".$mumhousenumup."', mum_nationility='".$mumnationup."', res_mum='".$mumresup."', home_mum='".$mumtownup."', mum_prof='".$mumprofup."', mum_phone='".$mumphoneup."',
other_info='".$otherinfoup."', local_congre='".$localcongreup."', Baptismal_stat='".$bapstatup."', place_of_bap='".$pobatismup."', date_of_bap='".$dateofbapup."', name_of_school='".$schoolnameup."', programme='".$courseup."', form='".$levelup."', duration='".$durationup."', id='".$mobileup."'  where keyu='$userid'";

$runquery_update = mysqli_query($conn,$update_query);
if ($runquery_update) {
  echo "success";
header("location:http://localhost/pro/admin/membersDetail.php");
}else {
  echo "error";
  echo mysql_error();
}






}
?>
