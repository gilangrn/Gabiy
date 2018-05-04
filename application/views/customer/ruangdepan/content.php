<script>
  var base_url =' <?php echo base_url(); ?>';

</script>

          <div class="main-panel">
            <div class="main-content">
              <div class="content-wrapper">
                <h3 class="text-center" style="margin-top: 20px;">Ruang Depan</h3>
                <div class="text-center" id="txt" style="font-size: 60px; margin-top: 70px;">
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
                      $kategori=$u['kategori'];
                      $pemakaian=$u['pemakaian']
                      ?>
                      <div class="col-lg-3 col-md-12 col-sm-12 hidden-lg">
                       <div class="card bg">
                        <div class="card-body">
                          <div class="px-3 py-3">
                            <div class="media">
                              <div class="media-body text-left">
                                <h3 class="mb-1 ">
                                  <?php if($kategori == 'Lampu'): ?>
                                    <i class="icon-bulb"></i>
                                  <?php elseif($kategori == 'AC'): ?>
                                    <i class="ft-wind"></i>
                                  <?php endif ?>

                                  <span class="badge badge-info"><?php echo $u['id'];?></span>
                                </h3>
                                <h4><?php echo $device_alias;?></h4>
                                <p><i><?php echo $description;?></i></p>
                                <p>Total Pemakaian</p>
                                <h3 class="badge badge-danger"><?= $pemakaian; ?></h3>
                              </div>
                              <div class="media-right">
                                <label class="switch">
                                  <input
                                  type="checkbox"
                                  id="<?php echo $u['id'] ?>"
                                  onchange='oncheckchange(this,<?php echo $u['pin'];?>,"<?php echo $u['id'];?>","<?php echo $u['customer_id'];?>")'
                                    <?php 
                                      if($u['state']=="true"){
                                        echo 'checked';
                                      }
                                      else

                                    ?>
                                  >
                                  <span class="slider round"></span>
                                </label>
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



    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript" src="http://rnd.lenna.id:3000/socket.io/socket.io.js"></script>

    <script>
      
      var socket = io.connect("http://rnd.lenna.id:3000");

            socket.on("device_event", function(data){
              // var base_url = window.location.origin;
              // console.log(base_url);
              arr = JSON.parse(data);
              $.ajax({
                url: base_url+"/customer/getstate/"+arr.deviceid,
               success: function(result){

                  if(result=='true'){
                    // $('#CD0001').prop('checked', true);
                    $("#"+arr.deviceid).prop('checked',true);   
                  }
                  else if(result=='false'){
                    // $("#"+arr.deviceid).removeAttr("checked");
                    $("#"+arr.deviceid).prop('checked',false);  
                  }


              }});

            });


      function oncheckchange(elm,pin,a,b)
      {

        var x = $(elm);

            var dataString = { 
              customer_id : b,
              device_id :a,
              state : x.is(":checked")
            };

            // var base_url = window.location.origin;


          $.ajax({
                url: base_url+"/customer/setstate/",
                type : "POST",
                data :dataString,

               success: function(data){
  
          }});


        var id = x.attr("id");
        var arr = {"customerid":b,"deviceid":id,"state": x.is(":checked"),pin:pin};

            //- socket.emit(id, x.is(":checked"));
            socket.emit("device_event",JSON.stringify(arr));



        // if (document.getElementById('CUS001').checked)
        // {
        //   swStart('beg2','+');
        //   }
        // else {
        //   swStop('beg2');
        // }
        }
      var swCycleTime=50;
      // Functional Code
      var sw,swObj,swct,swnow,swcycle;
      var swObjAry=new Array();
      function swStart(id,ud){
      swObj=document.getElementById(id);
      swct=swObj.innerHTML.split(':');
      swnow=new Date();
      swObj.now=swnow.getTime();
      swObj.reset=swObj.innerHTML;
      swObj.ud=ud;
      if (!isNaN(swObj.innerHTML)){
      swObj.time=parseInt(swObj.innerHTML);
      }
      else if (swct.length==3){
      swObj.time=(swct[0]*1000*60)+(swct[1]*1000)+parseInt(swct[2]);
      }
      else if (swct.length==2){
      swObj.time=(swct[0]*1000)+parseInt(swct[1]);
      }
      else if (swct.length==1){
      swObj.time=parseInt(swct[1]);
      }
      if (!swObj.time){
      swObj.time=1;
      }
      if (!swObj.c){
      swObj.c=ud;
      swObjAry[swObjAry.length]=swObj;
      }
      }
      function swStop(id){
      swObj=document.getElementById(id);
      if (!swObj.time){ return;}
      swObj.time=null;
      sw=new Date().getTime();
      swObj.cycle+=(sw-swcycle);
      if (swObj.ud=='-'){
      swObj.cycle-=(sw-swcycle);
      if (swObj.cycle<0){ swObj.cycle=0; }
      }
      swObj.innerHTML=(parseInt(swObj.cycle/1000/60)%60)+':'+((parseInt((swObj.cycle)/1000)%60));
      }
      function swCycle(){
      swcycle=new Date().getTime();
      for (sw0=0;sw0<swObjAry.length;sw0++){
      if (swObjAry[sw0].time){
      swObjAry[sw0].cycle=swObjAry[sw0].time+(swcycle-swObjAry[sw0].now);
      if (swObjAry[sw0].ud=='-'){
      swObjAry[sw0].cycle=swObjAry[sw0].time-(swcycle-swObjAry[sw0].now);
      if (swObjAry[sw0].cycle<0){ swObjAry[sw0].cycle=0;swObjAry[sw0].time=0; }
      }
      swObjAry[sw0].innerHTML=(parseInt(swObjAry[sw0].cycle/1000/60)%60)+':'+((parseInt((swObjAry[sw0].cycle)/1000)%60));
      }
      }
      }
      function swReset(id,dt){
      swObj=document.getElementById(id);
      swObj.innerHTML=swObj.reset;
      swObj.time=null;
      }
      setInterval('swCycle()',swCycleTime);
    </script>

    <script>
      
    </script>
        <!-- END Notification Sidebar-->