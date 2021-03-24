<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking Receipt</title>
</head>
<body style="font: 14px/1.4; Georgia, serif; width: 800px; margin: 0 auto;">
		<div id="page-wrap" style="width: 800px; margin: 0 auto;">
			<textarea id="header" style="height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none;">BOOKING RECEIPT</textarea>
			<div id="identity">
				<textarea id="address" style="border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; width: 250px; height: 150px; float: left;">Booking Kapal Untuk Memancing dan Wisata. Tanjung Pasir RT04/01 . Ahmad Mutedi . Hubungi +628986524161.</textarea>
				<div id="logo" style="text-align: right; float: right; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; max-height: 540px; overflow: hidden;">
					<img id="image" style ="height:100px" src="https://1.bp.blogspot.com/-bHiuTg4r4yc/XS9gT1joI9I/AAAAAAAAMuY/ADS0iwWKkmAXYje7EGEABrjJksP-m5spwCEwYBhgL/s1600/logo.png" alt="logo" />
				</div>
			</div>
	</div>
			<div style="clear:both"></div>
			<div id="customer" style="overflow: hidden; width: 800px; margin: 0 auto;">
				<textarea id="customer-title" style="border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; font-size: 20px; font-weight: bold; float: left;">Booking Kapal</textarea>
				<table id="meta" style="border-collapse: collapse; margin-top: 1px; width: 300px; float: right;">
					<tr>
						<td class="meta-head" style="border: 1px solid black; padding: 5px; text-align: left; background: #eee;">Invoice #</td>
						<td style="border: 1px solid black; padding: 5px; text-align: right;"><textarea style="border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; width: 100%; height: 20px; text-align: right;"><?= $pemesanan_id ?></textarea></td>
					</tr>
					<tr>

						<td class="meta-head" style="border: 1px solid black; padding: 5px; text-align: left; background: #eee;">Tanggal</td>
						<td style="border: 1px solid black; padding: 5px; text-align: right;"><textarea id="date" style="border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; width: 100%; height: 20px; text-align: right;"><?= $verified_at ?></textarea></td>
					</tr>
					<tr>
						<td class="meta-head" style="border: 1px solid black; padding: 5px; text-align: left; background: #eee;">Biaya</td>
						<td style="border: 1px solid black; padding: 5px; text-align: right;"><div class="due">Rp. <?= number_format($biaya,0,',','.') ?></div></td>
					</tr>

				</table>
			</div>
			<table id="items" style="border-collapse: collapse; clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; ">

				<tr>
					<th style="border: 1px solid black; padding: 5px; background: #eee;">Nama Perahu</th>
					<th style="border: 1px solid black; padding: 5px; background: #eee;">Spesifikasi</th>
					<th style="border: 1px solid black; padding: 5px; background: #eee;">Harga Booking</th>
					<th style="border: 1px solid black; padding: 5px; background: #eee;">Penyewa</th>
					<th style="border: 1px solid black; padding: 5px; background: #eee;">Tanggal Digunakan</th>
				</tr>

				<tr class="item-row" style="border: 0; vertical-align: top;">
					<td class="item-name" style="border: 1px solid black; padding: 5px; width: 175px;"><textarea style="width: 80px; height: 50px; border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none;"><?= $nama_perahu ?></textarea></td>

					<td class="description" style="width: 300px; border: 1px solid black; padding: 5px;"><textarea style="border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; width: 80px; height: 50px; width: 98%;"><?=  $spesifikasi_perahu ?> </textarea></td>
					<td style="border: 1px solid black; padding: 5px;"><textarea class="cost" style="border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none;">RP. <?= number_format($biaya,0,',','.') ?></textarea></td>
					<td style="border: 1px solid black; padding: 5px;"><textarea class="penyewa" style="border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none;"><?= $nama_pengguna ?></textarea></td>
					<td style="border: 1px solid black; padding: 5px;"><span class="Tanggaldigunakan"><?= date("d M Y", strtotime($booking_at));  ?></span></td>
				</tr>
				<tr> 
				<td colspan="2" class="blank" style="border: 0;"> </td>
				<td colspan="2" class="blank" style="border: 0;"> </td>
				<td colspan="2" class="blank" style="border: 0;"> </td></tr>
				<tr>
					<td colspan="2" class="blank" style="border: 0;"> </td>
					<td colspan="2" class="total-line">Subtotal</td>
					<td class="total-value" style=""><div id="subtotal">Rp. <?= number_format($biaya,0,',','.') ?></div></td>
				</tr>
				<tr>

					<td colspan="2" class="blank"> </td>
					<td colspan="2" class="total-line">Total</td>
					<td class="total-value"><div id="total">Rp. <?= number_format($biaya,0,',','.') ?></div></td>
				</tr>
				<tr>

					<td colspan="2" class="blank"> </td>
					<td colspan="2" class="total-line">Status</td>
					<td class="total-value"><div id="total">Teverifikasi</div></td>
				</tr>
			</table>
			<br><br>
			<div id="terms" style="text-align: center; margin: 20px 0 0 0;">
				<div><h5 style="text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0;">Booking Kapal</h5></div>
				<textarea style="width: 100%; text-align: center; border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none;">Untuk Wisata dan Memancing</textarea>
			</div>
			<textarea id="address" style="border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; width: 250px; height: 150px; float: left;">*Note: Tunjukan email masuk ini ke pemilik kapal</textarea>
</body>
</html>