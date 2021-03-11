    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
   

	
		
    <style type="text/css">
    	/* Set the size of the div element that contains the map */
#map {
  height: 600px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
    </style>
 
		<div class="main-panel">

			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">รายละเอียดการจัดเก็บ</h4>
						<ul class="breadcrumbs">
							 
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">

									 	<center> 	 
										       <div id="map"></div>
								 		</center>
								</div>
								<div class="card-body">
									 
							</div>
						</div>

 
					</div>
				</div>

				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">รายละเอียดการจัดเก็บ</h4>
						<ul class="breadcrumbs">
							 
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								 
								<div class="card-body">
									<div class="table-responsive text-center">
										<table id="pickup" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th> <center>  ผู้จัดเก็บ  </center>   </th>
													<th> <center>  วันที่    </center> </th>
													<th> <center>  จำนวนการเก็บ </center>  </th>
													<th> <center>  น้ำหนักรวม   </center>  </th> 
												</tr>
											</thead>
											 
											<tbody id="pickup-detail"> 

                        
									

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
		 <!--- MODAL -->
 





 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="container">
          <div class="row">
            <div class="col-6">ผู้จัดเก็บ</div>
            <div class="col-6"><label id="Name"></label></div>
          </div>
          <div class="row text-center">
            <div class="col-12"><img src="" id="img" width="30%"></div>
          </div>
          <div class="row">
            <div class="col-3">รายละเอียด</div>
            <div class="col-9"><label id="Comment"></label></div>
          </div>
          <div class="row">
            <div class="col-6">Lat</div>
            <div class="col-6"><label id="Lat"></label></div>
          </div>
          <div class="row">
            <div class="col-6">Lot</div>
            <div class="col-6"><label id="Lot"></label></div>
          </div>
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button> 
      </div>
    </div>
  </div>
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
     
        
        $.get("https://environment.webclient.me/index.php/Qrcontroller/getlocation",function(data){

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
              
              $.post("https://environment.webclient.me/index.php/Qrcontroller/GetDatabyID",{
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
 
      $.get("https://environment.webclient.me/index.php/Qrcontroller/GetDataSummary",function(data){

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
 