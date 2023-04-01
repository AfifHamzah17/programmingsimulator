<?php

function execute_code($code)
{
    // Error handling
    set_error_handler(function ($_errno, $errstr) {
        switch ($_errno) {
            case 1:
                throw new ParseError("[ParseERROR]: " . $errstr);
                break;
            case 2:
                throw new Error("[WARNING]: " . $errstr);
                break;
            case 3:
                throw new Error("[FATAL]: " . $errstr);
                break;
            case 4:
                throw new Error("[NOTICE]: " . $errstr);
                break;
        }
        throw new Error($errstr);
    });

    // Start session and execute PHP code
    session_start();
    header("Access-Control-Allow-Origin: *");
    ob_start();
    eval(' ?>' . $code);
    $output = ob_get_contents();
    ob_end_clean();

    // Check for output length limit
    if (strlen($output) > 512 * 1024) {
        echo "<strong>Error</strong> - Output exceeded the limit. The first 1024 characters were:<br />";
        echo substr($output, 0, 1024);
    } else {
        echo $output;
    }
}
