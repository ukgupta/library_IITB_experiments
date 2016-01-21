<!DOCTYPE html>
<html>
<head>
	 <!-- <link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->
	 <link href="css/style.css" rel="stylesheet">
	 <link href="css/library.css" rel="stylesheet">
</head>

<body>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-primary">
 <div class="panel-heading">
		<h2 class="panel-title text-center">
			<strong>Registration Form</strong>
		</h2>
		</div>
		<div class="panel-body">
			<form method="POST" action="{!! route('submitform') !!}">			
				<label for="hodname" class="col-sm-2 control-label">Principle/HOD Name</label>
					<div class="col-sm-10">
					    <input type="text" id="hodname" name="hodname" value="">
					</div>
				<label for="clgname" class="col-sm-2 control-label">College Name</label>
					<div class="col-sm-10">
						<input type="text" id="clgname" name="clgname" value="">
					</div>
				<label for="clgaddress" class="col-sm-2 control-label">College Address</label>
					<div class="col-sm-10">
						<input type="text" id="clgaddress" name="clgaddress" value="">
					</div>
				<label for="pincode" class="col-sm-2 control-label">Pincode</label>
					<div class="col-sm-10">
						<input type="number" id="pincode" name="pincode" value="">
					</div>
					<div class="col-sm-offset-2 col-sm-2">
						<button type="submit" class="btn btn-info">Submit</button>
					</div>			
			</form>		
		</div>
		</div>
	</div>
</body>
</html>