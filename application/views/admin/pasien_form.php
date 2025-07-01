      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Formulir Pasien</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Formulis Pasien</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
              <!--begin::Col-->
              <div class="">
<!--begin::Quick Example-->
<div class="card card-primary card-outline mb-4">
  <!--begin::Header-->
  <div class="card-header">
    <div class="card-title">Form Input Pasien</div>
  </div>
  <!--end::Header-->

  <!--begin::Form-->
<form action="<?= base_url('admin/simpan_pasien') ?>" method="post">
  <div class="card-body">

    <!-- Nama Pasien -->
    <div class="mb-3">
      <label for="nama_pasien" class="form-label">Nama Pasien</label>
      <input type="text" class="form-control" name="nama" required />
    </div>

    <!-- No Kamar -->
    <div class="mb-3">
      <label for="nomor_kamar" class="form-label">Nomor Kamar</label>
      <input type="text" class="form-control" name="nomor_kamar" required />
    </div>

    <!-- No Telepon -->
    <div class="mb-3">
      <label for="telepon" class="form-label">No Telepon</label>
      <input type="text" class="form-control" name="telepon" required />
    </div>

    <!-- Alamat -->
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <textarea class="form-control" name="alamat" rows="3" required></textarea>
    </div>

    <!-- Visum -->
    <div class="mb-3">
      <label for="visum" class="form-label">Visum</label>
      <input type="text" class="form-control" name="visum" required />
    </div>

    <!-- Tindakan -->
    <div class="mb-3">
      <label for="tindakan" class="form-label">Tindakan</label>
      <input type="text" class="form-control" name="tindakan" required />
    </div>

    <!-- Dokter -->
    <div class="mb-3">
      <label for="dokter" class="form-label">Dokter</label>
      <input type="text" class="form-control" name="dokter" required />
    </div>

  </div>

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>
  <!--end::Form-->
</div>
<!--end::Quick Example-->
              </div>
              <!--end::Col-->

              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>

      <!--end::App Main-->
