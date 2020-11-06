<?php
// クラスを定義したファイルの読込み
require_once ("mechanicalpencil.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>継承させたクラスを作ろう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>継承させたクラスを作ろう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<h2>商品１</h2>
		<?php
		// オブジェクトを作る
		$item1 = new MechanicalPencil ( "バッタ", "H", 100, "0.5mm" );
		// プロパティのデータを表示
		$item1->printAllData ();
		?>
		<hr>
		<h2>商品２</h2>
		<?php
		// オブジェクトを作る
		$item2 = new MechanicalPencil ( "三つ星", "B", 80, "0.4mm" );
		// プロパティのデータを表示
		$item2->printAllData ();
		?>
	</div>
</body>
</html>