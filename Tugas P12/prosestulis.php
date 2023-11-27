heni artha uli br turnip <br>
121140080

<!-- prosestulis.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_text = $_POST['input_text'];
    $file_path = 'file.txt';

    // menginput tulisan ke dalam file
    file_put_contents($file_path, $input_text);

    // menampilkan isi file
    echo "<h1>ISI FILE</h1>";
    echo "<p>$input_text</p>";
}
?>