<?php

class person {
  public $nama, $prodi, $tanggalLahir, $alamat;

  public function __construct($nama, $prodi, $tanggalLahir, $alamat) {
    $this->nama = $nama;
    $this->prodi = $prodi;
    $this->tanggalLahir = $tanggalLahir;
    $this->alamat = $alamat;
  }

  public function getNama() {
    return $this->nama;
  }

  public function getProdi() {
    return $this->prodi;
  }

  public function getTanggalLahir() {
    return $this->tanggalLahir;
  }

  public function getAlamat() {
    return $this->alamat;
  }
}

class mahasiswa extends person {
  private $nim, $ipk;

  public function __construct($nim, $nama, $prodi, $tanggalLahir, $alamat, $ipk) {
    parent::__construct($nama, $prodi, $tanggalLahir, $alamat);
    $this->nim = $nim;
    $this->ipk = $ipk;
  }

  public function getNim() {
    return $this->nim;
  }

  public function getIpk() {
    return $this->ipk;
  }
}

class dosen extends person {
  private $nip;

  public function __construct($nip, $nama, $prodi, $tanggalLahir, $alamat) {
    parent::__construct($nama, $prodi, $tanggalLahir, $alamat);
    $this->nip = $nip;
  }

  public function getNip() {
    return $this->nip;
  }

  public function setNama($nama) {
    $this->nama = $nama;
  }
}

$mahasiswa = new mahasiswa('M0521981', 'Putri Anggraeni', 'Informatika', '2003-06-31', 'Surakarta', 3.98);
$dosen = new dosen('198508312012121004', 'Adi Nugroho', 'Informatika', '1973-09-25', 'Karanganyar');

echo "Mahasiswa : {$mahasiswa->getNim()} | {$mahasiswa->getNama()} | {$mahasiswa->getProdi()} | {$mahasiswa->getTanggalLahir()} | {$mahasiswa->getAlamat()} | IPK: {$mahasiswa->getIpk()}<br>";
echo "Dosen : {$dosen->getNip()} | {$dosen->getNama()} | {$dosen->getProdi()} | {$dosen->getTanggalLahir()} | {$dosen->getAlamat()}<br>";
echo "____________________________________________________________________________<br>";
echo "IPK: {$mahasiswa->getIpk()}<br>";

$dosen->setNama('Dwi Utomo');
echo "Nama dosen baru: {$dosen->getNama()}<br>";
?>