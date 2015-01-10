<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <?= $category->name.' / '.$sub_category->name;?>
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
              <h3 class="panel-title"><?= $package->title; ?> / Images</h3>
            </div>
            <div class="panel-body">
              <div class="row">
              <?php if (is_array($package_images)): ?>
                <ul class="bxslider" style="height: 455px!important;">
                    <?php foreach ($package_images as $image): ?>
                      <li>
                        <img class="slider_imgs" src="<?php echo base_url(); ?>application/static/upload/package/<?= $image->image; ?>">
                      </li>
                    <?php endforeach ?>
              </ul>
              <?php endif ?>

              <div class="col-lg-12">
         <table class="table" id="dev-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            </thead>
                            <?php if (is_array($package_images)): ?>
                                <?php foreach ($package_images as $slide): ?>
                                <tr>
                                    <td><?= $slide->image  ?></td>
                                    <td><a href="deletecontent/<?= $slide->id;?>">
                                        <span title="Delete" class="glyphicon glyphicon-remove"></span>
                                    </a></td>
                                </tr>
                                <?php endforeach ?>
                            <?php else: ?>
                                <div class="alert alert-warning">
                                    No Images Found..
                                </div>
                            <?php endif ?>
                        </table>
        
    </div>


              
                  
                  
                
               
              </div>
            </div>
            
            
                  <form action="" method="post" enctype="multipart/form-data">
                    <table>
                      <tr>
                        <td>
                          <input type="file" name="userfile[]" multiple>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="submit" name="submit" value="Upload Images"> 
                        </td>
                      </tr>
                    </table>
                    
                    
                  </form>    
              

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