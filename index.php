<?php
// koneksi
$conn = new mysqli('localhost', 'root', '', 'test_db');

// rumus pagination
$jml_data_perhalaman    = 2; // jumlah data yg ingin ditampilkan perhalaman
$jml_data               = ($conn->query("SELECT * FROM brg_1"))->num_rows; // menghitung jumlah data
$jml_halaman            = ceil($jml_data / $jml_data_perhalaman); // ceil pembulatan ke nilai atas
$halaman_aktif          = ( isset($_GET['page']) ) ? $_GET['page'] : 1; // if else || jika if true ? || jika if false/else :
$awal_data              = ($jml_data_perhalaman * $halaman_aktif) - $jml_data_perhalaman;



// awal pagination

// menuju link sebelumnya
if ( $halaman_aktif > 1 ) {
    echo '<a href="?page='.( $halaman_aktif - 1 ).'">&lt;</a> '; 
}

// pagination
for ($i=1; $i <= $jml_halaman; $i++) { 
    // validasi halaman aktif
    if ( $i == $halaman_aktif ) {
        $link = '<a href="?page='.$i.'" style="color:red">'.$i.'</a> ';
    }
    else {
        $link =  '<a href="?page='.$i.'">'.$i.'</a> ';
    }

    echo $link;
}

// menuju link sebelumnya
if ( $halaman_aktif <> $jml_halaman ) {
    echo '<a href="?page='.( $halaman_aktif + 1 ).'">&gt;</a> '; 
}
// akhir pagination



// data tabel
$result = $conn->query("SELECT * FROM brg_1 LIMIT $awal_data, $jml_data_perhalaman");
echo '
<table>
    <th>ID</th>
    <th>BARANG</th>
';
while( $x = $result->fetch_object() ) {
    echo '
    <tr>
        <td>'.$x->id.'</td>
        <td>'.$x->nama_brg.'</td>
    </tr>
    ';
}
echo '</table>';