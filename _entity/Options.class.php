<?php
class Options extends Entity {
	public function __construct($id=0) {
		parent::__construct("options", "opt_id",$id);
	}
}
?>
