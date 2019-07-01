<?php
   session_start();
   include 'config/koneksi.php';
	$sql = "SELECT * FROM aas.queue_fids";
  $hasil = mysqli_query($con, $sql) or die(mysqli_error($con));
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- DataTables CSS -->
    <link href="assets/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="assets/css/dataTables.responsive.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv=”refresh” content=”60″>

   
    <title>Day 1</title>
  </head>
  <body>
    <div class="table-responsive">
      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
        <thead>
          <tr>
            <th class="airline">AIRLINES</th>
            <th>FLIGHT CODE</th>
            <th>ORIGIN</th>
            <th>TIME</th>
            <th width="15%">STATUS</th>
          </tr>
        </thead>
        <tbody>
          <?php while($data=mysqli_fetch_array($hasil)){ ?>
        	
          <tr>
            <td ><?php echo $data['ALCODE']; ?></td>
            <td><?php echo $data['FLNUM']; ?></td>
            <td><?php echo $data['ORIGIN']; ?></td>
            <td><?php echo $data['ETAD']; ?></td>
            <td><?php echo $data['FREMARK']; ?></td>
          </tr>
          <?php } ?>
          
        </tbody>
      </table>	  
	</div>

    <!-- DataTables JavaScript -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/dataTables.responsive.js"></script>
   
    <script>
      $(document).ready(function() {

    $('#dataTables').DataTable({
                dom: "<'row'<'col-sm-6'<'buttons'B>><'col-sm-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                "columnDefs": [ {
                    "targets": 0,
                    "orderable": false
                } ],
                "aaSorting": []
            });

    });
    </script>
    

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script type="assets/js/jquery-3.3.1"></script>
    <script type="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script type="assets/js/bootstrap.min.js"></script>
    <script type="assets/js/popper.min.js"></script>
    
  </body>
</html>