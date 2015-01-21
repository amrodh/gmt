<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
              

                <div class="row">
                    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-12" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Booking Status </h3>
            </div>

            <div class="panel-body">
            <form action="" method="post">
            	<table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Status</td>
                        <td>
                          <select name="status">
                          	<option value="Awaiting Cost">Awaiting Cost</option>
                          	<option value="Awaiting Payment">Awaiting Payment</option>
                          	<option value="Confirmed">Confirmed</option>
                          	<option value="Cancelled">Cancelled</option>
                          </select>
                        </td>
                      </tr>
                    </tbody>
                 </table>
            </div>

                 <div class="panel-footer">
                        <span>
                              <input type="submit" name="confirm"   class="button btn btn-sm " value="Confirm">
                              <input type="submit" name="cancel" class="button btn btn-sm " value="Cancel">
                            </form>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
                    </div>
                </div>
       

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

<?php include('footer.php') ?>