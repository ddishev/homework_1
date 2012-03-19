<html>
    <head>
        <title>Homework 1</title>
        <style>
            #red
            {
                font-size: large;
                font-weight: bold;
                color: red;
            }
            #notprime
            {
                font-size: large;
                font-weight: bold;
                color: blue;
            }
            #prime
            {
                font-size: large;
                font-weight: bold;
                color: black;
            }
            
        </style>
    </head>
    <body>
    <?php
    function is_prime($num) 
    {
        if($num==1 || $num%2==0)
        {   if($num==2)
            {
                return true;
            }
          return false;
        }
        else
        {
            for($i=3;$i<floor(($num)/2);$i+=2)
            {
                if($num%$i==0)
                {
                    return false;
                }
            }
            return true;
        }
    }
    if(!isset($_GET['number']))
        {
            echo "Put the parameter!";
            die;
        }
    if(!(is_numeric($_GET['number'])))
    { 
        echo '<p id="red">The parameter is not a number</p>';
    }
    elseif($_GET['number']>=0 && $_GET['number']<=19999)
    {
        if(is_prime($_GET['number']))
        { 
            echo '<p id="prime"> The number '.$_GET['number'].' is prime</p>';   
        }
        else 
        {
            echo '<p id="notprime">The number '.$_GET['number'].' is NOT prime</p>';   
        }
    }
    else
    { 
        echo '<p id="red"> The parameter is not within the range [0,19999]</p>';
    }
    ?>
    </body>
</html>