<?php
$m1=['nim'=>'a710200093', 'nama'=>'Mega', 'nilai'=>90];
$m2=['nim'=>'a710200094', 'nama'=>'Firdy', 'nilai'=>95];
$m3=['nim'=>'a710200095', 'nama'=>'Anisa', 'nilai'=>80];
$m4=['nim'=>'a710200096', 'nama'=>'Ari', 'nilai'=>83];
$m5=['nim'=>'a710200097', 'nama'=>'Vina', 'nilai'=>75];
$m6=['nim'=>'a710200098', 'nama'=>'Dika', 'nilai'=>66];
$m7=['nim'=>'a710200099', 'nama'=>'Aulia', 'nilai'=>69];
$m8=['nim'=>'a710200100', 'nama'=>'Fajar', 'nilai'=>50];
$m9=['nim'=>'a710200101', 'nama'=>'Sulis', 'nilai'=>70];
$m10=['nim'=>'a710200102', 'nama'=>'Jay', 'nilai'=>55];

$head=['NO', 'NIM', 'NAMA', 'KETERANGAN', 'GRADE', 'PREDIKAT'];

$mhs=[$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$nim=['nim'];
$nama=['nama'];
$mahasiswa=count($mhs);
$data_nilai=array_column($mhs,'nilai');
$nilai_tertinggi=max($data_nilai);
$nilai_terendah=min($data_nilai);
$total=array_sum($data_nilai);
$rata_rata=$total / $mahasiswa;

$keterangan=[
    'Mahasiswa'=>$mahasiswa,
    'Nilai Tertinggi'=>$nilai_tertinggi,
    'Nilai Terendah'=>$nilai_terendah,
    'Rata Rata'=>$rata_rata,
];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center">Daftar Mahasiswa</h2>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <?php
                foreach ($head as $hd) {
                ?>
                <th><?= $hd ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($mhs as $mahasiswa) {
                $nilai=$mahasiswa['nilai'];

                $ket=($nilai >= 60) ? "Lulus" : "Gagal";

                if($nilai >= 85 && $nilai <=100) $grade='A';
                    else if($nilai >= 75 && $nilai <=85) $grade='B';
                    else if($nilai >= 60 && $nilai <=75) $grade='C';
                    else if($nilai >= 30 && $nilai <=60) $grade='D';
                    else if($nilai >= 0 && $nilai <=30) $grade='E';
                    else $grade = '';

                switch ($grade) {
                    case 'a':$predikat = 'memuaskan'; break;
                    case 'b':$predikat = 'bagus'; break;
                    case 'c':$predikat = 'cukup'; break;
                    case 'd':$predikat = 'kurang'; break;
                    case 'e':$predikat = 'buruk'; break;
                    default:$predikat= '';
                }
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $mahasiswa['nim'] ?></td>
                <td><?= $mahasiswa['nama'] ?></td>
                <td><?= $ket ?></td>
                <td><?= $nilai ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php $no++;
            } ?>
        </tbody>
        <tfoot>
            <?php
            foreach($keterangan as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="7"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php
            } ?>
        </tfoot>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
  </body>
</html>