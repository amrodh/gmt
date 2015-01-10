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
              <h3 class="panel-title">Booking Creation</h3>
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
                          <select name="package_id">
                            <?php foreach ($packages as $package ): ?>
                             <option value="<?= $package->id; ?>">
                               <?= $package->title; ?>
                             </option>
                            <?php endforeach ?>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>User</td>
                        <td>
                          <select name="user_id">
                            <?php foreach ($users as $user ): ?>
                             <option value="<?= $user->id; ?>">
                               <?= $user->username; ?>
                             </option>
                            <?php endforeach ?>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Adults</td>
                        <td>
                          <input type="number" name="adult" value="" placeholder="" required>
                        </td>
                      </tr>
                      <tr>
                        <td>Children</td>
                        <td>
                          <input type="number" name="children" value="" placeholder="" required>
                        </td>
                      </tr>
                      <tr>
                        <td>Single Pricing</td>
                        <td>
                          <input type="number" name="single" value="" placeholder="" required>
                        </td>
                      </tr>
                      <tr>
                        <td>Double Pricing</td>
                        <td>
                          <input type="number" name="double" value="" placeholder="" required>
                        </td>
                      </tr>
                      <tr>
                        <td>Triple Pricing</td>
                        <td>
                          <input type="number" name="triple" value="" placeholder="" required>
                        </td>
                      </tr> 
                      <tr>
                        <td>Date</td>
                        <td>
                          <input type="date" name="date" value="" placeholder="" required>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
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