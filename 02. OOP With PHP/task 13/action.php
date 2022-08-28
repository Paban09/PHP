<?php
require_once 'vendor/autoload.php';
use App\classes\Student;
use App\classes\Auth;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'all-student')
    {
        $student  = new Student();
        $students = $student->getAllStudent();
        include 'pages/all-student.php';
    }
    elseif ($_GET['page'] == 'edit')
    {
        $student = new Student();
        $singleStudent = $student->getStudentById($_GET['id']);
        include 'pages/edit.php';
    }
    elseif ($_GET['page'] == 'delete')
    {
        $student = new Student();
        $deleteStudent = $student->deleteStudentById($_GET['id']);
        $students = $student->getAllStudent();
        include 'pages/all-student.php';
    }elseif ($_GET['page'] == 'login')
    {

        include 'pages/login.php';
    }elseif ($_GET['page'] == 'dashboard')
    {

        include 'pages/dashboard.php';
    }elseif ($_GET['page'] == 'logout')
    {

        $auth=new Auth();
        $auth->logout();
    }
}
elseif (isset($_POST['submit_btn']))
{
    $student = new Student($_POST, $_FILES);
    $message = $student->newStudent();
    include 'pages/home.php';
}
elseif (isset($_POST['update_btn']))
{
    $student = new Student($_POST, $_FILES);
    $student->updateStudent();
}elseif (isset($_POST['login_btn']))
{

//   echo "<pre>";
//   print_r($_POST);
//   echo "</pre>";

    $auth=new Auth($_POST);
    $message=$auth->login();
    include 'pages/login.php';
}