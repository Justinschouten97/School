<?php

namespace mvc;

class Model
{
    public $content;
    // constructor
    public function __construct()
    {
        $this->content = "Hello world!";
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent(string $content) {
        $this->content = $content;
    }
}