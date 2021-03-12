 

 <input type="text" id="BinID" value="<?php echo (isset($_GET["key"])) ? $_GET["key"] : 0; ?>" >


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

 <header class="masthead bg-primary text-white text-center">
   <div class="container d-flex align-items-center flex-column">
       <!-- Masthead Avatar Image-->  
       <img class="masthead-avatar  " src="https://environment.webclient.me/old/assets_qr/assets/img/portfolio/bit.png"  />
       <!-- Masthead Heading-->
       <h4 class="masthead-heading text-uppercase mb-0" id="BinName">       </h4>
       <input  type="text"   id="tgetlo" name="tgetlo"      >
       <input class="input100" type="text" readonly   id="longitude" name="longitude">
       <input class="input100" type="text"  readonly    id="latitude" name="latitude">
       <input class="input100" type="text"  readonly   id="WorkGroupID" name="WorkGroupID"> 
       <br>
        <!--<h4 class="text-uppercase mb-4">สถานที่ : พระประแดง </h4> -->
       <!-- Icon Divider-->
       <div class="divider-custom divider-light">
           <div class="divider-custom-line"></div>
           <div class="divider-custom-icon"><i class="fas fa-archive"></i></div>
           <div class="divider-custom-line"></div>
       </div>
      

       <!-- Masthead Subheading-->
      
       <p class="masthead-subheading font-weight-light mb-0"><button  id="btnsave" class="btn btn-warning"> บันทึกการทำรายการ </button></p>

       <div>
        <h4 class="text-uppercase mb-4"> แจ้งปัญหาถังขยะ </h4> 
        <input class="input100" type="text"  id="ReportComment" name="ReportComment"> 
       </div>





   </div>
</header>


<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
   <div class="container"><small>Copyright © Your Website 2021</small></div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
   <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- Portfolio Modals-->

<script type="text/javascript">
    
   

</script>


<script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>

<script> 

function runApp() {
 liff.getProfile().then(profile => {

   console.log(profile);
   $("#btnsave").hide();
   
    $("#TextProfile").text(profile.displayName);
    $("#ImgProfile").attr("src",profile.pictureUrl);
   // $("#userId").attr("value",profile.userId);
  // $("#LineID").attr("value",profile.userId);
      
  var BinID = $("#BinID").val();
 
   if (BinID == 0) {

     swal({
         title: "ผิดพลาด",
         text: "กรุณาลองใหม่ภายหลัง",
         icon: "error",
         button: "ปิด",
     }); 

     $("#btnsave").hide();
     liff.closeWindow();
     return false;

   }

   $.post("https://environment.webclient.me/index.php/Qrcontroller/GetDataTrashByID",
     {
       ID : BinID
     },function(data){

       var obj = JSON.parse(data);
       //console.log(obj);
       $("#BinName").text(obj[0].Name);
       $.post("https://environment.webclient.me/index.php/Qrcontroller/GetDataWorkGroupByLineID",
       {
          LineID : profile.userId
       },function(data2){ 
 
          if(data2 != ""){
           
            var obj2 = JSON.parse(data2);
            //console.log(obj2);
            $("#WorkGroupID").val(obj2[0].WorkGroupID);
            $("#btnsave").show(); 

          }else{

            $("#btnsave").hide();

          }

 
       });
       

   });

 

  $("#btnsave").hide();
  $("#btnsave").on("click",function(){  
       var userId = profile.userId; 
       var BinID =   $("#BinID").val();
       var long =   $("#longitude").val();
       var lat =   $("#latitude").val(); 
 
       var WorkGroup = $("#WorkGroupID").val();

 
 
     $.post("https://environment.webclient.me/index.php/Qrcontroller/CreateDataTransaction",{
      WorkGroupID : WorkGroup,
      TrashID : BinID,
      Lat : lat,
      Lon : long
     },function(data){
          if(data == 1 ){
             swal({
         title: "สำเร็จ",
         text: "บันทึกผลสำเร็จกำลังปิดแอพพลิเคชั่น....",
         icon: "success",
         button: false,
              }); 
              
              setTimeout(function(){ liff.closeWindow(); }, 2000);
             
          }
     }); 
   });

 

 }).catch(err => console.error(err));
}
liff.init({ liffId: "1655702904-El3x46Gk" }, () => {
 if (liff.isLoggedIn()) {
   runApp();

 } else {
   liff.login();
 }
}, err => console.error(err.code, error.message));
</script>


<script>
 
</script>
<script>

 
setInterval(function(){ 

  

 
 
  var locationall = $("#tgetlo").val();
 
    if(locationall != ""){
      var objectLocation = JSON.parse(locationall);
      //console.log(objectLocation);
        $("#longitude").val(objectLocation.Longitude);
        $("#latitude").val(objectLocation.Latitude);
        
      var BinID = $("#BinID").val();
      

      if (BinID == 0) {

        swal({
            title: "ผิดพลาด",
            text: "กรุณาลองใหม่ภายหลัง",
            icon: "error",
            button: "ปิด",
        }); 

        $("#btnsave").hide();
        liff.closeWindow();
      }else{

        $("#btnsave").show(); 
        
      }

      //console.log(objectLocation); 
    }else{
 
        $("#btnsave").hide();
        getLocation();
  
    }
    



}, 1000); 

getLocation();
  
//console.log(location);
  var x = document.getElementById("tgetlo");

function getLocation() {
if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition);
} else { 
alert("Geolocation is not supported by this browser.");
}
}

function showPosition(position) {
//x.value = "{'Latitude': '" + position.coords.latitude + "','Longitude': " + position.coords.longitude+"}";
x.value = '{ "Latitude":"'+ position.coords.latitude +'", "Longitude":"'+position.coords.longitude+'"}';

}


</script>