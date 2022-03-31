<?php
require_once 'class_account.php';

class AccountBank extends Account{
    public $pemilik;
    static $biaya_admin = 6500;

    function __construct($nomor,$saldo,$pemilik){
        parent::__construct($nomor,$saldo);
        $this->pemilik = $pemilik;
    }

    public function transfer($ab_tujuan,$uang){
        $ab_tujuan->deposit($uang); //account bank tujuan bertambah saldonya
        $this->witdrawl($uang); //saldo account bank ini berkurang
        $this->witdrawl(self::$biaya_admin);
    }

    public function cetak(){
        parent::cetak();//pangggil function milik parent
        echo '<br/>Pemilik : '.$this->pemilik;
    }

}

?>