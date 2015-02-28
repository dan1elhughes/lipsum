<?php

namespace xes;
class Lipsum {
	private $paras;

	public function __construct() {
		$this->paras = new Paragraphs();
	}

	public function getParagraphs($paragraphs = 1) {
		$paras = $this->paras;
		return '<p>'.implode('</p><p>', $paras->getLines($paragraphs)) . '</p>';
	}

	public function getString($strings = 1) {
		$paras = $this->paras;
		$ret = $paras->getLines($strings);
		return ($strings == 1 ? $ret[0] : $ret);
	}

	public function getSentence($sentences = 1) {
		$paras = $this->paras;
		$ret = $paras->getSentence($sentences);
		return rtrim(implode($ret), " ");
	}

	public function printOut($amount = 1) {
		echo $this->getParagraphs($amount);
	}
}
?>
