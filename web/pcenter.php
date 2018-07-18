<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>个人中心</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/mycss.css" rel="stylesheet">
		<link rel="shortcut icon" href="titlepic.ico">
		<?php
			  			session_start();
			  			if(!(isset($_SESSION["user"])))
			  			{			  				
							echo '<script>alert("请登陆账号!");window.location.href="/myweb/login.php"</script>';				  		
			  			}
		?>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row mydiv">
				<div class="col-md-2 col-md-offset-1">
					<h4 style="color: rgb(255,255,255);">滁州学院</h4>
				</div>
				<div class="col-md-2 col-md-offset-7" >
					<a href="houtai/exit.php" style="color: rgb(255,255,255);line-height: 38px;">退出账号</a>
				</div>
			</div>
			<div>
				<div class="col-md-2 col-md-offset-1">
					<nav role="navigation">
						<div >
							<div style="height: 250px;">
								此处存放头像
							</div>
							<ul class="nav metismenu" id="side-menu" style="background: #F9F9F9;">							
								<li class="nav-header">
									<div class="dropdown profile-element" >
										<h3 class="text-left" style="color:darkcyan;text-align: center;">账号管理</h3>
		
									</div>
								</li>
								<br />
								<li class="active">
									<a href="index.html" style="text-align:center">
										<i class="fa fa-th-large"></i>
										<span class="nav-label" >账号基本信息</span>
									</a>
								</li>
								<br />
								<li>
									<a href="statistics.html" style="text-align:center">
										<i class="fa fa-pie-chart"></i>
										<span class="nav-label">我发布的任务</span>
									</a>
								</li>
								<br />
								<li>
									<a href="profile.html" style="text-align:center">
										<i class="fa fa-tag"></i>
										<span class="nav-label">我接受的任务</span>
									</a>
		
								</li>
								<br />
								<li>
									<a href="clustering.html" style="text-align:center">
										<i class="fa fa-cube"></i>
										<span class="nav-label">类</span>
									</a>
								</li>
								<br />
								<li>
									<a href="relations.html" style="text-align:center">
										<i class="fa fa-link"></i>
										<span class="nav-label">类</span>
									</a>
								</li>
							</ul>
						</div>
			       </nav>			    
				</div>
				<div>
					
				</div>
			</div>
		</div>
	</body>
</html>