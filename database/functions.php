<?php
require_once('config.php');

 function getAllJobs()
 {
     $query = "SELECT jobs.*,categories.name as cname FROM jobs
                INNER JOIN categories ON categories.id = jobs.cat_id ORDER BY date DESC";
     $stmt = $GLOBALS['pdo']->prepare($query);
     $stmt->execute();
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

 function getCategories()
 {
     $query = "SELECT * FROM categories";
     $stmt = $GLOBALS['pdo']->prepare($query);
     $stmt->execute();
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

 function create()
 {
     $title = trim($_POST['title']);
     $company = trim($_POST['company']);
     $salary = trim($_POST['salary']);
     $location = trim($_POST['location']);
     $desc = trim($_POST['description']);
     $cat = trim($_POST['category']);

     $query ="INSERT INTO jobs (title,company,salary,location,description,cat_id) VALUES (?,?,?,?,?,?)";
     $stmt = $GLOBALS['pdo']->prepare($query);

     if ($stmt->execute([$title, $company, $salary, $location, $desc, $cat])) {
         echo '<div class="alert alert-success container" id="alert">Your listing has been successfully posted!</div>';
     } else {
         echo '<div class="alert alert-danger container" id="alert">Sorry there was an error. Please try again later</div>';
     }
 }
