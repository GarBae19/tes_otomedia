<?php $this->extend('Tamplate/Tamplate'); ?>
<?php $this->section('content'); ?>

<link rel="stylesheet" href="/sudoku.css" />
<p class="d-inline-flex gap-1">
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Cara Bermain
    </button>
</p>
<div class="collapse" id="collapseExample">
    <div class="card card-body mb-3">
        - Klik tombol nomor yang ada di sebelah kanan lalu pilih kotak kosong yang ada di papan sudoku. <br>
        - Jika angka yang anda masukan salah maka akan menampilkan berapa kali anda salah dalam menebak angka. <br>
        - Jika ingin mengulangi permainan silahkan klik tombol reset.
    </div>
</div><br>
<h2 id="kesalahan">Kesalahan :</h2>
<h2 id="errors">0</h2>
<div id="stopwatch">00:00:00</div>
<div id="controls"></div>


<!-- 9x9 board -->
<div class="container">
    <div id="board"></div>
    <div id="digits"></div>
</div>
<script src="/sudoku.js"></script>

<?php $this->endSection(); ?>