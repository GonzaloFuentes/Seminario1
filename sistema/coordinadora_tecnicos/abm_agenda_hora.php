<?php include('pagina_inicio.php'); ?>


<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDyxCvKrtb7cPFUsdQvZ8QCKegl-KrUtJ0"> </script>
<script>
var geocoder;
  var i = new Array();
  
  function initialize(nro) {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 54.644);
    var mapOptions = {
      zoom: 15,
      center: latlng
    }
    i[nro] = new google.maps.Map(document.getElementById('map' + nro), mapOptions);
  }

  function codeAddress(address,nro) {
	 initialize(nro)
	//var address = "Cabildo 1334 Capital Federal Argentina";
    //var address = document.getElementById('address').value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        i[nro].setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: i[nro],
            position: results[0].geometry.location
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }
</script>






<!-- /. NAV SIDE  -->
        <div id="page-wrapper"">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h4>Fecha: 25/05/2017 </h4>   
                        <h4>Horario: 10:00 - 11:00</h4>
						
						
						<br>
						
						<h5> <a href="http://www.duckduckgo.com">Crear nuevo evento</a> &nbsp;&nbsp;(2 Técnicos disponibles de 5)</h5>
                       
		
                    </div>
                </div>
				
			
			
			
				
				
			<!-- Nuevo elemento -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Técnico: Martín Stradivarius #id: 34
                        </div>
                        <div class="panel-body">
                            <p><strong>Presupuestar</strong>
							</br>
							</br><u>Nro Cliente:</u> 34
							</br><u>Contacto:</u> Juan García
							</br><u>Teléfono:</u> 4585-5548
							</br><u>Direccion:</u> Suipacha 750 - 4to C  
							</br><u>Barrio:</u> San Nicolás
							</br><u>Actividad:</u> Instalación cámaras.
							
							
							<div id="map1" style="width: 280px; height: 280px;"></div>

							<script type="text/javascript">
								codeAddress("Suipacha 750 Buenos Aires Argentina","1");
							</script>
							
							

							</p>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-primary">Modificar</a> &nbsp;&nbsp;
							<a href="#" class="btn btn-primary">Eliminar</a>&nbsp;&nbsp;
							<a href="#" class="btn btn-primary">Finalizar</a>
							
                        </div>
                    </div>
                </div>
            </div>
			<!--Fin elemento --> 
			
			
			
			<!-- Nuevo elemento -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Técnico: Guillermo Ricotel #id: 45
                        </div>
                        <div class="panel-body">
							<p><strong>Instalación:</strong> Confirma presupuesto 1745
							</br>
							</br><u>Nro Cliente:</u> 45
							</br><u>Contacto:</u> Mario Perez
							</br><u>Teléfono:</u> 4585-5548
							</br><u>Calle:</u> Alvarez Thomas 1270 - 3ro B
							</br><u>Barrio:</u> Saavedra
							</br><u>Actividad:</u> Instalación cerraduras huella digital.
							<div id="map2" style="width: 280px; height: 280px;"></div>

							<script type="text/javascript">
								codeAddress("Alvarez Thomas 1270 Buenos Aires Argentina","2");
							</script>							
							</p>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-primary">Modificar</a> &nbsp;&nbsp;
							<a href="#" class="btn btn-primary">Eliminar</a>&nbsp;&nbsp;
							<a href="#" class="btn btn-primary">Finalizar</a>
							
                        </div>
                    </div>
                </div>
            </div>
			<!--Fin elemento --> 
			
			
			
			
			<!-- Nuevo elemento -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Técnico: Mariano Macanudo #id: 74
                        </div>
                        <div class="panel-body">
						
						<p><strong>Presupuestar:</strong>
						</br>
							</br><u>Nro Cliente:</u> 74
							</br><u>Contacto:</u> Victor Makarius
							</br><u>Teléfono:</u> 4585-5548
							</br><u>Calle:</u> México 2700 
							</br><u>Barrio:</u> Saavedra
							</br><u>Actividad:</u> Instalación cámaras de seguridad.
							<div id="map3" style="width: 280px; height: 280px;"></div>

							<script type="text/javascript">
								codeAddress("Mexico 2700 Buenos Aires Argentina", "3");
							</script>

							</p>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-primary">Modificar</a> &nbsp;&nbsp;
							<a href="#" class="btn btn-primary">Eliminar</a>&nbsp;&nbsp;
							<a href="#" class="btn btn-primary">Finalizar</a>
							
                        </div>
                    </div>
                </div>
            </div>
			<!--Fin elemento --> 
			
			
			
  <?php include('pagina_fin.php') ?>