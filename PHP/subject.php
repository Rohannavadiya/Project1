<?php
    class Subject
    {
        private $name;
        private $topics;
        private $duration;
        private $fees;

        function __construct($name,$topics,$duration,$fees=0)
        {
            $this->name = $name;
            $this->topics = $topics;
            $this->duration = $duration;
            $this->fees = $fees;
            echo "<br/> constructor called....";
        }
        function __destruct()
        {
            echo "<br/> desutrctor called....";
        }
        function display()
        {
            echo "<br/> name = $this->name topics = $this->topics duration = $this->duration fees = $this->fees";
        }
    }
?>