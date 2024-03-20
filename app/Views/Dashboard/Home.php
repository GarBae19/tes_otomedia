<?php $this->extend('Tamplate/Tamplate'); ?>
<?php $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">
        Disini saya menampilkan data dari dua tabel yaitu Tabel USER dan Tabel ROLE
        Menggunakan QUERY SQL INNER JOIN. Dan berikut adalah hasilnya
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Nama</th>
                            <th>Access Level</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>User ID</th>
                            <th>Nama</th>
                            <th>Access Level</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data as $item) : ?>
                            <tr>
                                <td> <?= $item['id'] ?> </td>
                                <td> <?= $item['name'] ?> </td>
                                <td> <?= $item['access_level'] ?> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php $this->endSection(); ?>