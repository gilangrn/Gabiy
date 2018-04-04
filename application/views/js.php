<!-- BEGIN VENDOR JS-->
<script src="assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/prism.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="assets/vendors/js/sweetalert2.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/chartist.min.js" type="text/javascript"></script>
<script src="assets/vendors/js/datatable/datatables.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="assets/js/app-sidebar.js" type="text/javascript"></script>
<script src="assets/js/notification-sidebar.js" type="text/javascript"></script>
<script src="assets/js/customizer.js" type="text/javascript"></script>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="assets/js/sweet-alerts.js" type="text/javascript"></script>
<script src="assets/js/data-tables/datatable-basic.js" type="text/javascript"></script>
<script src="assets/js/dashboard1.js" type="text/javascript"></script>
<script src="assets/js/components-modal.min.js" type="text/javascript"></script>
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
</body>

<!-- Mirrored from pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Mar 2018 10:55:36 GMT -->

</html>

