<form action="" method="post">
    barang:
    <input type="text" name="barang" placeholder="nama barang" >
    <br>
    harga:
    <input type="number" name="harga" placeholder="harga barang">
    <br>
    stock:
    <input type="number" name="stock" placeholder="stock barang">
    
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
$host="127.0.0.1";
$user="root";
$password="";
$db="dbtoko";
$koneksi=new mysqli($host,$user,$password,$db);

if(isset($_POST["simpan"])){
    $barang = $_POST["barang"];
    $harga =$_POST["harga"];
    $stock =$_POST["stock"];
$sql = "INSERT INTO barang (barang,harga,stock) VALUES ('$barang',$harga,$stock)";
$hasil = mysqli_query($koneksi, $sql);
}

// $barang = "Lamborghini";
// $harga = 50000000000000;
// $stock = 2;
// $sql = "INSERT INTO barang (barang,harga,stock) VALUES ('$barang',$harga,$stock)";
// $hasil = mysqli_query($koneksi, $sql);

// $pelanggan = "fian";
// $alamat = "kemiri";
// $telp = 573639192;
//  $sql="INSERT INTO pelanggan (pelanggan,alamat,telp) VALUES ('$pelanggan','$alamat',$telp)";
//  $hasil = mysqli_query($koneksi, $sql);



$sql="SELECT * FROM barang";

$hasil=mysqli_query($koneksi,$sql);
var_dump($hasil);
echo "<table border=2px>
    <thead>
            <tr>
                <th>
                    BARANG
                </th>
                <th>
                    HARGA
                </th>
                <th>
                    STOCK
                </th>
            </tr>
    </thead>
<tbody>";
while($row=mysqli_fetch_array($hasil)){
    echo "<tr>";
    echo "<td>" . $row[1]. "</td>";
    echo "<td>" . $row[2]. "</td>";
    echo "<td>" . $row[3]."</td>"; 
    echo "</tr>";
}
echo "</tbody>
</table>";
// //pelanggan
// $sql="SELECT * FROM pelanggan";
// $hasil =mysqli_query($koneksi,$sql);
// echo "<table border=2px>
//     <thead>
//     <tr></tr></tr>
//         <th>
//             PELANGGAN
//         </th>
//         <th>
//             ALAMAT
//         </th>
//         <th>
//             TELEPHONE
//         </th>
//         </tr>
//     </thead>
//     <tbody>";
//     while($row=mysqli_fetch_array($hasil)){
//         echo "<tr>";
//         echo "<td>". $row[1]."</td>";
//         echo "<td>".$row[2]."</td>";
//         echo "<td>" .$row[3]."</td>";
//         echo "</tr>";
//     };
//     echo "</tbody>
//     </table>";
?>