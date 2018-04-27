          <div class="main-panel">
            <div class="main-content">
              <div class="content-wrapper">
                <h3 class="text-center " style="margin-top: 20px;">Ruang Depan</h3>
                <div class="text-center " id="txt" style="font-size: 60px; margin-top: 70px;">
                </div>
                <br>
                <div class="tanggal text-center " style="margin-bottom: 50px;">
                  <script>
                    var today = new Date();
                    var d = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth();
                    var month = new Array();
                    month[0] = "Januari";
                    month[1] = "Februari";
                    month[2] = "Maret";
                    month[3] = "April";
                    month[4] = "Mei";
                    month[5] = "Juni";
                    month[6] = "Juli";
                    month[7] = "Agustus";
                    month[8] = "September";
                    month[9] = "Oktober";
                    month[10] = "November";
                    month[11] = "Desember";
                    var m = month[d.getMonth()];
                    var yyyy = today.getFullYear();
                    var hari = new Array(7);
                    hari[0] = "Minggu";
                    hari[1] = "Senin";
                    hari[2] = "Selasa";
                    hari[3] = "Rabu";
                    hari[4] = "Kamis";
                    hari[5] = "Jumat";
                    hari[6] = "Sabtu";
                    var n = hari[d.getDay()];

                    today = n + ', ' + dd + ' ' + m + ' ' + yyyy;
                    document.write(today);

                  </script>
                </div>
                <hr style="width: 50%; border-color: #E3E3E3;">
                <!-- Fabs (Floating Action Buttons) in cards start -->
                <section id="weather-examples">
                  <div class="row match-height nav">
                    <?php
                      foreach ($customer_device->result_array() as $u): 
                        $id=$u['id'];
                        $customer_id=$u['customer_id'];
                        $device_alias=$u['device_alias'];
                        $pin=$u['pin'];
                        $description=$u['description'];
                    ?>
                    <div class="col-lg-3 col-md-12 col-sm-12 hidden-lg">
                     <div class="card">
                      <div class="card-body">
                        <div class="px-3 py-3">
                          <div class="media">
                            <div class="media-body text-left">
                              <h3 class="mb-1 ">
                                <span class="badge badge-info"><?php echo $u['id'];?></span>
                              </h3>
                              <h3 class="mb-1 "><?php echo $device_alias;?></h3>
                              <p><?php echo $customer_id;?> <?php echo $customer_id?></p>
                            </div>
                            <div class="media-right">
                              <input type="checkbox" id=<?php echo $u['id'] ?> onchange='oncheckchange(this,<?php echo $u['pin'];?>)'  class="switchery"/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php endforeach;?>
                </div>
              </div>
            </section>
            <!-- // Fabs section end -->

            </div>
          </div>
        </div>
      </div>
      <!-- ////////////////////////////////////////////////////////////////////////////-->

      <!-- START Notification Sidebar-->
      <aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
        <div class="side-nav notification-sidebar-content">
          <div class="row">
            <div class="col-12 mt-1">
              <ul class="nav nav-tabs">
                <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#activity-tab" aria-expanded="true" class="nav-link active">Notifications</a></li>
                <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#chat-tab" aria-expanded="false" class="nav-link">Inbox</a></li>
              </ul>
              <div class="tab-content px-1 pt-1">
                <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                  <div id="activity" class="col-12 timeline-left">
                    <h6 class="mt-1 mb-3 text-bold-400">RECENT NOTIFICATIONS</h6>
                    <div id="timeline" class="timeline-left timeline-wrapper">
                      <ul class="timeline">
                        <li class="timeline-line"></li>
                        <li class="timeline-item">
                          <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" class="bg-red bg-lighten-1"><i class="ft-power"></i></span></div>
                          <div class="col s9 recent-activity-list-text"><a href="#" class="red-text medium-small">12.00</a>
                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small"><?php echo $username;?> mematikan lampu</p>
                          </div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" class="bg-green bg-lighten-1"><i class="ft-power"></i></span></div>
                          <div class="col s9 recent-activity-list-text"><a href="#" class="green-text medium-small">11.30</a>
                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small"><?php echo $username;?> menyalakan lampu</p>
                          </div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" class="bg-red bg-lighten-1"><i class="ft-power"></i></span></div>
                          <div class="col s9 recent-activity-list-text"><a href="#" class="red-text medium-small">12.00</a>
                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small"><?php echo $username;?> mematikan lampu</p>
                          </div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" class="bg-green bg-lighten-1"><i class="ft-power"></i></span></div>
                          <div class="col s9 recent-activity-list-text"><a href="#" class="green-text medium-small">11.30</a>
                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small"><?php echo $username;?> menyalakan lampu</p>
                          </div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" class="bg-red bg-lighten-1"><i class="ft-power"></i></span></div>
                          <div class="col s9 recent-activity-list-text"><a href="#" class="red-text medium-small">12.00</a>
                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small"><?php echo $username;?> mematikan lampu</p>
                          </div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" class="bg-green bg-lighten-1"><i class="ft-power"></i></span></div>
                          <div class="col s9 recent-activity-list-text"><a href="#" class="green-text medium-small">11.30</a>
                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small"><?php echo $username;?> menyalakan lampu</p>
                          </div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" class="bg-red bg-lighten-1"><i class="ft-power"></i></span></div>
                          <div class="col s9 recent-activity-list-text"><a href="#" class="red-text medium-small">12.00</a>
                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small"><?php echo $username;?> mematikan lampu</p>
                          </div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" class="bg-green bg-lighten-1"><i class="ft-power"></i></span></div>
                          <div class="col s9 recent-activity-list-text"><a href="#" class="green-text medium-small">11.30</a>
                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small"><?php echo $username;?> menyalakan lampu</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="chat-tab" aria-labelledby="base-tab2" class="tab-pane">
                  <div id="chatapp" class="col-12">
                    <h6 class="mt-1 mb-3 text-bold-400">RECENT INBOX</h6>
                    <div class="collection border-none">
                      <div class="media mb-1"><a><img alt="96x96" src="assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                        <div class="media-body">
                          <div class="clearfix">
                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Pengirim </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                          </div>
                          <p class="text-muted font-small-3">Subject   </p>
                        </div>
                      </div>
                      <div class="media mb-1"><a><img alt="96x96" src="assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                        <div class="media-body">
                          <div class="clearfix">
                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Pengirim </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                          </div>
                          <p class="text-muted font-small-3">Subject   </p>
                        </div>
                      </div>
                      <div class="media mb-1"><a><img alt="96x96" src="assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                        <div class="media-body">
                          <div class="clearfix">
                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Pengirim </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                          </div>
                          <p class="text-muted font-small-3">Subject   </p>
                        </div>
                      </div>
                      <div class="media mb-1"><a><img alt="96x96" src="assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                        <div class="media-body">
                          <div class="clearfix">
                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Pengirim </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                          </div>
                          <p class="text-muted font-small-3">Subject   </p>
                        </div>
                      </div>
                      <div class="media mb-1"><a><img alt="96x96" src="assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                        <div class="media-body">
                          <div class="clearfix">
                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Pengirim </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                          </div>
                          <p class="text-muted font-small-3">Subject   </p>
                        </div>
                      </div>
                      <div class="media mb-1"><a><img alt="96x96" src="assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                        <div class="media-body">
                          <div class="clearfix">
                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Pengirim </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                          </div>
                          <p class="text-muted font-small-3">Subject   </p>
                        </div>
                      </div>
                      <div class="media mb-1"><a><img alt="96x96" src="assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                        <div class="media-body">
                          <div class="clearfix">
                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Pengirim </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                          </div>
                          <p class="text-muted font-small-3">Subject   </p>
                        </div>
                      </div>
                      <div class="media mb-1"><a><img alt="96x96" src="assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                        <div class="media-body">
                          <div class="clearfix">
                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Pengirim </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                          </div>
                          <p class="text-muted font-small-3">Subject   </p>
                        </div>
                      </div>
                      <div class="media mb-1"><a><img alt="96x96" src="assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                        <div class="media-body">
                          <div class="clearfix">
                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Pengirim </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                          </div>
                          <p class="text-muted font-small-3">Subject   </p>
                        </div>
                      </div>
                      <div class="media mb-1"><a><img alt="96x96" src="assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                        <div class="media-body">
                          <div class="clearfix">
                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Pengirim </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                          </div>
                          <p class="text-muted font-small-3">Subject   </p>
                        </div>
                      </div>
                      <a class="btn btn-success pull-right" href="<?php echo base_url('inbox');?>">Kunjungi Inbox</a>
                    </div>
                  </div>
                </div>
                <div id="settings-tab" aria-labelledby="base-tab3" class="tab-pane">
                  <div id="settings" class="col-12">
                    <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                    <ul class="list-unstyled">
                      <li>
                        <div class="togglebutton">
                          <div class="switch"><span class="text-bold-500">Notifications <span class="badge badge-success">42</span></span>
                            <div class="float-right">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input cz-bg-image-display">
                                <label for="notifications1" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p>Use checkboxes when looking for yes or no answers.</p>
                      </li>
                      <li>
                        <div class="togglebutton">
                          <div class="switch"><span class="text-bold-500">Show recent activity</span>
                            <div class="float-right">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="recent-activity1" checked="checked" type="checkbox" class="custom-control-input cz-bg-image-display">
                                <label for="recent-activity1" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                      </li>
                      <li>
                        <div class="togglebutton">
                          <div class="switch"><span class="text-bold-500">Notifications</span>
                            <div class="float-right">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="notifications2" type="checkbox" class="custom-control-input cz-bg-image-display">
                                <label for="notifications2" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p>Use checkboxes when looking for yes or no answers.</p>
                      </li>
                      <li>
                        <div class="togglebutton">
                          <div class="switch"><span class="text-bold-500">Show recent activity</span>
                            <div class="float-right">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="recent-activity2" type="checkbox" class="custom-control-input cz-bg-image-display">
                                <label for="recent-activity2" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                      </li>
                      <li>
                        <div class="togglebutton">
                          <div class="switch"><span class="text-bold-500">Show your emails</span>
                            <div class="float-right">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="show-emails" type="checkbox" class="custom-control-input cz-bg-image-display">
                                <label for="show-emails" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p>Use checkboxes when looking for yes or no answers.</p>
                      </li>
                      <li>
                        <div class="togglebutton">
                          <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                            <div class="float-right">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="show-stats" type="checkbox" class="custom-control-input cz-bg-image-display">
                                <label for="show-stats" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript" src="http://rnd.lenna.id:3000/socket.io/socket.io.js"></script>

<script>
      var socket = io.connect("http://rnd.lenna.id:3000");
      function oncheckchange(elm,pin)
      {
          var x = $(elm);
            var id = x.attr("id");
            var arr = {"deviceid":id,"state": x.is(":checked"),pin:pin};
            
            //- socket.emit(id, x.is(":checked"));
            socket.emit("device_event",JSON.stringify(arr));
      }
</script>
        <!-- END Notification Sidebar-->