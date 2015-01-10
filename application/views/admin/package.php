<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> 
                                <?= $category->name; ?>
                                <?php 
                                  if($package->sub_category != -1){
                                    echo ' / '.$sub_category->name;
                                  }
                                 ?>
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
              <h3 class="panel-title"><?= $package->title; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
              <form action="" method="post" enctype="multipart/form-data">
                
                
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table package_information">
                    <tbody>
                      <tr>
                        <td>Days</td>
                        <td>
                          <span class="label label-info">
                            <?= $package->days; ?>
                          </span>
                        </td>
                      </tr>

                      <tr>
                        <td>Nights</td>
                         <td>
                          <span class="label label-info">
                            <?= $package->nights; ?>
                          </span>
                        </td>
                      </tr>

                      <tr>
                        <td>Single Price</td>
                         <td>
                          <span class="label label-info">
                            <?= $package->single; ?>
                          </span>
                        </td>
                      </tr>

                      <tr>
                        <td>Double Price</td>
                         <td>
                          <span class="label label-info">
                            <?= $package->double; ?>
                          </span>
                        </td>
                      </tr>

                      <tr>
                        <td>Includes</td>
                         <td><?= $package->includes; ?></td>
                      </tr>

                      <tr>
                        <td>Excludes</td>
                        <td><?= $package->excludes; ?></td>
                      </tr>

                       <tr>
                        <td>Highlights</td>
                        <td><?= $package->highlights; ?></td>
                      </tr>

                      <tr>
                        <td>Optional</td>
                        <td><?= $package->optional; ?></td>
                      </tr>

                      <tr>
                        <td>Terms</td>
                        <td><?= $package->terms; ?></td>
                      </tr>

                      
                      <tr>
                        <td>Itinerary</td>
                        <td><?= $package->itinerary; ?></td>
                      </tr>
                      <tr>
                        <td>Images</td>
                        <td>
                          <?php if (is_array($package_images)): ?>
                            <ul class="bxslider" style="height: 455px!important;width:200px">
                                  <?php foreach ($package_images as $image): ?>
                                    <li style="width:50%;">
                                      <img class="slider_imgs" src="<?php echo base_url(); ?>application/static/upload/package/<?= $image->image; ?>">
                                    </li>
                                  <?php endforeach ?>
                            </ul>
                        <?php endif ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                  <a href="<?= base_url(); ?>admin/packageimages/<?= $package->id; ?>">
                        <button type="button" class="btn btn-primary btn-lg active">Add Images</button>
                  </a>
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

<style>
  .bx-wrapper{
    width:50%;
    margin:0px;
  }
</style>