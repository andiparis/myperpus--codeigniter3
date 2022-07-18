<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><b>Media</b></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
            <li class="breadcrumb-item active">Buku</li>
            <li class="breadcrumb-item active">Media</li>
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
              <h3 class="card-title"><b>Edit Media</b></h3>
              <div class="float-sm-right">
                <a href="<?=site_url('koleksi')?>" class="btn btn-warning">
                  <b style="color: white"><i class="fas fa-undo"></i> Back</b>
                </a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad table-responsive">
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <form action="<?=site_url('koleksi/edit/'.$koleksi->id)?>" method="post">
                    <div class="form-group">
                      <label for="id">ID Media</label>
                      <input type="text" name="id" id="id" value="<?=$koleksi->id?>" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama Media *</label>
                      <input type="text" name="nama" id="nama" value="<?=$koleksi->nama?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <textarea name="keterangan" id="keterangan" rows="3" class="form-control"><?=$koleksi->keterangan?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="status">Status *</label>
                      <select name="status" id="status" class="custom-select" required>
                        <option value=""> - Pilih - </option>
                        <option value="Aktif" <?=$koleksi->status == "Aktif" ? "selected" : null?>>Aktif</option>
                        <option value="Tidak Aktif" <?=$koleksi->status == "Tidak Aktif" ? "selected" : null?>>Tidak Aktif</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">
                        <b><i class="fas fa-paper-plane"> Save</i></b>
                      </button>
                      <button type="reset" class="btn btn-secondary">
                        <b>Reset</b>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
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
