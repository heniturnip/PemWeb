heni artha uli br turnip <br>
121140080

<!-- showarray.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Array</title>
</head>

<body>
    <h1>DATA MAHASISWA</h1>
    <?php
    $mahasiswa = array(
        array('001', 'John Doe', 'john.doe@email.com', '123 Main Street'),
        array('002', 'Jane Smith', 'jane.smith@email.com', '456 Oak Avenue'),
        array('003', 'Bob Johnson', 'bob.johnson@email.com', '789 Elm Road'),
        array('004', 'Alice Williams', 'alice.williams@email.com', '987 Pine Lane'),
        array('005', 'Charlie Brown', 'charlie.brown@email.com', '654 Birch Street')
    );
    
    echo '<table border="2">';
    echo '<tr><th>NPM
          </th><th>Nama
          </th><th>Email
          </th><th>Alamat
          </th></tr>';
          
    foreach ($mahasiswa as $data) {
        echo '<tr>';
        foreach ($data as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>
</html>