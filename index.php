<!DOCTYPE html>
<!--
GPLv3
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Count my visitors</title>
    </head>
    <body>
        <?php
        
            //if file does not exist, create it.
            if (!file_exists("local_file.log")) {
                $handle_mit_es = fopen("local_file.log", "a");
                $gone_call = 1;
            }
                
            //Open file for read and write
            $gonna_call = fopen("local_file.log", "r+");

            //gone_call get value of gonna_call
            $gone_call = fgets($gonna_call, 100);
            
            //Create cookie to only count uniqe visitors
            if (!isset($_COOKIE['cookiemonster'])) {
               
                //count plus one
                $gone_call = $gone_call + 1;

                //Reset filepointer
                rewind($gonna_call);

                //Write it back
                fputs($gonna_call, $gone_call);
                
                //Set cookie with value "true"
                setcookie('cookiemonster', true);

            } else {
                // do nothing because you are not uniqe!
            }
            
            //close file dialog
            fclose($gonna_call);

            //Printout
            echo "You are the " . $gone_call . " visitor on my webside.";
        ?>
    </body>
</html>
