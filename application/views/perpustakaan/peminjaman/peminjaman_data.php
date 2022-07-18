<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><b>Peminjaman</b></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
            <li class="breadcrumb-item active">Peminjaman</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title"><b>Data Peminjaman</b></h3>
              <div class="float-sm-right">
                <a href="<?=site_url('peminjaman/add_data')?>" class="btn btn-primary">
                  <b><i class="fas fa-plus"></i> Add</b>
                </a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad table-responsive">
              <table class="table table-bordered table-striped table-head-fixed" id="table1">	
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Kembali</th>
                    <th>Nama Anggota</th>
                    <th>Judul Buku</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach($data as $d) { 
                      foreach($anggota as $a) {
                        if($a->id_anggota == $d->id_anggota) {
                          $ag = $a->nama_anggota;
                        }
                      }

                      foreach($buku as $b) {
                        if($b->id == $d->kd_buku) {
                          $bk = $b->judul;
                        }
                      }
                  ?>
                    <tr>
                      <td style="width: 5%;"><?=$no++?>.</td>
                      <td><?=$d->id_pinjam?></td>
                      <td><?=$d->tgl_pinjam?></td>
                      <td><?=$d->tgl_kembali?></td>
                      <td><?=$ag?></td>
                      <td><?=$bk?></td>
                      <td class="text-center" width="50px">
                        <a href="<?=site_url('peminjaman/edit_data/' . $d->id_pinjam)?>" class="btn btn-warning btn-xs" style="color: white;">
                          <b><i class="fas fa-edit"></i> Edit</b>
                        </a>
                        <a href="<?=site_url('peminjaman/delete_data/' . $d->id_pinjam)?>" class="btn btn-danger btn-xs">
                          <b><i class="fas fa-trash"></i> Delete</b>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
