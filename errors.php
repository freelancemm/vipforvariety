<?php if (count($errors) >0): ?>


    
<div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php foreach ($errors as $error):?> 
		<p><?php echo $error; ?></p>
	<?php endforeach ?>
          
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Update</button>
        </div>
    </div>
  </div>
</div>

	

	</div>
<?php endif ?>
