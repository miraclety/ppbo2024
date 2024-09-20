<?php

namespace App\Model\Akademik;

class TenagaKependidikan extends Pegawai {
    public $gaji_pokok;
    private $sisaCuti = 12;

    public function __construct($nip, $nama, $no_hp, $alamat, $gaji_pokok) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }

    public function cuti($jumlahHari) {
        if ($this->sisaCuti >= $jumlahHari) {
            $this->sisaCuti -= $jumlahHari;
            echo "{$this->nama} telah mengambil {$jumlahHari} hari cuti. Sisa cuti: {$this->sisaCuti} hari.";
        } else {
            echo "{$this->nama} tidak memiliki cukup sisa cuti. Sisa cuti hanya {$this->sisaCuti} hari.";
        }
    }

    public function getSisaCuti() {
        return $this->sisaCuti;
    }
}