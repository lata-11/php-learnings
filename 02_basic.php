<!DOCTYPE html>
      <html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP TUTORIAL</title>
      
    </head>
    <style>
        .container {
            max-width: 50%;
            background-color: rgb(84, 142, 190);
            padding-top: 10%;
            padding-bottom: 12%;
            margin: auto;
            margin-top: 10%;
            color: azure;
            border-radius: 3%;
            text-align: center;
            box-shadow: navajowhite;
            
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        body {
            background-color: rgb(218, 213, 231);
        }
    </style>
    <div class="container">
        <h1>Let's learn about PHP </h1>
    <!-- This is a container  -->
    <?php
    $age = 34;
    echo "<br>";
    echo "<h2>Here is your party status:</h2>";
    if($age>18) {
        echo "<br>";
        echo "you can go to the party :)";
        echo "<br>";
    }
    else {
        echo "you cant go to the party :(";
        echo "<br>";
    }
    $languages = array("python", "c++", "js", "go","php");
    echo "<br>";
    echo "<h3>Let's Learn about language now: </h3>";
    echo "<br>";
    echo "I know following languages: ";
    echo "<br>";
    echo count($languages);
    echo "<br>";
    echo $languages[0];
    echo "<br>";
    //Loops in php
    $a=0;
    echo "here is the list:";
    echo "<br>";
    while($a<= count($languages)) {
        
       
        echo $languages[$a];
        echo "<br>";
        $a++;
    }
    //for loop
    for ($i=0; $i < 10; $i++) { 
        echo $a;
        echo "<br>";
    }
    //for each

    foreach ($languages as  $value) {
        # code...
        echo $value;
        echo "<br>";
    }

    function print5() {
        echo "hello from function :?";
        echo "<br>";
    }
    print5();

    function print_number($num) {
        echo "your number is: ";
        echo "<br>";
        echo $num;
    }
    print_number(10);
    
    ?>
    </div>
    <body>
       
    </body>
</html>


