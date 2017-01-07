<?

	header("Content-type: text/html; charset=utf-8");   

	// 第一步连接mysql
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yuanku_job";
 
	// 创建连接
	//$conn = new mysqli($servername, $username, $password, $dbname);
 $link=mysql_connect("localhost","root","");
	// 检测连接
// 	if ($conn->connect_error) {
//     die("连接失败: " . $conn->connect_error);
// 	} 

// 	$conn->close();

	// 第二步使用数据库
	 mysql_select_db("yuanku_job");

	 
?>