<?php
$produk = [
    ["nama"=>"Laptop Productivity","kategori"=>"Laptop","harga"=>8500000,"stok"=>3],
    ["nama"=>"Monitor 24 Inch","kategori"=>"Monitor","harga"=>1800000,"stok"=>4],
    ["nama"=>"Mechanical Keyboard","kategori"=>"Keyboard","harga"=>750000,"stok"=>0],
    ["nama"=>"Wireless Mouse","kategori"=>"Mouse","harga"=>350000,"stok"=>8],
    ["nama"=>"Headset Gaming","kategori"=>"Audio","harga"=>1200000,"stok"=>5],
    ["nama"=>"Webcam Full HD","kategori"=>"Kamera","harga"=>950000,"stok"=>0]
];

function rupiah($harga){
    return "Rp".number_format($harga,0,',','.');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cia Store</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <b>Cia Store</b>
    <nav>
        <a href="#home">Home</a>
        <a href="#produk">Produk</a>
        <a href="#about">About</a>
    </nav>
</header>

<section class="hero" id="home">
    <small>CIA STORE</small>
    <h1>Simple Tech Store.</h1>
    <p>Temukan berbagai perangkat teknologi untuk kebutuhanmu.</p>
    <a href="#produk">Lihat Produk</a>
</section>

<section class="info" id="produk">
    <div>
        <small>OUR PRODUCTS</small>
        <h2>Katalog Produk</h2>
    </div>

    <span>Total Produk: <?= count($produk) ?></span>
</section>

<main class="grid">

<?php foreach($produk as $item): ?>

<?php
if($item["harga"] >= 1000000){
    $harga = $item["harga"] * 0.9;
    $diskon = true;
}else{
    $harga = $item["harga"];
    $diskon = false;
}
?>

<article class="card">

    <small><?= $item["kategori"] ?></small>

    <h3><?= $item["nama"] ?></h3>

    <?php if($diskon): ?>
        <del><?= rupiah($item["harga"]) ?></del>
        <h3><?= rupiah($harga) ?></h3>
        <label>Diskon 10%</label>
    <?php else: ?>
        <h3><?= rupiah($harga) ?></h3>
    <?php endif; ?>

    <p>Stok: <?= $item["stok"] ?></p>

    <?php if($item["stok"] > 0): ?>

        <span class="tersedia">Tersedia</span>
        <a class="beli" href="#">Beli Sekarang</a>

    <?php else: ?>

        <span class="habis">Stok Habis</span>

    <?php endif; ?>

</article>

<?php endforeach; ?>

</main>

<footer id="about">
    <b>Cia Store</b>
    <p>Katalog perangkat teknologi.</p>
</footer>

</body>
</html>