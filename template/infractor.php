								<div class="col-xs-12">
								</br>
								<div class="col-xs-2">		
									<input type="text" name= "nombre" id="nombre" class="form-control" placeholder="Nombre" value="<?php echo $dni['Nombre']; ?>" readonly/>
								</div>
								
								<div class="col-xs-2">
									<input type="text" id="apellidos" name= "apellidos" class="form-control" placeholder="Primer Apellido" value="<?php echo $dni['Primerapellido']; ?>" readonly/>
								</div>
					
								<div class="col-xs-2">
									<label class="sr-only" for="apellidos"></label>
									<input type="text" id="apellidos2" name= "apellidos" class="form-control" placeholder="Segundo Apellido" value="<?php echo $dni['Segundoapellido']; ?>" readonly/>
								</div>
					
								<div class="col-xs-3">

							<!-- 	<select class="form-control">
									<option value="">Tipo de documento</option>
			  						<option value="">DNI</option>
			 						<option value="">NIE</option>
			  						<option value="">PASAPORTE</option>
			  						<option value="">Carnet de Conducir</option>
			  					</select> -->

	  							</div>
					
	  							<div class="col-xs-3">
									<input type="text" id="imputadodonumero" name= "imputadodonumero" class="form-control" placeholder="Número" value="<?php echo $dni['Num']; ?>" readonly/>
								</div>
							

								</br></br></br>

								<div class="col-xs-3">
								<input type="text" id="nacionalidad" name= "imputadodopais" class="form-control" placeholder="Nacionalidad" value="<?php echo $dni['Nacionalidad']; ?>" readonly/>
								</div>
								

								<div class="col-xs-3">
									<input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad Nacimiento" value="<?php echo $dni['Lugarnacimiento']; ?>" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="comarca" name="comarca" class="form-control" placeholder="Comarca" value="<?php echo $dni['Provincia']; ?>" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="pais" name="pais" class="form-control" placeholder="Pais" value="<?php echo $dni['Nacionalidad']; ?>" readonly/>
								</div>

							</br></br></br>

								<div class="col-xs-2">
									<input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" placeholder="Fecha Nacimiento" value="<?php echo $dni['Fechanacimiento']; ?>" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="Nombrepadres" name="Nombrepadres" class="form-control" placeholder="Nombre del padre" value="<?php echo $dni['Hijode']; ?>" readonly/>
								</div>

<!-- 								<div class="col-xs-3">
									<input type="text" id="Nombremadre" name="Nombremadre" class="form-control" placeholder="Nombre de la madre"/>
								</div> -->

								
								<div class="col-xs-4">
									<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion" value="<?php echo $dni['Lugardomicilio']; ?>" readonly/>
								</div>

								</br></br></br>

								<div class="col-xs-4">
									<input type="text" id="municipio" name= "municipio" class="form-control" placeholder="Municipio" value="<?php echo $dni['Domicilio']; ?>" readonly/>
								</div>

							
<!-- 								<div class="col-xs-3">
									<input type="text" id="comarca" name="comarca" class="form-control" placeholder="Comarca"/>
								</div>

								
								<div class="col-xs-3">
									<input type="text" id="pais" name="pais" class="form-control" placeholder="Pais"/>
								</div> -->

								
								<div class="col-xs-2">
										<input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono"/>
								</div>		

				

								</br></br></br>

								<div class="col-xs-2">
									<input type="text" id="clase" name="clase" class="form-control" placeholder="Clase de Permiso" value="<?php echo $datos_permiso['Tipopermiso']; ?>" readonly/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="pais" name="pais" class="form-control" placeholder="Pais de Expedición" value="<?php echo $datos_permiso['Pais']; ?>" readonly/>
								</div>	

								<div class="col-xs-2">
									<input type="text" name="altura" id="altura" class="form-control" placeholder="Altura" value=""/>
								</div>

								<div class="col-xs-2">
									<input type="text" name="peso" id="peso" class="form-control" placeholder="Peso" value=""/>
								</div>
				
								<div class="radio">
			
									<label>
										<h4>Sexo &nbsp</h4>
									</label>

									<label>
								
									<input type="radio" name="sexo" id="sexo" value="Hombre" checked>
										Hombre &nbsp
									</label>

									<label>
								
									<input type="radio" name="sexo" id="sexo" value="Mujer" checked>
										Mujer
									</label>
				
								</div>
							</div>