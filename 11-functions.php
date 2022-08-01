<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Essentials - 11. Functions</title>
</head>

<body>

    <?php
    /*Note: if you are using VSCode and the text overflows the width of your screen,
press alt+z or go to the "view" menu and select "toggle word wrap" */

    //1. Create a function that echos "Hello World!" to the browser.
    //   Call your function.
    function hello (){
        echo "hello world";
    }

    hello();


    ?>

    <br>

    <?php
    //2a. The area of a rectangle can be calculated by multiplying width and length.
    //   Create a function with two arguments that can calculate the area of a rectangle
    //   The function should echo "A rectangle of length $l and width $w has an area of $area"
    function area ($l,$w){
        $area = $w * $l;
        return $area;
    }

    echo "a rectangle of length 5 and a width of 4 has an area of ".area(5,4);
    echo "<br>";
    //2b. Use your function to calculate the area of of something with a length of 20 and a width of 14
    echo "a rectangle of length 20 and a width of 14 has an area of ".area(20,14);


    ?>

    <br>

    <?php
    //3a. A client needs a function to calculate postage rates based on the area of a flat envelope.
    //   Create a function that takes a length and width, and calculates the area of
    //   the envelope.
    //   Then within the same function, use logical statements to *return* the shipping cost as a float value.
    //  - Parcels with an area less than 35 cost $3.50
    //  - Parcels with an area between 35 and 110 cost $5.00
    //  - Parcels with an area greater than 110 cost $9.00
    function post($l,$w){
        $area = $l * $w;
        if ($area<35){
            $cost=3.50;
        }
         elseif (($area > 35 ) && ($area < 110)){
            $cost=5.00;
         }
         else
         $cost=9.00;

            return $cost;
         }
    


    //3b. Use your function find the cost to ship the following envelopes
    ?>
    <p>An envelope that is 5 wide and 6 long costs
        <?php echo post(5,6); ?> to ship

    </p>
    <p>An envelope that is 7 wide and 8 long costs
        <?php echo post(7,8); ?> to ship
    </p>
    <p>An envelope that is 15 wide and 12 long costs
        <?php echo post(15,12); ?> to ship
    </p>




    <?php
    //4a. Sales tax within america can be complicated and varies by state.
    //    Create a function that can take a state's name and a monetary value as an input.
    //    Then search the provided array to find the state's tax rate and multiply it with the value.
    //    Return the new value.
    function state($state_name,$amount){
       // echo $state_name;
         //echo $amount; 
         
            $tax_rates = [
                'illinois' => 1.0625,
                'new-york' => 1.045,
                'california' => 1.0725,
                'oregon' => 1,
                'texas' => 1.0625 
            ];

            if (array_key_exists($state_name, $tax_rates)){
              

                return $tax_rates[$state_name] * $amount;
            } else {
                return "state doesnt exist";
            }

            
           // $tax2=$num * $num; // $tax_rates='new-york';
           // foreach($tax_rates  as $key => $value){
             //   if (($key=="new-york")){
              //  echo $key;
               //  echo $value;
               // $tax=$key;
                
                //echo $value;
        
            };

           // return $tax2;  
         
        
    // echo  state("new-york", post (5,5));



    //4b. Using your postage rate and tax functions,
    //    calculate the post-tax cost for sending the following envelopes.
    ?>
    <p>An envelope that is 7 wide and 4 long costs
      <?php echo post(7,4); ?>  to ship from New York  <?PHP echo state("new-york",post (7,4)); ?>post tax.
    </p>
    <p>An envelope that is 20 wide and 17 long costs
    <?php echo post(20,17); ?>  to ship from New York  <?PHP echo state("new-york",post (20,17)); ?>post tax.
    </p>

    <!-- 
        EXTRAS: Alter your tax calculator so that it will return "error" if
        the state array key does not exist. In the real world you will want
        to make sure you always handle edge cases where invalid data is provided.
        Research the array_key_exists() function to help you.
     -->

</body>

</html>