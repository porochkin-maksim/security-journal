<!-- Modal Edit-->
<?php


/**
 * @var App\Model\INC $incident
 */

?>
<div class="modal fade" id="editModal<?=$incident->ID ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$incident->ID ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$incident->ID ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_END" value="<?=$incident->END ?>">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_DEZ" value="<?=$incident->DEZ ?>">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_TYP" value="<?=$incident->TYP ?>">
        	</div>
        	        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_DTF" value="<?=$incident->DTF ?>">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_SRC" value="<?=$incident->SRC ?>">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_CRT" value="<?=$incident->CRT ?>">
        	</div>
        	        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_TRG" value="<?=$incident->TRG ?>" >
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_DSC" value="<?=$incident->DSC ?>">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_EXC" value="<?=$incident->EXC ?>">
        	</div>
        	        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_MES" value="<?=$incident->MES ?>">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_DTE" value="<?=$incident->DTE ?>">
        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?=$incident->ID ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить инцидент № <?=$incident->ID ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?ID=<?=$incident->ID ?>" method="post">
        	<button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
    	</form>
      </div>
    </div>
  </div>
</div>
