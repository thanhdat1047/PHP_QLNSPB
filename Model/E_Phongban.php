<?php
class Entity_Phongban
{
    public $idpb;
    public $tenpb;
    public $mota;
    public function __construct($idpb, $tenpb, $mota)
    {
        $this->idpb = $idpb;
        $this->tenpb = $tenpb;
        $this->mota = $mota;
    }
}
