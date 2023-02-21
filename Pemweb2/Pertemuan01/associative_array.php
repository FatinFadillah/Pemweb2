<?php
$profileArray = [
  [    
       "nama" => "Abiyyu Cakra",
       "kelas" => "TI06",
       "ipk" => 4,
       "sudah_lulus" => false
  ],  [  
       "nama" => "Asep Sahrudin",
       "kelas" => "TI05",
       "ipk" => 4,
       "sudah_lulus" => false 
  ]
];

foreach ($profileArray as $profile) {
    echo $profile['nama'];
}