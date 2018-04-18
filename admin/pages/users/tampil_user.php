


        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
       
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>USER</h2>
                                </div>
                              
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    
                         <div class="body table-responsive">
                            <div class="icon-button-demo"> 
                                <button type="button" class="btn btn-success waves-effect">
                                    <i class="material-icons">add</i>
                                    <span>add</span>
                                </button>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                   
                                    <tr>
                                        <th scope="row">#</th>
                                        <th scope="row">foto</th>
                                        <th scope="row">nama</th>
                                        <th scope="row">email</th>
                                        <th scope="row">action</th>
                                </thead>
                                <tbody>
                                    </tr>
                                     <?php foreach ($user as $key => $value) {?>
                                    <tr>
                                        <td scope="row"><?php echo $i++?></td>
                                        <td></td>
                                        <td><?php echo $value['nama'] ?></td>
                                        <td><?php echo $value['email'] ?></td>
                                        <td>

         <a title="edit" class="btn btn-info btn-sm" href="detail_data_user.php?ID_user=<?php echo $value['ID'];?>"><i class="material-icons">create</i> </a>
         <a title="delete" class="btn btn-danger btn-sm" href="hapus_data_user.php?ID_user=<?php echo $value['ID'];?>"><i class="material-icons">delete</i> </a></td>
                                    </tr>
                                     <?php } ?>
                                  
                                </tbody>
                            </table>
                        </div>  
                    </div>
                                   <div id="real_time_chart" class="dashboar-chart"></div>
                            <div id="donut_chart" class=""></div>
                </div>

            </div>
            <!-- #END# CPU Usage -->
                      

           
</div>




                  
                       
         