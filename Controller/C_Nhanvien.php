<?php
include_once("../Model/M_NVPB.php");
class Ctrl_NV
{
    public function __invoke()
    {
        if (isset($_POST['btn_search'])) {
            $modelNhanvien = new Model_NVPB();
            $nhanvienList = $modelNhanvien->searchNhanvien($_REQUEST['radio'], $_REQUEST['txt_search']);
            if ($nhanvienList == -1) {
                require_once("../View/timkiemnv.php");
                echo '<h5 style ="color:red;">  Not find </h5>';
            } else {
                include_once("../View/xemthongtinnv.php");
            }
        } else if (isset($_REQUEST['mod1'])) {
            include_once("../View/timkiemnv.php");
        } else if (isset($_REQUEST['mod2'])) {
            $modePB = new  Model_NVPB;
            $idpb = $modePB->getAllidpb();
            include_once("../View/themnv.php");
        } else if (isset($_POST['add'])) {
            $modelNhanvien = new  Model_NVPB();

            if (($modelNhanvien->addNhanvien($_REQUEST['txt_IDNV'], $_REQUEST['txt_Hoten'], $_REQUEST['select'], $_REQUEST['txt_DC'])) == -1) {
                require_once '../View/themnv.php';
                echo '<h5 style ="color:red;">  ID bi trung </h5>';
            } else {
                header("Location:C_Nhanvien.php");
            }
        } else if (isset($_REQUEST['mod3'])) {
            $modelNhanvien = new Model_NVPB();
            $nhanvienList = $modelNhanvien->getAllnhanvien();
            include_once("../View/deletenv.php");
        } else if (isset($_REQUEST['iddelete'])) {
            $modelNhanvien = new Model_NVPB();
            $modelNhanvien->deleteNhanvien($_GET['iddelete']);
            header("Location:C_Nhanvien.php");
        } else if (isset($_REQUEST['mod4'])) {
            $modelNhanvien = new Model_NVPB();
            $nhanvienList = $modelNhanvien->getAllnhanvien();
            include_once("../View/deleteall.php");
        } else if (isset($_REQUEST['xoatatca'])) {
            $modelNhanvien = new  Model_NVPB();
            $idnvs = $modelNhanvien->getAllidnhanvien();
            for ($i = 1; $i <= sizeof($idnvs); $i++) {
                if (isset($_REQUEST[$idnvs[$i]])) {
                    $modelNhanvien->deleteNhanvien($_REQUEST[$idnvs[$i]]);
                }
            }
            $nhanvienList = $modelNhanvien->getAllNhanVien();
            include_once("../View/xemthongtinnv.php");
        } else {
            $modelNhanvien = new Model_NVPB();
            $nhanvienList = $modelNhanvien->getAllnhanvien();
            include_once("../View/xemthongtinnv.php");
        }
    }
};
$C_NV = new Ctrl_NV();
$C_NV->__invoke();
