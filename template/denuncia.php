								<div class="col-xs-2">
									<label class="sr-only" for="Denuncia Número"></label>
										<input type="text" id="denumero" name= "denumero" class="form-control" placeholder="denumero" value="<?php echo $_SESSION['']; ?>" readonly/>
								</div>
											
								<div class="col-xs-2">
									<input type="text" name= "diadenuncia" id="diadenuncia" class="form-control" placeholder="Dia" value="<?php echo $fecha; ?>" readonly/>
								</div>

								<div class="col-md-2">
									<input type="text" name= "horadenuncia" id="horadenuncia" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" name= "lugar" class="form-control" placeholder="Lugar" value=""/>
								</div>	

								</br></br></br>

								<div class="col-xs-2">		
									<input type="text" name= "matricula" id="matricula" class="form-control" placeholder="Matricula" value="">
								</div>

								<div class="col-xs-2">
									<input type="text" id="marca" name="marca" class="form-control" placeholder="Marca"/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo"/>
								</div>	

								<div class="col-xs-3">
									<input type="text" id="tipo" name="tipo" class="form-control" placeholder="Tipo"/>
								</div>			
												
								</br></br></br>

								
								<div class="col-xs-3">
									<input type="text" id="color" name="color" class="form-control" placeholder="Color"/>
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
									<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"/>
								</div>

								<div class="col-xs-2">
								<input type="text" id="apellido1" name="apellido1" class="form-control" placeholder="Primer Apellido"/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="apellido2" name="apellido2" class="form-control" placeholder="Segundo Apellido"/>
								</div>
								

								<div class="col-xs-3">
									<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion" value=""/>
								</div>

							</br></br></br>
					
								<div class="col-xs-4">
									<input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad"/>
								</div>

							
								<div class="col-xs-2">
									<input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia"/>
								</div>

								
								<div class="col-xs-2">
									<input type="text" id="codiPostal" name="codiPostal" class="form-control" placeholder="C.Postal"/>
								</div>
								
								<div class="col-xs-2">
									<input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" placeholder="Fecha Nacimiento"/>
								</div>

								</br></br></br>
							
								<div class="col-xs-4">

									<select class="form-control">
										<option value="">Tipo de documento</option>
							  			<option value="">DNI</option>
							 			<option value="">NIE</option>
							  			<option value="">PASAPORTE</option>
							  			<option value="">CARNET DE CONDUCIR</option>
							  		</select>

			  					</div>

			  					<div class="col-xs-3">
									<input type="text" id="número" name="número" class="form-control" placeholder="Número"/>
								</div>	

								<div class="col-xs-2">
									<input type="text" id="clase" name= "clase" class="form-control" placeholder="Tipo Carnet " />
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
									<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="apellido1" name="apellido1" class="form-control" placeholder="Primer Apellido"/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="apellido2" name="apellido2" class="form-control" placeholder="Segundo Apellido"/>
								</div>
								
								<div class="col-xs-3">
									<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion" value=""/>
								</div>

								</br></br></br>
						
								<div class="col-xs-4">
									<input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad"/>
								</div>

								
								<div class="col-xs-3">
									<input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia"/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" placeholder="Fecha Nacimiento"/>
								</div>

								</br></br></br>

								<div class="col-xs-2">
									<input type="text" id="codiPostal" name="codiPostal" class="form-control" placeholder="C.Postal"/>
								</div>
								
			
								<div class="col-xs-4">

									<select class="form-control">
										<option value="">Tipo de documento</option>
						  				<option value="">DNI</option>
						 				<option value="">NIE</option>
						  				<option value="">PASAPORTE</option>
						  				<option value="">CARNET DE CONDUCIR</option>
						  			</select>

						  		</div>

						  		<div class="col-xs-2">
									<input type="text" id="número" name="número" class="form-control" placeholder="Número"/>
								</div>	

															
								<div class="col-xs-2">
									<input type="text" id="clase" name= "clase" class="form-control" placeholder="Tipo Carnet" />
								</div>


								</br></br></br>