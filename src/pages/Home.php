<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navkar Hive - Protecting Products, Preserving Planet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
:root {
  /* Brand Colors */
  --primary: #2D5016;
  --secondary: #8B7355;
  --accent: #D4A574;
  --light: #F5F1E8;
  --dark: #1a1a1a;
  --white: #ffffff;
  --gray-light: #f8f9fa;
  --gray-medium: #6c757d;
  --gray-dark: #343a40;
   
  /* Spacing */
  --space-xs: 0.5rem;
  --space-sm: 1rem;
  --space-md: 1.5rem;
  --space-lg: 2rem;
  --space-xl: 3rem;
  --space-xxl: 4rem;
   
  /* Typography */
  --font-base: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
  --font-size-sm: 0.875rem;
  --font-size-base: 1rem;
  --font-size-lg: 1.125rem;
  --font-size-xl: 1.5rem;
  --font-size-2xl: 2rem;
  --font-size-3xl: 2.5rem;
  --font-size-4xl: 3rem;
   
  /* Border Radius */
  --radius-sm: 0.375rem;
  --radius-md: 0.5rem;
  --radius-lg: 0.75rem;
  --radius-xl: 1rem;
   
  /* Shadows */
  --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.1);
  --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
  --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
  --shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.15);
   
  /* Transitions */
  --transition: all 0.3s ease;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: var(--font-base);
  line-height: 1.6;
  color: var(--dark);
  background-color: var(--white);
  overflow-x: hidden;
}

html {
  scroll-behavior: smooth;
}

/* Typography */
h1, h2, h3, h4, h5, h6 {
  font-weight: 600;
  line-height: 1.2;
  margin-bottom: var(--space-sm);
}

h1 { font-size: var(--font-size-4xl); }
h2 { font-size: var(--font-size-3xl); }
h3 { font-size: var(--font-size-2xl); }
h4 { font-size: var(--font-size-xl); }

p {
  margin-bottom: var(--space-sm);
}

a {
  text-decoration: none;
  color: inherit;
  transition: var(--transition);
}

img {
  max-width: 100%;
  height: auto;
  display: block;
}

/* Container */
.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 var(--space-md);
}

.container-wide {
  max-width: 1400px;
}

/* Navigation */
.navbar {
  background-color: var(--white);
  box-shadow: var(--shadow-md);
  position: sticky;
  top: 0;
  z-index: 1000;
  transition: var(--transition);
}

.navbar .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: var(--space-sm) var(--space-md);
}

.navbar-brand {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-xl);
  font-weight: 700;
  color: var(--primary);
}

.navbar-brand svg {
  width: 40px;
  height: 40px;
}

.navbar-menu {
  display: flex;
  list-style: none;
  gap: var(--space-lg);
  align-items: center;
}

.navbar-menu li a {
  color: var(--dark);
  font-weight: 500;
  padding: var(--space-xs) var(--space-sm);
  border-radius: var(--radius-md);
  transition: var(--transition);
}

.navbar-menu li a:hover,
.navbar-menu li a.active {
  color: var(--primary);
  background-color: rgba(45, 80, 22, 0.1);
}

.navbar-toggle {
  display: none;
  flex-direction: column;
  gap: 4px;
  background: none;
  border: none;
  cursor: pointer;
  padding: var(--space-xs);
}

.navbar-toggle span {
  width: 25px;
  height: 3px;
  background-color: var(--primary);
  border-radius: 2px;
  transition: var(--transition);
}

