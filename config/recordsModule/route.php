<?php
  error_reporting(E_ALL ^ E_NOTICE);

  include "view.php";
  include "crud.php";


if (isset($_REQUEST['token'])){
  $signing = base64_decode($_REQUEST['token']);

  switch($signing){
    default:
      pagenotfound();
	  //dashboard();
      break;
    case "dashboard":
      dashboard();
      break;
    case "singleResult":
	  singleResult();
	  //myresults();
	  break;
    case "biodata":
      $std_id = getfield('id',$mysqli);
      studentbiodata($std_id);
	  break;
    case "finance":
	$std_id = getfield('id',$mysqli);
      studentfinancerecords($std_id);
	  break;
    case "registration":
	$std_id = getfield('id',$mysqli);
      registration($std_id);
	  break;
    case "retake":
	$std_id = getfield('id',$mysqli);
      retake($std_id);
	  break;
   }
}

if (isset($_REQUEST['call'])){
  $signing = base64_decode($_REQUEST['call']);
  switch($signing){
    case "entermarks":
      entermarks();
      break;
    case "getCourseunits":                //Populate Courseunits <select>
      $Programme = $_REQUEST['Programme'];
      $semester = $_REQUEST['semester'];
      $year = $_REQUEST['year'];
      getCourseunits($Programme,$semester,$year);
    break;
    case "getStudents":                   //Populate Students <select>
      $Programme = $_REQUEST['Programme'];
      $year = $_REQUEST['year'];
      $intake = $_REQUEST['intake'];
      getStudents($Programme,$year,$intake);
    break;
    case "enterNewMark":
      insert_marks();
    break;
    case "getStudent":
    $id = $_GET['id'];
    $year = $_GET['year'];
    $semester = $_GET['semester'];
    loadTranscript($id,$year,$semester);
    break;
    case "GradeStudent":
    $mark = $_REQUEST['mark'];
    GradeStudent($mark);
    break;
    case "singleResult":
    singleResult();
    break;
    case "getAllStudent":
    getAllStudent();
    break;
    
  }
}
?>