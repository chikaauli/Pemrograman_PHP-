<?php
require_once 'bentuk2D.php';
class segitiga extends bentuk2D
{
    public $alas;
    public $tinggi;
    const BENTUK = 'Segitiga Siku-Siku';

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function LuasBidang()
    {
        $luas  = 0.5 *  ($this->alas * $this->tinggi);
        return $luas;
    }
    public function SisiMiring()
    {
        $s_miring  = sqrt(pow($this->tinggi, 2) + pow($this->alas, 2));
        return $s_miring;
    }
    public function KelilingBidang()
    {
        $keliling  = $this->tinggi * $this->alas + $this->SisiMiring();
        return $keliling;
    }
    public function cetak ()
    {
        echo
        '
            <td>' . self::BENTUK . '</td>
            <td>Alas: ' . $this->alas . ' cm<br> 
                Tinggi: ' . $this->tinggi . ' cm<br>
                Sisi Miring: ' . round($this->SisiMiring()) . ' cm
            </td>
            <td>' . round($this->LuasBidang()) . ' cm</td>
            <td>' . round($this->KelilingBidang()). ' cm</td>
        </tr>';
    }
}