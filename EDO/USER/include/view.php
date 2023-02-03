                       <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <!-- <h4 class="card-title">Users Behavior</h4> -->
                                    <?php if(empty($_GET['view']) || $_GET['view'] == 'HOME'){ ?>
                                    <p class="card-category">HOME</p>
                                    <?php } else { ?>
                                    <p class="card-category"><?php echo strtoupper($_GET['view']); ?></p>
                                    <?php } ?>        
                                </div>
                                <div class="card-body ">
                                    <!-- <div id="chartHours" class="ct-chart"></div> -->
                                    <?php if(!empty($_GET['view'])){ ?>
                                    <?php  if($_GET['view'] == 'DATA'){ ?>
                                    <iframe src="data/" style="width:100%; height:600px; border:none;"></iframe>
                                    <?php } else if($_GET['view'] == 'HOME'){ ?>
                                    <?php include('home.php');  ?>
                                    <?php } else if($_GET['view'] == 'INFORMATION'){ ?>
                                    <iframe src="information/" style="width:100%; height:700px; border:none;"></iframe>
                                <?php } else if($_GET['view'] == 'SETTING'){ ?>
                                   <?php include('setting.php');  ?>
                                    <?php } else { ?> 

                                    <?php } ?>
                                    <?php } else { ?>

                                    <?php } ?>    
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <!-- <i class="fa fa-history"></i> Updated 3 minutes ago -->
                                    </div>
                                </div>
                            </div>
                        </div>