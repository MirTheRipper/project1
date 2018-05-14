    <!-- /.col-lg-3 -->

        <div class="col-lg-30">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
          <br><br> 
     <a class="navbar-brand" href="#">บันทึกความผิด</a>
   <br>
   			 <div>เลขกระทำความผิด    : LN610001</div> <br>
  			 <div>รหัสนักศึกษา    : 5811154</div> <br>
  		<form>
       			สถานที่ : <br />
         		<textarea rows = "8" cols = "80" name = "description">
         		</textarea>
      	</form>
  		<form>
    			<div class="form-group">
      			<label for="comment">รายละเอียด:</label>
      			<textarea class="form-control" rows="5" id="comment"></textarea>
  </div>
  		</form>
  			</div>
      		วันที่    &nbsp;<input type="date"><br><br>
      		
    	<div>เลือกฐานความผิด</div>
       			<script type="text/javascript">

				//<![CDATA[

				function addbox(){

				var b=document.getElementById('inputboxes');
	
				var el1=document.createElement("br");

				var el2=document.createElement("input");

				el2.name='f1[]';

				el2.type='text';

				el2.value='';

				b.appendChild(el1);

				b.appendChild(el2);

									}

				//]]>

				</script>


				<form method="post" action="?" id="box">

					<div id="inputboxes">

						<?php foreach(array(1) as $n): ?>

						<br /><input type="text" class="form-control" rows="5" name="f1[]" value="" /> 
						  

						<?php endforeach; ?> 

					</div>

				<input type="submit" name="$addbox" value="เพิ่ม&gt;&gt;" onclick="addbox();return false;" />

				<input type="reset" name="add" value="ยกเลิก" /> 

      	      			<div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <button type="submit" class="btn btn-primary">บันทึก</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <button type="submit" class="btn btn-primary">ยกเลิก</button>                                    
      		    </div

  </select>
 
</form> 
          

  </body>
</html>