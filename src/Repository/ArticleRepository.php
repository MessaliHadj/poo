<?php
namespace App\src\Repository;

require "../src/Repository/ManagerRepository.php";

class ArticleRepository extends ManagerRepository
{
  public function getArticles(){
    $result = $this->createQuery('SELECT * FROM article');
    return $result;
  }
  public function getArticle(int $id){
    $sql = 'SELECT * FROM article WHERE id = ?';
    $result = $this->createQuery($sql, [$id]);
    return $result;
  }
}