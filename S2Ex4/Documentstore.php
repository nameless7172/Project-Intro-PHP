<?php

class Documentstore
{
  var $documents;


  function __construct()
  {
    $this->documents = array();
  }

  function addDocument($doc1)
  {

    array_push($this->documents, $doc1);
  }

  function getDocuments()
  {
    foreach ($this->documents as $liv) {
      $liv->getContent();
      echo "<br/>";
    }
  }
}
