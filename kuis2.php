<?php

function hitungNilaiAkhir($tugas, $uts, $uas) {
    // 1. Hitung nilai akhir berdasarkan bobot (Tugas 30%, UTS 30%, UAS 40%)
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

    // 2. Tentukan status kelulusan (nilai akhir >= 70)
    if ($nilaiAkhir >= 70) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    // 3. Tampilkan output
    echo "Output :<br>";
    echo "Nilai Akhir: " . round($nilaiAkhir) . "<br>";
    echo "Status: " . $status;
}

// Pemanggilan fungsi dengan nilai input
hitungNilaiAkhir(80, 85, 84);

?>