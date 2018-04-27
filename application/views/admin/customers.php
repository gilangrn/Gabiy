<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
      <section id="scroll-dynamic">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <span class="col-md-6 col-sm-12 pull-left mb-2" style="font-size: 25px;text-align: left;">Table Customer</span>
                <br><br>
                <div class="pull-right">
                  <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-success btn-min-width" data-toggle="modal" data-target="#addCustomersModal">
                    <i class="ft-user-plus"></i> Add Customer
                  </button>
                </div>
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
                  <div class="pull-left input-group col-md-3">
                    <input type="submit" class="btn btn-default btn-outline-primary form-control text-center" value="Filter">
                  </div>
                </div>
              </div>
              <div class="card-body collapse show">
                <div class="card-block card-dashboard">
                  <table class="table table-striped table-bordered dynamic-height">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Customer ID</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>IP Address</th>
                        <th>Contact Person</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($customer->result_array() as $u): 
                        $customer_id=$u['customer_id'];
                        $username=$u['username'];
                        $name=$u['name'];
                        $ip_address=$u['ip_address'];
                        $contact_person=$u['contact_person'];
                        $email=$u['email'];
                        $address=$u['address'];
                        ?>
                        <tr>
                          <td>
                            <?php echo $no++; ?>
                          </td>
                          <td>
                            <?php echo $customer_id; ?>
                          </td>
                          <td>
                            <?php echo $username; ?>
                          </td>
                          <td>
                            <?php echo $name; ?>
                          </td>
                          <td>
                            <?php echo $ip_address; ?>
                          </td>
                          <td>
                            <?php echo $contact_person; ?>
                          </td>
                          <td>
                            <?php echo $email; ?>
                          </td>
                          <td>
                            <?php echo $address; ?>
                          </td>
                          <td>
                            <!-- tombol edit customer-->
                            <button type="button" id="editCustomer" class="btn mr-1 mb-1 btn-outline-success btn-sm" data-toggle="modal" data-target="#modal_edit<?php echo $customer_id;?>">
                              <i class="ft-edit-2"></i> Edit
                            </button>
                            <!-- tombol delete customer -->
                            <button type="button" id="" class="btn mr-1 mb-1 btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal_hapus<?php echo $customer_id;?>">
                              <i class="ft-x"></i> Delete
                            </button>                            
                            <!-- tombol detail customer -->
                            <button type="button" id="detailCustomer" data-toggle="modal" data-target="#detailCustomerModal" class="btn mr-1 mb-1 btn-outline-info btn-sm">
                              <i class="ft-info"></i> Detail
                            </button>
                          </td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- modal edit customer -->
              <?php
              foreach ($customer->result_array() as $i): 
                $customer_id    =$i['customer_id'];
                $username       =$i['username'];
                $password       =$i['username'];
                $name           =$i['name'];
                $ip_address     =$i['ip_address'];
                $contact_person =$i['contact_person'];
                $email          =$i['email'];
                $address        =$i['address'];
                ?>
                <div class="modal fade text-left" id="modal_edit<?php echo $customer_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content border-success" style="border-radius: 8px;">
                      <div class="modal-header bg-success">
                        <h3 class="modal-title white">Edit Customer</h3>
                        <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- form modal edit customer-->
                      <?php echo form_open('admin/edit_data_customer',array('class'=>'form-horizontal','method'=>'post')); ?>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                              <label>Username</label>
                              <input name="username" value="<?php echo $username;?>" class="form-control" type="text">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <label>Password</label>
                              <input name="password" value="<?php echo $password;?>" class="form-control" type="password">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                              <label>Nama</label>
                              <input name="name" value="<?php echo $name;?>" class="form-control" type="text">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <label>IP Address</label>
                              <input name="ip_address" value="<?php echo $ip_address;?>" class="form-control" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                              <label>Contact Person</label>
                              <input name="contact_person"  value="<?php echo $contact_person;?>" class="form-control" type="text">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <label>Email</label>
                              <input name="email" value="<?php echo $email;?>" class="form-control" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                              <label>Alamat</label>
                              <input name="address" type="text" value="<?php echo $address;?>" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                        <input type="submit" class="btn btn-outline-success btn-lg" value="Edit">
                      </div>
                      <?php echo form_close() ?>
                    </div>
                  </div>
                </div>
              <?php endforeach;?>
              <!-- akhir modal edit customer -->
              <!-- modal detail customer -->
              <div class="modal fade text-left" id="detailCustomerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content border-info" style="border-radius: 8px;">
                    <div class="modal-header bg-info">
                      <h3 class="modal-title white">Detail Device Customer</h3>
                      <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- form modal detail customer-->
                    <div class="modal-body col-xl-12 col-sm-12 col-lg-12" style="max-height: calc(100vh - 210px); overflow-y: auto;">
                      <form>
                        <div class="position-relative has-icon-right mt-2 mb-2">
                          <input type="text" placeholder="Search Device" class="form-control round" />
                          <div class="form-control-position">
                            <i class="ft-search"></i>
                          </div>
                        </div>
                      </form>
                      <div class="col-sm-12 col-md-12 mb-2">
                        <div class="row" matchHeight="card">
                          <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="px-3 py-3">
                                  <div class="media">
                                    <div class="media-body text-left">
                                      <h5 class="text-danger mb-1">Lamp</h5>
                                      <input type="checkbox" class="switchery">
                                    </div>
                                    <div class="media-right align-self-center">
                                      <i class="icon-rocket danger font-large-2 float-right"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="px-3 py-3">
                                  <div class="media">
                                    <div class="media-body text-left">
                                      <h5 class="text-danger mb-1">Lamp</h5>
                                      <input type="checkbox" class="switchery text-danger">
                                    </div>
                                    <div class="media-right align-self-center">
                                      <i class="icon-rocket danger font-large-2 float-right"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="px-3 py-3">
                                  <div class="media">
                                    <div class="media-body text-left">
                                      <h5 class="text-danger mb-1">Lamp</h5>
                                      <input type="checkbox" class="switchery">
                                    </div>
                                    <div class="media-right align-self-center">
                                      <i class="icon-rocket danger font-large-2 float-right"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="px-3 py-3">
                                  <div class="media">
                                    <div class="media-body text-left">
                                      <h5 class="text-danger mb-1">Lamp</h5>
                                      <input type="checkbox" class="switchery">
                                    </div>
                                    <div class="media-right align-self-center">
                                      <i class="icon-rocket danger font-large-2 float-right"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="px-3 py-3">
                                  <div class="media">
                                    <div class="media-body text-left">
                                      <h5 class="text-danger mb-1">Lamp</h5>
                                      <input type="checkbox" class="switchery">
                                    </div>
                                    <div class="media-right align-self-center">
                                      <i class="icon-rocket danger font-large-2 float-right"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="px-3 py-3">
                                  <div class="media">
                                    <div class="media-body text-left">
                                      <h5 class="text-danger mb-1">Lamp</h5>
                                      <input type="checkbox" class="switchery">
                                    </div>
                                    <div class="media-right align-self-center">
                                      <i class="icon-rocket danger font-large-2 float-right"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="px-3 py-3">
                                  <div class="media">
                                    <div class="media-body text-left">
                                      <h5 class="text-danger mb-1">Lamp</h5>
                                      <input type="checkbox" class="switchery">
                                    </div>
                                    <div class="media-right align-self-center">
                                      <i class="icon-rocket danger font-large-2 float-right"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-lg-6 col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="px-3 py-3">
                                  <div class="media">
                                    <div class="media-body text-left">
                                      <h5 class="text-danger mb-1">Lamp</h5>
                                      <input type="checkbox" class="switchery">
                                    </div>
                                    <div class="media-right align-self-center">
                                      <i class="icon-rocket danger font-large-2 float-right"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>  
                    </div>
                    <div class="modal-footer">
                      <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                      <input type="submit" class="btn btn-outline-primary btn-lg" value="Submit">
                    </div>
                  </div>
                </div>
              </div>
              <!-- akhir modal detail customer -->
              <?php
              foreach ($customer->result_array() as $i): 
                $customer_id=$i['customer_id'];
                $name=$i['name'];
                $ip_address=$i['ip_address'];
                $contact_person=$i['contact_person'];
                $email=$i['email'];
                $address=$i['address'];
                ?>
                <!-- ============ MODAL HAPUS CUSTOMER =============== -->
                <div class="modal fade" id="modal_hapus<?php echo $customer_id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content border-red" style="border-radius: 8px;">
                      <div class="modal-header bg-danger">
                        <h3 class="modal-title white" id="myModalLabel">Hapus Customer</h3>
                        <button type="button" class="close white" data-dismiss="modal" aria-hidden="true">x</button>
                      </div>
                      <?php echo form_open('admin/hapus_data',array('class'=>'form-horizontal','method'=>'post')); ?>
                      <div class="modal-body">
                        <p>Anda yakin mau menghapus <b><?php echo $name;?></b></p>
                      </div>
                      <div class="modal-footer">
                        <input type="hidden" name="customer_id" value="<?php echo $customer_id;?>">
                        <button class="btn btn-outline-secondary" data-dismiss="modal" aria-hidden="true">Close</button>
                        <button id="deleteCustomer" class="btn btn-outline-danger">Hapus</button>
                      </div>
                      <?php echo form_close() ?>
                    </div>
                  </div>
                </div>
              <?php endforeach;?>
              <!--END MODAL HAPUS CUSTOMER-->
            </div>
          </div>
        </div>
      </section>
      <!--Table customer -->
      <!-- ========== modal add new customer ================-->
  <div class="modal fade text-left" id="addCustomersModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content border-success" style="border-radius: 8px;">
        <div class="modal-header bg-success">
          <h3 class="modal-title white">Add Customer</h3>
          <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- form modal add customer-->
        <?php echo form_open('admin/tambah_data_customer',array('class'=>'form-horizontal','method'=>'post')); ?>
        <div class="modal-body">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Username</label>
                <input name="username" class="form-control" type="text" placeholder="username" required>
                <input name="token_get" class="form-control" value="<?php echo $token_get;?>" type="hidden">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Password</label>
                <input name="password" class="form-control" type="password" placeholder="Password" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Nama</label>
                <input name="name" class="form-control" type="text" placeholder="nama" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>IP Address</label>
                <input name="ip_address" class="form-control" type="text" placeholder="IP Address" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Contact Person</label>
                <input name="contact_person" class="form-control" type="text" placeholder="Contact Person" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Email</label>
                <input name="email" class="form-control" type="text" placeholder="Email" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Alamat</label>
                <input name="address" type="text" placeholder="Alamat" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
            <input type="submit" class="btn btn-outline-success btn-lg" value="Add">
          </div>
          <?php echo form_close() ?>
        </div>
      </div>
    </div>
    <!--=========== akhir modal add customer ============-->
    </div>
  </div>