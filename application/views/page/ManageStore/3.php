 

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
									<h4 class="">รายการแจ้งปัญหาถังขยะ  
									 <p align="right" > </p> </h4>  
									<p class="card-category">
									  
									       
								</p>
									 
								</div>
								
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                    <th style="width: 250px;">ผู้แจ้ง</th>
													<th>ตำแหน่ง</th>
													<th>ความจุ</th>
													<th>ปัญหา</th> 
													 
												</tr>
											</thead> 
											<tbody id="TrashBrokenDetail"> 

                                                
 												 
												 
											</tbody>
										</table>
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










        <script> 

        $(function(){





            var html = "";
            
            $.get("https://environment.webclient.me/index.php/ManageStore/GetDataTrashReport",function(data){

            var obj = JSON.parse(data);
                
                console.log(obj);

                for (var i = 0; i < obj.length; i++) {
 
                                         html += "<tr>"+
                                                    "<td>คุณ "+obj[i].LineName+" <br> <img  width='30%' src='"+obj[i].LineIMG+"'></td> "+
													"<td>"+obj[i].Remark+"</td>"+
													"<td>"+obj[i].Capacity+"</td>"+
													"<td>"+obj[i].Comment+"</td> "+ 
												"</tr>";
                 
                        
                }
                
                $("#TrashBrokenDetail").html(html);

            });

            


        });


        
			
        </script>