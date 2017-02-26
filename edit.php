<?php
	include 'db.php';
	if($_REQUEST['edit_id'] != ''){
		$sel_sql = "SELECT * FROM student_data WHERE id == '$_REQUEST[edit_id]'";
		$run_sql = mysqli_query($conn, $sel_sql);	
		while($rows = mysqli_fetch_assoc($run_sql)){ ?>


		<div class="form-group">
				<label class="control-label col-md-2">student name</label>
			<div class="col-md-8"> 
				<input type="text" value="<?php echo $rows['student_name'];?>" id="student_name" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">student subject</label>
			<div class="col-md-3"> 
				<select id="student_subject" class="form-control">
				<option value="">select your subject</option>
					<option value="psikology">psikologi</option>
					<option value="kalkulus">kalkulus</option>
					<option value="mekanical">mekanik</option>
					<option value="language">language</option>
				</select>
			</div>
				<label class="control-label col-md-2">student fee</label>
				<div class="col-md-3"> 
				<input id="student_fee" type="number" class="form-control">
			</div>
			</div>
			<div class="form-group">
				<div class="col-md-8 col-md-offset-2"> 
				<button class="btn btn-danger btn-block" onclick="ajax_request('add_new_record');">Edit record</button></div>
				</div>

		<?php}
	}
	
?>


