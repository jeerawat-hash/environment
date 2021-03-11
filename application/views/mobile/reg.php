 

 <input type="text" id="EmpID" value="<?php echo (isset($_GET["ID"])) ? $_GET["ID"] : 0; ?>" >


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

 <header class="masthead bg-primary text-white text-center">
   <div class="container d-flex align-items-center flex-column">
       <!-- Masthead Avatar Image-->  
       <img class="masthead-avatar" id="AuthImg" src="https://environment.webclient.me/old/assets_qr/assets/img/portfolio/bit.png"  />
       <!-- Masthead Heading-->
       <h4 class="masthead-heading text-uppercase mb-0" id="EmpName">       </h4>
       <input  type="text" hidden  id="tgetlo" name="tgetlo"      >
       <input class="input100" type="text" readonly hidden id="longitude" name="longitude">
       <input class="input100" type="text"  readonly hidden  id="latitude" name="latitude">
       <br> 
       <!-- Icon Divider--> 
      
       <p class="masthead-subheading font-weight-light mb-0"><button  id="btnsave" class="btn btn-warning"> ลงทะเบียน </button></p>
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

    $("#TextProfile").text(profile.displayName);
    $("#ImgProfile").attr("src",profile.pictureUrl);
    $("#AuthImg").attr("src",profile.pictureUrl);
    
    var EmpID = $("#EmpID").val();
 
   $.post("https://environment.webclient.me/index.php/Qrcontroller/GetDataMemberPreAuthen",
     {
       ID : EmpID
     },function(data){

       var obj = JSON.parse(data);
       console.log(obj);
       $("#EmpName").text(obj[0].Name);
       $("#btnsave").show(); 
         
   }); 

  
  $("#btnsave").hide();
  $("#btnsave").on("click",function(){   



        


    
   });










 }).catch(err => console.error(err));
}
liff.init({ liffId: "1655702904-W07xGjnA" }, () => {
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
 
  var x = document.getElementById("tgetlo");

getLocation();

//console.log(location);

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
var locationall = $("#tgetlo").val();

  

    if(locationall != ""){
      var objectLocation = JSON.parse(locationall);
      //console.log(objectLocation);
        $("#longitude").val(objectLocation.Longitude);
        $("#latitude").val(objectLocation.Latitude);
         
       //$("#btnsave").show(); 
   
      //console.log(objectLocation); 
    } 
     

}, 1000); 

</script>