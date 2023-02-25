<?php
session_start();

// Initialize the user array
$users = array(
    array('Username' => 'Daiy', 'Password' => '123'),
    array('Username' => 'Pietin', 'Password' => '111'),
    array('Username' => 'Sam', 'Password' => '132'),
    array('Username' => 'Lan', 'Password' => '321'),
    array('Username' => 'Alex', 'Password' => ''),
);

// Store the user array in the session
$_SESSION['users'] = $users;
// Get the user array from the session
$users = $_SESSION['users'];

// Loop through the users array and find the user with the name "Sam"
foreach ($users as $key => $user) {
    if ($user['Username'] == 'Sam') {
        // Remove the user from the array
        unset($users[$key]);
        break; // Stop looping after the user is found and removed
    }
}

// Store the updated user array back in the session
$_SESSION['users'] = $users;


// Get the user array from the session
$users = $_SESSION['users'];

// Loop through the users array and find the user with the name "Sam"
foreach ($users as $key => $user) {
    if ($user['Username'] == 'Sam') {
        // Remove the user from the array
        unset($users[$key]);
        break; // Stop looping after the user is found and removed
    }
}

// Store the updated user array back in the session
$_SESSION['users'] = $users;

// Display the remaining users
echo "<h2>List of users:</h2>";
echo "<ul>";
foreach ($users as $user) {
    echo "<li>{$user['Username']}</li>";
}
echo "</ul>";

?>




