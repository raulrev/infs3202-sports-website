<?php
/* Log out process, unsets and destroys session variables */
session_unset();
session_destroy(); 

?>

<!-- Logout Status */-->
<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                ×</button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div id="regContainer" class="col-md-12" >
                        <h1>Logout Status</h1>
                            
                        <p><?= 'You have been logged out!'; ?></p>
                        
                        <a href="sport.php"><button class="button button-block"/>Home</button></a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>