<?php $this->load->view('admin/_partials/head')?>
<?php $this->load->view('admin/_partials/sidebar')?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Kategori</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Kategori</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Table Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Nik</th>
                    <th>Dibuat Pada Tanggal</th>
                    <th>Terahir Diupade Tanggal</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $a = 1;foreach($player as $p):?> 
                  <tr>
                    <td><?= $a;$a++?></td>
                    <td><a href="<?php echo site_url('player/edit/'.$p->id_player) ?>"><?= $p->nama?></a></td>
                    <td><?= $p->username?></td>
                    <td><?= $p->password?></td>
                    <td><?= $p->email?></td>
                    <td><?= $p->no_tlp?></td>
                    <td><?= $p->nik?></td>
                    <td><?= $p->created_at?></td>
                    <td><?= $p->updated_at?></td>
                  </tr>
                  <?php endforeach?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('admin/_partials/footer')?>