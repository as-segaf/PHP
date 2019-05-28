<!DOCTYPE html>
<html>
	<head>
		<title>testing</title>
	</head>

	<body>
		<div class="content">
			<div class="header">
				<header>
					<center><h2>testing web dinamis</h2></center>
				</header>
			</div>			
			<div class="navbar">
				<nav>
					<ul>
						<li><a href="web.php?page=home">Home</a></li>
						<li><a href="web.php?page=tentang">About</a></li>
						<li><a href="web.php?page=tutorial">Tutorial</a></li>
					</ul>
				</nav>
			</div>

			<div class="isi">
				
				<?php 

				if (isset($_GET['page'])) {
					$page = $_GET['page'];

					switch ($page) {
						case 'home':
							include('home.php');
							break;
						case 'tentang':
							include('tentang.php');
							break;
						case 'tutorial':
							include('tutor.php');
							break;
						default:
							echo "<center><h3>Maaf, halaman tidak ada</h3></center>";
							break;
					}
				}else{
					include('home.php');
				}


				if (isset($_GET['page'])) {
					$page = $_GET['page'];

					if ($page == "home") {
						include('home.php');

					}elseif ($page == "tentang") {
						include('tentang.php');

					}elseif ($page == "tutorial") {
						include('tutor.php');

					}else{
						echo "<center><h3>Maaf, halaman tidak ada</h3></center>";
					}
				}else{
					include('home.php');
				}

				 ?>

			</div>
		</div>
	</body>

</html>