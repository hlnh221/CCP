<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>课程共建平台</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/mycss.css" rel="stylesheet">
		<link rel="shortcut icon" href="titlepic.ico">
	</head>
	
	<body>
		<div class="container-fluid">
			<div class="row mydiv">
				<div class="col-md-2 col-md-offset-1">
					<h4 style="color: rgb(255,255,255);">滁州学院</h4>
				</div>
				<div class="col-md-3 col-md-offset-6" >
					<?php
			  			session_start();
			  			if(isset($_SESSION["user"]))
			  			{
			  				echo '<span style="color:rgb(255,255,255)">'.$_SESSION["user"].'</span>&nbsp;&nbsp&nbsp;&nbsp';
			  				echo '<a href="pcenter.php" style="color: rgb(255,255,255);line-height: 38px;">个人中心</a>';
					  		echo '&nbsp;&nbsp;&nbsp;<a href="houtai/exit.php" style="color: rgb(255,255,255)">退出</a>';
					  		
			  			}
			  			else{
					  		echo '<a href="login.php" style="color: rgb(255,255,255);line-height: 38px;">登陆</a>';
					  		echo '&nbsp;&nbsp;&nbsp;<a href="registe.php" style="color: rgb(255,255,255)">注册</a>';
				  		}
			  		?>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-3 col-md-offset-2">
					<img src="img/chzu.png" height="120" width="180" />
				</div>
				<h1 class="col-md-3">课程共建平台</h1>
			  	<div class="col-md-3 ">
			  		<br />
			  		<br />
			  		
			  	</div>
			</div>
		<!--
        	以上为头部,以下为主内容
        -->
			<div class="row">
				<div class="col-md-2 col-md-offset-1">
					<nav role="navigation">
						<div >
							<ul class="nav metismenu" id="side-menu">
								<li class="nav-header">
									<div class="dropdown profile-element">
										<h3 class="text-left" style="color:darkcyan">任务类别</h3>
		
									</div>
								</li>
								<br />
								<li class="active">
									<a href="index.html">
										<i class="fa fa-th-large"></i>
										<span class="nav-label">全部任务</span>
									</a>
								</li>
								<br />
								<li>
									<a href="statistics.html">
										<i class="fa fa-pie-chart"></i>
										<span class="nav-label">计算机信息类</span>
									</a>
								</li>
								<br />
								<li>
									<a href="profile.html">
										<i class="fa fa-tag"></i>
										<span class="nav-label">数学与金融类</span>
									</a>
		
								</li>
								<br />
								<li>
									<a href="clustering.html">
										<i class="fa fa-cube"></i>
										<span class="nav-label">机械与汽车类</span>
									</a>
								</li>
								<br />
								<li>
									<a href="relations.html">
										<i class="fa fa-link"></i>
										<span class="nav-label">电子与电气类</span>
									</a>
								</li>
								<br />
								<li>
									<a href="advice.html">
										<i class="fa fa-flask"></i>
										<span class="nav-label">生物与食品类</span>
									</a>
								</li>
								<br />
								<li>
									<a href="about.html">
										<i class="fa fa-info-circle"></i>
										<span class="nav-label">材料与化学类</span>
									</a>
								</li>
							</ul>
						</div>
			        </nav>
				</div>
				<div class="col-md-7">
					<ul class="nav nav-pills">
						<li role="presentation">
							<a href="login.php"><h4>发布新任务</h4></a>
						</li>
					</ul>
					<div class="table-responsive">
					    <table class="table">
					    	<thead>
					    		<tr>
					    			<th>任务主题</th>
					    			<th>所属类别</th>
					    			<th>发布者</th>
					    		</tr>
					    	</thead>
					    	<tbody>
					    		<?php
					    			include 'houtai/paging.php';
					    			foreach($array as $key=>$values)
							    	{
							    		echo "<tr>";
							    		echo "<td><a>{$values->zhuti}</a></td>";
							    		echo "<td>{$values->fangxiangming}</td>";
							    		echo "<td>{$values->yonghuemail}</td>";
							    		echo "</tr>";
							    	}				    			
					    		?>					    		
					    	</tbody>
					    </table>

					    	<nav aria-label="Page navigation" style="text-align: center;">
					    		<ul class="pagination">
					    			<li>
					    				<a href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>" aria-label="Previous">
					    					<span aria-hidden="true">&laquo;</span>
					    				</a>
					    			</li>
					    			<li>
					    				<a href="?pageNum=1">首页</a>
					    			</li>
					    			<li>
					    				<a href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>">上一页</a>
					    			</li>
					    			<li>
					    				<a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>">下一页</a>
					    			</li>
					    			<li>
					    				<a href="?pageNum=<?php echo $endPage?>">尾页</a>
					    			</li>
					    			<li>

					    			</li>
					    			<li>
					    				<a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>" aria-label="Next">
					    					<span aria-hidden="true">&raquo;</span>
					    				</a>
					    			</li>
					    		</ul>
					    	</nav>					
					</div>
				</div>
			</div>
	</body>
</html>
