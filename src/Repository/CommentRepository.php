<?php
namespace App\src\Repository;

require "../src/Repository/ManagerRepository.php";

class CommentRepository extends ManagerRepository
{
  public function setArticle(){
    $result = $this->addQuery('INSERT INTO article (title, comment, author, createdAt) VALUES (:title, :comment, :author, NOW()');
    $result->execute();
  }
}