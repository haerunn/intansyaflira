<!DOCTYPE html>
    <html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title></title>

    </head>

    <body>

        <?php 
        include "cekkoneksi.php";
        $qry_get_produk=mysqli_query($conn,"select * from produk where
        id_produk = '".$_GET['id_produk']."'");
        $dt_produk=mysqli_fetch_array($qry_get_produk);
        ?>

        <h3>Ubah Produk</h3>
        <form action="proses_ubahproduk.php" method="post">

            <input type="hidden" name="id_produk" 
            value="<?=$dt_produk['id_produk']?>">

            Nama Produk :

            <input type="text" name="nama_produk" value="<?=$dt_produk['nama_produk']?>" class="form-control">

            Deskripsi Produk :

            <textarea name="deskripsi" class="form-control" rows="4"><?=$dt_produk['deskripsi']?></textarea>

            Harga :

            <input type="number" name="harga" value="<?=$dt_produk['harga']?>" class="form-control">

            Foto Produk : 

            <input type="text" name="foto_produk" value="<?=$dt_produk['foto_produk']?>" class="form-control">

            <input type="submit" name="simpan" value="Ubah Produk" class="btn btn-primary">

        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>

    </html>