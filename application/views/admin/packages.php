<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Packages
                            </li>
                        </ol>
                    </div>
                </div>
        <div class="usersLandingContent">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel-body">
                            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Packages" />
                         </div>
                         <?php if (is_array($packages)): ?>
                             <table class="table" id="dev-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Nights</th>
                                <th>Days</th>
                                <th>Creation Date</th>
                            </tr>
                            </thead>
                            <?php foreach($packages as $package): ?>
                            <tr>
                                <td>
                                    <a href="<?= base_url(); ?>admin/package/<?= $package->id; ?>">
                                     <?php echo $package->title; ?>
                                    </a>
                                </td>
                                <td><?= $package->days; ?></td>
                                <td><?= $package->nights; ?></td>
                                <td><?php echo $package->creation_date; ?></td>
                            </tr>          
                            <?php endforeach ?>                       
                        </table>
                         <?php else: ?>
                            <div class="alert alert-warning" role="alert">
                                None available
                            </div>
                         <?php endif ?>

                    </div>
                    <div class="col-lg-2">
                        <!-- <div class="panel panel-primary">
                             <a href="<?php echo base_url(); ?>admin/package/new">
                                <div class="panel-footer">
                                    <span class="pull-left">Add New</span>
                                    <span class="pull-right"><i class="fa fa-user"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
         </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

<?php include('footer.php') ?>