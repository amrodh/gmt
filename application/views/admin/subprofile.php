<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
            <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $category->name; ?></h3>
            </div>
                  <div class="panel-body">
                  <div class="panel panel-default">
                    <div class="panel-heading"><?= $sub_category->name; ?> Packages</div>
                    <div class="panel-body sub">
                      <table width="100%">
                        <thead style="border-bottom: 1px solid black">
                          <th>Title</th>
                          <th>Days</th>
                          <th>Nights</th>
                        </thead>
                      <?php if (is_array($packages)): ?>
                         <?php foreach ($packages as $package): ?>
                          <tr>
                            <td>
                              <a href="<?= base_url(); ?>admin/package/<?= $package->id ?>">
                                <span class="label label-default"><?= $package->title ?></span>
                              </a>
                            </td>
                            <td>
                              <span class="label label-info"><?= $package->days; ?></span>
                            </td>
                            <td>
                              <span class="label label-info"><?= $package->nights; ?></span>
                            </td>
                          </tr>
                     <?php endforeach ?>
                   <?php else: ?>
                      <tr>
                        <td colspan="3" rowspan="" headers="">
                          <div class="alert alert-warning" role="alert">
                            None Available
                          </div>
                        </td>
                      </tr>
                      
                      <?php endif ?>
                    
                      </table>
                    </div>
                    <div class="panel-footer">
                      <a href="<?= base_url(); ?>admin/newpackage/<?= $sub_category->id; ?>">
                        <button type="button" class="btn btn-primary btn-lg active">Add New Package</button>
                      </a>
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