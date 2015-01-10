<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
            <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $category->name; ?></h3>
            </div>
            <?php if ($categoryID != 3): ?>
                  <div class="panel-body">
                  <div class="panel panel-default">
                    <div class="panel-heading">Destinations</div>
                    <div class="panel-body sub">
                      <table width="100%">
                        <thead style="border-bottom: 1px solid black">
                          <th>Name</th>
                        </thead>
                     <?php foreach ($sub_destinations as $sub): ?>
                          <tr>
                            <td>
                              <a href="<?= base_url(); ?>admin/sub/<?= $sub->id ?>">
                                <span class="label label-default"><?= $sub->name ?></span>
                              </a>
                            </td>
                            
                          </tr>
                     <?php endforeach ?>
                      </table>
                    </div>
                    <div class="panel-footer">
                      <form action="" method="post">
                        <input type="text" name="name" value="" placeholder="New Sub-Category" required>
                        <input type="hidden" name="type" value="1">
                        <input type="hidden" name="category_id" value="<?php echo $category->id; ?>">
                        <input type="submit" name="submit" >
                      </form>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Interests</h3>
                    </div>
                    <div class="panel-body sub">
                      <table width="100%">
                        <thead style="border-bottom: 1px solid black">
                          <th>Name</th>
                        </thead>
                     <?php foreach ($sub_interests as $sub): ?>
                          <tr>
                            <td>
                              <a href="<?= base_url(); ?>admin/sub/<?= $sub->id ?>">
                                <span class="label label-default"><?= $sub->name ?></span>
                              </a>
                            </td>
                          </tr>
                     <?php endforeach ?>
                      </table>
                    </div>
                    <div class="panel-footer">
                      <form action="" method="post">
                        <input type="text" name="name" value="" placeholder="New Sub-Category" required>
                        <input type="hidden" name="type" value="2">
                        <input type="hidden" name="category_id" value="<?php echo $category->id; ?>">
                        <input type="submit" name="submit" >
                      </form>
                    </div>
                  </div>

                </div>
            <?php else: ?>
              <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Packages</h3>
                    </div>
                    <div class="panel-body sub">
                      <table width="100%">
                        <thead style="border-bottom: 1px solid black">
                          <th>Title</th>
                          <th>Days</th>
                          <th>Nights</th>
                        </thead>
                        <?php if (is_array($packages_special)): ?>
                           <?php foreach ($packages_special as $package): ?>
                          <tr>
                            <td>
                              <a href="<?= base_url(); ?>admin/package/<?= $package->id; ?>">
                                <span class="label label-default"><?= $package->title ?></span>
                              </a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      <?php else: ?>
                        <div id="successAlert" class="alert alert-warning " role="alert">
                          None Available
                      </div>
                        <?php endif ?>
                    
                      </table>
                    </div>
                     <div class="panel-footer">
                      <a href="<?= base_url(); ?>admin/newpackage/-1">
                        <button type="button" class="btn btn-primary btn-lg active">Add New Package</button>
                      </a>
                    </div>
                  </div>
            <?php endif ?>
                         <!-- <div class="panel-footer" style="height:51px;">
                   
                    <span class="pull-right">
                        <form action="" method="post">
                           <input style="color:white" type="submit" name="edit"   class="button btn btn-sm " value="Edit"> 
                           <input style="color:white" type="submit" name="delete" class="button btn btn-sm " value="Delete">
                        </form>
                    </span>
              </div> -->
            
          </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

<?php include('footer.php') ?>