<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Person</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            margin: 50px;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>Data Person</h1>
    <hr>

    <form class="form-inline" id="search-form" method="POST" action="">
        <input type="text" name="nama" class="form-control mr-sm-2" placeholder="Nama">
        <input type="text" name="alamat" class="form-control mr-sm-2" placeholder="Alamat">
        <button type="submit" class="btn btn-primary" id="search-btn">Search</button>
    </form>

    <br>
    
    <table class="table table-bordered" id="table-person">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Hobi</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</body>
<script>
    $(window).on('load', function() {
        $.ajax({
            url: 'soal3b.php',
            type: 'POST',
            data: {
                nama: $('input[name=nama]').val(),
                alamat: $('input[name=alamat]').val()
            },
            success: function(response) {
                $('#table-person tbody').html(response);
            }
        })
    });
    
    $('#search-btn').click(function(e){
        e.preventDefault();
    
        $.ajax({
            url: 'soal3b.php',
            type: 'POST',
            data: {
                nama: $('input[name=nama]').val(),
                alamat: $('input[name=alamat]').val()
            },
            success: function(response) {
                $('#table-person tbody').html(response);
            }
        })
    })
</script>
</html>