/* Hero Section */
.hero {
  background: linear-gradient(135deg, var(--primary) 0%, #3d6b22 100%);
  color: var(--white);
  padding: var(--space-xxl) 0;
  position: relative;
  overflow: hidden;
}

.hero::before {
  content: '';
  position: absolute;
  top: 0;
  right: -50%;
  width: 100%;
  height: 100%;
  background: url('data:image/svg+xml,%3Csvg width="100" height="100" xmlns="http://www.w3.org/2000/svg",%3E%3Cpath d="M25 50 L37.5 43.3 L50 50 L50 36.6 L37.5 29.9 L25 36.6 Z M50 50 L62.5 43.3 L75 50 L75 36.6 L62.5 29.9 L50 36.6 Z" fill="rgba(255,255,255,0.05)" /%3E%3C/svg%3E');
  opacity: 0.3;
}

.hero .container {
  position: relative;
  z-index: 1;
  text-align: center;
}

.hero h1 {
  font-size: clamp(2rem, 5vw, 3.5rem);
  margin-bottom: var(--space-md);
  animation: fadeInUp 0.8s ease;
}

.hero p {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-xl);
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
  opacity: 0.95;
  animation: fadeInUp 0.8s ease 0.2s both;
}

/* Buttons */
.btn {
  display: inline-block;
  padding: var(--space-sm) var(--space-lg);
  border-radius: var(--radius-lg);
  font-weight: 600;
  text-align: center;
  cursor: pointer;
  border: 2px solid transparent;
  transition: var(--transition);
  font-size: var(--font-size-base);
}

.btn-primary {
  background-color: var(--accent);
  color: var(--dark);
  border-color: var(--accent);
}

.btn-primary:hover {
  background-color: transparent;
  color: var(--accent);
  border-color: var(--accent);
  transform: translateY(-2px);
  box-shadow: var(--shadow-lg);
}

.btn-secondary {
  background-color: transparent;
  color: var(--primary);
  border-color: var(--primary);
}

.btn-secondary:hover {
  background-color: var(--primary);
  color: var(--white);
  transform: translateY(-2px);
}

.btn-white {
  background-color: var(--white);
  color: var(--primary);
  border-color: var(--white);
}

.btn-white:hover {
  background-color: transparent;
  color: var(--white);
  border-color: var(--white);
  transform: translateY(-2px);
}

/* Section Styles */
.section {
  padding: var(--space-xxl) 0;
}

.section-header {
  text-align: center;
  max-width: 800px;
  margin: 0 auto var(--space-xl);
}

.section-header h2 {
  color: var(--primary);
  margin-bottom: var(--space-md);
}

.section-header p {
  color: var(--gray-medium);
  font-size: var(--font-size-lg);
}

/* Features Grid */
.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: var(--space-lg);
  margin-top: var(--space-xl);
}

.feature-card {
  background-color: var(--white);
  padding: var(--space-lg);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-md);
  text-align: center;
  transition: var(--transition);
  border: 2px solid transparent;
}

.feature-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-xl);
  border-color: var(--accent);
}

.feature-icon {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, var(--primary), #3d6b22);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-md);
  color: var(--white);
  font-size: var(--font-size-2xl);
}

.feature-card h3 {
  color: var(--primary);
  margin-bottom: var(--space-sm);
  font-size: var(--font-size-lg);
}

.feature-card p {
  color: var(--gray-medium);
  line-height: 1.7;
}

/* Products Section */
.products-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: var(--space-lg);
  margin-top: var(--space-xl);
}

.product-card {
  background-color: var(--white);
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-md);
  transition: var(--transition);
  border: 2px solid transparent;
}

.product-card:hover {
  transform: translateY(-8px);
  box-shadow: var(--shadow-xl);
  border-color: var(--primary);
}

.product-image {
  width: 100%;
  height: 250px;
  background: linear-gradient(135deg, var(--light), var(--accent));
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
}

.product-image svg {
  width: 120px;
  height: 120px;
  opacity: 0.7;
}

.product-content {
  padding: var(--space-md);
}

.product-name {
  color: var(--primary);
  font-size: var(--font-size-lg);
  font-weight: 600;
  margin-bottom: var(--space-sm);
}

.product-description {
  color: var(--gray-medium);
  margin-bottom: var(--space-md);
  font-size: var(--font-size-sm);
}

