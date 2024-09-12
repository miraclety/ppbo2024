<?php
Class Lingkaran
{
    const PHI = 3.14;
    
    public function luas($jari_jari) : float {
        return self::PHI*$jari_jari*$jari_jari;
    }
    public function keliling($jari_jari) : float {
        return 2*Self::PHI*$jari_jari;
    }
}
Class Bola
{
    const PHI = 3.14;
    public function volume($jari_jari) : float {
        return (4/3)*self::PHI*pow($jari_jari,3);
    }
}
Class Tabung
{
    const PHI = 3.14;
    public function volume($jari_jari, $tinggi) : float {
        return self::PHI*pow($jari_jari,2)*$tinggi;
    }
}
Class kerucut
{
    const PHI = 3.14;
    public function volume($jari_jari, $tinggi) : float {
        return (1/3)*self::PHI*pow($jari_jari,2)*$tinggi;
    }
}
$nasi_tumpeng = new Kerucut();
$volume_tumpeng = $nasi_tumpeng->volume(4, 10);
echo "Volume nasi tumpeng dengan jari-jari 4 dan tinggi 10 adalah {$volume_tumpeng}\n";