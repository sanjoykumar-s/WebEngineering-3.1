<?php
    class Customer {
        private $id;
        private $firstName;
        private $lastName;
        private $email;

        public function __construct(
            int $id,
            string $firstName,
            string $lastName,
            string $email
        ) {
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
        }

        public function getId() : id {
            return $this->id;
        }
        public function getFirstName() : string {
            return $this->firstName;
        }

        public function getLastName() : string {
            return $this->lastName;
        }

        public function getEmail() : string {
            return $this->email;
        }
        public  function setEmail(string $email) : void {
            $this->email = $email;
        }

    }

?>