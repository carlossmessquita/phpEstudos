<?php

    echo "Hello, World\n";

    class Main{
        public function __construct()
        {
            echo "Hello, ";
        }
        /**
         * Doc function
         *
         * @param string $name
         * @return void
         */
        public function teste(string $name): void
        {
            echo $name;
        }
    }
    
    (new Main())->teste("Carlos");

