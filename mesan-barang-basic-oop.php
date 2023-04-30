<?php
class Produk
{
    private $nama,
        $merek,
        $harga;

    public function __construct($nama, $merek, $harga)
    {
        $this->nama = $nama;
        $this->merek = $merek;
        $this->harga = $harga;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setMerek($merek)
    {
        $this->merek = $merek;
    }

    public function getMerek()
    {
        return $this->merek;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function getInfoProduk()
    {
        $str = "{$this->getNama()} | {$this->getMerek()} | {$this->getHarga()}";
        return $str;
    }
}

class Hp extends Produk
{
    public function __construct($nama, $merek, $harga)
    {
        parent::__construct($nama, $merek, $harga);
    }
}

class laptop extends Produk
{
    public function __construct($nama, $merek, $harga)
    {
        parent::__construct($nama, $merek, $harga);
    }
}

$produk1 = new Produk("Realme 12", "Realme", 1500000);
$produk2 = new Produk("acer n5", "acer", 12000000);
echo "Jual hp : " . $produk1->getNama();
echo "<br>";
echo "Harga : " . $produk1->getHarga();
echo "<br>";
echo "Jual Laptop : " . $produk2->getNama();
echo "<br>";
echo "Harga : " . $produk2->getHarga();
echo "<hr>";
?>

<html lang="en">

<body>
    <br>
    <form method="POST">
        Masukan nama anda : <input type="text" name="nama">
        <p>pilih jenis produk yang anda mau pesan</p>
        <select name="slk" id="">
            <option value="a"><?php echo $produk1->getNama() ?></option>
            <option value="b"><?php echo $produk2->getNama() ?></option>
        </select>
        <br>
        <input type="submit" name="btn" value="klik">
    </form>
    <?php
    if (isset($_POST['btn'])) {
        $nama = $_POST['nama'];
        $slk = $_POST['slk'];
        if ($slk == "a") {
            echo "Nama anda : " . $nama . "<br> Produk yang anda pesan adalah : " . $produk1->getNama() . "<br> Harga : " . $produk1->getHarga();
            echo "<br> <input type='submit' name='sbmt' value='Lanjutkan pembayaran'>";
        } else {
            echo "Nama anda : " . $nama . "<br> Produk yang anda pesan adalah : " . $produk2->getNama() . "<br> Harga : " . $produk2->getHarga();
            echo "<br> <input type='submit' name='sbmt' value='Lanjutkan pembayaran'>";
        }
    }
    ?>
</body>

</html>