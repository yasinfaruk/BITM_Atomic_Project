<?php

namespace App\BITM\SEIP107348\Radio;

class Movies {

    public $id = " ";
    public $title = " ";
    public $created = " ";
    public $modified = " ";
    public $created_by = " ";
    public $modified_by = " ";
    public $deleted_at = " ";

    public function __construct($model = false) {
        $this->title = $model;
    }

    public function index() {
        return "My favorite movie is : " . $this->title;
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
