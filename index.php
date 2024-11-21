<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
    abstract class Car{
        public $name;
        public function __construct($cname){
            $this->name = $cname;
        }
        abstract public function info();
    }
    
    //child class
    class Royal extends Car{
        public function info(){
            return "<br>Choose the Bike! I'am a $this->name!";
        }
        
    }
    
    class Yamaha extends Car{
        public function info(){
            return "<br>Choose the Bike! I'am a $this->name!";
        }
        
    }
    
    class Pulser extends Car{
        public function info(){
            return "<br>Choose the Bike! I'am a $this->name!";
        }
        
    }

    $obj1 = new Royal("Royel");
    echo $obj1->info();

    $obj2 = new Yamaha("Yamaha");
    echo $obj2->info();

    $obj3 = new Pulser("Pulser");
    echo $obj3->info();



    ?>
</body>
</html>