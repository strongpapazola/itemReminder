<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Add Data</h5>
        </div>
        <div class="card-body">
          <form action="" method="post">
              <div class="form-group">
                <label for="name">Name Item</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" value="<?= set_value('amount'); ?>">
                <?= form_error('amount', '<small class="text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="ket">Information</label>
                <input type="text" class="form-control" id="ket" name="ket" value="<?= set_value('ket'); ?>">
                <?= form_error('ket', '<small class="text text-danger">', '</small>'); ?>
              </div>
              <button class="btn btn-primary float-right" type="submit">Add Data</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>