.product-price {
  font-size: var(--font-size-xl);
  color: var(--primary);
  font-weight: 700;
  margin-bottom: var(--space-md);
}

.product-card .btn {
  width: 100%;
}

/* Use Cases Section */
.use-cases {
  background-color: var(--light);
}

.use-cases-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: var(--space-lg);
}

.use-case-card {
  background-color: var(--white);
  padding: var(--space-lg);
  border-radius: var(--radius-lg);
  border-left: 4px solid var(--primary);
  transition: var(--transition);
}

.use-case-card:hover {
  transform: translateX(5px);
  box-shadow: var(--shadow-lg);
}

.use-case-card h3 {
  color: var(--primary);
  margin-bottom: var(--space-sm);
}

.use-case-card p {
  color: var(--gray-medium);
}

/* About Section */
.about {
  background-color: var(--white);
}

.about-content {
  max-width: 800px;
  margin: 0 auto;
}

.about-text h2 {
  color: var(--primary);
  margin-bottom: var(--space-md);
}

.about-text p {
  color: var(--gray-medium);
  margin-bottom: var(--space-md);
  line-height: 1.8;
}

.about-highlights {
  list-style: none;
  margin-top: var(--space-md);
}

.about-highlights li {
  padding: var(--space-sm);
  margin-bottom: var(--space-sm);
  padding-left: var(--space-lg);
  position: relative;
  color: var(--dark);
}

.about-highlights li::before {
  content: '✓';
  position: absolute;
  left: 0;
  color: var(--primary);
  font-weight: bold;
  font-size: var(--font-size-lg);
}



/* Contact Section */
.contact {
  background-color: var(--light);
}

.contact-wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-xl);
}

.contact-info {
  background-color: var(--primary);
  color: var(--white);
  padding: var(--space-xl);
  border-radius: var(--radius-xl);
}

.contact-info h3 {
  margin-bottom: var(--space-lg);
  color: var(--white);
}

.contact-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  margin-bottom: var(--space-lg);
}

.contact-item-icon {
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.contact-item-content h4 {
  color: var(--accent);
  margin-bottom: var(--space-xs);
  font-size: var(--font-size-base);
}

.contact-item-content p {
  opacity: 0.9;
  margin: 0;
}

.contact-form {
  background-color: var(--white);
  padding: var(--space-xl);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-md);
}

.form-group {
  margin-bottom: var(--space-md);
}

.form-group label {
  display: block;
  margin-bottom: var(--space-xs);
  color: var(--dark);
  font-weight: 500;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: var(--space-sm);
  border: 2px solid var(--gray-light);
  border-radius: var(--radius-md);
  font-family: var(--font-base);
  font-size: var(--font-size-base);
  transition: var(--transition);
}

.form-group input:focus,
.form-group textarea:focus {
  outline: none;
  border-color: var(--primary);
  box-shadow: 0 0 0 3px rgba(45, 80, 22, 0.1);
}

.form-group textarea {
  resize: vertical;
  min-height: 120px;
}

.form-error {
  color: #dc3545;
  font-size: var(--font-size-sm);
  margin-top: var(--space-xs);
  display: none;
}

.form-success {
  background-color: #d4edda;
  color: #155724;
  padding: var(--space-md);
  border-radius: var(--radius-md);
  margin-bottom: var(--space-md);
  display: none;
}

/* CTA Section */
.cta {
  background: linear-gradient(135deg, var(--primary) 0%, #3d6b22 100%);
  color: var(--white);
  text-align: center;
  padding: var(--space-xxl) 0;
}

.cta h2 {
  color: var(--white);
  margin-bottom: var(--space-md);
}

.cta p {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-xl);
  opacity: 0.95;
}

/* Footer */
.footer {
  background-color: var(--dark);
  color: var(--white);
  padding: var(--space-xl) 0 var(--space-md);
}

