<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <!-- judul -->
    <h2> Multidimensional Array </h2> 
    <!-- membuat tabel untuk menampilkan data film -->
    <table>
        <!-- baris pertama sebagai header tabel -->
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th> 
        </tr>
        <?php
            // Mendefinisikan array multidimensional yang berisi data film
            $movie = array(
                array("Avengers: Invinity War", 2018, 8.7),
                array("The Avengers", 2012, 8.1),
                array("Guardians of the Galaxy", 2014, 8.1),
                array("Iron Man", 2008, 7.9)
            );
            // Menampilkan data film dalam tabel
            echo "<tr>";
                echo "<td>" . $movie[0][0] . "</td>";
                echo "<td>" . $movie[0][1] . "</td>";
                echo "<td>" . $movie[0][2] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $movie[1][0] . "</td>";
                echo "<td>" . $movie[1][1] . "</td>";
                echo "<td>" . $movie[1][2] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $movie[2][0] . "</td>";
                echo "<td>" . $movie[2][1] . "</td>";
                echo "<td>" . $movie[2][2] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $movie[3][0] . "</td>";
                echo "<td>" . $movie[3][1] . "</td>";
                echo "<td>" . $movie[3][2] . "</td>";
            echo "</tr>";

            // Menampilkan data film dalam tabel menggunakan perulangan
            // for ($i = 0; $i < count($movie); $i++) {
            //     echo "<tr>";
            //     echo "<td>" . $movie[$i][0] . "</td>";
            //     echo "<td>" . $movie[$i][1] . "</td>";
            //     echo "<td>" . $movie[$i][2] . "</td>";
            //     echo "</tr>";
            // }        //optional
        ?>
    </table>
</body>

</html>