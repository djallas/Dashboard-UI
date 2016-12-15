<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  rel="stylesheet" type="text/css" href="css/admin.css">
		<script type="text/javascript" src="scripts/jquery-2.0.2.min.js"></script>
		<script type="text/javascript" src="scripts/push.admin.js"></script>		
	</head>
	<body>
		<?php include('inc/header.php') ?>	
			<div class="grid-a">
				<div class='box'>
					<h2 class="title">
						Recent Articles
						<span class="right">
							<a href='#'>View All</a>
							<a href='#' class="collapse">Close</a>
						</span>
					</h2>
					<table class="table collapsible"> 
						<thead> 
						<tr> 
							<th>#</th> 
							<th>Title</th> 
							<th>Action</th>  
						</tr> 
						</thead> 
						<tbody> 
							<tr> 
								<td>#</td> 
								<td>
									<a href='#'>Nyuma yo gutsinda APR fc hatangiye gucicikana amafoto yabakinnyi ba Yanga Sc barangajwe imbere na Mbuyu bari kwishimana n’abakobwa.</a><br>
									<div class="timestamp">Mar 23rd, 09:34</div>
								</td>
								<td class="actions">
									<div class="actionbtn">	
										<a href="#" class="a-head-btn btnpublish" >Publish</a>
										<a href="#" class="a-head-btn btndelete" >Delete</a>
									</div>							
								</td> 
							</tr>
							<tr> 
								<td>#</td> 
								<td>
									<a href='#'>mbega se wiw ntiyavuga rumw na Havyarimana hama agaca yicwa n'inkotanyi??ntivyumvikana</a><br>
									<div class="timestamp">Mar 23rd, 09:34</div>
								</td>  
								<td>
									<div class="actionbtn">	
										<a href="#" class="a-head-btn btnpublish" >Publish</a>
										<a href="#" class="a-head-btn btndelete" >Delete</a>
									</div>							
								</td> 
							</tr> 
							<tr> 
								<td>#</td> 
								<td>
									<a href='#'>Nyuma yo gutsinda APR fc hatangiye gucicikana amafoto yabakinnyi ba Yanga Sc barangajwe imbere na Mbuyu bari kwishimana n’abakobwa.</a><br>
									<div class="timestamp">Mar 23rd, 09:34</div>
								</td> 
								<td>
									<div class="actionbtn">	
										<a href="#" class="a-head-btn btnpublish" >Publish</a>
										<a href="#" class="a-head-btn btndelete" >Delete</a>
									</div>							
								</td> 
							</tr>   
						</tbody> 
					</table>							
				</div>			
			</div>
		<?php include('inc/footer.php') ?>
