<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Add Data Finance</h5>
        </div>
        <div class="card-body">
          <form action="" method="post">
              <div class="form-group">
                <label for="income">Income</label>
                <input type="number" class="form-control" id="income" name="income" value="<?= set_value('income'); ?>">
                <?= form_error('income', '<small class="text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="spending">Spending</label>
                <input type="number" class="form-control" id="spending" name="spending" value="<?= set_value('spending'); ?>">
                <?= form_error('spending', '<small class="text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="balance">Balance</label>
                <input type="number" class="form-control" id="balance" name="balance" value="<?= set_value('balance'); ?>">
                <?= form_error('balance', '<small class="text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="information">Information</label>
                <input type="text" class="form-control" id="information" name="information" value="<?= set_value('information'); ?>">
                <?= form_error('information', '<small class="text text-danger">', '</small>'); ?>
              </div>
              <button class="btn btn-primary float-right" type="submit">Add Data</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>