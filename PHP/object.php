<?php
    class MyObject
    {
        protected static $author = "Rohan Navadiya";
        protected static $count = 0;

        protected $data = array();

        public function __set($key,$value)
        {
            echo"<br/>__set Method is called with $key & $value";
            $this->data[$key] = $value;
        }

        public function __get($key)
        {
            if(isset($this->data[$key])==true)
                return $this->data[$key];
            else
                return null;
        }

        public function __toString()
        {
            echo"<table border='1' width='50%' cellpadding='5'>";
            echo"<tr><th>Key</th><th>Value</th></tr>";
                foreach($this->data as $key=>$value)
                {
                    echo"<tr><td>$key</td><td>$value</td></tr>";
                }
            echo"</table>";
            return "";
        }

        public function __isset($key)
        {
            return isset($this->data[$key]);
        }

        public function __unset($key)
        {
            echo"<br/>Unset Method is call with $key";
            unset($this->data[$key]);
        }

        public function __clone()
        {
            echo"<br/>Clone Method is call with ";
        }

        public static function __callStatic($name,$argument)
        {
            echo "<br/> no such function defined $name";
        }

        public static function show()
        {
            echo "<br/>Author ".MyObject :: $author;
            echo "<br/>Count".MyObject :: $count;
        }
    }
?>