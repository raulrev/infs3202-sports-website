<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                ×</button>
                <h4 class="modal-title" id="myModalLabel">ERROR</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div id="regContainer" class="col-md-12" >
                        <p>
                            <?php 
                            if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
                                echo $_SESSION['message'];    
                            else:
                                header( "location: sport.php" );
                            endif;
                            ?>
                        </p>    
                        <a href="sport.php"><button class="button button-block"/>Home</button></a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
