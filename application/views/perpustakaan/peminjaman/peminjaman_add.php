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
              <h3 class="card-title"><b>Add Peminjaman</b></h3>
              <div class="float-sm-right">
                <a href="<?=site_url('peminjaman')?>" class="btn btn-warning">
                  <b style="color: white"><i class="fas fa-undo"></i> Back</b>
                </a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad table-responsive">
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <form action="<?=site_url('peminjaman/add_data')?>" method="post">
                    <div class="form-group">
                      <label for="id">ID Peminjaman *</label>
                      <input type="text" name="id" id="id" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                      <label for="tgl_pinjam">Tgl Peminjaman *</label>
                      <div class="input-group date" id="tglpinjam" data-target-input="nearest">
                        <input type="text" name="tgl_pinjam" class="form-control datetimepicker-input" data-target="#tglpinjam" required/>
                        <div class="input-group-append" data-target="#tglpinjam" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tgl_kembali">Tgl Kembali *</label>
                      <div class="input-group date" id="tglkembali" data-target-input="nearest">
                        <input type="text" name="tgl_kembali" class="form-control datetimepicker-input" data-target="#tglkembali" required/>
                        <div class="input-group-append" data-target="#tglkembali" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama Anggota *</label>
                      <select name="nama" id="nama" class="form-control select2" style="width: 100%;" required>
                        <option value=""> - Pilih - </option>
                        <?php foreach($anggota as $a) { ?>
                          <option value="<?=$a->id_anggota?>"><?=$a->nama_anggota?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="judul">Judul Buku *</label>
                      <select name="judul" id="judul" class="form-control select2" style="width: 100%;" required>
                        <option value=""> - Pilih - </option>
                        <?php foreach($buku as $b) { ?>
                          <option value="<?=$b->id?>"><?=$b->judul?></option>
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
