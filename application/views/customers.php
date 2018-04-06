<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
      <section id="horizontal">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="pull-left">
                  <span style="font-size: 25px;">Table Customer</span>
                </div>
                <div class="pull-right">
                  <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-secondary btn-min-width" data-toggle="modal" data-target="#addModalForm"><i class="ft-user-plus"></i> Add Customer</button>
                </div>
              </div>
              <div class="card-body collapse show">
                <div class="card-block card-dashboard">
                  <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Customer ID</th>
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
                      foreach ($customer->result_array() as $u): 
                        $customer_id=$u['customer_id'];
                        $name=$u['name'];
                        $ip_address=$u['ip_address'];
                        $contact_person=$u['contact_person'];
                        $email=$u['email'];
                        $address=$u['address'];
                        ?>
                        <tr>
                          <td>

                          </td>
                          <td>
                            <?php echo $customer_id; ?>
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
                            <!-- tombol edit -->
                            <a class="success p-0" data-toggle="modal" data-target="#editModalForm" data-original-title="" title="">
                              <i class="ft-edit-2 font-medium-3 mr-2"></i>
                            </a>
                            <!-- tombol delete -->
                            <a class="danger p-0 btn" id="action-option" data-original-title="" title="">
                              <i class="ft-x font-medium-3 mr-2" id="deletecustomer"></i>
                            </a>
                            <!-- tombol detail view -->
                            <a class="info" p-0 btn data-toggle="modal" data-target="#viewModal" data-original-title="" title="">
                              <i class="icon-info font-medium-3 mr-2"></i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- modal edit customer -->
              <div class="modal fade text-left" id="editModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title">Edit Customer</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- form modal edit customer-->
                    <form>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-8">
                            <div class="form-group">
                              <label>Full Name</label>
                              <input type="text" class="form-control" id="name" placeholder="Customer Name">
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <label>IP Address</label>
                              <input type="text" class="form-control" id="ipaddress" placeholder="IP Address">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                              <label>Contact</label>
                              <input type="text" class="form-control" id="contact" placeholder="Contact Person">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" id="email" placeholder="Email Address">
                            </div>
                          </div>
                        </div>
                        <fieldset class="form-group">
                          <label for="address">Address</label>
                          <textarea class="form-control" id="address" rows="3" placeholder="Full Address"></textarea>
                        </fieldset>
                      </div>
                      <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Edit">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- akhir modal edit customer -->
              <!-- modal add new customer-->
              <div class="modal fade text-left" id="addModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title">Add Customer</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- form modal add customer-->
                    <form>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-8">
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control" id="name" placeholder="Customer Name">
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <label>IP Address</label>
                              <input type="text" class="form-control" id="ipaddress" placeholder="IP Address">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                              <label>Contact</label>
                              <input type="text" class="form-control" id="contact" placeholder="Contact Person">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" id="email" placeholder="Email Address">
                            </div>
                          </div>
                        </div>
                        <fieldset class="form-group">
                          <label for="address">Address</label>
                          <textarea class="form-control" id="address" rows="3" placeholder="Full Address"></textarea>
                        </fieldset>
                      </div>
                      <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Add">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- akhir modal add customer -->
            </div>
          </div>
        </div>
      </section>
      <!--Table customer -->
    </div>
  </div>
  <footer class="footer footer-static footer-light">
    <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2018 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
  </footer>
</div>
<!-- </div> jangan diapus dulu, dikomen saja-->