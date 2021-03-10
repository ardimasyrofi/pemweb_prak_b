<?php 
    $contoh_str ="Hai";//string
    $contoh_int=2;//integer
    $contoh_double=0.2; //double
    $contoh_arr = []; //array
    echo $contoh_int;
    echo '<br>' //enter biasa
?>

<?php //gabung dua string
    $a="Ardi";
    $b="Masyrofi";

    echo $a . $b 
?>

<?php for ($i=0; $i<5; $i++) //for di php

?>

<?php //mencetak output ke browser dg var_dump
    $array = ['Hello','World'];
    var_dump($array);
?>

<?php 
    $array = ['Hello','World'];
    foreach($array as $value){ //mengulang sebanyak array, valuenya dijadikan variabel baru
        echo $value . '';
    }
?>

<?php //switch dan case
    $makanan = ["mi ayam",'burger'];

    switch ($makanan[0]){
        case 'burger';
            echo 'Di index 0 ada burger';
            break;
        case 'mi ayam';
            echo 'Di index 0 ada mi ayam';
            break;
        default;
            echo 'Tidak ada';
            break;

    }

?>

<?php
    $students = [
        [
            'nama' => 'Ardi Masyrofi',
            'nim' => '192410101025',
            'usia' => '19',
        ],
        [
            'nama' => 'Syafiq',
            'nim' => '192410101071',
            'usia' => '19',
        ],
    ];
?>

<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <thread>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Umur</th>
            </tr>
        </thread>
        <tbody>
            <?php foreach($students as $student):?>
                <tr>
                    <td><?php echo $student ['nama'] ?> </td>
                    <td><?php echo $student ['nim'] ?> </td>
                    <td><?php echo $student ['usia'] ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
</body>