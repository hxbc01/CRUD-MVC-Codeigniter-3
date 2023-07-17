<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="contaner mb-4">
        <h3 class="mb-4 text-center mt-4">Form edit data barang</h3>
        <div class="d-flex justify-content-center mt-4">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <?= form_open("Data_controller/edit/" . $kode->kode); ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode" value="<?php echo set_value('kode', $kode->kode); ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?php echo set_value('nama', $kode->nama); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah barang</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="jumlah" value="<?php echo set_value('jumlah', $kode->jumlah); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga barang</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="harga" value="<?php echo set_value('harga', $kode->harga); ?>" required>
                    </div>
                    <label for="select"> Jenis Barang</label>
                    <select class="form-select mb-4 mt-2 p-2" aria-label="Default select example" name="jenis" required>
                        <option selected>Silahkan pilih jenis barang</option>
                        <option value="makanan" selected="<?php echo set_value('jenis', $kode->jenis); ?>">Makanan</option>
                        <option value="minuman" selected="<?php echo set_value('jenis', $kode->jenis); ?>">minuman</option>

                    </select>
                    <div>
                    </div>
                    <input type="submit" class="btn btn-primary px-5"></input>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>