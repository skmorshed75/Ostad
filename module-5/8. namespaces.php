<?php
//8. namespaces.php

namespace myNamespace;

class Table{
    public $title = "";
    public $numRows = 0;

    public function message(){
        echo "Table '{$this->title}' has {$this->numRows} rows";
    }
}
$table = new Table();
$table->title = "My Table";
$table->numRows = 22;

$table->message();
