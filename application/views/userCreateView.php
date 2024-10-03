<button class="btn btn-primary mb-4" id="backBtn">Volver</button>

<form action="save" method="POST" class="needs-validation" novalidate>
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
        <div class="invalid-feedback">
            Por favor, ingresa un nombre.
        </div>
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido" required>
        <div class="invalid-feedback">
            Por favor, ingresa un apellido.
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        <div class="invalid-feedback">
            Por favor, ingresa un email válido.
        </div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
        <div class="invalid-feedback">
            Por favor, ingresa una contraseña.
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<script>
    document.getElementById("backBtn").addEventListener("click", function() {
        window.location.href = "<?= base_url() ?>";
    });
</script>