<?php 


class Shell {
    protected $ppn;
    private $SSuper,
            $SvPower,
            $SvPowerDiesel,
            $SvPowerNItro;
    public $jumlah;
    public $jenis;
    public $metode,
            $kendaraan;

    public function __construct()
    {
        $this->ppn = 10;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4)
    {
        $this->SSuper = $tipe1;
        $this->SvPower = $tipe2;
        $this->SvPowerDiesel = $tipe3;
        $this->SvPowerNItro = $tipe4;
    }

    public function getHarga()
    {
        $data["SSuper"] = $this->SSuper;
        $data["SvPower"] = $this->SvPower;
        $data["SvPowerDiesel"] = $this->SvPowerDiesel;
        $data["SvPowerNItro"] = $this->SvPowerNItro;
        return $data;
    }

}

class Beli extends Shell {
    public function hargaBeli()
    {
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->jumlah * $dataHarga[$this->jenis];
        $hargaa = $this->ppn * $hargaBeli;
        $hargaBayar = $hargaa + $hargaBeli;
        return $hargaBayar;
    }
    
    public function cetakPembelian()
    {
    $cetak = rtrim(number_format($this->hargaBeli(), 0, ',', '.')); // Hapus nol yang tidak perlu
    return $cetak;
    }

}    