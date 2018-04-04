<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
      <section id="horizontal">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Scroll - horizontal</h4>
                <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-secondary text-right btn-min-width" data-toggle="modal" data-target="#tambahModalForm"><i class="ft-user-plus"></i> Add Customer</button>
              </div>
              <div class="card-body collapse show">
                <div class="card-block card-dashboard">
                  <p class="card-text">Scroll - horizontal DataTables has the ability to show tables with horizontal scrolling, which is very useful for when you have a wide table, but want to constrain it to a limited horizontal display area. To enable x-scrolling simply set the scrollX parameter to be whatever you want the container wrapper's width to be (this should be 100% in almost all cases with the width being constrained by the container element).</p>
                  <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Customer ID</th>
                        <th>Nama</th>
                        <th>IP Address</th>
                        <th>Contact Person</th>
                        <th>Email</th>
                        <th>Alamat</th>
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
                          <td><!-- tombol edit -->
                            <a class="success p-0" data-toggle="modal" data-target="#editModalForm" data-original-title="" title="">
                              <i class="ft-edit-2 font-medium-3 mr-2"></i>
                            </a>
                            <a class="danger p-0 btn" id="action-option" data-original-title="" title="">
                              <i class="ft-x font-medium-3 mr-2" id="deletecustomer"></i>
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
                      <h3 class="modal-title" id="myModalLabel35"> Edit Customer</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- form modal -->
                    <form>
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" id="nama" placeholder="Nama Customer">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="ipaddress">IP Address</label>
                          <input type="text" class="form-control" id="ipaddress" placeholder="IP Address">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="contact">Contact</label>
                          <input type="text" class="form-control" id="contact" placeholder="Contact Person Customer">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Email Address</label>
                          <input type="text" class="form-control" id="email" placeholder="Email Address">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="alamat">Alamat</label>
                          <textarea class="form-control" id="alamat" rows="3" placeholder="Alamat"></textarea>
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
              <!-- modal tambah customer baru -->
              <div class="modal fade text-left" id="tambahModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="myModalLabel35"> Tambah Customer</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- form modal -->
                    <form>
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" id="nama" placeholder="Nama Customer">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="ipaddress">IP Address</label>
                          <input type="text" class="form-control" id="ipaddress" placeholder="IP Address">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="contact">Contact</label>
                          <input type="text" class="form-control" id="contact" placeholder="Contact Person Customer">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Email Address</label>
                          <input type="text" class="form-control" id="email" placeholder="Email Address">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="alamat">Alamat</label>
                          <textarea class="form-control" id="alamat" rows="3" placeholder="Alamat"></textarea>
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
              <!-- akhir modal tambah customer baru -->
            </div>
          </div>
        </div>
      </section>
      <!--/ Scroll - horizontal table -->
    </div>
  </div>
  <footer class="footer footer-static footer-light">
    <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2018 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
  </footer>
</div>
<!-- </div> -->