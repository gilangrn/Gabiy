<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
      <section id="scroll-dynamic"><!-- <section id="horizontal"> -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <span class="col-md-6 col-sm-12 pull-left mb-2" style="font-size: 25px;text-align: center;">Table Customer</span>
                <span class="col-md-6 col-sm-12 pull-right mb-2" style="font-size: 25px;text-align: center;">Date Filter</span>
                <br>
                <br>
                <div class="row mt-3">
                  <div class="form-group col-md-12">
                    <div class="row">
                      <div class="input-group col-md-4 col-sm-12 mx-auto">
                        <input type='text' class="form-control text-center pickadate-selectors" placeholder="Date Begin"/>
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <span class="fa fa-calendar-o"></span>
                          </span>
                        </div>
                      </div>
                      <div class="input-group col-md-4 col-sm-12 mx-auto">
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
                <div class="text-center">
                  <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-secondary btn-min-width" data-toggle="modal" data-target="#addCustomerModal">
                    <i class="ft-user-plus"></i> Add Customer
                  </button>
                </div>
              </div>
              <div class="card-body collapse show">
                <div class="card-block card-dashboard">
                  <table class="table table-striped table-bordered dynamic-height">
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
                      $no = 1;
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
                            <?php echo $no++; ?>
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
                            <!-- tombol edit customer-->
                            <button type="button" id="editCustomer" class="btn mr-1 mb-1 btn-success btn-sm" data-toggle="modal" data-target="#editCustomerModal">
                              <i class="ft-edit-2"></i> Edit
                            </button>
                            <!-- tombol delete customer -->
                            <button type="button" id="deleteCustomer" class="btn mr-1 mb-1 btn-danger btn-sm">
                              <i class="ft-x"></i> Delete
                            </button>
                            <!-- tombol detail customer -->
                            <button type="button" id="detailCustomer" data-toggle="modal" data-target="#detailCustomerModal" class="btn mr-1 mb-1 btn-info btn-sm">
                              <i class="icon-info"></i> Detail
                            </button>
                          </td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- modal edit customer -->
              <div class="modal fade text-left" id="editCustomerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
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
              <div class="modal fade text-left" id="addCustomerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title">Add Customer</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- form modal add customer-->
                    <?php echo form_open('customers/tambah_data_customer',array('class'=>'form-horizontal','method'=>'post')); ?>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-8">
                          <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Customer Name">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label>IP Address</label>
                            <input type="text" class="form-control" name="ip_address" id="ip_address" placeholder="IP Address">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <label>Contact</label>
                            <input type="text" class="form-control" name="contact_person" id="contact_person" placeholder="Contact Person">
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email Address">
                          </div>
                        </div>
                      </div>
                      <fieldset class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="address" rows="3" placeholder="Full Address"></textarea>
                      </fieldset>
                    </div>
                    <div class="modal-footer">
                      <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                      <input type="submit" class="btn btn-outline-primary btn-lg" value="Add">
                    </div>
                    <?php echo form_close() ?>
                  </div>
                </div>
              </div>
              <!-- akhir modal add customer -->
              <!-- modal detail customer -->
              <div class="modal fade text-left" id="detailCustomerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title">Detail Device Customer</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- form modal edit customer-->
                    <div class="col-xl-12 col-sm-12 col-lg-12">
                      <div class="justified-tabs">
                        <ul class="nav nav-tabs nav-justified">
                          <li class="nav-item">
                            <a class="nav-link" id="home-tab3" data-toggle="tab" href="#home3" aria-controls="home3" aria-expanded="true">AC</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" id="profile-tab3" data-toggle="tab" href="#profile3" aria-controls="profile3" aria-expanded="false">TV</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" id="dropdown31-tab" href="#dropdown31" data-toggle="tab" aria-controls="dropdown31" aria-expanded="true">@fat</a>
                              <a class="dropdown-item" id="dropdown32-tab" href="#dropdown32" data-toggle="tab" aria-controls="dropdown32" aria-expanded="true">@mdo</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="about-tab3" data-toggle="tab" href="#about3" aria-controls="about3" aria-expanded="false">About</a>
                          </li>
                        </ul>
                        <div class="tab-content px-1 pt-1">
                          <div role="tabpanel" class="tab-pane" id="home3" aria-labelledby="home-tab3" aria-expanded="true">
                            <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                          </div>
                          <div class="tab-pane active show" id="profile3" role="tabpanel" aria-labelledby="profile-tab3" aria-expanded="false">
                            <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                          </div>
                          <div class="tab-pane" id="dropdown31" role="tabpanel" aria-labelledby="dropdown31-tab" aria-expanded="false">
                            <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                          </div>
                          <div class="tab-pane" id="dropdown32" role="tabpanel" aria-labelledby="dropdown32-tab" aria-expanded="false">
                            <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                          </div>
                          <div class="tab-pane" id="about3" role="tabpanel" aria-labelledby="about-tab3" aria-expanded="false">
                            <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                      <input type="submit" class="btn btn-outline-primary btn-lg" value="Edit">
                    </div>
                  </div>
                </div>
              </div>
              <!-- akhir modal detail customer -->
            </div>
          </div>
        </div>
      </section>
      <!--Table customer -->
    </div>
  </div>
<!-- </div></div> -->