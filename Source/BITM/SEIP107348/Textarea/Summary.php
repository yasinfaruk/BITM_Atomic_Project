<?php

namespace App\BITM\SEIP107348\Textarea;

class Summary {

    public $id = " ";
    public $text = "";
    public $created = " ";
    public $modified = " ";
    public $created_by = " ";
    public $modified_by = " ";
    public $deleted_at = " ";

    public function __construct($note = false) {
        return $this->text = $note;
    }

    public function index() {
        return "The summary is : " . $this->text;
//        echo $t;
    }

    public function create() {
        return "create - I am create form";
    }

    public function store() {
        return "store - I am storing data";
    }

    public function edit() {
        return "edit - I am editing form";
    }

    public function update() {
        return "update - I am updating data";
    }

    public function delete() {
        return "delete - I delete data";
    }

}
