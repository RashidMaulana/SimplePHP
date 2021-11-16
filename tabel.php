<?php
function get_rows() {
$file=fopen("hasil.html",'r');
while($line = fgets($file)){
	$line=trim($line);
	list($nama,$alamat,$ultah,$hobi,$gender,$password) = explode('|',$line);
	echo "<tr><td>$nama</td><td>$alamat</td><td>$ultah</td><td>$hobi</td><td>$gender</td><td>$password</td></tr>\n";
}
return true;
}
?>

<table border='1px solid black'>
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Hobi</th>
        <th>Gender</th>
        <th>Password</th>
    </tr>
<?php get_rows(); ?>
</table>