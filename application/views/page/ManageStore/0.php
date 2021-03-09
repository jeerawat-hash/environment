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
									<h4 class="card-title">แผนที่</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										 












									</div>
								</div>
							</div>
						</div>

 


						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">กลุ่มผู้ปฏิบัติงานขณะนี้</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>
											</thead> 
											<tbody> 
												<tr>
													<td>Donna Snider</td>
													<td>Customer Support</td>
													<td>New York</td>
													<td>27</td>
													<td>2011/01/25</td>
													<td>$112,000</td>
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
			<footer class="footer">
				<div class="container-fluid">
					 
					<div class="copyright ml-auto">
						2021, Create by <i class="fa fa-heart heart text-danger"></i> by <a href="#">p.jeerawat</a>
					</div>				
				</div>
			</footer>
		</div>










        <script>
            $(function(){

                $('#basic-datatables').DataTable({
                "emptyTable": "ไม่มีข้อมูลในตาราง",
                "info": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "infoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "infoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "infoThousands": ",",
                "lengthMenu": "แสดง _MENU_ แถว",
                "loadingRecords": "กำลังโหลดข้อมูล...",
                "processing": "กำลังดำเนินการ...",
                "search": "ค้นหา: ",
                "zeroRecords": "ไม่พบข้อมูล",
                "paginate": {
                    "first": "หน้าแรก",
                    "previous": "ก่อนหน้า",
                    "next": "ถัดไป",
                    "last": "หน้าสุดท้าย"
                },
                "aria": {
                    "sortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                },
                "autoFill": {
                    "cancel": "ยกเลิก",
                    "fill": "กรอกทุกช่องด้วย",
                    "fillHorizontal": "กรอกตามแนวนอน",
                    "fillVertical": "กรอกตามแนวตั้ง",
                    "info": "ข้อมูลเพิ่มเติม"
                },
                "buttons": {
                    "collection": "ชุดข้อมูล",
                    "colvis": "การมองเห็นคอลัมน์",
                    "colvisRestore": "เรียกคืนการมองเห็น",
                    "copy": "คัดลอก",
                    "copyKeys": "กดปุ่ม Ctrl หรือ Command + C เพื่อคัดลอกข้อมูลบนตารางไปยัง Clipboard ที่เครื่องของคุณ"
                }
            });


            });
        </script>