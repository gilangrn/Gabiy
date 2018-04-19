<div class="main-panel">
	<div class="main-content">
		<div class="content-wrapper">
			<h3 style="margin-top: 20px;">Profil</h3>
			<div class="row">
				<div class="col-md-3">
					<div class="card">
						<div class="card-body">
							<div class="px-3 py-3">
								<h4 class="text-center">Profile Image</h4>
								<img src="assets/img/portrait/small/avatar-s-1.png" class="centered-obj" style="border-radius: 20px;" width="200px" height="200px">
								<br />
								<input type="file" class="form-control-file centered-obj" id="basicInputFile">
								<br>
								<a href="#" class="btn btn-success centered-obj">Save</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<div class="px-3 py-3">
								<h4>Important Information</h4>
								Username :
								<p><?php echo $username; ?></p>
								Email : <a class="badge badge-success" href="#email"><i class="ft-edit"></i></a>
								<p>email@gmail.com</p>
								IP :
								<p>192.168.100.43</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<div class="px-3 py-3">
								<h4>Other Information</h4>
								Customer ID :
								<p>1</p>
								Nama : <a class="badge badge-success" href="#nama"><i class="ft-edit"></i></a>
								<p>Nama Customer</p>
								Alamat : <a class="badge badge-success" href="#alamat"><i class="ft-edit"></i></a>
								<p>Ruko Kebayoran Square Blok C2</p>
								Contact Person : <a class="badge badge-success" href="#contact"><i class="ft-edit"></i></a>
								<p>081234567890</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<h3 style="margin-top: 20px;">Edit Profil</h3>
			<div class="row">
				<div class="col-md-11">
					<div class="card">
						<div class="card-body">
							<div class="px-3 py-3">
								<form class="form">
							<div class="form-body">

								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control"  name="email" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Email" value="email@gmail.com">
								</div>

								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" id="nama" class="form-control"  name="nama" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Nama Lengkap" value="Nama Customer">
								</div>

								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" id="alamat" class="form-control"  name="alamat" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Alamat Lengkap" value="Alamat Customer">
								</div>

								<div class="form-group">
									<label for="contact">Contact Person</label>
									<input type="text" id="contact" class="form-control"  name="contact" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Nomor Telepon" value="081234567890">
								</div>
								
								<button type="button" class="btn btn-raised btn-primary">
									<i class="fa fa-check-square-o"></i> Save
								</button>
							</div>
						</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>