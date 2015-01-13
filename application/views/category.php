<?php include('header.php'); ?>
        
        <div style="margin-top:2%;">
          <div class="col-lg-3">
            <?php include('left.php') ?>;
          </div>
          <div class="col-lg-7">
            <label style="text-transform: uppercase; font-size: 1.5em; background-color: #428bca; color: white; padding: 4px 5px 0px 10px; width: 100%;">
              <?=  $category->name; ?>
            </label>

            <div style="packages">
              <table id="myTable" class="table table-striped" >  
              <thead>  
                <tr>  
                  <th></th>  
                  <th></th>
                </tr>  
              </thead>  
              <tbody>  
              <?php foreach ($packages as $package): ?>
                <tr>  
                  <td>
                    <div style="width: 250px;position: relative;float: left;"> 
                        <?php if (is_array($package->images)): ?>
                           <img src="<?= base_url(); ?>application/static/upload/package/<?= $package->images['0']->image; ?>" style="width: 250px; height: 150px; ">
                        <?php else: ?>
                           <img src="<?= base_url(); ?>application/static/images/no_image.jpg" style="width: 250px; height: 150px; ">
                         <?php endif ?> 
                        <div style="width: 250px; height: 50px; background: rgb(0, 0, 0); background: rgba(0, 0, 0, .6); position: absolute; bottom:0; text-align: center; padding-top: 15px;">
                          <label style="font-size: 1.2em; text-align: center; color: white;">
                            <a href="<?= base_url(); ?>package/<?= $package->title; ?>" style="color:white;text-decoration: none;">
                              <?= $package->title; ?>
                            </a>
                          </label>
                        </div>
                    </div>
                  </td>
                  <td class="package_td">
                    <label for="" style="line-height: 140px;">
                      <?= $package->days; ?> Days & <?= $package->nights; ?> Nights
                    </label>
                  </td>
                </tr>
              <?php endforeach ?>
              </tbody>
              </table>

             


            </div>
          </div>
        </div>
 

<script>
$(document).ready(function(){
    $('#myTable').dataTable({
      "iDisplayLength": 3,
      "bFilter": false,
       "bInfo": false,
       "bPaginate": true,
    });
});
</script>

<?php 
  include('footer.php');
 ?>

 


