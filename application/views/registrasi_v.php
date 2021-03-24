

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?= base_url('registrasi/registrasi-process') ?>">
					<span class="login100-form-title p-b-26">
						Registrasi
					</span>
					<span class="login100-form-title p-b-48">
					<a href="https://perahu.codingseru.id/"><i class="zmdi"><img id="image" style="height:70px" alt="logo" src="https://1.bp.blogspot.com/-bHiuTg4r4yc/XS9gT1joI9I/AAAAAAAAMuY/ADS0iwWKkmAXYje7EGEABrjJksP-m5spwCEwYBhgL/s1600/logo.png"></i></a>
					</span>

					<div class="wrap-input100 validate-input">
						<input required class="input100" type="text" name="nama" />
						<span class="focus-input100" data-placeholder="Nama"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input required class="input100" type="email" name="email" />
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input required class="input100" type="text" name="notelp" />
						<span class="focus-input100" data-placeholder="Nomor Telepon"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input required class="input100" type="password" name="password" />
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Registrasi
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							I already have an account!
						</span>

						<a class="txt2" href="https://perahu.codingseru.id/login">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor') ?>/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor') ?>/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor') ?>/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/login/vendor') ?>/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor') ?>/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor') ?>/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('assets/login/vendor') ?>/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor') ?>/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('assets/login/js') ?>/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        <?php if($this->session->flashdata('registrasi') == 'berhasil'){ ?>
            swal("Berhasil", "Pendaftaran berhasil", "success").then(() => window.location = "<?= base_url('login') ?>");
        <?php } ?>
    </script>
</body>
</html>