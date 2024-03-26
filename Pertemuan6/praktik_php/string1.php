<?php
// membuat variabel dengan nilai String
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Voluptatem reprehenderit nobis veritatis commodi fugiat molestias 
                impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum 
                quisquam? Quos impedit eum nulla optio.";

echo "<p>{$loremIpsum}</p>";    // menampilkan isi dari variabel
echo "Panjang karakter: " .strlen($loremIpsum). "<br>";     // menampilkan panjang/banyak karakter dari variabel
echo "Panjang kata: " .str_word_count($loremIpsum). "<br>"; // menampilkan panjang/banyak kata dari variabel
echo "<p>" .strtoupper($loremIpsum). "</p>";    // menampilkan isi variabel dengan mengubah menjadi huruf kapital pada setiap hurufnya
echo "<p>" .strtolower($loremIpsum). "</p>";    //menampilkan isi variabel dengan mengubah menjadi huruf kecil pada setiap hurufnya
?> 