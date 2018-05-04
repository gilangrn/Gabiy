

<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url('assets/vendors/js/core/jquery-3.2.1.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/core/popper.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/core/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/perfect-scrollbar.jquery.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/prism.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/jquery.matchHeight-min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/screenfull.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/pace/pace.min.js')?>" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="<?php echo base_url('assets/vendors/js/sweetalert2.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/chartist.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/datatable/datatables.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/pickadate/picker.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/pickadate/picker.date.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/pickadate/picker.time.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/pickadate/legacy.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/dragula.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/switchery.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vendors/js/tagging.min.js')?>" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="<?php echo base_url('assets/js/app-sidebar.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/notification-sidebar.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/customizer.js')?>" type="text/javascript"></script>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="<?php echo base_url('assets/js/taskboard.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/sweet-alerts.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/data-tables/datatable-basic.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/dashboard2.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/dashboard1.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/components-modal.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/pick-a-datetime.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/switch.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/tagging.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/tooltip.js')?>" type="text/javascript"></script>

<!-- END PAGE LEVEL JS-->

<!-- waktu uptime -->
<script>
  function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
  }

  function checkTime(i) {
    if (i < 10) {
      i = "0" + i
    }; // add zero in front of numbers < 10
    return i;
  }

</script>
<script>
  $(document).ready(function () {
  // Delete Customer
  $('.deleteusername').on('click', function () {
    var username = $(this).attr('username');
    $.ajax({
      url: "<?php echo base_url('admin/hapus_data_user')?>",
      type: "POST",
      data: {username:username},
      success:function(data){
        swal(
          title: 'Data berhasil dihapus',
          type: 'success',
          showLoaderOnConfirm: true},
          function(){
            location.reload();
          });
      },error:function(){
        swal('Data gagal dihapus', 'error');
      })
  });

  // Delete Device
  $('#deleteDevice').on('click', function () {
    swal({
      title: 'Delete Device?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#0CC27E',
      cancelButtonColor: '#FF586B',
      confirmButtonText: 'Delete',
      cancelButtonText: 'Cancel',
      confirmButtonClass: 'btn btn-success btn-raised mr-5',
      cancelButtonClass: 'btn btn-danger btn-raised',
      buttonsStyling: false
    }).then(function () {
      swal(
        'Deleted!',
        'Success delete device'
        )
    })
  });
});
</script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script>
<!-- Mirrored from pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Mar 2018 10:55:36 GMT -->

</html>