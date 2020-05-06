<div class="row reservar" id="anclaReservar">
    <div class="col-sm-6 tituloPadre">
        <div>
            <p id="reservarTitulo" name="reservarTitulo">OROGOLD</p>
        <p class="reservarTexto">Cuando la belleza y glamour</p>
        <p class="reservarTexto"> van de la mano.</p>
        </div>
    </div>
    <div class="col-sm-6 formularioPadre">
        <div class="formulario form-group"> 
            <form method="POST" action="Controller/crearCitasController.php">
                <b><p style="font-size: 40px; font-family: Verdana;">Reserva ahora tu cita</p></b>

                <div class="form-group">
                    <input type="text" class="form-control reservaInput" placeholder="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control reservaInput" placeholder="email" name="correo" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control reservaInput" placeholder="telefono" name="telefono" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="formSubmit" value="Reserva ahora">
                </div>
            </form>
        </div>
    </div>
</div>