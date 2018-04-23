<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
      <?php if ($this->session->flashdata('info')): ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4>
            <i class="icon fa fa-check"></i>Info</h4>
          Berhasil Merubah User
        </div>
        <?php endif ?>
      <section id="scroll-dynamic"><!-- <section id="horizontal"> -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <span class="col-md-6 col-sm-12 pull-left mb-2" style="font-size: 25px;text-align: left;">Table User</span>
                <div class="pull-right">
                  <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-secondary btn-min-width" data-toggle="modal" data-target="#addUserModal">
                    <i class="ft-user-plus"></i> Add Users
                  </button>
                </div><br><br>
                <div class="card row pull-left">
                  <span class="col-md-12 col-sm-12" style="font-size: 25px;">Date Filter</span><br>
                  <div class="form-group col-md-12">
                    <div class="row">
                      <div class="pull-left input-group col-md-6 col-sm-12">
                        <input type='text' class="form-control text-center pickadate-selectors" placeholder="Date Begin"/>
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <span class="fa fa-calendar-o"></span>
                          </span>
                        </div>
                      </div>
                      <div class="pull-left input-group col-md-6 col-sm-12">
                        <input type='text' class="form-control text-center pickadate-selectors" placeholder="Date End"/>
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <span class="fa fa-calendar-o"></span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body collapse show">
                <div class="card-block card-dashboard">
                  <table class="table table-striped table-bordered dynamic-height">
                    <thead>
                      <tr>
                        <th width="10%">No</th>
                        <th width="65%">Username</th>
                        <th width="25%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($users->result_array() as $u): 
                        $username=$u['username'];
                        ?>
                        <tr>
                          <td>
                            <?php echo $no++; ?>
                          </td>
                          <td>
                            <?php echo $username; ?>
                          </td>
                          <td>
                            <!-- tombol edit users-->
                            <button type="button" id="addtoCustomer" class="btn mr-1 mb-1 btn-success btn-sm" data-toggle="modal" data-target="#modal_add<?php echo $username;?>">
                              <i class="ft-edit-2"></i> Add to Customer
                            </button>
                            <!-- tombol delete users -->
                            <button type="button" id="" class="btn mr-1 mb-1 btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus<?php echo $username;?>">
                              <i class="ft-x"></i> Delete
                            </button>
                          </td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- modal add to users -->
             <!-- <div class="modal fade text-left" id="addtoCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title">Add To Customer</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php echo form_open('admin/tambah_data_user',array('class'=>'form-horizontal','method'=>'post')); ?>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-8">
                          <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <input type="hidden" class="form-control" name="level" id="level" value="2">
                          </div>
                        </div>
                      </div>
                    <div class="modal-footer">
                      <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                      <input type="submit" class="btn btn-outline-primary btn-lg" value="Add">
                    </div>
                    <?php echo form_close() ?>
                  </div>
                </div>
              </div> -->
              <!-- akhir modal add to customer -->
              <!-- modal add new users-->
              <div class="modal fade text-left" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title">Add User</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- form modal add users-->
                    <?php echo form_open('admin/tambah_data_user',array('class'=>'form-horizontal','method'=>'post')); ?>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-8">
                          <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <input type="hidden" class="form-control" name="level" id="level" value="2">
                          </div>
                        </div>
                      </div>
                    <div class="modal-footer">
                      <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                      <input type="submit" class="btn btn-outline-primary btn-lg" value="Add">
                    </div>
                    <?php echo form_close() ?>
                  </div>
                </div>
              </div>
              <!-- akhir modal add users -->
                <!-- ============ MODAL HAPUS CUSTOMER =============== -->
                <div class="modal fade" id="modal_hapus<?php echo $username;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title" id="myModalLabel">Hapus Customer</h3>
                      </div>
                      <?php echo form_open('admin/hapus_data',array('class'=>'form-horizontal','method'=>'post')); ?>
                      <div class="modal-body">
                        <p>Anda yakin mau menghapus <b><?php echo $name;?></b></p>
                      </div>
                      <div class="modal-footer">
                        <input type="hidden" name="customer_id" value="<?php echo $customer_id;?>">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button id="deleteCustomer" class="btn btn-danger">Hapus</button>
                      </div>
                      <?php echo form_close() ?>
                    </div>
                  </div>
                </div>
              <!--END MODAL HAPUS CUSTOMER-->
            </div>
          </div>
        </div>
      </section>
      <!--Table customer -->
    </div>
  </div>