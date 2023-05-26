<?php
class Entity_Nhanvien
{
    public $idnv;
    public $hoten;
    public $idpb;
    public $diachi;
    public function __construct($idnv, $hoten, $idpb, $diachi)
    {
        $this->idnv = $idnv;
        $this->hoten = $hoten;
        $this->idpb = $idpb;
        $this->diachi = $diachi;
    }
}
