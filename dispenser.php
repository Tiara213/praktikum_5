<?php

class Dispenser{
  protected $volume;
  protected $hargaPergelas;
  private $volumeGelas;
  public $namaMinuman;

  function  volume($vol){
    $this->volume = $vol;
  }
}

class Minuman extends Dispenser
{
  public $uang;
  function __construct($uang, $namaMinuman, $volumeGelas, $harga)
  {
    $this->uang = $uang;
    $this->namaMinuman = $namaMinuman;
    $this->hargaPergelas = $harga;
    $this->volumeGelas = $volumeGelas;
  }

  function transaksi($uang)
  {
    $this->uang = $uang;
    return  $this->uang - $this->hargaPergelas;
  }

  function volumeSetelahdibeli()
  {
    $this->volume = $this->volume - $this->volumeGelas;
    return $this->volume;
  }

  function cetak()
  {
    echo '<h2>'. 'Silahkan memilih '.'</h2>';
    echo 'Nama Minuman : ' . $this->namaMinuman . "<br>";
    echo 'Uang Saat ini : ' . $this->uang . "<br>";
    echo 'kapasistas (volume) Dispenser : ' . $this->volume . 'ml' . "<br>";
    echo 'Harga Bayar Pergelas Minuman : ' . $this->hargaPergelas . "<br>";
    echo 'Volume Dispenser setelah dibeli : ' . $this->volumeSetelahDibeli() . 'ml' . "<br>";
    echo 'Sisa uang: ' . $this->transaksi($this->uang);
    echo '<hr>';
    echo '<h3>'. 'selamat minum '.'</h3>';
  }
}

$minuman = new Minuman(20000, 'Sop buah', 2000, 4000);
$minuman->transaksi($minuman->uang);
$minuman->volume(6000);
$minuman->cetak();
?>