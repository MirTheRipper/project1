<?php
?>
	<center><section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<dis class="card-header">
						<h4>d_managment</h4>
						</dis>
						<div class="card-body">
							<div class="table-responsive">
							<table class="table table-striped table-sm">
							<thead>
							<tr>
								<th>#</th>
								 	<th>ลำดับ</th>
        							<th>รหัส</th>
        							<th>หมวดความผิด</th>
        							<th>ฐานความผิด</th>
        							<th>วันที่</th>
        							<th>คะแนนที่ถูกตัด</th>
								</tr>
								</thead>
								<tbody>
				                <?php $i=1; foreach ($m_model_res as $row) {?>
				                    <tr>
				                     <th scope="row"><?php echo $i++; ?></th>
				                     <td><?php echo $row->Wrongdoer_ID; ?></td>
				                     <td><?php echo $row->Student_ID; ?></td>
				             		 <td><?php echo $row->Place; ?></td>
				              		 <td><?php echo $row->Description; ?></td>
				               		 <td><?php echo $row->Date_w; ?></td>
				               		</tr>
				               		<?php }?>
				               		</tbody>
				               	 </table>
				               	</div> 
				               </div>
				              </div>
				             </div>
				            </div>
				           </div>
				          </section>
				          </center> 
				               		 
				               