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
                  <li class="breadcrumb-item active" aria-current="page">Formulir Pasien</li>
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
<form action="<?= site_url('admin/simpan_pasien') ?>" method="post">
  <div class="card-body">

    <!-- Nama Pasien -->
    <div class="mb-3">
      <label for="nama_pasien" class="form-label">Nama Pasien</label>
      <input type="text" class="form-control" name="nama" required />
    </div>

    <!-- No Kamar -->
    <div class="mb-3">
      <label for="no_room" class="form-label">Nomor Kamar</label>
      <input type="text" class="form-control" name="no_room" required />
    </div>

    <!-- No Telepon -->
    <div class="mb-3">
        <label for="telepon" class="form-label">No Telepon</label>
        <input
          type="tel"
          class="form-control"
          id="telepon"
          name="no_telp"
          pattern="08[0-9]{10,13}"
          title="Nomor harus diawali 08 dan terdiri dari 10–13 digit"
          placeholder="Contoh: 081234567890"
          required
        />
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
      <label for="id_tindakan">Tindakan</label>
      <select name="id_tindakan" class="form-control" required>
          <option value="">-- Pilih Tindakan --</option>
          <?php foreach ($tindakan as $row): ?>
              <option value="<?= $row['id']; ?>"><?= $row['nama']; ?></option>
          <?php endforeach; ?>
      </select>
    </div>

    <!-- Dokter -->
    <div class="mb-3">
      <label for="id_dokter" class="form-label">Pilih Dokter</label>
      <select name="id_dokter" class="form-select" required>
        <option value="">-- Pilih Dokter --</option>
        <?php foreach ($dokter as $d): ?>
          <option value="<?= $d['id']; ?>"><?= $d['nama']; ?></option>
        <?php endforeach; ?>
      </select> 
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
