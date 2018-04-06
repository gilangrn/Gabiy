<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
      <section id="scroll-dynamic">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="pull-left">
                  <span style="font-size: 25px;">Table Customer Device</span>
                </div>
                <div class="pull-right">
                  <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-secondary btn-min-width" data-toggle="modal" data-target="#addDeviceModal"><i class="ft-user-plus"></i> Add Device</button>
                </div>
              </div>
              <div class="card-body collapse show">
                <div class="card-block card-dashboard">
                    <table class="table table-striped table-bordered dynamic-height">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID Customer Device</th>
                          <th>Customer ID</th>
                          <th>Device ID</th>
                          <th>Device Alias</th>
                          <th>PIN</th>
                          <th>Keyword</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>
                              id customer device 
                            </td>
                            <td>
                              customer id
                            </td>
                            <td>
                              device id
                            </td>
                            <td>
                             device alias
                            </td>
                            <td>
                             pin
                            </td>
                            <td>
                              keyword
                            </td>
                            <td>
                              <!-- tombol edit device-->
                              <button type="button" id="editDevice" class="btn mr-1 mb-1 btn-success btn-sm" data-toggle="modal" data-target="#editDeviceModal"><i class="ft-edit-2"></i> Edit</button>
                              <!-- tombol delete device -->
                              <button type="button" id="deleteDevice" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="ft-x"></i> Delete</button>
                              <!-- tombol detail device -->
                              <button type="button" id="detailDevice" data-toggle="modal" data-target="#detailDeviceModal" class="btn mr-1 mb-1 btn-info btn-sm"><i class="icon-info"></i> Detail</button>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                </div>


                <!-- modal edit device -->
                <div class="modal fade text-left" id="editDeviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title">Edit Device</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- form modal edit device-->
                      <form>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-8">
                              <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="device Name">
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
                <!-- akhir modal edit device -->


                <!-- modal add new device-->
                <div class="modal fade text-left" id="addDeviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title">Add device</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- form modal add device-->
                      <form>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-8">
                              <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" placeholder="device Name">
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
                <!-- akhir modal add device -->
              </div>
            </div>
          </div>
        </section>
        <!--Table device -->
      </div>
    </div>
  </div>