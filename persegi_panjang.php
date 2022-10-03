<?php
require_once 'bentuk2D.php';
class persegi_panjang extends bentuk2D
{
    public $panjang;
    public $lebar;
    const BENTUK = 'Persegi Panjang';

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function LuasBidang()
    {
        $luas  = $this->panjang * $this->lebar;
        return $luas;
    }
    public function KelilingBidang()
    {
        $keliling  = 2 * ($this->panjang * $this->lebar);
        return $keliling;
    }
    public function cetak ()
    {
        echo
        '
            <td>' . self::BENTUK . '</td>
            <td>Panjang: ' . $this->panjang . ' cm<br> 
                Lebar: ' . $this->panjang . ' cm
            </td>
            <td>' . round($this->LuasBidang()) . ' cm</td>
            <td>' . round($this->KelilingBidang()). ' cm</td>
        </tr>';
    }
}