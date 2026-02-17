<?php

// If your code is only PHP Code, you can omit the closing tag (\?\>) at the end of the file. 
// This prevents accidental whitespace or new lines from being sent to the output, which can cause issues with header manipulation and session management.

echo 'Hello, World!';

echo 'Hello World!', "\n"; // You can also use double quotes to include special characters like newlines (\n) or tabs (\t).

echo 'Hello', ' ', 'World!'; // You can use echo with multiple parameters separated by commas.

echo 'Joe\'s book'; // To include a single quote within a string, you can escape it with a backslash (\).

// Difference between echo and print is that print returns a value (1) while echo does not return anything.
print 'Hello again!';

echo print 'Hello again!'; // This will output "Hello again!1" because print returns 1.

// To run and PHP script you can use the command line interface (CLI) or a web server.

// For this example, we can type the following command in the terminal to run the script, assuming the file is named index.php and is located in the current directory:
// php index.php
