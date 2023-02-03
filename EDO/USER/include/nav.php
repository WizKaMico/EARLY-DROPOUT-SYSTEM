                  <?php if(empty($_GET['view']) || $_GET['view'] == 'HOME'){ ?>
                   <li class="nav-item active">
                  <?php } else { ?>
                  <li class="nav-item">
                  <?php } ?>  
                        <a class="nav-link" href="index.php?view=<?php echo 'HOME'; ?>">
                            <i class="glyphicon glyphicon-home"></i>
                            HOME
                        </a>
                    </li>
                    <?php if(!empty($_GET['view']) && $_GET['view'] == 'DATA'){ ?>
                      <li class="nav-item active">
                    <?php } else { ?>
                      <li class="nav-item">
                    <?php } ?>      
                        <a class="nav-link" href="index.php?view=<?php echo 'DATA'; ?>">
                            <i class="glyphicon glyphicon-equalizer"></i>
                           DATA
                        </a>
                    </li>
                    <?php if(!empty($_GET['view']) && $_GET['view'] == 'INFORMATION'){ ?>
                      <li class="nav-item active">
                    <?php } else { ?>
                      <li class="nav-item">
                    <?php } ?>  
                        <a class="nav-link" href="index.php?view=<?php echo 'INFORMATION'; ?>">
                            <i class="glyphicon glyphicon-info-sign"></i>
                            INFORMATION
                        </a>
                    </li>
                    <?php if(!empty($_GET['view']) && $_GET['view'] == 'SETTING'){ ?>
                      <li class="nav-item active">
                    <?php } else { ?>
                      <li class="nav-item">
                    <?php } ?>  
                        <a class="nav-link" href="index.php?view=<?php echo 'SETTING'; ?>">
                            <i class="glyphicon glyphicon-cog"></i>
                            SETTINGS
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="../logout.php">
                            <i class="glyphicon glyphicon-log-out"></i>
                            LOGOUT
                        </a>
                    </li>
                    
                    
                  