<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Dosen</title>
        <link rel="stylesheet" type = "text/css"href="style.css">
    </head>
    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];

        // echo "Nama : {$Dosen['nama']} <br>";
        // echo "Domisili : {$Dosen['domisili']} <br>";
        // echo "Jenis Kelamin : {$Dosen['jenis_kelamin']} <br>";
        // ?>

         <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $Dosen['nama']; ?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td><?php echo $Dosen['domisili']; ?></td>
            </tr>
         

            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $Dosen ['jenis_kelamin']; ?></td>
            </tr>
        </table>
    </body>
</html>