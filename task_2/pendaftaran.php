<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html{
    background: linear-gradient(rgb(153, 30, 153), rgb(9, 212, 87));
}

body{
    padding: 5%;
    height: 100vh;
    justify-content: center;
}

 .box{
    background:black;
    color:#fff;
    padding:20px 0px 20px 20px;
    width:400px;
    margin:20px auto;
    border:3px dashed white;
    border-radius:70px 0;
 }

 h1{
    color: white;
    font-size: large;
    text-align: center;
}

label{
    color: white;
}

button{
    color: aquamarine;
    background-color: blueviolet;
}
    </style>
    <title>Tugas 2</title>
</head>

<body>
    <h1>Data Pendaftar</h1>
    <div class="box">
        <table border="1">
        <tr>
                <td>Email </td>
                <td> : </td>
                <td><?php echo $_GET['email']; ?></td>
            </tr>    
            
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td><?php echo $_GET['nama']; ?></td>
            </tr>

            <tr>
                <td>NIM </td>
                <td> : </td>
                <td><?php echo $_GET['nim']; ?></td>
            </tr>

            <tr>
                <td>Alamat </td>
                <td> : </td>
                <td><?php echo $_GET['alamat']; ?></td>
            </tr>

            <tr>
                <td>Password </td>
                <td> : </td>
                <td><?php echo $_GET['password']; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>
