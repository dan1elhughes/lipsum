<?php

namespace xes;
class Lipsum {
	private $paras;

	public function __construct() {
		$this->paras = new Paragraphs();
	}

	public function getParagraphs($paragraphs = 1) {
		$paras = $this->paras;
		return $paras->getLines($paragraphs);
	}
}
?>
