						<div class="col-xs-12">
						
							<div class="col-xs-2">
									<input type="text" id="imputadonombre" name= "nombre" class="form-control" placeholder="Nombre" value="<?php echo $dni['Nombre']; ?>" readonly />
							</div>

							<div class="col-xs-2">
								<input type="text" id="imputado1" name= "apellido1" class="form-control" placeholder="Primer apellido" value="<?php echo $dni['Primerapellido']; ?>" readonly />
							</div>

						<div class="col-xs-2">
								<input type="text" id="imputado2" name= "apellido2" class="form-control" placeholder="Segundo apellido" value="<?php echo $dni['Segundoapellido']; ?>" readonly  />
						</div>

						
						<div class="col-xs-3">
								<input type="text" id="imputadonacionalidad" name= "nacionalidad" class="form-control" placeholder="Nacionalidad" value="<?php echo $dni['Nacionalidad']; ?>" readonly  />
						</div>

						</br></br></br>
							
						<div class="col-xs-3">
						
							<select class="form-control">
								<option value="">Tipo de documento</option>
				  				<option value="" selected>DNI</option>
				 				<option value="">NIE</option>
				  				<option value="">PASAPORTE</option>
				  				<option value="">CARNET DE CONDUCIR</option>
			  				</select>
						</div>

						<div class="col-xs-2">
							<input type="text" id="imputadonumero" name= "imputadonumero" class="form-control" placeholder="Número" value="<?php echo $dni['Num']; ?>" readonly />
						</div>

						<div class="col-xs-2">
							<input type="text" id="imputadodopais" name= "imputadodopais" class="form-control" placeholder="Pais" value="España" readonly  />
						</div>
							
						<div class="col-xs-2">
							<input type="text" id="imputadofecha" name= "fecha" class="form-control" placeholder="Fecha Nacimiento" value="<?php echo $dni['Fechanacimiento']; ?>" readonly  />
						</div>

					</div>

						</br></br></br></br></br>

						<div class="panel panel-success">
							<div class="panel-heading">
								<div id="imputacion">
									<h3>Motivo de la imputacion</h3>
								</div>			
							</div>
						</div>		
						
						<div class="col-xs-12">
							<textarea  class="form-control" rows="1" id="Motivoimputacion" name="Motivoimputacion"></textarea>
						</div>
									
						</br></br>

						<div class="panel panel-success">
							<div class="panel-heading">
								<div id="derechos">
									<h3> Derechos que quiere  ejercer la persona imputada</h3>
								</div>
							</div>
						</div>	

						
						<div class="col-xs-12">
							<input type="radio" name="oficio" id="oficio" value="oficio" checked/> Quiero un abogado de oficio&nbsp&nbsp
							<input type="radio" name="renuncio" id="renuncio" value="renuncio"/> Renuncio a la asistencia letrada
						</div>	

						</br></br>
	
						<div class="col-xs-5">
							<input type="text" id="abogado" name= "privado" class="form-control" placeholder="Quiero que me asista el siguiente abogado" value="" />
						</div>
							
						<div class="col-xs-5">
							<input type="text" id="intérprete" name= "intérprete" class="form-control" placeholder="Quiero que me asista un intérprete de"value="" />
						</div>
		
						
						</br></br>
	
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="col-xs-12">
									<label><h3>Observaciones</h3></label>
									</br></br>
									<textarea class="form-control" rows="1" name="observaciones"></textarea>
								</div>
						
						</br></br></br>

							</div>
						</div>

						</br></br>

						<div class="panel panel-success">
							<div class="panel-heading">
								<div id="compareciencia">
									<h3>Datos de la compareciencia por causa penal(imputado/ada)</h3>
								</div>
							</div>
						</div>
							
						<div class="col-xs-12">
							<div class="citacion">
								<div class="col-xs-2">
									<input type="date" id="diacomparecer" name= "diacomparecer" class="form-control" placeholder="Fecha"/>
								</div>

								<div class="col-xs-2">
									<input type="time" id="horacomparecer" name= "horacomparecer" class="form-control" placeholder="Hora" />
								</div>
										
							</div>

							<div class="col-xs-3">
								<select class="form-control">
								<option value="">Selecciona una opción</option>
				  				<option value="" selected>Juzgado de Instrucción 1</option>
				 				<option value="">Juzgado de Instrucción 2</option>
				  				<option value="">Juzgado de Instrucción 3</option>
				  				<option value="">Juzgado de Instrucción 4</option>
				  				<option value="">Juzgado de Instrucción 5</option>
								</select>
							</div>

			
							<label><h4>Dirección: Av.Carrilet,número 2(edificio H) </br> Hospitalet de LLobregat Teléfono 935548145</h4></label>		
					
						</div>
						<br /><br /><br />