<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>

<body style="background-image: url(<?= base_url() ?>assets/img/b.jpg);background-repeat:no-repeat;background-size:cover">
    <div class="container">
        <form action="<?= base_url() ?>index/addData" method="post" class="">
            <div class="form-group">
                <label class="label" for="productName">Nama Produk</label>
                <input type="text" class="form-control" id="productName" name="productname" style="background-color: transparent;">
            </div>
            <div class="form-group">
                <label class="label" for="description">Keterangan</label>
                <input type="text" class="form-control" id="description" name="description" style="background-color: transparent;">
            </div>
            <div class="form-group">
                <label class="label" for="price">Harga</label>
                <input type="text" class="form-control" id="price" name="price" style="background-color: transparent;">
            </div>
            <div class="form-group">
                <label class="label" for="jumlah">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" name="amount" style="background-color: transparent;">
            </div>
            <button type="submit" class="btn btn-secondary">Tambah Data</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>