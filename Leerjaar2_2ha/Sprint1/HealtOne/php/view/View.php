<?php

namespace view;
use model\Model;

class View{
    private $model;
    private $content;

    public function __construct(Model $model){
        $this->model = $model;
        echo "<h2>". $this->model->getContent() ."</h2>";
    }

}
