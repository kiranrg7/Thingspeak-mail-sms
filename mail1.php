<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'mailgun/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('pubkey-3b2c23cfd66630400c551ddfdd46ecc9');
$domain = "sandbox561055e7a4a44f439394d0c2eeba0523.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => 'krgarag@gmail.com',
    'to'      => 'krgarag6@gmail.com',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness!'
));

?>