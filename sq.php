<?php
$hashed_password_from_database = '$2y$10$ASOfwMVagONyTjmKdLD8LuqbDltnphkbK0xjX.E1zjROMjcA2BoIW'; // The hashed password retrieved from the database
$plain_password = 'lyXFKOMm'; // The plain text password to check

// Check if the plain password matches the hashed password
if (password_verify($plain_password, $hashed_password_from_database)) {
    echo "Password is correct!";
} else {
    echo "Password is incorrect!";
}
?>