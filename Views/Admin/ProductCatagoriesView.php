
<script src="/POS2/Sources/Admin/assets/plugins/jquery-1.10.2.js"></script>
<script src="/POS2/Sources/Admin/assets/scripts/cat.js"></script>
<script src="/POS2/Sources/Admin/assets/scripts/admin.js"></script>
            <div class="row">
                <!--quick info section -->
                <a id="addcat">
                <div class="col-lg-4">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>Add </b>

                    </div>
                </div>
                 </a>
                <a id="delcat" >
                <div class="col-lg-4">
                    
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-beer fa-3x"></i>&nbsp;<b> Delete</b>
                    </div>
                </div>
                </a>
                <a id="updatecat" >
                <div class="col-lg-4">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-rss fa-3x"></i>&nbsp;<b>Update</b>

                    </div>
                </a>
                </div>
                
                <!--end quick info section -->
            </div>
<div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Catagories Table
                            
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>cat_Id</th>
                                                    <th>Name</th>
                                                    <th>Delete</th>
                                                    <th>Update</th>
                                                 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($cat_list as $obj)
                                                   {?>
                                                <tr>
                                                    <td><?php echo $obj->getId()?></td>
                                                   <td><?php echo $obj->getName()?></td>
                                                   <td><button type="button" class="btn btn-danger btn-sm" id="<?php echo $obj->getId()?>">Delete</button></td>
                                                   <td><button type="button" class="btn btn-info btn-sm" id="<?php echo $obj->getId()?>">Update</button></td>
                                            <div id="hi" type="hidden">
                                                </tr>
                                                   <?php }?>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->
