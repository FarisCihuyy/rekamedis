      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Formulir Dokter</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Formulir dokter</li>
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
    <div class="card-title">Form Input Dokter</div>
  </div>
  <!--end::Header-->

  <!--begin::Form-->
  <form action="<?= site_url('admin/dokter_save') ?>" method="post">
    <!--begin::Body-->
    <div class="card-body">

      <!-- Nama Pasien -->
      <div class="mb-3">
        <label for="nama_pasien" class="form-label">Nama Dokter</label>
        <input
          type="text"
          class="form-control"
          id="nama_pasien"
          name="nama"
          placeholder="Masukkan nama Dokter"
          required
        />
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



    </div>
    <!--end::Body-->

    <!--begin::Footer-->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    <!--end::Footer-->
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
