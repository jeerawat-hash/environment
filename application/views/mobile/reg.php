 

 <input type="text" id="EmpID" value="<?php echo (isset($_GET["ID"])) ? $_GET["ID"] : 0; ?>" >


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

 <header class="masthead bg-primary text-white text-center">
   <div class="container d-flex align-items-center flex-column">
       <!-- Masthead Avatar Image-->  
       <img class="masthead-avatar" id="AuthImg" src=" "  />
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
   <div class="container"><small></small></div>
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

        if(data == ""){

            liff.closeWindow();
            $("#btnsave").hide(); 

        }else{

            var obj = JSON.parse(data);
            
            $.post("https://environment.webclient.me/index.php/Qrcontroller/GetDataMemberPreAuthenCheck",
            {
                LineID : profile.userId
            }
            ,function(data){


                if(data == 0){
                    
                    console.log(obj);
                    $("#EmpName").text(obj[0].Name);
                    $("#btnsave").show(); 

                }else{

                    liff.closeWindow();
                    $("#btnsave").hide(); 

                }


            });
            

        }
       

         
   }); 

  
  $("#btnsave").hide();
  $("#btnsave").on("click",function(){   
 
        var MemberID = EmpID;
        var LineID = profile.userId;

        $.post("https://environment.webclient.me/index.php/Qrcontroller/RegisterMemberByQrCode",{
            MemberID : MemberID,
            LineID : LineID
        },function(data){

            if(data == 1){ 
                swal({
                    title: "สำเร็จ",
                    text: "",
                    icon: "success",
                    button: "ปิด",
                });  
              
              setTimeout(function(){ liff.closeWindow(); }, 2000);
 
             }else{

                swal({
                    title: "ผิดพลาด",
                    text: "กรุณาลองใหม่ภายหลัง",
                    icon: "error",
                    button: "ปิด",
                }); 
                return false;
            }
            
        });
 
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

 