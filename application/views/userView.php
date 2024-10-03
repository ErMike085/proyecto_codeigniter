<div class="d-flex justify-content-between">
	<div>
		<button id="btnAddUser" class="btn btn-primary">Add User</button>
	</div>

	<!-- Boton de generar pdf -->

	<form action="<?php echo site_url('dashboard/generatePdf'); ?>" method="post" class="mb-5">
		<button class="btn btn-primary">Generate PDF</button>
	</form>
</div>

<table id="userTable" class="table table-striped table-bordered mt-4">
	<thead>
		<tr>
			<th>id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user) { ?>
			<tr>
				<td scope="row"><?php echo $user->id ?></td>
				<td><?php echo $user->name; ?></td>
				<td><?php echo $user->last_name; ?></td>
				<td><?php echo $user->email; ?></td>
				<td>
					<form action="edit" method="post">
						<input type="hidden" name="id" value="<?= $user->id ?>">
						<button type="submit" class="btn btn-warning btn-sm">Edit</button>
					</form>
				</td>
				<td>
					<form action="delete" method="post">
						<input type="hidden" name="id" value="<?= $user->id ?>">
						<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<script>
	(function() {
		"use strict";

		function enableFormValidation() {
			let forms = document.querySelectorAll(".needs-validation");

			Array.prototype.slice.call(forms).forEach(function(form) {
				form.addEventListener(
					"submit",
					function(event) {
						if (!form.checkValidity()) {
							event.preventDefault();
							event.stopPropagation();
						}

						form.classList.add("was-validated");
					},
					false
				);
			});
		}

		window.enableFormValidation = enableFormValidation;
	})();

	// Llamar a la función para habilitar la validación del formulario
	enableFormValidation();

	$(document).ready(function() {
		$('#userTable').DataTable();

		$('#btnAddUser').click(function() {
			$('#viewContainer').load('<?php echo site_url('dashboard/load_view/userCreateView'); ?>');
		});


	});
</script>