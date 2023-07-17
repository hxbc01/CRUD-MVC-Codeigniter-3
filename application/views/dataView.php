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
        <h3 class="mb-4 text-center mt-4">Form input data barang</h3>
        <div class="d-flex justify-content-center mt-4">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <form action="<?= base_url('Data_controller/create') ?>" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jumlah barang</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="jumlah" required> 
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Harga barang</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="harga" required>
                        </div>
                        <label for="select"> Jenis Barang</label>
                        <select class="form-select mb-4 mt-2 p-2" aria-label="Default select example" name="jenis" required>
                            <option selected>Silahkan pilih jenis barang</option>
                            <option value="makanan">Makanan</option>
                            <option value="minuman">minuman</option>

                        </select>
                        <div>

                        </div>
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- tabel data barang -->

        <div class="d-flex justify-content-center mt-4">
            <div class="card" style="width: 80rem;">
                <div class="card-body">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah Barang</th>
                                <th scope="col">Harga Barang</th>
                                <th scope="col">Jenis Barang</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($barang as $data) { ?>
                                <tr class="table-info">
                                    <td>
                                        <?= $data->kode ?>
                                    </td>
                                    <td>
                                        <?= $data->nama ?>
                                    </td>
                                    <td>
                                        <?= $data->jumlah ?>
                                    </td>
                                    <td>
                                        <?= $data->harga ?>
                                    </td>
                                    <td>
                                        <?= $data->jenis ?>

                                    </td>
                                    <td>
                                       <a href="<?= base_url('Data_controller/delete/'. $data->kode) ?>"> <button type="button" class="btn btn-danger">delete</a></button> | <a href="<?= base_url('Data_controller/getData/'. $data->kode) ?>"> <button type="button" class="btn btn-warning">edit</a></button>
                                    </td>
                                </tr>
                        </tbody>
                    <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>