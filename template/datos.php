							<div class="col-xs-12">
							<div class="col-xs-2">
				
								<label class="sr-only" for="NºDiligencias"></label>
								<input type="text" id="Numdiligencias" name= "Numdiligencias" class="form-control" placeholder="Número de Diligencias" value="<?php echo $diligencia; $_SESSION['diligencia']=$diligencia; ?>" readonly />
						
							</div>
					
								<div class="col-xs-2">		
									<input type="text" name= "agentes" id="agentes" class="form-control" placeholder="Agente1" value="<?php echo $tip; ?>" readonly/>
								</div>

<!-- 								<div class="col-xs-1">		
								<input type="text" name= "agente2" id="agentes" class="form-control" placeholder="Agente2" value="<?php echo $tip; ?>" readonly/>
								</div> -->
		
								<div class="col-xs-2">
								<input type="text" name= "dia" id="dia" class="form-control" placeholder="Fecha" value="<?php echo $fecha; ?>" readonly/>
								</div>

								<div class="col-md-2">
								<input type="text" name= "hora" id="hora" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="cuerpo" name= "cuerpo" class="form-control" placeholder="Agente Cuerpo" value="Guardia Urbana" readonly />
								</div>

								</br></br></br>

								<div class="col-xs-4">
									<input type="text" id="datoslugar" name= "datoslugar" class="form-control" placeholder="Direccion(Tipo de via,nombre y número)" value=""/>
								</div>

								<div class="col-xs-4">
									<input type="text" id="municipio" name= "municipio" class="form-control" placeholder="Municipio" value="L'Hospitalet de Llobregat" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="provincia" name= "provincia" class="form-control" placeholder="Provincia" value="Barcelona" readonly />
								</div>

								<div style="height:500px;">
									
								</div>
						</div>