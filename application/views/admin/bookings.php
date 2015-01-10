<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Bookings
                            </li>
                        </ol>
                    </div>
                </div>
        <div class="usersLandingContent">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel-body">
                            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Bookings" />
                         </div>
                         <?php if (is_array($bookings)): ?>
                             <table class="table" id="dev-table">
                            <thead>
                            <tr>
                                <th>Package Title</th>
                                <th>Username</th>
                                <th>Date</th>
                                <th>Creation Date</th>
                            </tr>
                            </thead>
                            <?php foreach($bookings as $booking): ?>
                            <tr>
                                <td>
                                    <a href="<?= base_url(); ?>admin/package/<?= $booking->package->id; ?>">
                                     <?php echo $booking->package->title; ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= base_url(); ?>admin/users/<?= $booking->user->username; ?>">
                                     <?= $booking->user->username; ?>
                                    </a>
                                </td>
                                <td><?= $booking->date; ?></td>
                                <td><?php echo $booking->creation_date; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>admin/booking/<?= $booking->id; ?>">
                                    Details
                                    </a>
                                </td>
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
                        <div class="panel panel-primary">
                             <a href="<?php echo base_url(); ?>admin/booking/new">
                                <div class="panel-footer">
                                    <span class="pull-left">Add New</span>
                                    <span class="pull-right"><i class="fa fa-book"></i></span>
                                    <div class="clearfix"></div>
                                </div>
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