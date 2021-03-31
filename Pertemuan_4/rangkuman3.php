<!-- Codingan tugas -->
<?php
    class Kubus {
        public $sisi;

        public function volume() {
            $volume = pow($this->sisi, 3);
            return $volume;
        } 

        public function luas() {
            $luas = 6 * pow($this->sisi, 2);
            return $luas;
        }
    }

    $kubus = new Kubus;
    $kubus->sisi = 9;
?>

<!-- Perbedaan require vs include -->
<?php
	echo "sama sama untuk memanggil namun apabila menggunakan include apabila ada error masih bisa dijalankan
apabila menggunakan require apabila ada error maka muncul tulisan error, include kurang lebih seperti try di python"
?>

<!-- Contoh kodingan tugas prak -->
<?php
    require 'Tabung.php';
    // superglobal variable $_GET $_POST\
    // $_GET
    // bisa ditulis melalui url (?key=value)

    // $_POST
    // isset untuk mengecek apakah sudah ditekan
    // if (isset($_POST['submit-btn'])) {
    //     var_dump($_POST);
    // }

    // ternary operator
    //(condition) ? (statement1) : (statement2)

    // Tabung
    // $luas = 0;
    // $volume = 0;
    // if(isset($_POST['submit'])) {
    //     $diameter = $_POST['diameter'];
    //     $tinggi = $_POST['tinggi'];

    //     $radius = $diameter / 2;
    //     $luas = 2 * pi() * $radius * ($radius + $tinggi);
    //     $volume = pi() * $radius * $radius * $tinggi;

    //     echo "Diameter : $diameter <br>";
    //     echo "Tinggi : $tinggi <br>";
    // }
    
    $tabung = new Tabung;
    if(isset($_POST['submit'])) {
        // $tabung = new Tabung($_POST['diameter'], $_POST['tinggi']);

        $tabung->setDiameter($_POST['diameter']);
        $tabung->setHeight($_POST['tinggi']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form bisa untuk mengirim superglobal variable -->

    <!-- <form action="" method="post">
        <input type="text" name="nama">
        <button name="submit-btn">Submit</button>
    </form> -->

    <ul>
        <li>Diameter : <?= $tabung->getDiameter(); ?></li>
        <li>Radius : <?= $tabung->getRadius(); ?></li>
        <li>Tinggi : <?= $tabung->getHeight(); ?></li>
    </ul>

    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name="submit">Hitung</button>
    </form>

    <hr>
    <ul>
        <li>Luas Permukaan : <?= $tabung->luas(); ?></li>
        <li>Volume : <?= $tabung->volume(); ?></li>
    </ul>
</body>
</html>

<!-- Codingan untuk tabung -->
<?php
    class Tabung {
        private $diameter = 0;
        private $height = 0;
        private $radius = 0;


        // public function __construct($d, $h) {
        //     $this->diameter = $d;
        //     $this->radius = $this->diameter / 2;
        //     $this->height = $h;
        // }
        
        public function setDiameter($val) {
            $this->diameter = $val;
            $this->radius = $this->diameter / 2;
        }

        public function setHeight($val) {
            $this->height = $val;
        }

        public function getDiameter() {
            return $this->diameter;
        }

        public function getRadius() {
            return $this->radius;
        }

        public function getHeight() {
            return $this->height;
        }

        public function volume() {
            $volume = pi() * $this->radius * $this->radius * $this->height;
            return $volume;
        } 

        public function luas() {
            $luas = 4 * pi() * pow($this->radius, 2);
            return $luas;
        }
    }
?>

<!-- Variabel super global -->
<?php echo "mengartikan variabel bisa diakses darimana aja, entah letaknya direktori a,b,c tetap bisa di akses contohnya GET,POST,dll" ?>
<?php 
	$GET = ['aku','kamu','dia'];
	var_dump($GET) ;
?>

<!-- Misal setelah login harus mengisi nama, menggunakan variabel global POST-->
<?php
	if (isset($_POST['submit_btn'])) { //isset untuk memeriksa apakah sebuah objek form telah didefinisikan
        if (strlen($_POST['diameter']) > 0) { //strlen untuk menghitung panjang str
            echo "LOGIN";
		} else {
            echo "Isi nama terlebih dahulu";
		}
	}
    ?>
<body>
	<form action="" method="POST">
		<input type="text" name="Nama:" value="Ardi">
		<button>Submit</button>
	</form>
</body>

<?