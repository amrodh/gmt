<?php include('header.php'); ?>
        
        <div style="margin-top:2%;">
          <div class="col-lg-3">
            <?php include('left.php'); ?>
          </div>
          <div class="col-lg-7">
            <label style="text-transform: uppercase; font-size: 1.5em; background-color: #428bca; color: white; padding: 4px 5px 0px 10px; width: 100%;">
              <?=  $category->name; ?> / <?= $package->title; ?>
            </label>
            
            <?php if (is_array($package->images)): ?>
              <div style="width:100%">
                <ul class="bxslider" style="">
                    <?php foreach ($package->images as $image): ?>
                      <li style="width:40%;">
                        <img class="slider_imgs" src="<?php echo base_url(); ?>application/static/upload/package/<?= $image->image; ?>">
                      </li>
                    <?php endforeach ?>
                </ul>
              </div>
              
            <?php endif ?>
            
            <div class="row" style="margin-left: 0.2%;margin-bottom:3%;">
              <ul class="nav nav-tabs">
                  <li class="nav active"><a href="#includes" data-toggle="tab">Includes & Excludes</a></li>
                  <li class="nav"><a href="#rates" data-toggle="tab">Pay Rates</a></li>
                  <li class="nav"><a href="#high" data-toggle="tab">Highlights</a></li>
                  <li class="nav"><a href="#optional" data-toggle="tab">Optional</a></li>
                  <li class="nav"><a href="#itin" data-toggle="tab">Terms & Itinerary</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                  <div class="tab-pane fade in active" id="includes">
                      <div class="content">
                        <label for="">Includes</label>
                        <?= $package->includes; ?>
                      </div>

                      <div class="content">
                        <label for="">Excludes</label>
                        <?= $package->excludes; ?>
                      </div>
                  </div>

                  <div class="tab-pane fade" id="rates">
                    <div class="content">
                      <a href="javascript:void(0);" style="color:black;cursor:default;text-decoration:none">Single <span class="badge"><?= $package->single ?> EGP</span></a>
                    </div>
                    <div class="content">
                      <a href="javascript:void(0);" style="color:black;cursor:default;text-decoration:none">Double <span class="badge"><?= $package->double ?> EGP</span></a>
                    </div>
                  </div>


                  <div class="tab-pane fade" id="high">
                    <div class="content">
                      <?= $package->highlights; ?>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="optional">
                    <div class="content">
                      <?= $package->optional; ?>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="itin">
                    <div class="content">
                      <label for="">Terms</label>
                      <?= $package->terms; ?>
                    </div>
                    <div class="content">
                      <label for="">Itinerary</label>
                      <?= $package->itinerary; ?>
                    </div>
                  </div>
              </div>


              <div class="row">
                <button style="margin-left:40%;" type="button" class="btn btn-danger">BOOK PACKAGE</button>
              </div>
            </div>
            
           
          </div>
        </div>
 


<style type="text/css">
  .bx-viewport{
    width:50%;
    padding: 0px;
    margin-left: 1% !important;
    clear: both;
    margin-bottom: 5%;
  }

  .bx-controls{
    display: none;
  }

  .tab-pane{
    padding: 2%;
  }

  .content{
    background-color: #EEEEEE;
    margin-bottom: 2%;
    padding: 2%;
    min-height:200px;
  }
</style>
<?php 
  include('footer.php');
 ?>

 


