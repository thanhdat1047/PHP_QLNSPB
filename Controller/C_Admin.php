<?php
include_once("../Model/M_NVPB.php");
// session_start();
// $_SESSION['logged'] = false;
class Ctrl_AD
{
    public function __invoke()
    {

        if (isset($_POST['btnsub'])) {
            $modeladmin = new Model_NVPB();
            if ($modeladmin->checkUserandPass($_REQUEST['username'], $_REQUEST['password'])) {
                //dung

                require_once '../View/login.php';
                echo '<div style = "text-align:center;font-size: 20px";><a href="../indexad.php" target = "_top">Dang nhap thanh cong</a></div>';
            } else {
                //sai
                require_once '../View/login.php';
                echo '<h5 style ="color:red;">  username or password is wrong </h5>';
            }
        } else {
            include_once("../View/login.php");
        }
    }
};
$C_AD = new Ctrl_AD();
$C_AD->__invoke();
