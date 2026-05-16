<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top 5 Street Foods in Davao</title>
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
      background-position: center;
      height: 450px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
    }

    .hero h1 {
      font-size: 2.8rem;
      max-width: 800px;
      font-weight: 700;
      text-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    /* Main Container */
    .container {
      max-width: 850px;
      margin: -100px auto 60px auto;
      padding: 50px;
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      position: relative;
    }

    .meta-tag {
      display: inline-block;
      background: #4B4B4B;
      color: white;
      padding: 5px 12px;
      border-radius: 4px;
      font-size: 0.75rem;
      font-weight: bold;
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    /* Food List with Images */
    .food-list {
      margin: 30px 0;
      padding: 0;
    }

    .food-item {
      display: grid;
      grid-template-columns: 120px 1fr;
      gap: 20px;
      align-items: center;
      background: #FAF6F1;
      margin-bottom: 20px;
      padding: 15px;
      border-radius: 12px;
      border-left: 5px solid #8D5B3E;
    }

    .food-image {
      width: 120px;
      height: 90px;
      border-radius: 8px;
      object-fit: cover;
      background: #ddd; /* Placeholder color */
    }

    .food-info h3 {
      margin: 0 0 5px 0;
      color: #5C4033;
      font-size: 1.2rem;
    }

    .food-info p {
      margin: 0;
      font-size: 0.95rem;
      color: #555;
    }

    /* Bottom Banner */
    .summary-banner {
      background-color: #6F4E37;
      color: #ffffff;
      padding: 30px;
      border-radius: 12px;
      margin-top: 40px;
    }

    .summary-banner h3 {
      margin-top: 0;
      color: #FFDAB9;
    }

    a.back {
      display: inline-block;
      margin-top: 40px;
      padding: 14px 28px;
      background: #8D5B3E;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
    }

    footer {
      text-align: center;
      padding-bottom: 50px;
      color: #999;
      font-size: 0.85rem;
    }
  </style>
</head>
<body>

  <div class="hero">
    <h1>Top 5 Street Foods You Must Try in Davao</h1>
  </div>

  <div class="container">
    <div class="meta-tag">Food & Culture</div>
    <h2>Davao is famous for its vibrant street food culture. Here are five must-try local delicacies:</h2>

    <div class="food-list">
      <!-- Durian Candy -->
      <div class="food-item">
        <img src='/images/cabn.avif' alt="Durian Candy" class="food-image">
        <div class="food-info">
          <h3>Durian Candy</h3>
          <p>Sweet and creamy, made from the “King of Fruits.” A Davao staple.</p>
        </div>
      </div>

      <!-- Grilled Isaw -->
      <div class="food-item">
        <img src='/images/isaw.jpg' alt="Grilled Isaw" class="food-image">
        <div class="food-info">
          <h3>Grilled Isaw</h3>
          <p>Charcoal-grilled chicken intestines, crispy and smoky with a vinegar dip.</p>
        </div>
      </div>

      <!-- Kwek-Kwek -->
      <div class="food-item">
        <img src='/images/kwek.jpg' alt="Kwek-Kwek" class="food-image">
        <div class="food-info">
          <h3>Kwek-Kwek</h3>
          <p>Quail eggs coated in orange batter and deep-fried until perfectly crunchy.</p>
        </div>
      </div>

      <!-- Balut -->
      <div class="food-item">
        <img src='/images/balut.jpg' alt="Balut" class="food-image">
        <div class="food-info">
          <h3>Balut</h3>
          <p>A fertilized duck egg—the ultimate Filipino street food challenge.</p>
        </div>
      </div>

      <!-- Banana Cue -->
      <div class="food-item">
        <img src='/images/banana.jpg' alt="Banana Cue" class="food-image">
        <div class="food-info">
          <h3>Banana Cue</h3>
          <p>Deep-fried saba bananas coated in caramelized brown sugar on a stick.</p>
        </div>
      </div>
    </div>

    <div class="summary-banner">
      <h3>The Taste of Davao</h3>
      <p>Exploring Davao’s street food scene is a delicious way to connect with local culture. Don’t miss these treats!</p>
    </div>

    <a a href="{{ url('/blog') }}" class="back">← Back to Blog</a>
  </div>

  <footer>
    © 2026 TrbalTours • Stay Safe While Exploring
  </footer>

</body>
</html>