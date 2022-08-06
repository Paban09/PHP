<?php 

    require_once "vendor/autoload.php";

    use App\classes\Teacher;
    use App\classes\Students;

    if(isset($_GET['page'])){
        if ($_GET['page']=="teacher"){
            $info=new Teacher();
            $information=$info->getTeacherDetails();
            include "pages/teacher.php";
        }elseif ($_GET['page']=="student"){
            $info=new Students();
            $information=$info->getStudentDetails();
            include "pages/student.php";
        }
    }