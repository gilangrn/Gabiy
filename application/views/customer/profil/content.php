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
								<img src="<?php echo site_url('assets/img/portrait/small/avatar-s-1.png')?>" class="centered-obj" style="border-radius: 20px;" width="200px" height="200px">
								<br />
								<input type="file" class="form-control-file centered-obj" id="basicInputFile">
								<br>
								<a href="#" class="btn btn-success centered-obj">Save</a>
							</div>
						</div>
					</div>
				</div>
                <?php
                 foreach ($customer->result_array() as $u):
                   $customer_id=$u['customer_id'];
                   $username=$u['username'];
                   $name=$u['name'];
                   $ip_address=$u['ip_address'];
                   $contact_person=$u['contact_person'];
                   $email=$u['email'];
                   $address=$u['address'];
                ?>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<div class="px-3 py-3">
								<h4>Important Information</h4>
								Username :
								<p><?php echo $username; ?></p>
								Email : <a class="badge badge-success" href="#email"><i class="ft-edit"></i></a>
								<p><?php echo $email; ?></p>
								IP :
								<p><?php echo $ip_address; ?></p>
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
								<p><?php echo $customer_id; ?></p>
								Nama :
								<p><?php echo $name; ?></p>
								Alamat : 
								<p><?php echo $address; ?></p>
								Contact Person : <a class="badge badge-success" href="#contact"><i class="ft-edit"></i></a>
								<p><?php echo $contact_person; ?></p>
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
								<?php echo form_open('customer/edit_data_customer',array('class'=>'form-horizontal','method'=>'post')); ?>
									<div class="form-body">
										<input type="hidden" id="customer_id" name="customer_id" value="<?php echo $customer_id; ?>">
										<input type="hidden" id="username" name="username" value="<?php echo $username; ?>">
										<input type="hidden" id="name" name="name" value="<?php echo $name; ?>">
										<input type="hidden" id="ip_address" name="ip_address" value="<?php echo $ip_address; ?>">
										<input type="hidden" id="address" name="address" value="<?php echo $address; ?>">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" id="email" class="form-control"  name="email" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Email" value="<?php echo $email; ?>">
										</div>
										<div class="form-group">
											<label for="contact">Contact Person</label>
											<input type="text" id="contact_person" class="form-control"  name="contact_person" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Nomor Telepon" value="<?php echo $contact_person; ?>">
										</div>
										<button type="submit" class="btn btn-raised btn-primary">
											<i class="fa fa-check-square-o"></i> Save
										</button>
									</div>
								<?php echo form_close() ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
       <?php endforeach ?>
	</div>
</div>
</div>