<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-12" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Booking #<?= $booking->id; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
              <form action="" method="post" enctype="multipart/form-data">
                
                
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Package</td>
                        <td>
                          <a href="<?= base_url(); ?>admin/package/<?= $booking->package->id ?>">
                            <?= $booking->package->title; ?>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>User</td>
                        <td>
                          <a href="<?= base_url(); ?>admin/user/<?= $booking->user->username ?>">
                            <?= $booking->user->username; ?>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>Adults</td>
                        <td>
                          <?= $booking->adult; ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Children</td>
                        <td>
                          <?= $booking->children; ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Single Pricing</td>
                        <td>
                          <?= $booking->single; ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Double Pricing</td>
                        <td>
                          <?= $booking->double; ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Triple Pricing</td>
                        <td>
                          <?= $booking->triple; ?>
                        </td>
                      </tr> 
                      <tr>
                        <td>Date</td>
                        <td>
                          <?= $booking->date; ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                  
              </form>
                  
                  
                
               
              </div>
            </div>
            <?php if (isset($error)): ?>
              <div id="successAlert" class="alert alert-danger " role="alert">
                  <?= $error; ?> 
              </div>
            <?php endif ?>
           
            
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
<script>
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );
    CKEDITOR.replace( 'editor3' );
    CKEDITOR.replace( 'editor4' );
    CKEDITOR.replace( 'editor5' );
    CKEDITOR.replace( 'editor6' );
</script>