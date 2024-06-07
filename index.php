<?php 
require 'proses.php';
$harga = new Beli();

if(isset($_POST["btn"])){
    $harga->jumlah  = $_POST["liter"];
    $harga->jenis = $_POST["jenis"];
    $harga->metode = $_POST["metode_pembayaran"];
    $harga->kendaraan = $_POST["kendaraan"];
    $harga->setHarga(1542,1613,1831,1651);
    $berhasil = "Anda Berhasil Membeli Bahan Bakar";
    $tanda = 'succes';
    

}else {
    $berhasil = false;
    $tanda = false;
}



// if(isset($_POST["btn"])){
//     $liter = $_POST["liter"];
//     $jenis = $_POST["jenis"];

//     $harga = new Beli($liter, $jenis);
//     $harga->setHarga(1,4,1,1);
//     $harga->cetakPembelian();
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
	.kotak {
		margin-top: 100px;
		width: 500px;
		height: 550px;
		background-color: #EEEEEE;
		box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
		
	}
	.container {
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.gambar {
		height: 450px;
	}
	.gambar img {
		width: 600px;
		height: 550px;
		box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;

	}
	.input-form {
		margin: 20px;
	}
	h6 {
		font-size: 17px;
	}
	
	body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"],
        select,
        input[type="radio"] {
            width: 100%;
            
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="radio"] {
            display: inline-block;
            width: auto;
            margin-right: 10px;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
		@media (max-width: 680px) {
			.container {
				display: block;
			}
			.kotak {
				margin-left: 10px;
				margin-top: 100px;
				margin-right: 20px;
				width: 310px;
				height: 550px;
				background-color: #EEEEEE;
				box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
				
			}
			.gambar {
				margin-left: 10px;
				height: 150px;
				
			}
			.gambar img {
				width: 310px;
				height: 200px;
				box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;

			}
        }
		
  </style>
<body>
<div class="container">
		<div class="gambar">
		<img src="https://www.shell.co.id/in_id/motorists/oil-and-lubricant/_jcr_content/pagePromo/image.img.960.png/1587448656509/range-of-oil-and-lubricant-products.png?imwidth=640" alt="">
		</div>
		<div class="kotak">
			<div class="input-form">
			<div class="alert alert-primary  $ mt-3 m-0" role="alert">
				<?= $berhasil ;?>

			</div>
			
			
			<?php if($berhasil == "Anda Berhasil Membeli Bahan Bakar") {
				// echo "none";
				echo '<h6 style="margin-top: 40px;">Metode Pembayaran : ' . $harga->metode . '</h6>
     			 <h6>Tipe Kendaraan : ' . $harga->kendaraan . '</h6>
				  <h6>Tipe Bahan Bakar : ' . $harga->jenis . '</h6>
				  <h6>Yang anda Harus Bayar Rp ' .$harga->cetakPembelian(). ' </h6>
				  <a href="">kembali</a>';

			}else {
				echo '<form action="" method="post">
				<label for="angka1">Masukkan jumlah liter:</label>
					<input type="number" id="liter" name="liter" placeholder="Masukkan jumlah liter" required>
					<label for="liter">Pilih jenis bahan bakar:</label>
					<select id="liter" name="jenis" required>
						<option value="">Pilih</option>
						<option value="SSuper">ShellSuper</option>
						<option value="SvPower">ShellPower</option>
						<option value="SvPowerDiesel">ShellPowerDiesel</option>
						<option value="SvPowerNItro">ShellNitro</option>
					</select>
					<br>
					<label>Metode Pembayaran
					<label>
					<input type="radio" name="metode_pembayaran" value="transfer_bank">
					Transfer Bank
				</label>
				<label>
					<input type="radio" name="metode_pembayaran" value="kartu_kredit">
					Kartu Kredit
				</label>
				<label>
					<input type="radio" name="metode_pembayaran" value="e-Wallet">
					E-Wallet
				</label>
				<br>
				<label>Tipe Kendaraan </label>
				<label>
					<input type="radio" name="kendaraan" value="Motor">
					Motor
				</label>
				<label>
					<input type="radio" name="kendaraan" value="Mobil">
					Mobil
				</label>
				<br>
			<button type="submit" name="btn">Hitung</button>
		</form>';
			}


				?>

				
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>