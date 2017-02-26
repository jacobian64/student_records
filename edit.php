<?php
	include 'db.php';
	if($_REQUEST['req_type'] != 'edit_req'){
		$sel_sql = "SELECT * FROM student_data WHERE id = '$_REQUEST[edit_id]'";
		$run_sql = mysqli_query($conn, $sel_sql);	
		while($rows = mysqli_fetch_assoc($run_sql)){ ?>


		<div class="form-group">
				<label class="control-label col-md-2">student name</label>
			<div class="col-md-8"> 
				<input type="text" value="<?php echo $rows['student_name'];?>" id="ed_student_name" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">student subject</label>
			<div class="col-md-3"> 
				<select id="ed_student_subject" class="form-control">
				<?php
					if($rows['student_subject'] == 'psikology'){
						echo '
					<option value="psikology" selected>psikology</option>
					<option value="kalkulus">kalkulus</option>
					<option value="mekanical">mekanical</option>
					<option value="bahasa">bahasa</option>';
					} elseif($rows['student_subject'] == 'kalkulus'){
						echo '
						<option value="psikology">psikology</option>
					<option value="kalkulus" selected>kalkulus</option>
					<option value="mekanical">mekanical</option>
					<option value="bahasa">bahasa</option>';
					} elseif($rows['student_subject'] == 'mekanical') {
						echo '
						<option value="psikology">psikology</option>
					<option value="kalkulus">kalkulus</option>
					<option value="mekanical" selected>mekanical</option>
					<option value="bahasa">bahasa</option>';
					} elseif($rows['student_subject'] == 'bahasa') {
						echo '
						<option value="psikology">psikology</option>
					<option value="kalkulus">kalkulus</option>
					<option value="mekanical">mekanical</option>
					<option value="bahasa" selected>bahasa</option>';
					}
				?>
				</select>
			</div>
				<label class="control-label col-md-2">student fee</label>
				<div class="col-md-3"> 
				<input id="student_fee" value="<?php echo $rows['ed_student_fee'];?>" type="number" class="form-control">
			</div>
			</div>
			<div class="form-group">
				<div class="col-md-8 col-md-offset-2"> 
				<button class="btn btn-danger btn-block" onclick="edit_request('edit_button', <?php echo $rows['id'];?>);");">Edit record</button></div>
				</div>

		<?php}
	} elseif($_REQUEST['req_type'] == 'edit_button'){
		$ed_sql = "UPDATE student_data SET student_name = '$_REQUEST[ed_stu_name]', student_subject = '$_REQUEST[ed_stu_subject]', student_fee = '$_REQUEST[ed_stu_fee]' WHERE id = '$_REQUEST[edit_id]'";
		$ed_run = mysqli_query($conn, $ed_sql);
	}
	
?>


