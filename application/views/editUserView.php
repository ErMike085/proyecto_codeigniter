<?php $this->load->view('layouts/header') ?>
<?php $this->load->view('layouts/sidebar') ?>

<div class="container container-fluid m-5">
    <form action="update" method="POST" class="needs-validation w-50 d-flex flex-column">
        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $user->name ?>" placeholder="Nombre" required>
            <div class="invalid-feedback">
                Por favor, ingresa tu nombre.
            </div>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $user->last_name ?>" placeholder="Apellido" required>
            <div class="invalid-feedback">
                Por favor, ingresa tu apellido.
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user->email ?>" placeholder="Email" required>
        <div class="invalid-feedback">
            Por favor, ingresa un email válido.
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

<?php $this->load->view('layouts/footer') ?>