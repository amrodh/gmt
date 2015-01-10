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
                                <?php if ($category->id == 3): ?>
                                  <?= $category->name ?>
                                <?php else: ?>
                                  <?= $category->name.' / '.$sub_category->name; ?>
                                <?php endif ?>
                                
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
              <h3 class="panel-title">Package Creation</h3>
            </div>
            <div class="panel-body">
              <div class="row">
              <form action="" method="post" enctype="multipart/form-data">
                
                
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Title</td>
                        <td>
                          <input type="text" name="title" required pattern=".{4,}" title="4 characters minimum" value="<?php if(isset($params)) echo $params['title']; ?>">
                        </td>
                      </tr>

                      <tr>
                        <td>Days</td>
                        <td><input type="number" name="days" value="<?php if(isset($params)) echo $params['days']; ?>" placeholder=""></td>
                      </tr>

                      <tr>
                        <td>Nights</td>
                        <td><input type="number" name="nights" value="<?php if(isset($params)) echo $params['nights']; ?>" placeholder=""></td>
                      </tr>

                      <tr>
                        <td>Single Price</td>
                        <td><input type="number" name="single" value="<?php if(isset($params)) echo $params['single']; ?>" placeholder=""></td>
                      </tr>

                      <tr>
                        <td>Double Price</td>
                        <td><input type="number" name="double" value="<?php if(isset($params)) echo $params['double']; ?>" placeholder=""></td>
                      </tr>

                      <tr>
                        <td>Includes</td>
                        <td>
                            <textarea name="includes" id="editor1" cols="30" rows="10"><?php if(isset($params)) echo $params['includes']; ?></textarea>
                         </td>
                      </tr>

                       <tr>
                        <td>Excludes</td>
                        <td>
                            <textarea name="excludes" id="editor2" cols="30" rows="10"><?php if(isset($params)) echo $params['excludes']; ?></textarea>
                         </td>
                      </tr>

                       <tr>
                        <td>Highlights</td>
                        <td>
                            <textarea name="highlights" id="editor3" cols="30" rows="10"><?php if(isset($params)) echo $params['highlights']; ?></textarea>
                         </td>
                      </tr>

                      <tr>
                        <td>Optional</td>
                        <td>
                            <textarea name="optional" id="editor4" cols="30" rows="10"><?php if(isset($params)) echo $params['optional']; ?></textarea>
                         </td>
                      </tr>

                      <tr>
                        <td>Terms</td>
                        <td>
                            <textarea name="terms" id="editor5" cols="30" rows="10"><?php if(isset($params)) echo $params['terms']; ?></textarea>
                         </td>
                      </tr>

                      
                      <tr>
                        <td>Itinerary</td>
                        <td>
                            <textarea name="itinerary" id="editor6" cols="30" rows="10"><?php if(isset($params)) echo $params['itinerary']; ?></textarea>
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