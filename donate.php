<?php
echo "<!DOCTYPE HTML>\n";
echo "<html>\n";
echo "\n";
echo "	<head>\n";
echo "		<title>Donate</title>\n";
echo "		<meta charset=\"utf-8\" />\n";
echo "		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />\n";
echo "		<link rel=\"stylesheet\" href=\"assets/css/main.css\" />\n";
echo "		<noscript><link rel=\"stylesheet\" href=\"assets/css/noscript.css\" /></noscript>\n";
echo "	</head>\n";
echo "	<body class=\"contact is-preload\">\n";
echo "		<div id=\"page-wrapper\">\n";
echo "\n";
echo "			<!-- Header -->\n";
echo "				<header id=\"header\">\n";
echo "					<h1 id=\"logo\"><a href=\"index.html\">Twenty <span>by HTML5 UP</span></a></h1>\n";
echo "					<nav id=\"nav\">\n";
echo "						<ul>\n";
echo "							<li class=\"current\"><a href=\"index.html\">Welcome</a></li>\n";
echo "							<li class=\"submenu\">\n";
echo "								<a href=\"#\">Layouts</a>\n";
echo "								<ul>\n";
echo "									<li><a href=\"left-sidebar.html\">Left Sidebar</a></li>\n";
echo "									<li><a href=\"right-sidebar.html\">Right Sidebar</a></li>\n";
echo "									<li><a href=\"no-sidebar.html\">No Sidebar</a></li>\n";
echo "									<li><a href=\"contact.html\">Contact</a></li>\n";
echo "									<li class=\"submenu\">\n";
echo "										<a href=\"#\">Submenu</a>\n";
echo "										<ul>\n";
echo "											<li><a href=\"#\">Dolore Sed</a></li>\n";
echo "											<li><a href=\"#\">Consequat</a></li>\n";
echo "											<li><a href=\"#\">Lorem Magna</a></li>\n";
echo "											<li><a href=\"#\">Sed Magna</a></li>\n";
echo "											<li><a href=\"#\">Ipsum Nisl</a></li>\n";
echo "										</ul>\n";
echo "									</li>\n";
echo "								</ul>\n";
echo "							</li>\n";
echo "							<li><a href=\"#\" class=\"button primary\">Sign Up</a></li>\n";
echo "						</ul>\n";
echo "					</nav>\n";
echo "				</header>\n";
echo "\n";
echo "			<!-- Main -->\n";
echo "				<article id=\"main\">\n";
echo "\n";
echo "					<header class=\"special container\">\n";
echo "						<span class=\"icon fa-envelope\"></span>\n";
echo "						<h2>Get In Touch</h2>\n";
echo "						<p>Use the form below to give /dev/null a piece of your mind.</p>\n";
echo "					</header>\n";
echo "\n";
echo "					<!-- One -->\n";
echo "						<section class=\"wrapper style4 special container medium\">\n";
echo "\n";
echo "							<!-- Content -->\n";
echo "								<div class=\"content\">\n";
echo "									<form>\n";
echo "										<div class=\"row gtr-50\">\n";
echo "											<div class=\"col-6 col-12-mobile\">\n";
echo "												<input type=\"text\" name=\"$nickname\" placeholder=\"Никнейм\" />\n";
echo "											</div>\n";
echo "											<div class=\"col-6 col-12-mobile\">\n";
echo "												<input type=\"text\" name\"$donate\" placeholder=\"Сумма Доната\" />\n";
echo "											</div>\n";
echo "											<div class=\"col-12\">\n";
echo "												<ul class=\"buttons\">\n";
echo "													<li><input type=\"submit\" class=\"special\" value=\"Оплатить\" /></li>\n";
echo "												</ul>\n";
echo "											</div>\n";
echo "										</div>\n";
echo "									</form>\n";
echo "								</div>\n";
echo "\n";
echo "						</section>\n";
echo "\n";
echo "				</article>\n";
echo "			<!-- Footer -->\n";
echo "				<footer id=\"footer\">\n";
echo "\n";
echo "					<ul class=\"icons\">\n";
echo "						<li><a href=\"#\" class=\"icon circle fa-twitter\"><span class=\"label\">Twitter</span></a></li>\n";
echo "						<li><a href=\"#\" class=\"icon circle fa-facebook\"><span class=\"label\">Facebook</span></a></li>\n";
echo "						<li><a href=\"#\" class=\"icon circle fa-google-plus\"><span class=\"label\">Google+</span></a></li>\n";
echo "						<li><a href=\"#\" class=\"icon circle fa-github\"><span class=\"label\">Github</span></a></li>\n";
echo "						<li><a href=\"#\" class=\"icon circle fa-dribbble\"><span class=\"label\">Dribbble</span></a></li>\n";
echo "					</ul>\n";
echo "\n";
echo "					<ul class=\"copyright\">\n";
echo "						<li>&copy; Untitled</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>\n";
echo "					</ul>\n";
echo "\n";
echo "				</footer>\n";
echo "\n";
if (isset($_POST['nickname']) && isset($_POST['donate']) && isset($_POST['email'])){

    // Переменные с формы
    $nickname = $_POST['nickname'];
    $donate = $_POST['donate'];
    $email = $_POST['email'];
    
    // Параметры для подключения
    $db_host = "127.0.0.1"; 
    $db_user = "root"; // Логин БД
    $db_password = "foxy200217"; // Пароль БД
    $db_base = 'GRRP2'; // Имя БД
    $db_table = "test"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (nickname,donate,email) VALUES ('$nickname','$donate','$email')");
    
    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }
}
echo "		</div>\n";
echo "		<!-- Scripts -->\n";
echo "			<script src=\"assets/js/jquery.min.js\"></script>\n";
echo "			<script src=\"assets/js/jquery.dropotron.min.js\"></script>\n";
echo "			<script src=\"assets/js/jquery.scrolly.min.js\"></script>\n";
echo "			<script src=\"assets/js/jquery.scrollgress.min.js\"></script>\n";
echo "			<script src=\"assets/js/jquery.scrollex.min.js\"></script>\n";
echo "			<script src=\"assets/js/browser.min.js\"></script>\n";
echo "			<script src=\"assets/js/breakpoints.min.js\"></script>\n";
echo "			<script src=\"assets/js/util.js\"></script>\n";
echo "			<script src=\"assets/js/main.js\"></script>\n";
echo "\n";
echo "	</body>\n";
echo "</html>";
?>