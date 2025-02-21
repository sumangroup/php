<?php
session_start();
include_once "config/database.php";

// Initialize database connection
$database = new Database();
$db = $database->getConnection();

// Prepare query to get all products
$query = "SELECT p.*, c.name as category_name 
          FROM products p 
          LEFT JOIN categories c ON p.category_id = c.id 
          ORDER BY p.created_at DESC";
$stmt = $db->prepare($query);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Online Shopping</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Online Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="products.php">Products</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php if(isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <!-- Category Filter -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Filter by Category</h5>
                        <?php
                        $cat_query = "SELECT * FROM categories ORDER BY name";
                        $cat_stmt = $db->prepare($cat_query);
                        $cat_stmt->execute();
                        ?>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="products.php" class="btn btn-outline-primary btn-sm">All</a>
                            <?php while ($category = $cat_stmt->fetch(PDO::FETCH_ASSOC)): ?>
                                <a href="products.php?category=<?php echo $category['id']; ?>" 
                                   class="btn btn-outline-primary btn-sm">
                                    <?php echo htmlspecialchars($category['name']); ?>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="row">
            <?php while ($product = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card product-card h-100">
                        <?php if (!empty($product['image'])): ?>
                            <img src="uploads/<?php echo htmlspecialchars($product['image']); ?>" 
                                 class="card-img-top product-image" 
                                 alt="<?php echo htmlspecialchars($product['name']); ?>">
                        <?php else: ?>
                            <img src="assets/images/no-image.jpg" 
                                 class="card-img-top product-image" 
                                 alt="No image available">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                            <p class="card-text text-muted">
                                Category: <?php echo htmlspecialchars($product['category_name']); ?>
                            </p>
                            <p class="card-text">
                                <?php echo substr(htmlspecialchars($product['description']), 0, 100) . '...'; ?>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">$<?php echo number_format($product['price'], 2); ?></h6>
                                <?php if ($product['stock'] > 0): ?>
                                    <a href="add_to_cart.php?id=<?php echo $product['id']; ?>" 
                                       class="btn btn-primary btn-sm">Add to Cart</a>
                                <?php else: ?>
                                    <button class="btn btn-secondary btn-sm" disabled>Out of Stock</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 py-3">
        <div class="container text-center">
            <p>&copy; <?php echo date('Y'); ?> Online Shop. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
