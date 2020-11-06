<?php
// クラスを定義したファイルの読込み
require_once ("pencil.php");

class MechanicalPencil extends Pencil {
	private $thickness;    // 太さ

	// コンストラクタ
	public function __construct($maker, $hardness, $price, $thickness) {
		parent::__construct ( $maker, $hardness, $price );
		$this->thickness = $thickness;
	}

	// プロパティに値を代入するメソッド
	public function setAllData($maker, $hardness, $price, $thickness) {
		parent::setData ( $maker, $hardness, $price );
		$this->thickness = $thickness;
	}

	// プロパティのデータを表示するメソッド
	public function printAllData() {
		parent::printData ();
		echo "芯の太さ：{$this->thickness}<br>";
	}
}
?>