.footer-content {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: var(--space-xl);
  margin-bottom: var(--space-xl);
}

.footer-section h3 {
  color: var(--accent);
  margin-bottom: var(--space-md);
}

.footer-section p,
.footer-section a {
  color: rgba(255, 255, 255, 0.8);
  margin-bottom: var(--space-sm);
  display: block;
}

.footer-section a:hover {
  color: var(--accent);
}

.footer-bottom {
  text-align: center;
  padding-top: var(--space-md);
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  color: rgba(255, 255, 255, 0.6);
}

/* Animations */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.fade-in {
  animation: fadeInUp 0.6s ease;
}

/* Responsive Design */
@media (max-width: 768px) {
  .navbar-menu {
    position: fixed;
    top: 70px;
    left: -100%;
    width: 100%;
    background-color: var(--white);
    flex-direction: column;
    padding: var(--space-lg);
    box-shadow: var(--shadow-lg);
    transition: left 0.3s ease;
  }
   
  .navbar-menu.active {
    left: 0;
  }
   
  .navbar-toggle {
    display: flex;
  }
   
  .navbar-toggle.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }
   
  .navbar-toggle.active span:nth-child(2) {
    opacity: 0;
  }
   
  .navbar-toggle.active span:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -7px);
  }
   
  .hero {
    padding: var(--space-xl) 0;
  }
   
  .section {
    padding: var(--space-xl) 0;
  }
   
  .features-grid,
  .products-grid,
  .use-cases-grid {
    grid-template-columns: 1fr;
  }
   
  .contact-wrapper {
    grid-template-columns: 1fr;
  }
   
  .footer-content {
    grid-template-columns: 1fr;
    text-align: center;
  }
   
  h1 {
    font-size: var(--font-size-3xl);
  }
   
  h2 {
    font-size: var(--font-size-2xl);
  }
}

/* Utility Classes */
.text-center {
  text-align: center;
}

.mt-1 { margin-top: var(--space-sm); }
.mt-2 { margin-top: var(--space-md); }
.mt-3 { margin-top: var(--space-lg); }
.mb-1 { margin-bottom: var(--space-sm); }
.mb-2 { margin-bottom: var(--space-md); }
.mb-3 { margin-bottom: var(--space-lg); }

