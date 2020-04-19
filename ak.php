 <!DOCTYPE html>
 <html>
 <head>
     <title>ok</title>
 </head>
 <body>
  <h2>Ping for FREE</h2>

        <p>Enter an IP address below:</p>
        <form name="ping" action="#" method="post">
            <input type="text" name="ip" size="30">
            <input type="submit" value="submit" name="submit">
 <?php

if( isset( $_POST[ 'submit'] ) ) {

    $target = $_REQUEST[ 'ip' ];

    // Remove any of the charactars in the array (blacklist).
    $substitutions = array(
        '&&' => '',
        ';' => '',
    );

    $target = str_replace( array_keys( $substitutions ), $substitutions, $target );
    
    // Determine OS and execute the ping command.
    if (stristr(php_uname('s'), 'Windows NT')) { 
    
        $cmd = shell_exec( 'nmap  ' . $target );
        echo '<pre>'.$cmd.'</pre>';
        
    } else { 
    
        $cmd = shell_exec( 'nmap  -sV ' . $target );   #( 'ping  -c 3 ' . $target );
        echo '<pre>'.$cmd.'</pre>';
        
    }
}

?>




        </form>
 </body>
 </html>

       


 