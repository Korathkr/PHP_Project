<?php   
    session_start();
     if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
     else $userid = "";
     if (isset($_SESSION["username"])) $username = $_SESSION["username"];
     else $username = "";
     if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
     else $userlevel = "";
     if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
     else $userpoint = "";
     if (isset($_SESSION["hakno"])) $userhakno = $_SESSION["hakno"];
     else $userhakno = "";
     if (isset($_SESSION["userdepartment"])) $userdepartment = $_SESSION["userdepartment"];
     else $userdepartment = "";
     if (isset($_SESSION["useryear"])) $useryear = $_SESSION["useryear"];
     else $useryear = "";
?>