<?php include_once 'main_header.php'; ?>
           
<?php include_once 'side_navigation.php';?>

            <main class="mn-inner">

                <div>
                    <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                   
                                </div>
                                <span class="card-title">Admin Users</span>
                                <span class="stats-counter"><span class="counter"><?php echo getRowsCount('admin_users');?></span></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">                                
                                <span class="card-title">Students</span>
                                <span class="stats-counter"><span class="counter"><?php echo getRowsCount('students');?></span></span>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    
                                </div>
                                <span class="card-title">Users</span>
                                <span class="stats-counter"><span class="counter"><?php echo getRowsCount('users');?></span></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                
                   
                </div>
                    
                </div>
               
                
            </main>
        

        
        <?php include_once 'footer.php'; ?>

        
        
        <!-- Javascripts -->        
        <script src="assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>             
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>      
        
  