<?PHP

$nama=array("Andi","Budi","Candra","Dedi","Emon"); 

// menampilkan semua data
foreach   ($nama as $n){ 
 
    }
// menambah data
$nama[]="Fajar";
foreach ($nama as $n){ 

    }
// menghapus data
unset($nama[1]);
foreach ($nama as $n){ 
echo $n.'<br>'; 
} 

$data=array( array("nama"=>"Andi","nisn"=>"98765665845", "kelas"=>"XI RPL 1"), 
array("nama"=>"Budi","nisn"=>"98723465812", "kelas"=>"XI RPL 1"), 
array("nama"=>"Candra","nisn"=>"98125665437", "kelas"=>"XI RPL 2"), 
array("nama"=>"Dedi","nisn"=>"99346567563", "kelas"=>"XI RPL 2")); 
foreach ($data as $dt){ 
    echo $dt["nama"].'--'.$dt["nisn"]."--".$dt["kelas"]."<br>"; 
    } 

    $data=array( array("nama"=>"Andi","nisn"=>"98765665845", "kelas"=>"XI RPL 1"), 
array("nama"=>"Budi","nisn"=>"98723465812", "kelas"=>"XI RPL 1"), 
array("nama"=>"Candra","nisn"=>"98125665437", "kelas"=>"XI RPL 2"), 
array("nama"=>"Dedi","nisn"=>"99346567563", "kelas"=>"XI RPL 2")); 
$jsonData=json_encode($data,JSON_PRETTY_PRINT); 
echo "<pre>".$jsonData."</pre>"; 