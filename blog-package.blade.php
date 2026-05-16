<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>How to Choose a Tour Package</title>
  <link href="https://googleapis.com" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #FDF9F2; /* Cream background from image */
      color: #333;
    }

    /* Hero header with background image */
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                  url('https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?q=80&w=1600&auto=format&fit=crop');
      background-size: cover;
      background-position: center;
      height: 400px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      padding: 0 20px;
    }

    .hero h1 {
      font-size: 2.5rem;
      margin: 0;
      max-width: 800px;
      line-height: 1.2;
    }

    /* The floating card */
    .container {
      max-width: 800px;
      margin: -80px auto 60px auto; /* Overlaps hero */
      padding: 40px;
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      position: relative;
    }

    .meta-tag {
      display: inline-block;
      background: #4B4B4B;
      color: white;
      padding: 4px 12px;
      border-radius: 4px;
      font-size: 0.75rem;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .date {
      font-size: 0.85rem;
      color: #888;
      margin-left: 10px;
    }

    /* Light Brown Section */
   /* Light Brown Section - Updated for more size */
    .tips-box {
      background-color: #FAF6F1;
      border-left: 5px solid #8D5B3E; /* Slightly thicker border */
      padding: 35px 40px;            /* Increased from 25px for more internal space */
      border-radius: 12px;           /* Softer corners */
      margin: 40px 0;                /* More space above and below the box */
    }

    .tips-box h3 {
      margin-top: 0;
      color: #5C4033;
      font-size: 1.4rem;             /* Increased from 1.2rem */
      margin-bottom: 20px;
    }

    ul li {
      margin-bottom: 18px;           /* More space between lines */
      padding-left: 35px;            /* More space for the icon */
      font-size: 1.05rem;            /* Slightly larger text */
      position: relative;
    }

    ul li::before {
      content: "⚠";
      position: absolute;
      left: 0;
      color: #8D5B3E;
      font-size: 1.2rem;             /* Bigger warning icon */
    }

    /* Dark Brown Banner */
    .info-banner {
      background-color: #6F4E37;
      color: #ffffff;
      padding: 25px;
      border-radius: 12px;
      margin-top: 30px;
    }

    .info-banner h3 {
      margin-top: 0;
      color: #FFDAB9;
      font-size: 1.1rem;
    }

    a.back {
      display: inline-block;
      margin-top: 30px;
      padding: 12px 25px;
      background: #8D5B3E;
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
    }

    a.back:hover {
      background: #5C4033;
    }

    footer{
      text-align:center;
      padding:35px 20px;
      color:#777;
      font-size:0.9rem;
    }
  </style>
</head>
<body>

  <div class="hero">
    <h1>How to Choose a Tour Package When You Have No Idea Where to Go</h1>
  </div>

  <div class="container">
    <div class="meta-tag">Tourist Tips</div>
    <span class="date">Apr 21 • 3 min read</span>

    <h2>Feeling lost about where to travel? Don’t worry — most tourists start out confused. Here’s how to make the right choice:</h2>
    
    <div class="tips-box">
      <h3>Quick Steps to Decide</h3>
      <ul>
        <li><strong>Step 1:</strong> Admit you are confused — it’s normal!</li>
        <li><strong>Step 2:</strong> Pick a vibe — beach relaxation, mountain adventure, or food?</li>
        <li><strong>Step 3:</strong> Match your vibe — Palawan for beaches, Banaue for mountains.</li>
        <li><strong>Step 4:</strong> Choose a local guide who specializes in that vibe.</li>
      </ul>
    </div>

    <div class="info-banner">
      <h3>Why Experience Matters</h3>
      <p>By focusing on the experience you want, instead of just the location, you’ll end up with a tour package that feels right for you.</p>
    </div>

    <a href="{{ url('/blog') }}" class="back">← Back to Blog</a>

    
  </div>
  <footer>
    © 2026 TrbalTours • Stay Safe While Exploring
  </footer>  
</body>
</html>