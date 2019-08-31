<?
session_start();
$data = $_POST['data'];
if(!$data) {
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
	<form id="mainForm" method="post">
		<input id="data" name="data" type="hidden" />
	</form>
	<script src="./js/indexLoad.js"></script>
</body>
</html>
<?
} else {
	$uuid = $_SESSION['uuid'];
	$data = str_replace("\\", "", $data);
	$data_array = json_decode($data, true);
	//var_dump($data_array);
	$css_dir = "./css";
	$js_dir = "./js";
	$img_dir = "./img";
	include("header.php");
?>
	<div id="main">
		
	</div>
<?
	include("footer.php");
}
?>