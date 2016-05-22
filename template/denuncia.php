								<div class="col-xs-2">
									<label class="sr-only" for="Denuncia Número"></label>
										<input type="text" id="denumero" name= "denumero" class="form-control" placeholder="denumero" readonly/>
								</div>
											
								<div class="col-xs-2">
									<input type="text" name= "diadenuncia" id="diadenuncia" class="form-control" placeholder="Dia" value="<?php echo $fecha; ?>" readonly/>
								</div>

								<div class="col-md-2">
									<input type="text" name= "horadenuncia" id="horadenuncia" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="denunciaLugar" name= "lugar" class="form-control" placeholder="Lugar" readonly />
								</div>	

								</br></br></br>

								<div class="col-xs-2">		
									<input type="text" name= "matricula" id="matricula" class="form-control" placeholder="Matricula" value="<?php echo $vehiculo['Matricula']; ?>" readonly/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="marca" name="marca" class="form-control" placeholder="Marca" value="<?php echo $vehiculo['Marca']; ?>" readonly/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo" value="<?php echo $vehiculo['Modelo']; ?>" readonly/>
								</div>	

								<!-- <div class="col-xs-3">
									<input type="text" id="tipo" name="tipo" class="form-control" placeholder="Tipo" value="<?php echo $vehiculo['Tipo']; ?>" readonly />
								</div>			 -->
												
								</br></br></br>

								
								<div class="col-xs-3">
									<input type="text" id="color" name="color" class="form-control" placeholder="Color" value="<?php echo $vehiculo['Color']; ?>" readonly/>
								</div>	
								
								<div class="col-xs-2">
									<input type="text" name= "articulo" class="form-control" placeholder="Artículo Infracción" value=""/>
								</div>


								<div class="col-xs-4">

									<select class="form-control">
										<option value="">Reglamento General de Circulación</option>
									  	<option value="">Ordenanza Municipal de Civismo</option>
									 	<option value="">Otras</option>
									  				 
									</select>

								</div>

							  	</br></br></br>

							  	<div class="panel panel-success">
									<div class="panel-heading">
										<div class="explicacion">
											<label><h3>Infracción</h3></label>
											</br>
											<textarea class="form-control" rows="2">
											</textarea>
										</div>

										</br></br>


									</div>
								</div>

								
								<div class="panel panel-success">
									<div class="panel-heading">
										<div id="conductor">
											<h3>Persona Denunciada</h3>
										</div>	

									</div>	
								</div>

								</br>		
								
								<div class="col-xs-3">
									<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $dni['Nombre']; ?>" readonly/>
								</div>

								<div class="col-xs-2">
								<input type="text" id="apellido1" name="apellido1" class="form-control" placeholder="Primer Apellido" value="<?php echo $dni['Primerapellido']; ?>" readonly/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="apellido2" name="apellido2" class="form-control" placeholder="Segundo Apellido" value="<?php echo $dni['Segundoapellido']; ?>" readonly/>
								</div>
								

								<div class="col-xs-3">
									<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion" value="<?php echo $dni['Domicilio']; ?>" readonly/>
								</div>

							</br></br></br>
					
								<div class="col-xs-4">
									<input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad" value="<?php echo $dni['Lugardomicilio']; ?>" readonly/>
								</div>

							
								<div class="col-xs-2">
									<input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia" value="<?php echo $dni['Provincia']; ?>" readonly/>
								</div>

								
								<div class="col-xs-2">
									<input type="text" id="codiPostal" name="codiPostal" class="form-control" placeholder="C.Postal"/>
								</div>
								
								<div class="col-xs-2">
									<input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" placeholder="Fecha Nacimiento" value="<?php echo $dni['Fechanacimiento']; ?>" readonly/>
								</div>

								</br></br></br>
							
								<!-- <div class="col-xs-4">

									<select class="form-control">
										<option value="">Tipo de documento</option>
							  			<option value="">DNI</option>
							 			<option value="">NIE</option>
							  			<option value="">PASAPORTE</option>
							  			<option value="">CARNET DE CONDUCIR</option>
							  		</select>

			  					</div> -->

			  					<div class="col-xs-3">
									<input type="text" id="número" name="número" class="form-control" placeholder="Número" value="<?php echo $dni['Num']; ?>" readonly/>
								</div>	

								<div class="col-xs-2">
									<input type="text" id="clase" name= "clase" class="form-control" placeholder="Tipo Carnet" value="<?php echo $permiso['Tipopermiso']; ?>" readonly />
								</div>

								</br></br></br>

								<div class="panel panel-success">
									<div class="panel-heading">
										<div id="conductor">
											<h3>Titular del vehículo</h3>
										</div>	

										</div>	
									</div>

								</br>

								<div class="col-xs-3">
									<input type="text" id="titularnombre" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $titular['Nombre']; ?>" readonly />
								</div>

								<div class="col-xs-2">
									<input type="text" id="apellido1" name="apellido1" class="form-control" placeholder="Primer Apellido" value="<?php echo $titular['Primerapellido']; ?>" readonly/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="apellido2" name="apellido2" class="form-control" placeholder="Segundo Apellido" value="<?php echo $titular['Segundoapellido']; ?>" readonly/>
								</div>
								
								<div class="col-xs-3">
									<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion" value="<?php echo $titular['Domicilio']; ?>" readonly/>
								</div>

								</br></br></br>
						
								<div class="col-xs-4">
									<input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad" value="<?php echo $titular['Lugardomicilio']; ?>" readonly/>
								</div>

								
								<div class="col-xs-3">
									<input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia" value="<?php echo $titular['Provincia']; ?>" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" placeholder="Fecha Nacimiento" value="<?php echo $titular['Fechanacimiento']; ?>" readonly/>
								</div>

								</br></br></br>

								<div class="col-xs-2">
									<input type="text" id="codiPostal" name="codiPostal" class="form-control" placeholder="C.Postal"/>
								</div>
								
			
								<!-- <div class="col-xs-4">

									<select class="form-control">
										<option value="">Tipo de documento</option>
						  				<option value="">DNI</option>
						 				<option value="">NIE</option>
						  				<option value="">PASAPORTE</option>
						  				<option value="">CARNET DE CONDUCIR</option>
						  			</select>

						  		</div> -->

						  		<div class="col-xs-2">
									<input type="text" id="número" name="número" class="form-control" placeholder="DNI" value="<?php echo $titular['Num']; ?>" readonly/>
								</div>	

															
								<div class="col-xs-2">
									<input type="text" id="clase" name= "clase" class="form-control" placeholder="Tipo Carnet" value="<?php echo $permiso['Tipopermiso']; ?>" readonly/>
								</div>


								</br></br></br>