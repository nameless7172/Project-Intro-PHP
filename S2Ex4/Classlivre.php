<?php

class Document {

var $category;
var $author;
var $title;
var $price;
var $ID;

function __construct ($c, $a, $t, $p)
{
  $this->category=$c;
  $this->author=$a;
  $this->title=$t;
  $this->price=$p;
  $this->ID=spl_object_id($this);

}

public function getId()
{
  return  ($this->ID);
}

public function getContent()
{
  $content= array('category'=>$this->category, 'author'=>$this->author, 'title'=>$this->title, 'price'=>$this->price);
  print_r ($content);
}

}
