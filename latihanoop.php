<?php

    echo "<table>";

    echo "<tr>
        <td colspan = 4> <h3> Pendapatan Gaji </h3> </td>
    </tr>";

    class keuangan {
        public $tg;
        public $tk;

        function gaji($jabatan, $pendidikan){
            echo "<tr> 
                <td> Jabatan </td>
                <td> : </td>
                <td> {$jabatan} </td>";

                if ($jabatan == "Direktur") {
                    $gaji = 10000000;
                    echo "<tr>
                        <td>Gaji Pokok </td>
                        <td> : </td>
                        <td> {$gaji} </td>
                    </tr>";
                } elseif ($jabatan == "Manager") {
                    $gaji = 5000000;
                    echo "<tr>
                        <td>Gaji Pokok </td>
                        <td> : </td>
                        <td> {$gaji} </td>
                    </tr>";
                } elseif ($jabatan == "Karyawan") {
                    $gaji = 3000000;
                    echo "<tr>
                        <td>Gaji Pokok </td>
                        <td> : </td>
                        <td> {$gaji} </td>
                    </tr>";
                } else {
                    echo "<tr>
                    <td>Gaji Pokok </td>
                    <td> : </td>
                    <td> Tidak Ada </td>
                </tr>";
                }
            echo "</tr>";

            echo "<tr>
                <td>Pendidikan </td>
                <td> : </td>
                <td> {$pendidikan} </td>";

                if ($pendidikan == "S1"){
                    $tunjangan = 2000000;
                    echo "<tr>
                        <td>Tunjangan </td>
                        <td> : </td>
                        <td> {$tunjangan} </td>
                    </tr>";
                } elseif ($pendidikan == "SMA") {
                    $tunjangan = 1000000;
                    echo "<tr>
                        <td>Tunjangan </td>
                        <td> : </td>
                        <td> {$tunjangan} </td>
                    </tr>";
                } elseif ($pendidikan == "SMP") {
                    $tunjangan = 500000;
                    echo "<tr>
                        <td>Tunjangan </td>
                        <td> : </td>
                        <td> {$tunjangan} </td>
                    </tr>";
                } else {
                    echo "<tr>
                        <td>Tunjangan </td>
                        <td> : </td>
                        <td> Tidak Ada </td>
                    </tr>";
                }
            echo "</tr>";

            $TotalGaji = $gaji + $tunjangan;
            echo "<tr>
                <td>Total Gaji </td>
                <td> : </td>
                <td> {$TotalGaji} </td>
            </tr>";

            echo "<tr>
                <td colspan = 4> <hr> </td>
            </tr>";
            
            $this->tg=$TotalGaji;
            return $this;
        }

        function keluar($listrik, $kontrak, $kendaraan){
            echo "<tr>
                <td colspan = 4> <h3> Pendapatan Gaji </h3> </td>
            </tr>";
            echo "<tr>
                <td>Bayar Listrik </td>
                <td> : </td>
                <td> {$listrik} </td>
            </tr>";
            echo "<tr>
                <td>Bayar Kontrakan </td>
                <td> : </td>
                <td> {$kontrak} </td>
            </tr>";
            echo "<tr>
                <td>Cicilan Kendaraan </td>
                <td> : </td>
                <td> {$kendaraan} </td>
            </tr>";
            
            $Totalkeluar = $listrik + $kontrak + $kendaraan;
            echo "<tr>
                <td>Total Pengeluaran  </td>
                <td> : </td>
                <td> {$Totalkeluar} </td>
            </tr>";

            echo "<tr>
                <td colspan = 4> <hr> </td>
            </tr>";

            $this->tk=$Totalkeluar;
            return $this;
        }

        function sisa(){
            $totalsisa = $this->tg - $this->tk;

            echo "<tr>
                <td> <b>Sisa</b> </td>
                <td> <b> : </b> </td>
                <td> <b>{$totalsisa}</b> </td>
            </tr>";
        }

    }

    $penggajihan = new keuangan();

    $penggajihan->gaji("Direktur", "S1");
    $penggajihan->keluar(200000, 1000000, 600000);
    echo $penggajihan->sisa();

    echo "</table>";

?>