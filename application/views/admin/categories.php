<?php include('header.php'); ?>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Categories
                            </li>
                        </ol>
                    </div>
                </div>
        <div class="usersLandingContent">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel-body">
                            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Categories" />
                         </div>
                        <table class="table" id="dev-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Creation Date</th>
                            </tr>
                            </thead>
                            <?php foreach($categories as $category): ?>
                                <td>
                                    <a href="<?= base_url(); ?>admin/categories/<?= $category->id; ?>">
                                     <?php echo $category->name; ?>
                                    </a>
                                </td>
                                <td><?php echo $category->creation_date; ?></td>
                            </tr>          
                            <?php endforeach ?>                       
                        </table>
                    </div>
                    <div class="col-lg-2">
                        <div class="panel panel-primary">
                             <a href="<?php echo base_url(); ?>admin/categories/new">
                                <div class="panel-footer">
                                    <span class="pull-left">Add New</span>
                                    <span class="pull-right"><i class="fa fa-user"></i></span>
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