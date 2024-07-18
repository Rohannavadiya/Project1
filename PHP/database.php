<?php 
    class Database
    {
        private $database,$user,$server,$password;
        public function __construct()
        {
            $this->database = "itexperts1";
            $this->user = "root";
            $this->password = "36743256";
            $this->server="localhost";
            echo "<br/> constructor called.....";
        }

        public function __toString()
        {
            echo "<table border='1' width='50%' cellpadding='5'>";
            echo "<tr><th>variable</th><th>value</th></tr>";
        
            foreach($this as $key=>$value)
            {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo "</table>";
            return "";
        }
        public function __isset($name)
        {
            return isset($this->$name);
        }
        public function __get($name)
        {
            return null;
        }
        public function __set($name,$value)
        {
            echo "<br/> can not change $name as it is private";
        }
    } 
?>