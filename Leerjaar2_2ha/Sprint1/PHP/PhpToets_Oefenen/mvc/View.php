<?php

namespace mvc;

class View
{
    private $model;
    private $content;

    // constructor
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function viewContent() {
        $this->content = $this->model->getContent();
        echo "<hr>Content is : ".$this->content;
    }
}