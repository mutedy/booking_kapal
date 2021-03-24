
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>email verifikasi</title>
</head>

<body>
	<div id="logo" style="text-align: center; float: center; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; max-height: 540px; overflow: hidden;">
		<img id="image" style ="height:100px" src="https://1.bp.blogspot.com/-bHiuTg4r4yc/XS9gT1joI9I/AAAAAAAAMuY/ADS0iwWKkmAXYje7EGEABrjJksP-m5spwCEwYBhgL/s1600/logo.png" alt="logo" />
	</div>
	<div><p>Thanks for signing up!</p></div>
	<div><p style="text-align: justify" >Your account has been created, you can login with the following credentials after you have activated your account by pressing the URL below.</p></div>
	<div>------------------------</div>
	<div><pre>email    : <?= $email ?></pre></div>
	<div><pre>password : <?= $password ?></pre></div>
	<div>------------------------</div>
	<div>Please click this link to activate your account: <?= base_url('registrasi/verification?token='.$token) ?></div>

</body>
</html>
