<?php
$tituloPagina = "Ejercicio 4 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer4";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado2">

	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-12">

				<form class="formulario needs-validation row g-3" id="formulario" method="post" action="formAccion.php" novalidate>

					<div class="titulo  pl-0 mt-4">
						<h5 class="bg-gray text-blue p-2"><i class="bi bi-pencil-square"></i>Cinem@s</h5>
					</div>

					<div class="col">
						<!--TITULO-->
						<div class="formulario_grupo mb-3" id="grupo_titulo">
							<label class="formulario_label form-label mb-0">Titulo</label>
							<div class="formulario_grupo-input">
								<input type="text" class="formulario_input form-control" id="titulo" name="titulo" placeholder="The Godfather" required>
							</div>
							<div class="invalid-feedback">
								Porfavor ingrese un valor
							</div>
						</div>

						<!--DIRECTOR-->
						<div class="formulario_grupo col-12 mb-3" id="grupo_director">
							<label class="formulario_label form-label mb-0">Director</label>
							<div class="formulario_grupo-input">
								<input type="text" class="formulario_input form-control" id="director" name="director" placeholder="Coppola" required>
							</div>
							<div class="invalid-feedback">
								Porfavor ingrese un valor
							</div>
						</div>

						<!--PRODUCCION-->
						<div class="formulario_grupo col-12 mb-3" id="grupo_produccion">
							<label class="formulario_label form-label mb-0">Produccion</label>
							<div class="formulario_grupo-input">
								<input type="text" class="formulario_input form-control" id="produccion" name="produccion" required>
							</div>
							<div class="invalid-feedback">
								Porfavor ingrese un valor
							</div>
						</div>

						<!--NACIONALIDAD-->
						<div class="formulario_grupo col-12 mb-3" id="grupo_nacionalidad">
							<label class="formulario_label form-label mb-0">Nacionalidad</label>
							<div class="formulario_grupo-input">
								<input type="text" class="formulario_input form-control" id="nacionalidad" name="nacionalidad" placeholder="Argentino, Ruso, Frances" required>
							</div>
							<div class="invalid-feedback">
								Porfavor ingrese un valor
							</div>
						</div>

						<!--DURACION-->
						<div class="formulario_grupo col-4 mb-3" id="grupo_duracion">
							<label class="formulario_label form-label mb-0">Duracion</label>

							<input type="number" class="formulario_input form-control" id="duracion" name="duracion" placeholder="999" max="999" min="1" required>
							<p class="py-0">(minutos)</p>


							<div class="invalid-feedback">
								maximo 3 numeros!
							</div>
						</div>

					</div>

					<div class="col">
						<!--ACTORES-->
						<div class="formulario_grupo col-12 mb-3" id="grupo_actores">
							<label class="formulario_label form-label mb-0">Actores</label>
							<div class="formulario_grupo-input">
								<input type="text" class="formulario_input form-control" id="actores" name="actores" required>
							</div>
							<div class="invalid-feedback">
								Porfavor ingrese un valor
							</div>
						</div>

						<!--GUION-->
						<div class="formulario_grupo col-12 mb-3" id="grupo_guion">
							<label class="formulario_label form-label mb-0">Guion</label>
							<div class="formulario_grupo-input">
								<input type="text" class="formulario_input form-control" id="guion" name="guion" required>
							</div>
							<div class="invalid-feedback">
								Porfavor ingrese un valor
							</div>
						</div>

						<!--AÑO-->
						<div class="formulario_grupo col-3 mb-3" id="grupo_anio">
							<label class="formulario_label form-label mb-0">Año</label>
							<div class="formulario_grupo-input">
								<input type="number" class="form-control formulario_input" id="anio" pattern="[0-9]+" max="9999" min="1" name="anio" required>
								<div class="invalid-feedback">
									Solo 4 digitos!
								</div>
							</div>
						</div>

						<!--GENERO-->
						<div class="formulario_grupo col-3 mb-3" id="grupo_genero">
							<label class="formulario_label form-label mb-0">Genero</label>
							<div class="formulario_grupo-input">
								<select id="genero" name="genero" class="formulario_input form-select" required>
									<option selected disabled value="">Elije...</option>
									<option>Comedia</option>
									<option>Drama</option>
									<option>Terror</option>
									<option>Romanticas</option>
									<option>Suspenso</option>
									<option>Otras</option>
								</select>
							</div>
						</div>

						<!--EDAD-->
						<div class="formulario_grupo mb-3" id="grupo_edad">
							<label class="formulario_label mb-2">Restricciones de edad</label>
							<div class="formulario_grupo-input">
								<input type="radio" name="edad" id="todolospublicos" value="Todo los publicos" class="formulario_input form-check-input" required><label class="formulario_label etiqueta form-check-label">Todo los publicos</label>
								<input type="radio" name="edad" id="mayores7" value="Mayores a 7 años" class="formulario_input form-check-input" required><label class="formulario_label form-check-label"> Mayores a 7 años</label>
								<input type="radio" name="edad" id="mayores18" value="Mayores a 18 años" class="formulario_input form-check-input" required><label class="formulario_label form-check-label"> Mayores a 18 años</label>

								<div class="invalid-feedback">
									Es necesario ingresar el rango de edad
								</div>
							</div>
						</div>
					</div>

					<!--SINOPSIS-->
					<div class="row">
						<div class="formulario_grupo mb-3" id="sinopsis">
							<label class="formulario_label form-label">Sinopsis</label>
							<div clas="formulario_grupo-input">
								<textarea class="formulario_input form-control" id="sinopsis" rows="3" name="sinopsis" required></textarea>
							</div>
						</div>
					</div>

					<!--ENVIAR-->
					<div class="">
						<div class="row justify-content-center pb-3 align-items-center">
							<div class="col-6">
								<div class="formulario_grupo formulario_grupo-btn-enviar d-flex justify-content-end">
									<button type="submit" class="formulario_btn btn btn-primary" value="Enviar">Enviar</button>
									<button type="reset" class="formulario_btn btn btn-secondary ms-2">Borrar</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(() => {
			'use strict'

			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			const forms = document.querySelectorAll('.needs-validation')

			// Loop over them and prevent submission
			Array.from(forms).forEach(form => {
				form.addEventListener('submit', event => {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
				}, false)
			})
		})()
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</div>

<?php
include_once('../estructura/pie.php');
?>