<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">White Board</h5>
	        </div>
        <div rows="50" class="card-body">
<form action="" method="post" >
	<div class="form-group">
	  <input type="hidden" name="id" value="<?= $note['id']; ?>">
          <textarea class="form-control" rows="50" id="wb" name="wb"><?= $note['text']; ?></textarea>
  </div>
	<button class="btn btn-primary" type="submit">Write</button>
</form>

          </div>
        </div>
      </div>
    </div>
  </div>
