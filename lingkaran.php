<?php
require_once 'bentuk2D.php';
class lingkaran extends bentuk2D{
    public $jari_jari;
    const BENTUK = 'Lingkaran';

    public function __construct($jari_jari){
        $this->jari_jari = $jari_jari;
    }
    public function LuasBidang(){
        $luas = 3.14 * ($this->jari_jari * $this->jari_jari);
        return $luas;
    }
    public function KelilingBidang(){
        $keliling = 3.14 * ($this->jari_jari * $this->jari_jari);
        return $keliling;
    }
    public function cetak ()
    {
        echo
        '
            <td>' . self::BENTUK . '</td>
            <td>
                Jari-jari: ' . round($this->jari_jari) . ' cm
            </td>
            <td>' . round($this->LuasBidang()) . ' cm</td>
            <td>' . round($this->KelilingBidang()). ' cm</td>
        </tr>';
    }
}