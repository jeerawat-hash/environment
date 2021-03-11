<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?php echo $page_name; ?></h4> 
					</div>
					<div class="row">




                    <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row card-tools-still-right">
										<h4 class="card-title">แผนที่การปฏิบัติงาน</h4> 
									</div>
									<p class="card-category">
									แผนที่แสดงข้อมูลตำแหน่งถังขยะที่ถูกจัดเก็บแล้ว</p>
								</div>
								<div class="card-body">
									 


 	 
										       <div id="map"></div>
								 	 


								</div>
							</div>
						</div>

 


						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">กลุ่มผู้ปฏิบัติงานขณะนี้</h4>
								</div>
								<div class="card-body">
								<div class="row">
										<div class="col-md-12">
											<div class="table-responsive table-hover table-sales">
												<table class="table">
													<tbody>
														<tr>
															<td>
																<div class="flag">
																	<img src="https://environment.webclient.me/assets/img/flags/id.png" alt="indonesia">
																</div>
															</td>
															<td>Indonesia</td>
															<td class="text-right">
																2.320
															</td>
															<td class="text-right">
																42.18%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="https://environment.webclient.me/assets/img/flags/us.png" alt="united states">
																</div>
															</td>
															<td>USA</td>
															<td class="text-right">
																240
															</td>
															<td class="text-right">
																4.36%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="https://environment.webclient.me/assets/img/flags/au.png" alt="australia">
																</div>
															</td>
															<td>Australia</td>
															<td class="text-right">
																119
															</td>
															<td class="text-right">
																2.16%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="https://environment.webclient.me/assets/img/flags/ru.png" alt="russia">
																</div>
															</td>
															<td>Russia</td>
															<td class="text-right">
																1.081
															</td>
															<td class="text-right">
																19.65%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="https://environment.webclient.me/assets/img/flags/cn.png" alt="china">
																</div>
															</td>
															<td>China</td>
															<td class="text-right">
																1.100
															</td>
															<td class="text-right">
																20%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="https://environment.webclient.me/assets/img/flags/br.png" alt="brazil">
																</div>
															</td>
															<td>Brasil</td>
															<td class="text-right">
																640
															</td>
															<td class="text-right">
																11.63%
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div> 
									</div>
								</div>
							</div>
						</div>

						




						 
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					 
					<div class="copyright ml-auto">
						2021, Create by <i class="fa fa-heart heart text-danger"></i> by <a href="#">p.jeerawat</a>
					</div>				
				</div>
			</footer>
		</div>










    <!-- Replace the value of the key parameter with your own API key. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3VNVg3bE8r4H1-42CdDnvoK-F1KvB8lM&callback=initMap" async defer></script> 
	<script>

var map;
function initMap() {


 
    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 20,
      center: { lat: 13.59934, lng: 100.59675 },
      mapTypeId: "terrain",
    });

    var markersArray = [];

  
  setInterval(function(){ 
     
        
    $.get("https://environment.webclient.me/old/index.php/Qrcontroller/getlocation",function(data){

      var obj = JSON.parse(data);


      for (var i = 0; i < markersArray.length; i++ ) {
          markersArray[i].setMap(null);
      }
      markersArray.length = 0;
 

      for (let index = 0; index < obj.length; index++) { 
        


        const svgMarker = {
          path:
            "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
          fillColor: obj[index].Color,
          fillOpacity: 0.6,
          strokeWeight: 0,
          rotation: 0,
          scale: 2,
          anchor: new google.maps.Point(15, 30),
        };


        var marker = new google.maps.Marker({
          position: {lat : parseFloat(obj[index].Lat) ,lng : parseFloat(obj[index].Lot) },
          map: map,
          label : obj[index].Name,
          title: obj[index].Name, 
          LineName : obj[index].FName,
          Image : obj[index].Image,
          icon : svgMarker,
          ID : obj[index].TransID/*,
          icon: {
                  url: obj[index].Image, // url
                  scaledSize: new google.maps.Size(50, 50), // scaled size
                  origin: new google.maps.Point(0,0), // origin
                  anchor: new google.maps.Point(0, 0) // anchor
              } */
        }); 


        markersArray.push(marker);


            marker.addListener('click', function() {
 
            
              //alert(obj[index].ID + " " + marker.LineName);
              var id = obj[index].TransID;
              
              $.post("https://environment.webclient.me/old/index.php/Qrcontroller/GetDatabyID",{
                id : id
              },function(data){
                // alert(data);
                var obj = JSON.parse(data);
                var Lat = obj[0].Lat;
                var Lot = obj[0].Lot;
                var Image = obj[0].Image;
                var Comment = obj[0].Comment;
                var Name = obj[0].Name;
                var FName = obj[0].FName;
                var Weight = obj[0].Weight;

 
                $("#exampleModal").find("#exampleModalLabel").text(Name);
                $("#exampleModal").find("#img").attr("src",Image);
                $("#exampleModal").find("#Name").text(FName);
                $("#exampleModal").find("#Lat").text(Lat);
                $("#exampleModal").find("#Lot").text(Lot);
                $("#exampleModal").find("#Comment").text(Name + " น้ำหนัก "+ Weight + " กิโลกรัม");
                $("#exampleModal").modal("show");

              });
            });
            
        clickroute(parseFloat(obj[index].Lat),parseFloat(obj[index].Lot));
      }

      });








      var html = "";
 
      $.get("https://environment.webclient.me/old/index.php/Qrcontroller/GetDataSummary",function(data){

        var obj = JSON.parse(data);
          
          console.log(obj);

          for (var i = 0; i < obj.length; i++) {

            html += "<tr>"+
              "<td>"+obj[i].FName+"</td>"+
              "<td>"+obj[i].StampDate+"</td>"+
              "<td>"+obj[i].CountWei+" ถัง</td>"+
              "<td>"+obj[i].SumWei+" กิโลกรัม</td></tr>";

          }
          
           $("#pickup-detail").html(html);

      });

     


 


  }, 3000);






 







 




	function clickroute(lati,long) {
		var latLng = new google.maps.LatLng(lati, long); //Makes a latlng
		map.panTo(latLng); //Make map global
		return false;
	}

   
}


    </script>
 






        <script>
		/*
            $(function(){

                $('#basic-datatables').DataTable({ });


            });
			*/
        </script>