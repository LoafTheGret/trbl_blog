<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>How to NOT Get Scammed</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    body{
      font-family:'Poppins', sans-serif;
      background:#f5f1eb;
      color:#3b2f2f;
      min-height:100vh;
    }

    /* HERO */
    .hero{
      position:relative;
      height:350px;
      background:
      linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)),
      url('https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?q=80&w=1600&auto=format&fit=crop');
      background-size:cover;
      background-position:center;
      display:flex;
      align-items:center;
      justify-content:center;
      text-align:center;
      color:white;
      padding:20px;
    }

    .hero-content{
      max-width:800px;
    }

    .hero h1{
      font-size:3rem;
      font-weight:700;
      margin-bottom:15px;
      line-height:1.2;
    }

    .hero p{
      font-size:1rem;
      opacity:0.9;
    }

    /* BLOG CARD */
    .blog-wrapper{
      margin-top:-70px;
      position:relative;
      z-index:10;
    }

    .blog-card{
      background:white;
      border-radius:22px;
      padding:45px;
      box-shadow:0 10px 30px rgba(0,0,0,0.08);
      border:1px solid rgba(0,0,0,0.04);
    }

    .meta{
      display:flex;
      gap:15px;
      align-items:center;
      margin-bottom:30px;
      flex-wrap:wrap;
    }

    .badge-custom{
      background:#5c4033;
      color:white;
      padding:8px 16px;
      border-radius:30px;
      font-size:0.8rem;
      font-weight:500;
    }

    .date{
      color:#777;
      font-size:0.9rem;
    }

    .lead-text{
      font-size:1.1rem;
      line-height:1.9;
      color:#555;
      margin-bottom:30px;
    }

    /* TIPS */
    .tips-box{
      background:#f8f4ef;
      border-left:5px solid #a0522d;
      border-radius:15px;
      padding:30px;
      margin:35px 0;
    }

    .tips-box h3{
      margin-bottom:20px;
      color:#5c4033;
      font-weight:600;
    }

    .tips-list{
      list-style:none;
      padding:0;
    }

    .tips-list li{
      margin-bottom:18px;
      padding-left:38px;
      position:relative;
      line-height:1.7;
      color:#161515;
    }

    .tips-list li::before{
      content:"⚠";
      position:absolute;
      left:0;
      top:0;
      font-size:1.2rem;
    }

    /* INFO CARD */
    .info-card{
      background:linear-gradient(135deg, #5c4033, #7b4d35);
      color:white;
      padding:30px;
      border-radius:18px;
      margin-top:35px;
    }

    .info-card h4{
      font-weight:600;
      margin-bottom:15px;
    }

    .info-card p{
      line-height:1.8;
      opacity:0.95;
    }

    /* BUTTON */
    .back-btn{
      display:inline-flex;
      align-items:center;
      gap:10px;
      margin-top:35px;
      padding:14px 24px;
      background:#a0522d;
      color:white;
      text-decoration:none;
      border-radius:12px;
      font-weight:600;
      transition:0.3s ease;
      box-shadow:0 5px 15px rgba(160,82,45,0.25);
    }

    .back-btn:hover{
      background:#7b3f1d;
      color:white;
      transform:translateY(-2px);
    }

    /* FOOTER */
    footer{
      text-align:center;
      padding:35px 20px;
      color:#777;
      font-size:0.9rem;
    }

    @media(max-width:768px){

      .hero{
        height:300px;
      }

      .hero h1{
        font-size:2rem;
      }

      .blog-card{
        padding:28px;
      }
    }
  </style>
</head>
<body>

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-content">
      <h1>How to NOT Get Scammed as a Tourist in the Philippines</h1>
      <p>Essential safety tips every traveler should know before exploring the country.</p>
    </div>
  </section>

  <!-- BLOG CONTENT -->
  <div class="container blog-wrapper">
    <div class="blog-card">

      <div class="meta">
        <span class="badge-custom">Tourist Safety</span>
        <span class="date">Apr 20 • 4 min read</span>
      </div>

      <h2>
        Traveling in the Philippines can be an unforgettable experience filled with
        beautiful beaches, friendly locals, and exciting adventures. However, tourists
        can still become targets of scams if they are not careful.
      </h2>

      <div class="tips-box">
        <h3>Common Tourist Scams to Watch Out For</h3>

        <ul class="tips-list">
          <li>
            Overpriced taxi fares — always ensure the driver uses the meter.
          </li>

          <li>
            “Special deals” that pressure you into paying upfront immediately.
          </li>

          <li>
            Souvenir shops charging tourists significantly higher prices than locals.
          </li>

          <li>
            Fake tour guides operating without proper IDs, permits, or verification.
          </li>
        </ul>
      </div>

      <div class="info-card">
        <h4>Why Booking Verified Guides Matters</h4>

        <p>
          Booking with verified local guides helps ensure safer travel experiences.
          Verified guides know fair pricing, understand local tourist areas, and help
          travelers avoid common scams while supporting legitimate local communities.
        </p>
      </div>

      <a href="{{ url('/blog') }}" class="back-btn">
        ← Back to Blog
      </a>

    </div>
  </div>

  <footer>
    © 2026 TrbalTours • Stay Safe While Exploring
  </footer>

</body>
</html>