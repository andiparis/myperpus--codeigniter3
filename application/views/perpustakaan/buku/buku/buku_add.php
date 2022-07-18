<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><b>Buku</b></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
            <li class="breadcrumb-item active">Buku</li>
            <li class="breadcrumb-item active">Buku</li>
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
              <h3 class="card-title"><b>Add Buku</b></h3>
              <div class="float-sm-right">
                <a href="<?=site_url('buku')?>" class="btn btn-warning">
                  <b style="color: white"><i class="fas fa-undo"></i> Back</b>
                </a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad table-responsive">
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <form action="<?=site_url('buku/add_data')?>" method="post">
                    <div class="form-group">
                      <label for="id">ID Buku *</label>
                      <input type="text" name="id" id="id" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                      <label for="judul">Judul Buku *</label>
                      <input type="text" name="judul" id="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="pengarang">Pengarang Buku *</label>
                      <input type="text" name="pengarang" id="pengarang" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="penerbit">Penerbit Buku *</label>
                      <input type="text" name="penerbit" id="penerbit" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="kategori">Kategori *</label>
                      <select name="kategori" id="kategori" class="form-control select2" style="width: 100%;" required>
                        <option value=""> - Pilih - </option>
                        <?php foreach($kategori as $k) { ?>
                          <option value="<?=$k->id?>"><?=$k->nama?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="koleksi">Koleksi *</label>
                      <select name="koleksi" id="koleksi" class="form-control select2" style="width: 100%;" required>
                        <option value=""> - Pilih - </option>
                        <?php foreach($koleksi as $k) { ?>
                          <option value="<?=$k->id?>"><?=$k->nama?></option>
                        <?php } ?>
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
