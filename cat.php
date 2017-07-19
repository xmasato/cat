<?php
    Class Animal {

        function __construct ($name) {
            $this->catName = $name;
        }

        public function getName () {
            return $this->catName;
        }
    }

    Class Cat extends Animal {

        public function meow () {
            return "Cat {$this->catName} is saying meow";
        }
    }


$cat = new Cat ('garfield');

echo ($cat->getName () === 'garfield');
echo ('<hr>');
echo ($cat->meow () === 'Cat garfield is saying meow');
