<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eco-Adventures in Davao del Norte</title>
  <link href="https://googleapis.com" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #FDF9F2;
      color: #333;
      line-height: 1.6;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                  url('https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?q=80&w=1600&auto=format&fit=crop');
      background-size: cover;
      background-size: cover;
      background-position: center;
      height: 500px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
    }

    .hero h1 {
      font-size: 3rem;
      max-width: 850px;
      font-weight: 700;
      padding: 0 20px;
    }

    /* Main Container */
    .container {
      max-width: 900px;
      margin: -100px auto 60px auto;
      padding: 60px;
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
      position: relative;
    }

    .meta-info {
      margin-bottom: 30px;
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .category {
      background: #4B4B4B;
      color: white;
      padding: 6px 14px;
      border-radius: 4px;
      font-size: 0.8rem;
      font-weight: bold;
      text-transform: uppercase;
    }

    .date {
      color: #888;
      font-size: 0.9rem;
    }

    /* Large Image Adventure Cards */
    .adventure-card {
      margin-bottom: 50px;
      overflow: hidden;
    }

    .adventure-image {
      width: 100%;
      height: 400px; /* Large image height */
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 20px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }

    .adventure-card h3 {
      font-size: 1.6rem;
      color: #5C4033;
      margin: 0 0 10px 0;
    }

    .adventure-card p {
      font-size: 1.35rem;
      color: #555;
      margin: 0;
    }

    /* Summary Banner */
    .summary-banner {
      background-color: #6F4E37;
      color: #ffffff;
      padding: 40px;
      border-radius: 16px;
      margin-top: 20px;
      text-align: center;
    }

    .summary-banner h3 {
      margin-top: 0;
      color: #FFDAB9;
      font-size: 1.5rem;
    }

    .summary-banner p {
      margin: 0;
      font-size: 1.1rem;
      opacity: 0.9;
    }

    a.back-btn {
      display: inline-block;
      margin-top: 40px;
      padding: 16px 32px;
      background: #8D5B3E;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    a.back-btn:hover {
      background: #5C4033;
    }

    footer {
      text-align: center;
      padding-bottom: 60px;
      color: #999;
    }
  </style>
</head>
<body>

  <div class="hero">
    <h1>Eco-Adventures in Davao del Norte</h1>
  </div>

  <div class="container">
    <div class="meta-info">
      <span class="category">Eco-Tourism</span>
      <span class="date">Apr 24 • 7 min read</span>
    </div>

    <h2>Davao del Norte is a paradise for eco-travelers. Beyond the cities and beaches, the province offers adventures that connect you with nature and local communities.</h2>

    <!-- Adventure 1 -->
    <div class="adventure-card">
      <h3>River Tubing</h3>
      <p>Experience the thrill of riding gentle rapids surrounded by lush forests and towering trees. It's the ultimate way to cool down while taking in the pristine jungle scenery.</p>
      <img src='/images/tub.avif' alt="River Tubing" class="adventure-image">
    </div>

    <!-- Adventure 2 -->
    <div class="adventure-card">
      <h3>Mountain Treks</h3>
      <p>Hike scenic trails with panoramic views of Tagum’s countryside. Whether you're a beginner or a pro, the rolling hills and fresh air provide a refreshing escape from the city.</p>
      <img src='/images/apo.jpg' alt="Mountain Treks" class="adventure-image">
    </div>

    <!-- Adventure 3 -->
    <div class="adventure-card">
      <h3>Agri-Tourism</h3>
      <p>Visit massive banana and cacao farms to see how local produce sustains the province. Learn about the "Seed to Bar" process of Davao's world-famous chocolate.</p>
      <img src='/images/agri.jpg' alt="Agri-Tourism" class="adventure-image">
    </div>

    <!-- Adventure 4 -->
    <div class="adventure-card">
      <h3>Eco-Villages</h3>
      <p>Meet communities practicing sustainable living and eco-friendly farming. Discover traditional weaving techniques and organic gardening methods passed down through generations.</p>
      <img src='/images/ecovil.jpg' alt="Eco-Villages" class="adventure-image">
    </div>

    <div class="summary-banner">
      <h3>Explore Responsibly</h3>
      <p>These eco-adventures support local livelihoods and promote sustainable tourism. It’s the perfect way to explore Davao del Norte while leaving a positive footprint.</p>
    </div>

    <a href="{{ url('/blog') }}" class="back-btn">← Back to Blog</a>
  </div>

  <footer>
    © 2026 TrbalTours • Stay Safe While Exploring
  </footer>

</body>
</html>