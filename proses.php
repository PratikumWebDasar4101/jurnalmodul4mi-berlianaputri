<?php
$nama = $_FILES['gambar']['name'];
	if (isset($_POST['submit'])) {
		move_uploaded_file($_FILES['gambar']['tmp_name'], "upload/".$_FILES['gambar']['name']);
		echo "<img src='upload/$nama'>";
	}

	echo "<br>";
	$a = $_POST['Hobi'];
	echo "Hobi anda : <br>";
	foreach ($a as $hobi) {
		echo "> " . $hobi;
		echo "<br>";
	}
	if (isset($_POST['delete'])) {
		unset($a);
		//header("Location : formawal.php");
	}

?>

<form action="halaman akhir.php">
	<input type="submit" name="delete" value="delete">
</form>
