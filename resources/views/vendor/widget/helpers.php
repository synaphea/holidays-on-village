<?php
class helpers($id = "friend")
{
    // property declaration
    public $name;
    $name = $id;
	
    public function getName() {
    	echo $name;
	}
}
 $instance = new helper("Φιλαράκη");
?>