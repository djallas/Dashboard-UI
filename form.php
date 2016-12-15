<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  rel="stylesheet" type="text/css" href="css/admin.css">
		<link  rel="stylesheet" type="text/css" href="css/form.css">
		<script type="text/javascript" src="scripts/jquery-2.0.2.min.js"></script>
		<script type="text/javascript" src="scripts/push.admin.js"></script>

	</head>
	<body>
		<?php include('inc/header.php') ?>	
			<div class="grid-b">		
				<div class='box'>
					<h2 class="title">
						Write article
						<span class="right">
							<a href='#' class="bordeau">View All</a>
						</span>
					</h2>					 
				</div>
				<div class="alerts">
					<div class="alert">Info</div>
					<div class="alert success">Info</div>
					<div class="alert info">Info</div>
					<div class="alert error">Info</div>
				</div>
				<div class='box'>
					<form class="form">
						<div class="grid-c" style="">
							<legend>50%</legend>
							<input type="text" name="name" placeholder="Names...">
						</div>
						<div class="grid-c" style="">
							<legend>50%</legend>
							<input type="text" name="name" placeholder="Names...">
						</div>
						<div class="clear"></div>
						
						<div class="grid-e">
							<legend>100%</legend>
							<input type="number" name="name" placeholder="Names...">
						</div>	
						<div class="grid-b">
							<legend>country</legend>
							<select>
								<option value="1">Value 1</option>
								<option value="2">Value 2</option>
								<option value="3">Value 3</option>
								<option value="4">Value 4</option>
								<option value="5">Value 5</option>
							</select>
						</div>	        
						<div  class="grid-a radio">
							<legend>Genda</legend>
							<div class="checks">		
								<input type="radio" id="radio1" name="status" value="custom" checked>
								<label for="radio1">Male</label>
								
								<input type="radio" id="radio2" name="status" value="custom">
								<label for="radio2">Female</label>
							</div>
						</div>
						<div  class="grid-a">
							<legend>Settings</legend>
							<div class="checks">		
								<input type="checkbox" id="checkbox1" name="status" value="custom" checked>
								<label for="checkbox1">Enable Theme</label>
							</div>
						</div>
						<div class="grid-a">
						  <legend>textarea lable</legend>
						  <textarea>text....</textarea>
						</div>
						<div class="grid-a">
							<input type="submit" name="submit" value="Save">
						</div>
						<!---->
					 </form>
					 <div class="clear"></div>
				</div>
			</div>
			<!-- Right Grid -->
			<div class="grid-e">
				<div class='box'>
					<h2 class="title">
						News Comments
					</h2>
					<ul class="wrappost comments">
						<li>
							courage bro ibyo ndabyumva kbsa kdi ni byiza wavuze igiceri kimwe kijana njyewe umpe aho shyira ibiceri
							<div class="inlineinfo">
								<a href="#">View</a>
								<a href="#">Unpublish</a>
								<span class="timestamp">1 min ago</span>
							</div>
						</li>
						<li>
							courage bro ibyo ndabyumva kbsa kdi ni byiza wavuze igiceri kimwe kijana njyewe umpe aho shyira ibiceri
							<div class="inlineinfo">
								<a href="#">View</a>
								<a href="#">Unpublish</a>
								<span class="timestamp">1 min ago</span>
							</div>
						</li>
						<li>
							Nkibi bintu ikinyamakuru inyarwanda mukora muba mubona aribyo?...
							<div class="inlineinfo">
								<a href="#">View</a>
								<a href="#">Unpublish</a>
								<span class="timestamp">1 min ago</span>
							</div>
						</li>
					</ul>
					<div class="wrapmore"><a href="#">More Comments</a></div>
					<div class="clear"></div>
				</div>
			</div>
			<?php include('inc/footer.php') ?>	
		</div>
	</body>
</html>