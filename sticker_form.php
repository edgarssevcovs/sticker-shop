<?php
    class Form {
        private $db;
        public function __construct($db) {
            $this->db = $db;
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $this->process();
            } else { //should really only be for GET
                // $this->render();
            }
        }
        public function process() {
            //we check for keys and set default values if key does not exist
           
            $name = array_key_exists('name', $_POST) ? $_POST['name'] : "Name";
            $price = array_key_exists('price', $_POST) ? $_POST['price'] : "Price";
            $category= array_key_exists('category', $_POST) ? $_POST['category'] : "Category";
            $photo = $_FILES['photo']['tmp_name'];
            $photo = addslashes(file_get_contents($photo));
 
            $sql = "INSERT INTO stickers (name, price, category, photo)
           VALUES (?, ?, ?, ?)";
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $upstm = $this->db->prepare($sql);
            if(!$upstm->execute([$name, $price, $category, $photo])) {
                die('Not good');
            }
            //We can only reload using header if no html has been sent to page here
            header("Location: index.php");
        }
    }
?>