<?php
// Database connection settings
$host = "localhost";  // Your host
$dbname = "hararmzn_hmficomment"; // Your database name
$username = "hararmzn_hamid"; // Your database username
$password = "Higher#0913692903#"; // Your database password

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);

        // Execute the query
        $stmt->execute();

        // Success message
        echo "<script>
            document.getElementById('successMessage').style.display = 'block';
        </script>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
