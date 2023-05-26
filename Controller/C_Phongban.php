<?php
include_once("../Model/M_NVPB.php");
class Ctrl_PB
{
    public function __invoke()
    {
        if (isset($_REQUEST['pbid'])) {
            $modePhongban = new Model_NVPB();
            $nhanvienpbs = $modePhongban->getNhanvienInPhongBan($_GET['pbid']);
            include_once("../View/xemthongtinnhanvienPB.php");
        } else if (isset($_POST['add'])) {
            $modePhongban = new Model_NVPB();
            if (($modePhongban->addPhongban($_REQUEST['txt_IDPB'], $_REQUEST['txt_TPB'], $_REQUEST['txt_MT'])) == -1) {
                require_once '../View/thempb.php';
                echo '<h5 style ="color:red;">  ID bi trung hoac thong tin de trong </h5>';
            } else {
                header("Location:C_Phongban.php");
            }
        } else if (isset($_REQUEST['mod1'])) {
            include_once("../View/thempb.php");
        } else if (isset($_REQUEST["mod2"])) {
            $modePhongban = new  Model_NVPB();
            $phongbanList = $modePhongban->getAllphongban();
            include_once("../View/capnhatpb.php");
        } else if (isset($_REQUEST['pbidup'])) {
            $modePhongban = new  Model_NVPB();
            // $phongban = null;
            $phongban = $modePhongban->getPhongbanDetail($_GET['pbidup']);
            include_once("../View/formCapnhat.php");
        } else if (isset($_POST['update'])) {
            $modePhongban = new  Model_NVPB();
            $modePhongban->updatePhongban($_REQUEST['txt_IDPB'], $_REQUEST['txt_Tenpb'], $_REQUEST['txt_Mota']);
            header("Location:C_Phongban.php");
        } else {
            $modePhongban = new Model_NVPB();
            $phongbanList = $modePhongban->getAllphongban();
            include_once("../View/xemthongtinpb.php");
        }
    }
};
$C_PB = new Ctrl_PB();
$C_PB->__invoke();
