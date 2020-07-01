<div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header">

<h5 class="card-title">Reminder HomeWork</h5>
<a class="btn btn-primary card-title" href="<?= base_url('hwork/tambah'); ?>">Add HomeWork</a>

              <?php if ( $this->session->flashdata('mesdata') ) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('mesdata'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php endif; ?>
            </div>

            <div class="card-body">

             <?php if ( $items ) { ?>                
              <table class="table">
                <tr>
                <th>No</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                <?php $i = 1; ?>
                   <?php foreach ($items as $item) : ?>
                    <tr>
                    <td><?= $i; ?></td>
                      <td><?= $item['name']; ?></td>
                      <td>
                      <a href="<?= base_url('hwork/detail/') . $item['id']; ?>" class="badge badge-success">Detail</a>
                      <a href="<?= base_url('hwork/hapus/') . $item['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                        <a href="<?= base_url('hwork/edit/') . $item['id']; ?>" class="badge badge-primary">Edit</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
              </table>
                <?php } else { ?>
                  <div class="alert alert-danger" role="alert">
                    Data Not Found!
                  </div>
                <?php } ?>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-apple"></i> Data Live
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <footer class="footer footer-black  footer-white ">
      <div class="container-fluid">
        <div class="row">
          <nav class="footer-nav">
            <ul>
              <li>
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
              </li>
            </ul>
          </nav>
          <div class="credits ml-auto">
            <span class="copyright">
              ©
              <script>
                document.write(new Date().getFullYear())
              </script>, made with <i class="fa fa-heart heart"></i> by strongpapazola
            </span>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>
