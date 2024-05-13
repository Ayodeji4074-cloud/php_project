<?php
// Connect to the MySQL database
$conn = mysqli_connect("localhost", "root", "", "project");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the search query parameter is set
if(isset($_GET['search_query'])) {
    // Get the search query from the URL parameter
    $search_query = $_GET['search_query'];

    // Prepare the SQL query to fetch products matching the search query
    $sql = "SELECT * FROM products WHERE product_title LIKE '%$search_query%'";

    // Execute the query
    $result = mysqli_query($conn, $sql);


    // Check if any rows were returned
    if(mysqli_num_rows($result) > 0) {
        // Loop through the rows and display the product information
        while($row = mysqli_fetch_assoc($result)) {
            echo '<div class="product-item">';
            echo '<div class="product-thumb">';
            echo '<img src="' . $row['image'] . '" alt="' . $row['product_title'] . '">';
            echo '</div>';
            echo '<div class="product-content">';
            echo '<h5>' . $row['product_title'] . '</h5>';
            echo '<span class="price">$' . $row['price'] . '</span><br><br>';
            echo '<a href="products.php" class="btn btn-primary">View</a>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No products found.';
    }
} else {
    // If search query parameter is not set, display an error message
    echo 'No search query specified.';
}

// Close the database connection
mysqli_close($conn);
?>
