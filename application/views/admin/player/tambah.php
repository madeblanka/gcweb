      <?php $this->load->view("admin/_partials/head.php") ?>
          <?php $this->load->view("admin/_partials/sidebar.php") ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Player</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Player</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-info">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="<?php echo site_url('admin/updateplayer') ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" value="<?= $player['nama']?>" id="nama">
                      <input type="hidden" value="<?= $player['id_player']?>" name="id_player">
                      <input type="hidden" value="<?= $player['created_at']?>" name="created_at">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Keterangan" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" value="<?= $player['username']?>" id="username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Kategori" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                         <input type="text" class="form-control" name="password" value="<?= $player['password']?>" id="password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Harga" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" value="<?= $player['email']?>" name="email" id="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Stok" class="col-sm-2 col-form-label">No Tlp</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" value="<?= $player['no_tlp']?>" name="no_tlp" id="no_tlp" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Min_Qty_Beli" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" value="<?= $player['nik']?>" name="nik" id="nik">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Edit</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
        </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
          <?php $this->load->view("admin/_partials/footer.php") ?>