<?php 
    class Movie {
        public $name;
        public $producedBy;
        public $year;

        function __construct($_name, $_producedBy, $_year){
            $this->name = $_name;
            $this->producedBy = $_producedBy;
            $this->year = $_year;
        }

        public function getName(){
            return $this->name;
        }

        public function getProduction(){
            return $this->producedBy;
        }

        public function getYear(){
            return $this->year;
        }
    }

    $movies = [];
    $movies[] = new Movie("Blue Lagoon The Awakening", "Mikael Salomon", 2012);
    $movies[] = new Movie('The Perfect Match', 'Yanelley Arty', 2016);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <main>
        <div>
            <?php foreach ($movies as $movie) { ?>
                
                <h3> 
                    <?php echo $movie->getName(); ?>
                </h3>

                <p> <?php echo 'Produced By:'. '  '. $movie->getProduction(); ?> </p>

                <p> <?php echo 'Year:'. '  '. $movie->getYear(); ?> </p>

            <?php } ?>
        </div>
    </main>
</body>
</html>