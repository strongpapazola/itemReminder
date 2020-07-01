<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Edit Data</h5>
        </div>
        <div class="card-body">
          <form action="" method="post">
          <input type="hidden" name="id" value="<?= $barang['id']; ?>" >
              <div class="form-group">
                <label for="name">Name Item</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $barang['name']; ?>">
                <?= form_error('name', '<small class="text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" value="<?= $barang['amount']; ?>">
                <?= form_error('amount', '<small class="text text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="ket">Information</label>
                <input type="text" class="form-control" id="ket" name="ket" value="<?= $barang['ket']; ?>">
                <?= form_error('ket', '<small class="text text-danger">', '</small>'); ?>
              </div>
              <button class="btn btn-primary float-right" type="submit">Edit Data</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>