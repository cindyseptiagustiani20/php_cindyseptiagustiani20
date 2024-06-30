<?php

$connection = mysqli_connect('localhost', 'root', '', 'dba1');

if (!$connection) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    if (empty($nama) && empty($alamat)) {
        $query = "SELECT * FROM person JOIN hobi ON person.id = hobi.person_id";
    } else {
        $query = "SELECT * FROM person WHERE nama LIKE '%$nama%' AND alamat LIKE '%$alamat%' JOIN hobi ON person.id = hobi.person_id";
    }

    $result = mysqli_query($connection, $query);

    $response = '';

    while($row = mysqli_fetch_array($result)) {
        $response .= '<tr>';
        $response .= '<td>' . $row['nama'] . '</td>';
        $response .= '<td>' . $row['alamat'] . '</td>';
        $response .= '<td>' . $row['hobi'] . '</td>';
        $response .= '</tr>';
    }

    echo $response;
}

?>