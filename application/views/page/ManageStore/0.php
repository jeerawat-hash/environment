
<input type="text" id="GetFollowData" readonly value="0" >

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
								<div class="card-body" id="map" style="height: 480px;">
									 
 
								</div>
							</div>
						</div>

 


						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">กลุ่มผู้ปฏิบัติงานขณะนี้</h4>
									<p><button  class="btn btn-success" id="btnunfollow" > ยกเลิกการติดตาม </button></p>
									
								</div>
								<div class="card-body">
								<div class="row">
										<div class="col-md-12">
											<div class="table-responsive table-hover table-sales">
												<table class="table">
													<tbody id="WorkGroupTable">
														  
														 



													</tbody>
												</table>
											</div>
										</div> 
									</div>
								</div>
							</div>
						</div>


            <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">รายละเอียดการจัดเก็บประจำวัน</h4> 
									
								</div>
								<div class="card-body">
								<div class="row">
										<div class="col-md-12">
											<div class="table-responsive table-hover table-sales">
												<table class="table">
													<tbody id="TransactionTableDetail">
														  



														 



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
						2021, Create by <i class="fa fa-heart heart text-danger"></i> by <a href="#">DEV.</a>
					</div>				
				</div>
			</footer>
		</div>










    <!-- Replace the value of the key parameter with your own API key. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3VNVg3bE8r4H1-42CdDnvoK-F1KvB8lM&callback=initMap" async defer></script> 
	
	<script>
		$(function(){

			$("#WorkGroupTable").on("click",".btnfollow",function(){

				var dataId = $(this).attr("data-id");
				var name = $(this).attr("data-name");
				  
				//alert( $("#GetFollowData").val() );
				var data = $("#GetFollowData").val();
  
						$("#GetFollowData").val(dataId);
						swal({
							title: "กำลังติดตาม "+name,
							text: " ",
							icon: "success",
							buttons: {
								confirm: {
									text: "ตกลง",
									value: true,
									visible: true,
									className: "btn btn-success",
									closeModal: true
								}
							}
						}); 

			});

			$("#btnunfollow").on("click",function(){
  
					$("#GetFollowData").val(0);
					swal({
						title: "แสดงผลข้อมูลทั้งหมด",
						text: " ",
						icon: "success",
						buttons: {
							confirm: {
								text: "ตกลง",
								value: true,
								visible: true,
								className: "btn btn-success",
								closeModal: true
							}
						}
					}); 

			});

			

		});
	</script>
	
	<script>

var map;
function initMap() {


 
    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: { lat: 13.59934, lng: 100.59675 },
      mapTypeId: "terrain",
	  styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
    });


	
	

    var markersArray = [];

  
  setInterval(function(){ 
    
	
	var GetFollowData = $("#GetFollowData").val(); 

	$.post("https://environment.webclient.me/index.php/ManageStore/GetDataTransaction",{GroupID : GetFollowData},function(data){

      var obj = JSON.parse(data);


      for (var i = 0; i < markersArray.length; i++ ) {
          markersArray[i].setMap(null);
      }
      markersArray.length = 0;
 

      for (let index = 0; index < obj.length; index++) { 
         

        var marker = new google.maps.Marker({
          position: {lat : parseFloat(obj[index].Lat) ,lng : parseFloat(obj[index].Lon) },
          map: map,
          /*label : obj[index].Name,*/
		  label: {text: obj[index].Remark, color: "black"},
          title: obj[index].Remark,  
          /*icon : "https://environment.webclient.me/temp/pin-"+obj[index].Color+".svg",*/
          ID : obj[index].TransacID,
          icon: {
                  url: "https://environment.webclient.me/temp/pin-"+obj[index].Color+".svg", // url
                  scaledSize: new google.maps.Size(50, 50), // scaled size
                  origin: new google.maps.Point(0,0), // origin
                  anchor: new google.maps.Point(0, 0) // anchor
              } 
        }); 


        markersArray.push(marker);

			google.maps.event.addListener(marker, "mouseover", function(evt) {
				var label = this.getLabel();
				label.color="white";
				this.setLabel(label);
			}); 



			/*
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
            */ 
			
			
			if(GetFollowData != 0){

				clickroute(parseFloat(obj[index].Lat),parseFloat(obj[index].Lon));
				map.setZoom(16); 

			}else{
				//map.setZoom(16); 
			}
			 
				



      }

      });








      var html = "";
 
      $.get("https://environment.webclient.me/index.php/ManageStore/GetDataTransactionSummaryDay",function(data){

        var obj = JSON.parse(data);
          
          console.log(obj);

          for (var i = 0; i < obj.length; i++) {

            html += '<tr>';
            html += '<td> <div class="flag">';
            html += '<img  width="10%" src="https://environment.webclient.me/temp/pin-'+obj[i].Color+'.svg"> </div></td>';
            html += '<td>'+obj[i].LicensePlate+'</td>';
            html += '<td class="text-right">';
            html += ''+obj[i].SumCapacity+' ลิตร</td>';
			html += '<td class="text-right">';
            html += ''+obj[i].CountCapacity+' ถัง</td>';
            html += '<td class="text-right">';
            html += '<button  class="btn btn-warning btnfollow" data-id="'+obj[i].VehicleID+'" data-name="'+obj[i].LicensePlate+'" > ติดตาม </button>';
         	html += '</td></tr>';
			
           
				 
          }
          
           $("#WorkGroupTable").html(html);

      });



      var html2 = "";
      
      $.get("https://environment.webclient.me/index.php/ManageStore/GetDataTransactionPickupAll",function(data){

        var obj = JSON.parse(data);
          
          console.log(obj);

          for (var i = 0; i < obj.length; i++) {

            html2 += '<tr>';
            html2 += '<td>'+obj[i].StampDate +'</td>'; 
            html2 += '<td> <div class="flag">';
            html2 += '<img  width="10%" src="https://environment.webclient.me/temp/pin-'+obj[i].Color+'.svg"> </div></td>';
            html2 += '<td>'+obj[i].LicensePlate+'</td>';
            html2 += '<td class="text-right">';
            html2 += ''+obj[i].Remark+'</td>';
            html2 += '<td class="text-right">';
            html2 += ''+obj[i].Trash+' ลิตร</td></tr>';
       
          
          }
          
            $("#TransactionTableDetail").html(html2);

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
            $(function(){

                ///$('#basic-datatables').DataTable({ });
				  
				//$(".SVGICON").attr("src","https://environment.webclient.me/temp/pin-green.svg");

            });
        </script>