.hidden {
  display: none;
}
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="?page=home" class="navbar-brand">
                <img src="https://8qxnss-ir.myshopify.com/cdn/shop/files/BRAND_LOGO.png?v=1760783593&width=1600" alt="Navkar Hive Logo" style="height: 40px; width: auto;">
                Navkar Hive
            </a>
            <button class="navbar-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="navbar-menu" id="navMenu">
                <li><a href="?page=home" class="active">Home</a></li>
                <li><a href="?page=products">Products</a></li>
                <li><a href="?page=about">About</a></li>
                <li><a href="?page=contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="container">
            <h1>Protecting Products, Preserving Planet</h1>
            <p>Premium honeycomb paper rolls made from high GSM 80 kraft paper for superior strength and eco-friendly packaging solutions</p>
            <a href="?page=products" class="btn btn-white">Shop Now</a>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Navkar Hive?</h2>
                <p>Discover the benefits of our premium honeycomb paper solutions</p>
            </div>
            <div class="features-grid">
                <div class="feature-card fade-in">
                    <div class="feature-icon">💰</div>
                    <h3>Cost-Effective</h3>
                    <p>Reduces the need for additional protective materials like bubble wrap or foam, saving you money</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">🌱</div>
                    <h3>Eco-Friendly &amp; Biodegradable</h3>
                    <p>Made from sustainable materials. 100% recyclable, reducing environmental impact</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">💪</div>
                    <h3>Exceptional Strength &amp; Durability</h3>
                    <p>High GSM 80 kraft paper ensures superior strength. Protect delicate and heavy items</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">✂️</div>
                    <h3>Customizable Applications</h3>
                    <p>Can be cut to required size. Compatible with automated packaging machines</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="products" style="background-color: var(--light);">
        <div class="container">
            <div class="section-header">
                <h2>Durable Protection, Sustainable Solutions</h2>
                <p>Premium honeycomb paper rolls engineered for exceptional strength and eco-friendly packaging</p>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image" style="background: none; padding: 0;">
                        <img src="https://media.istockphoto.com/id/1417479753/photo/environmental-friendly-paper-bubble-wrap-products-packed-with-paper-cushioning-in-a-box-and.jpg?s=612x612&w=0&k=20&c=1LeMoUVgPc2QH2EWif6zKzaPzR5SRXsXmOiVtcBHmjg=" alt="Honeycomb Paper Roll 15 x 100m" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="product-content">
                        <h3 class="product-name">Honeycomb Paper Roll 15" x 100m</h3>
                        <p class="product-description">Premium honeycomb paper roll with superior strength and durability</p>
                        <div class="product-price">₹549</div>
                        <button class="btn btn-primary" onclick="addToCart('Honeycomb Paper Roll 15x100m', 549)">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image" style="background: none; padding: 0;">
                        <img src="https://8qxnss-ir.myshopify.com/cdn/shop/files/PRODUCT_IMG3.png?v=1760427662&width=1600" alt="Honeycomb Paper Roll 15 x 50m" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="product-content">
                        <h3 class="product-name">Honeycomb Paper Roll 15" x 50m</h3>
                        <p class="product-description">Perfect for medium-scale packaging requirements</p>
                        <div class="product-price">₹379</div>
                        <button class="btn btn-primary" onclick="addToCart('Honeycomb Paper Roll 15x50m', 379)">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image" style="background: none; padding: 0;">
                        <img src="https://8qxnss-ir.myshopify.com/cdn/shop/files/PRODUCT_IMG2.png?v=1760427362&width=1600" alt="Honeycomb Paper Roll 12 x 100m" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="product-content">
                        <h3 class="product-name">Honeycomb Paper Roll 12" x 100m</h3>
                        <p class="product-description">Ideal for standard packaging and protection needs</p>
                        <div class="product-price">₹460</div>
                        <button class="btn btn-primary" onclick="addToCart('Honeycomb Paper Roll 12x100m', 460)">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image" style="background: none; padding: 0;">
                        <img src="https://media.istockphoto.com/id/1415487395/photo/environmental-friendly-paper-bubble-wrap-products-packed-with-paper-cushioning-and-paper.jpg?s=612x612&w=0&k=20&c=uKs0ZnmRTXQjruNLlrQYc88jutOH0xdANSGJHf1pXKc=" alt="Honeycomb Paper Roll 12 x 50m" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="product-content">
                        <h3 class="product-name">Honeycomb Paper Roll 12" x 50m</h3>
                        <p class="product-description">Compact roll for smaller shipping and storage requirements</p>
                        <div class="product-price">₹370</div>
                        <button class="btn btn-primary" onclick="addToCart('Honeycomb Paper Roll 12x50m', 370)">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2>Key Benefits</h2>
                <p>What makes our honeycomb paper the perfect choice</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">⚖️</div>
                    <h3>Lightweight &amp; Easy to Handle</h3>
                    <p>Reduces shipping costs. Easy to cut, fold, and wrap around items of any size</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔧</div>
                    <h3>Machine Compatible</h3>
                    <p>Compatible with automated packaging machines for efficient operations</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📦</div>
                    <h3>Versatile Protection</h3>
                    <p>Suitable for protecting items from electronics to furniture and everything in between</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">♻️</div>
                    <h3>100% Recyclable</h3>
                    <p>Completely recyclable and biodegradable, contributing to a sustainable future</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section use-cases">
        <div class="container">
            <div class="section-header">
                <h2>Applications</h2>
                <p>Versatile packaging solutions for various industries</p>
            </div>
            <div class="use-cases-grid">
                <div class="use-case-card">
                    <h3>📦 Packaging &amp; Shipping</h3>
                    <p>Protect fragile items like electronics, glassware, and ceramics during transit</p>
                </div>
                <div class="use-case-card">
                    <h3>🏭 Industrial Applications</h3>
                    <p>Suitable for wrapping metals, machine parts, and heavy equipment</p>
                </div>
                <div class="use-case-card">
                    <h3>🛋️ Furniture &amp; Home Products</h3>
                    <p>Prevent scratches on surfaces during transportation and storage</p>
                </div>
                <div class="use-case-card">
                    <h3>🎨 Creative &amp; Craft Projects</h3>
                    <p>Can be used for DIY projects, displays, and creative applications</p>
                </div>
                <div class="use-case-card">
                    <h3>📮 Void Filling</h3>
                    <p>Fill empty spaces in boxes for secure shipping and prevent movement</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section about" id="about">
        <div class="container">
            <div class="about-text">
                    <h2>About Navkar Hive</h2>
                    <p>At Navkar Hive, we are committed to providing premium quality honeycomb paper packaging solutions that protect your products while preserving our planet. Our high GSM 80 kraft paper ensures superior strength and durability for all your packaging needs.</p>
                    <p>We understand the importance of sustainable packaging in today's world. That's why our products are 100% recyclable and biodegradable, helping businesses reduce their environmental footprint without compromising on quality.</p>
                    <ul class="about-highlights">
                        <li>High GSM 80 kraft paper for superior strength</li>
                        <li>100% recyclable and biodegradable materials</li>
                        <li>Customizable sizes for various applications</li>
                        <li>Cost-effective alternative to traditional packaging</li>
                        <li>Compatible with automated packaging systems</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="section contact" id="contact">
        <div class="container">
            <div class="section-header">
                <h2>Get In Touch</h2>
                <p>Have questions? We're here to help you find the perfect packaging solution</p>
            </div>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </div>
                        <div class="contact-item-content">
                            <h4>Email</h4>
                            <p>email@example.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <div class="contact-item-content">
                            <h4>Address</h4>
                            <p>69, Stadium Market<br>Ratlam, MP – 457001</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/>
                            </svg>
                        </div>
                        <div class="contact-item-content">
                            <h4>Phone</h4>
                            <p>+91 99999 99999</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                            </svg>
                        </div>
                        <div class="contact-item-content">
                            <h4>Business Hours</h4>
                            <p>Open 24/7 - Available Anytime</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <div class="form-success" id="formSuccess">
                        Thank you for your message! We'll get back to you soon.
                    </div>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" required>
                            <span class="form-error" id="nameError">Please enter your name</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                            <span class="form-error" id="emailError">Please enter a valid email</span>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required></textarea>
                            <span class="form-error" id="messageError">Please enter your message</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2>Start Packing Sustainably Today</h2>
            <p>Join the movement towards eco-friendly packaging with Navkar Hive.</p>
            <a href="?page=products" class="btn btn-white">Shop Now</a>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Navkar Hive</h3>
                    <p>Protecting Products, Preserving Planet. Premium honeycomb paper solutions.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <a href="?page=home">Home</a>
                    <a href="?page=products">Products</a>
                    <a href="?page=about">About</a>
                    <a href="?page=contact">Contact</a>
                </div>
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p> Gb road, Delhi</p>
                    <p>email@example.com</p>
                    <p>+91 99999 99999</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Navkar Hive. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Navbar Toggle
        const navToggle = document.getElementById('navToggle');
        const navMenu = document.getElementById('navMenu');

        if (navToggle) {
            navToggle.addEventListener('click', () => {
                navToggle.classList.toggle('active');
                navMenu.classList.toggle('active');
            });
        }
    </script>
</body>
</html>