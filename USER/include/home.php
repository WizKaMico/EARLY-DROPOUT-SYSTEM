                       <div class="col-md-12">
                        
                        <?php 

                        include('../connection/connection.php');
                        $result=mysqli_query($conn, "select *,COUNT(id) as TOTAL from student");
                        $row=mysqli_fetch_array($result);     

                        ?>   

                         <div class="col-md-6">
                            <div class="card " style="background-color:#daf0ee;">
                                <div class="card-body ">
                                    <!-- <div id="chartHours" class="ct-chart"></div> -->
                                   <h1>DROP-OUT PERCENTAGE : <?php echo strtoupper($row['TOTAL']); ?>%</h1>
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <!-- <i class="fa fa-history"></i> Updated 3 minutes ago -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card " style="background-color:#ffebe7;">
                                <div class="card-body ">
                                    <!-- <div id="chartHours" class="ct-chart"></div> -->
                                 <h1>NUMBER OF STUDENTS : <?php echo strtoupper($row['TOTAL']); ?></h1>
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <!-- <i class="fa fa-history"></i> Updated 3 minutes ago -->
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-md-5">
                            <div class="card ">
                                <div class="card-body ">
                                    <iframe src="graph.php" style="width:100%; height:300px; border:none;"></iframe>
                                 
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <!-- <i class="fa fa-history"></i> Updated 3 minutes ago -->
                                    </div>
                                </div>
                            </div>
                        </div>


                          <div class="col-md-7">
                            <div class="card ">
                                <div class="card-body ">
                                    <iframe src="data/view.php" style="width:100%; height:300px; border:none;"></iframe>
                                 
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <!-- <i class="fa fa-history"></i> Updated 3 minutes ago -->
                                    </div>
                                </div>
                            </div>
                        </div>
   

                        </div>