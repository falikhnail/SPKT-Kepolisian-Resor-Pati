<?php
include "koneksi.php";
?>


<!-- MAIN -->
<main role="main">
	<!-- Content -->
	<article>
		<header class="section background-dark">
			<div class="line">
				<blockquote class="tr_bq">
					<?php
					error_reporting(0);
					session_start();


					if (@$_POST["login"]) { //jika tombol Login diklik
						$user = $_POST["user"];
						$pass = $_POST["pass"];
						$level = $_POST["level"];

						if ($level == "Pengunjung") {
							$tabel = "tbl_pengunjung";
							$tipe_user = 'pengunjung';
						} elseif ($level === 'super_admin') {
							$tabel = 'tbl_super_admin';
							$tipe_user = 'super_admin';
						} else {
							$tabel = "tbl_admin";
							$tipe_user = 'admin';
						}

						if ($user != "" && $pass != "") {
							$em = mysqli_query($conn, "select * from $tabel where password = '$pass' AND username = '$user'");
							$data = mysqli_fetch_array($em);
							//var_dump($data);

							if ($data["username"] == $user && $data["password"] == $pass) {
								echo "<div class='alert alert-success alert-dismissable'>
										<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
										Login Anda Berhasil
									</div>";

								$_SESSION["user"] = $data["username"];
								$_SESSION["pass"] = $data["password"];
								$_SESSION["nama_lengkap"] = $data["nama_lengkap"];
								$_SESSION["tipe_user"] = $tipe_user;

								if ($level == "Pengunjung") {
									$_SESSION['id_pengunjung'] = $data['id_pengunjung'];
					?>

									<script>
										alert("Selamat Datang '--><?php echo $_SESSION['nama_lengkap'];?>//'");
										window.location.href = 'pengunjung/index.php'
									</script>
									exit;
								<?php

								} else {
								?>
									<script>
										alert("Selamat Datang '<?php echo $_SESSION['nama_lengkap']; ?>//'");
										window.location.href = 'admin/admin/index.php'
									</script>
									exit;
								<?php
								}
								?>
					<?php
							} else {
								echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Mohon Ulangi Lagi !! Data Tidak Ditemukan!!</b>
                  </div><center>";
							}
						}
					}
					?>
					<!-- PAGE CONTENT -->
					<div class="container">


						<center>
							<font color="blue"><b>LOGIN PENGUNJUNG</b></font>
						</center>
						<center>
							<form action="" method="post" class="form-signin">
								<table>
									<tr>
										<td>Username</td>
										<td>: <input type="text" autofocus required name="user" placeholder="Username" class="form-control" /></td>
									</tr>
									<tr>
										<td>Level</td>
										<td>: <select name="level">
												<option value="">--Pilih--</option>
												<option value="Pengunjung">Pengunjung</option>
												<option value="Admin">Admin</option>
												<option value="super_admin">Super Admin</option>
											</select></td>
									</tr>

									<tr>
										<td>Password</td>
										<td>: <input type="password" required name="pass" placeholder="Password" class="form-control" /></td>
									</tr>
									<tr>
										<td><a href="reset.php"></a></td>
										<td>
											<input type="submit" name="login" value="Login" class="button" />
										</td>
									</tr>
								</table>
							</form>
						</center>



					</div>

				</blockquote>
			</div>
			</div>
			</div>
			</div>
			</div>
	</article>
</main>

<!-- FOOTER -->