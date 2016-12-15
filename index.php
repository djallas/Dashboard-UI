<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  rel="stylesheet" type="text/css" href="css/admin.css">
		<script type="text/javascript" src="scripts/jquery-2.0.2.min.js"></script>
		<script type="text/javascript" src="scripts/push.admin.js"></script>		
		<script type="text/javascript" src="scripts/gstatic.loader.js"></script>
		<script type="text/javascript" src="scripts/data.chart.js"></script>
	</head>
	<body>
		<?php include('inc/header.php') ?>
			<!-- Main Content Grid -->			
			<div class="grid-a">
				<div class="grid-e">
					<div class="box bbox metric orange">
						<div class="num">47,215</div>
						<div>Posts views<br>Today</div>
					</div>
				</div>
				<div class="grid-e">
					<div class="box bbox metric green">
						<div class="num">13,934</div>
						<div>Page views<br>Today</div>
					</div>
				</div>
				<div class="grid-e">
					<div class="box bbox metric blue">
						<div class="num">495</div>
						<div>Video plays<br>Today</div>
					</div>
				</div>
				<div class="grid-e">
					<div class="box bbox metric indigo">
						<div class="num">3,458</div>
						<div>Song plays<br>Today</div>
					</div>
				</div>
				<br class="clear">
			</div>			
			<div class="grid-a">
				<div class="grid-b">
					<div class="box">
						<h2 class="title">
							Site Metrics
							<span class="right">
								<a href="#" class="btndate open-pop">Nov 7 - Dec 7, 2014</a>
								<a href='#'>Today</a>
							</span>
						</h2>
						<div id="curve_chart" class="collapsible" style="height:375px"></div>
					</div>
				</div>
				<div class="grid-e">
					<div class="box">
						<h2 class="title">
							category	
						</h2>
						<div id="barchart_values" class="collapsible" style="height:360px"></div>
						<br class="clear">
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="grid-b">
				<div class="grid-c">
					<div class="box">
						<h2 class="title">
							Views per authors
							<span class="right">
								<a href='#' class="collapse">Close</a>
							</span>
						</h2>
						<div id="chart_div" class="collapsible" style="width:100%;height:350px;"></div>
					</div>
				</div>
				<div class="grid-c">
					<div class="box">
						<h2 class="title">
							Number of Posts per Author							
							<span class="right">
								<a href='#' class="collapse">Close</a>
							</span>
						</h2>
						<div id="ChartPerNumber" class="collapsible" style="width:100%;height:350px"></div>
					</div>
				</div>
				<div class="grid-a">
					<div class='box'>
						<h2 class="title">
							Recent Articles
							<span class="right">
								<a href='#'>View All</a>
								<a href='#' class="collapse">Close</a>
							</span>
						</h2>
						<table class="tblhmcmt collapsible"> 
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
				<div class="clear"></div>
				<div class="grid-c">
					<div class='box'>
						<h2 class="title">
							Trending Songs
							<span class="right">
								<a href='#'>View All</a>
								<a href='#' class="collapse">Close</a>
							</span>
						</h2>
						<table class="tblhmcmt collapsible"> 
							<thead> 
							<tr> 
								<th>#</th> 
								<th>Song</th> 
								<th>Action</th> 
							</tr> 
							</thead> 
							<tbody> 
								<tr> 
									<td>1</td> 
									<td>
										<a href='#'>Bluck it Down</a>  by <a href="">Young Man</a><br>
										<div class="timestamp">1 year ago</div>
									</td> 
									<td>
										<div class="actionbtn">	
											<a href="#" class="a-head-btn btnpublish" >Publish</a>
											<a href="#" class="a-head-btn btndelete" >Delete</a>
										</div>							
									</td> 
								</tr> 
								<tr> 
									<td>2</td> 
									<td>
										<a href='#'>Ntunkangure</a>  by <a href="#">Umutare Gaby</a><br>
										<div class="timestamp">1 year ago</div>
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
				<div class="grid-c">
					<div class='box'>
						<h2 class="title">
							Top 10 Weekly Songs
							<span class="right">
								<a href='#'>View All</a>
								<a href='#' class="collapse">Close</a>
							</span>
						</h2>
						<table class="tblhmcmt collapsible"> 
							<thead> 
							<tr> 
								<th>#</th> 
								<th>Song</th> 
								<th>Action</th> 
							</tr> 
							</thead> 
							<tbody> 
								<tr> 
									<td>1</td> 
									<td>
										<a href='#'>Bluck it Down</a>  by <a href="">Young Man</a><br>
										<div class="timestamp">1 year ago</div>
									</td> 
									<td>
										<div class="actionbtn">	
											<a href="#" class="a-head-btn btnpublish" >Publish</a>
											<a href="#" class="a-head-btn btndelete" >Delete</a>
										</div>							
									</td> 
								</tr> 
								<tr> 
									<td>2</td> 
									<td>
										<a href='#'>Ntunkangure</a>  by <a href="#">Umutare Gaby</a><br>
										<div class="timestamp">1 year ago</div>
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
				<div class="clear"></div>					
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
				<div class='box'>
					<h2 class="title">
						Artists Comments
					</h2>
					<ul class="wrappost comments">
						<li>
							<b>Danny Nanone</b><br>
							mwaramutse?yo umuntu ashaka kugisha inama anyurahehe? mumbabarire mumbwire...
							<div class="inlineinfo">
								<a href="#">View</a>
								<a href="#">Unpublish</a>
								<span class="timestamp">1 min ago</span>
							</div>
						</li>
						<li>
							<b>Queen Cha</b><br>
							urimwiza kbs !!kd courage chch
							<div class="inlineinfo">
								<a href="#">View</a>
								<a href="#">Unpublish</a>
								<span class="timestamp">1 min ago</span>
							</div>
						</li>
						<li>
							<b>Weya Victora</b><br>
							weya your voice is pretty but I wan the video
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
			<div class="clear"></div>
			
<?php include('inc/footer.php') ?>
