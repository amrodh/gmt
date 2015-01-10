<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Contact / New
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-12" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Contact Creation</h3>
            </div>
            <div class="panel-body">
              <div class="row">
              <form action="" method="post" enctype="multipart/form-data">
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>User</td>
                        <td>
                          <select name="user_id" required>
                            <?php foreach ($users as $user): ?>
                              <option value="<?= $user->id; ?> "> <?= $user->username; ?></option>
                            <?php endforeach ?>
                            option
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Department</td>
                        <td>
                          <input type="text" name="department" value="" placeholder="" required>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  </form>
                  
                  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                  <input type="submit" name="cancel" class="btn btn-primary" value="Cancel" formnovalidate>
                </div>
               
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