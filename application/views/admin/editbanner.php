<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Social Link / New
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
              <h3 class="panel-title">Banner Creation</h3>
            </div>
            <div class="panel-body">
              <div class="row">
              <form action="" method="post" enctype="multipart/form-data">
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Page Name:</td>
                        <td><input type="text" name="page" required pattern=".{3,}" value="<?= $banner->page; ?>">
                        </td>
                      </tr>
                      <tr>
                        <td>Logo</td>
                        <td>
                          <img style="width:50%;height:10%;margin-left:2%;" class="row" src="<?php echo base_url(); ?>application/static/upload/banner/<?= $banner->image; ?>">
                        </td>
                        
                      </tr>
                      <tr>
                        <td>
                          <input type="file" name="image">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  </form>
                  
                  <input type="submit" name="submit" class="btn btn-primary" value="Update">
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