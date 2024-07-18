<?php
    class product
    {
        private $name;
        private $surname;
        private $dob;
        private $gender;
        private $weight;
        private $email;
        private $mobile;

        public function setName($name)
        {
            $this->name = $name;
        }
        public function setSurname($surname)
        {
            $this->surname = $surname;
        }
        public function setBob($dob)
        {
            $this->dob = $dob;
        }
        public function setGender($gender)
        {
            $this->gender = $gender;
        }
        public function setWeight($weight)
        {
            $this->weight = $weight;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function setMobile($mobile)
        {
            $this->mobile = $mobile;
        }

        function getName()
        {
            return $this->name;
        }
        function getSurname()
        {
            return $this->surname;
        }
        function getBob()
        {
            return $this->dob;
        }
        function getGender()
        {
            return $this->gender;
        }
        function getWeight()
        {
            return $this->weight;
        }
        function getEmail()
        {
            return $this->email;
        }
        function getMobile()
        {
            return $this->mobile;
        }
    }
?>