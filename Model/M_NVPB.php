<?php
include_once("E_Nhanvien.php");
include_once("E_Phongban.php");

class Model_NVPB
{
    public function __construct()
    {
    }
    public function getAllphongban()
    {
        $link = mysqli_connect("localhost", "root", "")  or die("Can not connect to database");
        mysqli_select_db($link, "dulieu");
        $sql = "SELECT * FROM phongban";
        $rs = mysqli_query($link, $sql);
        $i = 1;
        while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
            $idpb = $row["IDPB"];
            $tenpb = $row["TenPB"];
            $mota = $row["Mota"];
            $phongbans[$i++] = new  Entity_Phongban($idpb, $tenpb, $mota);
        }
        return $phongbans;
    }
    public function getPhongbanDetail($pbid)
    {
        $allPhongban = $this->getAllphongban();
        for ($i = 1; $i < sizeof($allPhongban); $i++) {
            if ($allPhongban[$i]->idpb == $pbid) {
                return $allPhongban[$i];
            }
        }
    }
    public function getAllidpb()
    {
        $link = mysqli_connect("localhost", "root", "") or die("Could not connect to database ");
        mysqli_select_db($link, "dulieu");
        $sql = "SELECT IDPB FROM phongban ";
        $rs = mysqli_query($link, $sql);
        $i = 1;
        while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
            $idpb = $row["IDPB"];
            $idphongbans[$i++] = $idpb;
        }
        return $idphongbans;
    }

    public function addPhongban($idpb, $tenpb, $mota)
    {
        $link = mysqli_connect("localhost", "root", "")  or die("Could not connect to database");
        mysqli_select_db($link, "dulieu");
        $sql = "SELECT * FROM phongban WHERE IDPB = '$idpb'";
        $rs1 = mysqli_query($link, $sql);

        if (mysqli_num_rows($rs1) != 0) {
            return -1;
        }
        $sql2 = "INSERT INTO `phongban` (`IDPB`, `TenPB`, `Mota`) VALUES ('$idpb', '$tenpb', '$mota')";
        $rs2 = mysqli_query($link, $sql2);
        mysqli_close($link);
    }

    public function updatePhongban($idpb, $tenpb, $mota)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Could not connect to database");
        mysqli_select_db($link, "dulieu");
        $sqlup = "UPDATE `phongban` set TenPB ='$tenpb', Mota ='$mota'  WHERE IDPB = '$idpb'";
        $rs = mysqli_query($link, $sqlup);
        mysqli_close($link);
    }
    //------------nhan vien------------------- 
    public function getAllnhanvien()
    {
        $link = mysqli_connect("localhost", "root", "")  or die("Could not connect to database");
        mysqli_select_db($link, "dulieu");
        $sql = "SELECT * FROM nhanvien";
        $rs = mysqli_query($link, $sql);
        $i = 1;
        while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
            $idnv = $row["IDNV"];
            $hoten = $row["HoTen"];
            $idpb = $row["IDPB"];
            $diachi = $row["Diachi"];
            $nhanviens[$i++] = new  Entity_Nhanvien($idnv, $hoten, $idpb, $diachi);
        }
        return $nhanviens;
    }
    public function getAllidnhanvien()
    {
        $link = mysqli_connect("localhost", "root", "")  or die("Could not connect to database");
        mysqli_select_db($link, "dulieu");
        $sql = "SELECT IDNV FROM nhanvien";
        $rs = mysqli_query($link, $sql);
        $i = 1;
        while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {

            $idnv[$i++] = $row['IDNV'];
        }
        return $idnv;
    }
    public function getNhanvienDetail($nvid)
    {
        $allNhanvien = $this->getAllnhanvien();
        for ($i = 1; $i < sizeof($allNhanvien); $i++) {
            if ($allNhanvien[$i]->idnv == $nvid) {
                return $allNhanvien[$i];
            }
        }
    }
    public function getNhanvienInPhongBan($idpb)
    {
        $link = mysqli_connect("localhost", "root", "")  or die("Could not connect to database");
        mysqli_select_db($link, "dulieu");
        $sql = "SELECT * FROM nhanvien WHERE IDPB = '$idpb'";
        $rs = mysqli_query($link, $sql);
        $i = 1;
        if (mysqli_num_rows($rs) == 0) {
            $nhanviens = -1;
        }
        while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
            $idnv = $row['IDNV'];
            $hoten = $row['HoTen'];
            $idpb = $row['IDPB'];
            $diachi = $row['Diachi'];
            //while ($i != $id) $i++;
            $nhanviens[$i++] = new Entity_Nhanvien($idnv, $hoten, $idpb, $diachi);
        }
        mysqli_close($link);
        return $nhanviens;
    }
    public function searchNhanvien($column, $text)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Could not connect to database");
        mysqli_select_db($link, "dulieu");
        if ($column != 'id') {
            $sql = "SELECT * FROM nhanvien WHERE $column like '%$text%'";
        } else {
            $sql = "SELECT * FROM nhanvien WHERE $column like '$text'";
        }
        $rs = mysqli_query($link, $sql);
        $i = 1;
        if (mysqli_num_rows($rs) != 0) {
            while ($row = mysqli_fetch_array($rs)) {
                $idnv = $row['IDNV'];
                $hoten = $row['HoTen'];
                $idpb = $row['IDPB'];
                $diachi = $row['Diachi'];
                $nhanviens[$i++] = new  Entity_Nhanvien($idnv, $hoten, $idpb, $diachi);
            }
        } else {
            $nhanviens = -1;
        }
        return $nhanviens;
        // mysqli_close($link);
    }


    public function addNhanvien($idnv, $hoten, $idpb, $diachi)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Could not connect to database ");
        mysqli_select_db($link, "dulieu");
        $sql2 = "SELECT * FROM nhanvien WHERE IDNV = '$idnv'";
        $rs2 = mysqli_query($link, $sql2);

        if (mysqli_num_rows($rs2) != 0) {
            return -1;
        }
        $sql = "INSERT INTO `nhanvien` (`IDNV`, `HoTen`, `IDPB`, `Diachi`) VALUES ('$idnv', '$hoten', '$idpb', '$diachi')";
        $rs = mysqli_query($link, $sql);
        mysqli_close($link);
    }

    public function deleteNhanvien($idnv)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Could not connect to database");
        mysqli_select_db($link, "dulieu");
        $sql = "DELETE FROM nhanvien WHERE IDNV = '$idnv'";
        $rs = mysqli_query($link, $sql);
        mysqli_close($link);
    }
    //------------admin------------------- 
    public function checkUserandPass($username, $password)
    {
        $link = mysqli_connect("localhost", "root", "") or die("Could not connect to database");
        mysqli_select_db($link, "dulieu");
        $sql = "SELECT * FROM admin wHERE username = '$username' and password = '$password' ";
        $rs = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($rs);
        if ($row) {
            return 1;
        }
        return -1;
    }
}
