<?php include('header.php'); ?>
    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Banners
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="usersLandingContent">
            
       
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel-body">
                            
                         </div>
                        <table class="table" id="dev-table">
                            <thead>
                            <tr width="100%">
                                <th width="25%">Image</th>
                                <th width="25%">Page Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <?php if (is_array($banners)): ?>
                                <?php foreach($banners as $banner): ?>
                                <tr>
                                    <td>
                                    <img style="width:100%;height:60%;margin-left:2%;" class="row" src="<?php echo base_url(); ?>application/static/upload/banner/<?= $banner->image; ?>"></td>
                                    <td style="line-height: 5;"><?php echo $banner->page; ?></td>
                                    
                                    <td style="line-height: 5;"> 
                                         <a href="<?= base_url(); ?>admin/deletebanner/<?= $banner->id; ?>">
                                        <i class="fa fa-fw fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>          
                            <?php endforeach ?>   
                            <?php else: ?>
                                <tr>
                                    <td colspan="4">
                                        <div class="alert alert-warning" role="alert">
                                            None Available
                                        </div>
                                    </td>
                                </tr>
                                
                            <?php endif ?>
                                                
                        </table>
                    </div>
                    <div class="col-lg-2">
                        <div class="panel panel-primary">
                             <a href="<?php echo base_url(); ?>admin/banner/new">
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