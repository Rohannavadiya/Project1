<?php
    class Box
    {
        public function __call($name, $arguments)
        {
            if(function_exists($name)==false)
                echo"<br/>$name Function dose not exists";
        }
        function getArea($length,$width=null)
        {
            if($width!=null)
                return $length*$length;
            else
                return $length*$width;
        }
        function getVolume($length,$width,$deapth)
        {
            if(func_num_args()!=3)
                return 0;
            else
                return $length*$width*$deapth;
        }
    }
?>