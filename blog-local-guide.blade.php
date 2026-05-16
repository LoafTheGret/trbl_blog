<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Why Booking With a Local Guide</title>
  <!-- Modern Typography -->
  <link href="https://googleapis.com" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #FDF9F2; /* Cream background */
      color: #333;
      line-height: 1.6;
    }

    /* Hero Section with Background Image */
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                  url('https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?q=80&w=1600&auto=format&fit=crop');
      background-size: cover;
      background-position: center;
      height: 450px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      padding: 0 20px;
    }

    .hero h1 {
      font-size: 2.6rem;
      margin: 0;
      max-width: 900px;
      line-height: 1.2;
      font-weight: 700;
    }

    /* The floating white card */
    .container {
      max-width: 850px;
      margin: -100px auto 60px auto; /* Overlap hero */
      padding: 50px;
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      position: relative;
    }

    .meta-row {
      margin-bottom: 25px;
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .category-tag {
      background: #4B4B4B;
      color: white;
      padding: 5px 12px;
      border-radius: 4px;
      font-size: 0.75rem;
      font-weight: bold;
      text-transform: uppercase;
    }

    .read-time {
      font-size: 0.9rem;
      color: #888;
    }

    /* Light Brown Feature Box */
    .feature-box {
      background-color: #FAF6F1;
      border-left: 5px solid #8D5B3E;
      padding: 35px 40px;
      border-radius: 12px;
      margin: 35px 0;
    }

    .feature-box h3 {
      margin-top: 0;
      color: #5C4033;
      font-size: 1.4rem;
      margin-bottom: 20px;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    ul li {
      margin-bottom: 18px;
      padding-left: 35px;
      position: relative;
      font-size: 1.05rem;
    }

    /* Custom checkmark/icon to match screenshot style */
    ul li::before {
      content: "✓";
      position: absolute;
      left: 0;
      color: #8D5B3E;
      font-weight: bold;
      font-size: 1.2rem;
    }

    /* Dark Brown Summary Banner */
    .summary-banner {
      background-color: #6F4E37;
      color: #ffffff;
      padding: 30px;
      border-radius: 12px;
      margin-top: 40px;
    }

    .summary-banner h3 {
      margin-top: 0;
      color: #FFDAB9; /* Peach accent color */
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .summary-banner p {
      margin: 0;
      opacity: 0.95;
    }

    /* Back Button */
    a.back {
      display: inline-block;
      margin-top: 40px;
      padding: 14px 28px;
      background: #8D5B3E;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    a.back:hover {
      background: #5C4033;
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
    <h1>Why Booking With a Local Guide is Better Than a Big Tour Company</h1>
  </div>

  <div class="container">
    <div class="meta-row">
      <div class="category-tag">Sustainable Travel</div>
      <span class="read-time">Apr 22 • 5 min read</span>
    </div>

    <h2>When you book with a local guide, your money stays in the community and directly supports families rather than large corporations. Here’s why it matters:</h2>
    
    <div class="feature-box">
      <h3>Key Benefits of Local Guides</h3>
      <ul>
        <li><strong>Community Impact:</strong> Local guides reinvest earnings in their towns, helping small businesses thrive.</li>
        <li><strong>Authentic Stories:</strong> You hear real experiences and traditions, not rehearsed scripts.</li>
        <li><strong>Hidden Gems:</strong> Locals know the secret spots that big tour companies overlook.</li>
        <li><strong>Personalized Experience:</strong> Tours can be flexible and tailored to your interests.</li>
      </ul>
    </div>

    <div class="summary-banner">
      <h3>The Local Difference</h3>
      <p>Choosing a local guide means your trip is more meaningful, sustainable, and connected to the culture you came to experience.</p>
    </div>

    <a href="{{ url('/blog') }}" class="back">← Back to Blog</a>
  </div>

  <footer>
    © 2026 TrbalTours • Stay Safe While Exploring
  </footer>

</body>
</html>