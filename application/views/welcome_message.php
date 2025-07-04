<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<!-- Bootstrap Ui -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

	<header class="bg-success text-white px-4 py-2 mb-4 d-flex align-items-center justify-content-between">
		<h1 class='fw-bold'>Rekamedis</h1>
		<nav class="d-flex gap-4 align-items-center">
			<a href="<?= site_url('admin') ?>" class="text-white text-decoration-none">
				Dashboard Admin <span><i class="bi bi-box-arrow-up-right"></i></span>
			</a>
			<button class='bg-white text-success border border-white px-4 fw-semibold rounded'>
				<a href="<?= site_url('auth') ?>" class="text-decoration-none">Login</a>
			</button>
		</nav>
	</header>
	
	<div style="max-width: 85%; margin: 0 auto;">
	<table id="table_rekamedis" class="table table-striped" style="font-size: 12px;">
			<thead class="table-info">
				<tr style="font-size: 14px;">
					<th class="text-center">No</th>
					<th class="text-center">Nama</th>
					<th class="text-center">No. Kamar</th>
					<th class="text-center">Hp</th>
					<th class="text-center">Alamat</th>
					<th class="text-center">Tanggal</th>
					<th class="text-center">Visum</th>
					<th class="text-center">Tindakan</th>
					<th class="text-center">Dokter</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>
		<tbody>
			<?php $no = 1; 
				foreach ($rekamedik as $_rekamedik): ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $_rekamedik->Nama; ?></td>
					<td><?= $_rekamedik->Ruangan; ?></td>
					<td><?= $_rekamedik->HP; ?></td>
					<td><?= $_rekamedik->Alamat; ?></td>
					<td><?= $_rekamedik->Tanggal; ?></td>
					<td><?= $_rekamedik->Visum; ?></td>
					<td><?= $_rekamedik->Tindakan; ?></td>
					<td><?= $_rekamedik->Dokter; ?></td>
					<td class="d-flex justify-content-center align-items-center gap-3" style="font-size: 14px;">
						<i class="bi bi-pencil-square bg-success-subtle text-dark ratio-1x1 p-2 rounded" style="cursor: pointer;"></i>
							<a href="<?= site_url('admin/delete/' . $_rekamedik->Ruangan) ?>"
							class="btn-delete bi bi-trash3 bg-danger text-white ratio-1x1 p-2 rounded text-decoration-none" 
							 
							style="cursor: pointer;">
						</a>

					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" style="margin: 0 auto;">Yakin ingin menghapus data ini?</h5>
				</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Hapus</button>
				<button type="button" class="btn btn-success">Batal</button>
			</div>
		</div>
	</div>
	</div>	 


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Bootstrap Icons CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

	<!-- DataTables for Bootstrap -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

	<!-- Script -->
	<script src="./index.js"></script>
	
	<script>
		$(document).ready(function() {
			  $('#table_rekamedis').DataTable({
				columnDefs: [
					{ targets: [3, 4,5,6,7,8,9], orderable: false } // disable sort di kolom No dan Aksi
				]
			});

		});
	</script>

	<script>
$(document).ready(function() {
    $('.btn-delete').on('click', function(e) {
        e.preventDefault();
        const id = $(this).data('id');
		console.log(id)

        if (confirm('Yakin ingin menghapus data ini?')) {
            $.ajax({
                url: "<?= site_url('welcome/delete_ajax') ?>",
                type: "POST",
                data: { id: id },
				dataType: 'json',
                success: function(response) {
                    const res = JSON.parse(response);
					console.log(res);
                    if (res.status === 'success') {
                        alert('Data berhasil dihapus');
                        location.reload(); // atau hapus baris tanpa reload
                    }
                },
                error: function() {
                    alert('Gagal menghapus data.');
                }
            });
        }
    });
});
</script>


</body>
</html>