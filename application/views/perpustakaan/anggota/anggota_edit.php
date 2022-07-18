<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><b>Anggota</b></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active">Anggota</li>
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
              <h3 class="card-title"><b>Edit Anggota</b></h3>
              <div class="float-sm-right">
                <a href="<?=site_url('anggota')?>" class="btn btn-warning">
                  <b style="color: white"><i class="fas fa-undo"></i> Back</b>
                </a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad table-responsive">
              <div class="row">
                <div class="col-md-3"></div> 
                <div class="col-md-6">
                  <form action="<?=site_url('anggota/edit_data/' . $anggota->id_anggota)?>" method="post">
                    <div class="form-group">
                      <label for="id">ID Anggota *</label>
                      <input type="text" name="id" id="id" value="<?=$anggota->id_anggota?>" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama *</label>
                      <input type="text" name="nama" id="nama" value="<?=$anggota->nama_anggota?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat *</label>
                      <textarea name="alamat" id="alamat" rows="3" class="form-control" required><?=$anggota->alamat?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="telp">Telp *</label>
                      <input type="text" name="telp" id="telp" value="<?=$anggota->no_telepon?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="status">Status *</label>
                      <select name="status" id="status" class="custom-select" required>
                        <option value=""> - Pilih - </option>
                        <option value="DOSEN" <?=$anggota->status_anggota == "DOSEN" ? "selected" : null?>>DOSEN</option>
                        <option value="MAHASISWA" <?=$anggota->status_anggota == "MAHASISWA" ? "selected" : null?>>MAHASISWA</option>
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
