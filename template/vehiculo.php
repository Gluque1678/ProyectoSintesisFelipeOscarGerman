
						<div class="col-xs-4">
							<input type="text" id="vehiculolugar" name="lugar" class="form-control" placeholder="Lugar" readonly />
						</div>
					
						<div class="col-xs-3">
							<input type="text" name= "dia" id="dia" class="form-control" placeholder="Fecha" value="<?php echo $fecha; ?>" readonly/>
						</div>
						
						<div class="col-xs-2">
							<input type="text" name= "hora" id="hora" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/>
						</div>
						
						</br></br></br>

						<div class="col-xs-4">
							<input type="text" id="lugarinmob" name="lugarinmob" class="form-control" placeholder="Lugar de la Immobilización" readonly/>
						</div>

						<div class="col-xs-2">
							<input type="text" id="denuncia" name="denuncia" class="form-control" placeholder="Denuncia número" readonly/>
						</div>

						<div class="col-xs-3">
							<input type="text" id="immobilizacion" name="immobilizacion" class="form-control" placeholder="Motivo de la immobilizacion"/>
						</div>

						</br></br><br>
						
						<div class="col-xs-3">
							<input type="text" id="sistema" name="sistema" class="form-control" placeholder="Sistema de la Immobilización" />
						</div>
						
						<div class="col-xs-2">
							<input type="text" id="kilometros" name="kilometros" class="form-control" placeholder="Kms"/>
						</div>

						<div class="col-xs-4">

							<label>
							</br></br></br>
							<input type="checkbox" name="Tipodenuncia" id="Tipodenuncia" value="municipal" checked style="margin-left: -480px"> Municipal&nbsp
							<input type="checkbox" name="Tipodenuncia" id="Tipodenuncia" value="transito"> Servicio Catalán de Tránsito
							</label>
				
						</div>

						</br></br></br></br></br>

						<div class="panel panel-success">
							<div class="panel-heading">		
								<div id="vehiculo">
									<h3>Datos del vehículo</h3>
									
								</div>
							</div>
						</div>

						</br>

						<div class="col-xs-2">
							<input type="text" id="matricula" name="matricula" class="form-control" placeholder="Matrícula/bastidor" value="<?php echo $vehiculo['Matricula']; ?>" readonly/>
						</div>	

						<div class="col-xs-2">
							<input type="text" id="marca" name="marca" class="form-control" placeholder="Marca" value="<?php echo utf8_encode(ucfirst($vehiculo['Marca'])); ?>" readonly/>
						</div>

						<div class="col-xs-2">
							<input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo" value="<?php echo utf8_encode(ucfirst($vehiculo['Modelo'])); ?>" readonly/>
						</div>	

						<div class="col-xs-3">
							<input type="text" id="color" name="color" class="form-control" placeholder="Color" value="<?php echo utf8_encode(ucfirst($vehiculo['Color'])); ?>" readonly/>
						</div>	

						</br></br></br>

						<div class="col-xs-3">
							<input type="text" id="nomtitular" name="nomtitular" class="form-control" placeholder="Nombre titular" value="<?php echo utf8_encode(ucfirst($titular['Nombre'])); ?>" readonly />
						</div>	
							
						<div class="col-xs-3">
							<input type="text" id="1apelltitular" name="1apelltitular" class="form-control" placeholder="1º Apellido titular" value="<?php echo utf8_encode(ucfirst($titular['Primerapellido'])); ?>" readonly />
						</div>

						<div class="col-xs-3">
							<input type="text" id="2apelltitular" name="2apelltitular" class="form-control" placeholder="2º Apellido titular" value="<?php echo utf8_encode(ucfirst($titular['Segundoapellido'])); ?>" readonly />
						</div>	

						</br></br></br>

						<div class="col-xs-4">
							<input type="text" id="diretitu" name="diretitu" class="form-control" placeholder="Dirección del titular" value="<?php echo utf8_encode(ucfirst($titular['Domicilio'])); ?>" readonly />
						</div>	

					</br></br></br>

					<div class="panel panel-success">
						<div class="panel-heading">
							<div id="disposicion">
								<h3>Vehículo a disposición de:</h3>
							</div>
						</div>
					</div>

					<div class="col-xs-3">
					<select class="form-control" name="Vehiculodisposicion">
	  				<option value="Juzgado de Guardia" name="Vehiculodisposicion" selected>Juzgado de Guardia</option>
	 				<option value="Titular" name="Vehiculodisposicion" >Titular</option>
	  				<option value="Otro conductor habilitado" name="Vehiculodisposicion" >Otro conductor habilitado</option>
	  				<option value="Otros" name="Vehiculodisposicion" >Otros</option>
	 				</select>
					</div>

					</br></br></br>

					<div class="panel panel-success">
						<div class="panel-heading">
							<div class="Rotura">
								<label for="firmas"><h3>Rotura de la immobilización:</h3></label>


							</div>
						</div>
					</div>

					<div class="">
						<div class="col-xs-2">
							<input type="date" id="fecharot" name="fecharot" class="form-control" placeholder="Fecha"/>
						</div>

						<div class="col-xs-2">
							<input type="time" id="horarot" name="horarot" class="form-control" placeholder="Hora"/>
						</div>
						
						<div class="col-xs-2">		
							<input type="text" name= "agentes" id="agentes" class="form-control" placeholder="Agente1" value="<?php echo $tip; ?>" readonly/>
						</div>


						<!-- <div class="col-xs-2">		
							<input type="text" name= "agente2" id="agentes" class="form-control" placeholder="Agente2" value="<?php echo $tip; ?>" readonly/>
						</div> -->


						<div class="col-xs-4">
							<input type="text" id="atestadorot" name="atestadorot" class="form-control" placeholder="atestado desobediencia grave nº" />
							</br>
						</div>	
						
							</br></br></br>
					
					</div>

						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="col-xs-12">
									<label class="observaciones" for="observaciones">Observaciones</label>
									</br>
									<textarea class="form-control" rows="1"></textarea>
								</div>

								</br></br></br></br>

							</div>
						</div>

					<div class="panel panel-success">
						<div class="panel-heading">		
							<div id="Levantamiento">
								<h3>Motivo del levantamiento de la inmobilitzación:</h3>
							</div>
						</div>
					</div>


					<div class="col-xs-4">
							<select id="motivolevantamiento" class="form-control" name="Motivolevantamiento">
							
								<option value="0" name="Motivolevantamiento" selected>Desaparecer las causas que lo motivaron</option>
				  				<option value="1" name="Motivolevantamiento">Hacerse cargo otro conductor habilitado</option>
				 				<option value="2" name="Motivolevantamiento">Ingreso al depósito por transcurrir más de 24 horas</option>
			  				
			 				</select>
					</div>


					<div id="Rotura1">
						<div class="">
							<div class="col-xs-2">
								<input type="date" id="fechalevantamiento " name="fechalevantamiento" class="form-control" placeholder="Fecha"/>
							</div>

							<div class="col-xs-2">
								<input type="time" id="horalevantamiento" name="horalevantamiento" class="form-control" placeholder="Hora"/>
							</div>

				    						
							<div class="col-xs-2">		
								<input type="text" name= "agentes" id="agentes" class="form-control" placeholder="Agente1" value="<?php echo $tip; ?>" readonly/>
							</div>


							<!-- <div class="col-xs-2">		
								<input type="text" name= "agente2" id="agentes" class="form-control" placeholder="Agente2" value="<?php echo $tip; ?>" readonly/>
							</div> -->


						<div id="segundoconductor">
							<div class="col-xs-4">
								<label><h4>Persona que se hace cargo del vehículo</h4></label>
							</div>

							</br></br></br></br>

							<div class="col-xs-2">
								<input type="text" id="nombresustituto" name= "nombresustituto" class="form-control" placeholder="Nombre " />
							</div>	
					
							<div class="col-xs-2">
								<input type="text" id="apellido1" name= "apellido1" class="form-control" placeholder="Primer Apellido" />
							</div>	
							<div class="col-xs-2">
								<input type="text" id="apellido1" name= "apellido1" class="form-control" placeholder="Segundo Apellido" />
							</div>	

													
							<div class="col-xs-2">
								<input type="text" id="numerosustituto" name="numerosustituto" class="form-control" placeholder="Permiso de conducir Nº" />
							</div>	

							<div class="col-xs-1">
								<input type="text" id="clasesustituto" name= "clasesustituto" class="form-control" placeholder="Clase " />
							</div>	

							<div class="col-xs-2">
								<input type="text" id="pais" name= "pais" class="form-control" placeholder="Pais Expedición " />
							</div>	
						</div>
					</div>
				</div><br/><br/><br/><br/>