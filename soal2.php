<?php

// form nama
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    ?>
    <form method="POST" action="">
        <label>Nama</label>
        <br>
        <input type="text" name="nama" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    <?php
}

// form umur
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nama']) && !isset($_POST['umur'])) {
    ?>
    <form method="POST" action="">
        <label>Umur</label>
        <br>
        <input type="number" name="umur" required>
        <br>
        <button type="submit">Submit</button>
        <input type="hidden" name="nama" value="<?= $_POST['nama'] ?>">
    </form>
    <?php
}

// form hobi
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nama']) && isset($_POST['umur']) && !isset($_POST['hobi'])) {
    ?>
    <form method="POST" action="">
        <label>Hobi</label>
        <br>
        <input type="text" name="hobi" required>
        <br>
        <button type="submit">Submit</button>
        <input type="hidden" name="nama" value="<?= $_POST['nama'] ?>">
        <input type="hidden" name="umur" value="<?= $_POST['umur'] ?>">
    </form>
    <?php
}

// result
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nama']) && isset($_POST['umur']) && isset($_POST['hobi'])) {
    echo "Nama : " . $_POST['nama'] . "<br>";
    echo "Umur : " . $_POST['umur'] . "<br>";
    echo "Hobi : " . $_POST['hobi'] . "<br>";
}
?>