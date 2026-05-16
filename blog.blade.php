<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog - Tourist Tips</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      margin: 0;
      padding: 0;
      /* Fallback color */
      background-color: #f4f1ec; 
      color: #3b2f2f;
    }

    /* THE GRADIENT SECTION */
    .grd-img {
      width: 100%;
      min-height: 100vh;
      background: linear-gradient(90deg, 
                  rgba(244, 241, 236, 1) 0%, 
                  rgba(244, 241, 236, 0.8) 50%, 
                  rgba(244, 241, 236, 0.2) 100%), 
                  url('/images/borac.jpg');
      
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      display: flow-root; /* Prevents margin collapsing */
    }

    header {
      background: #5c4033;
      color: #fff;
      padding: 15px 30px;
    }
    header h1 { margin: 0; font-size: 22px; }
    
    .container {
      max-width: 900px;
      margin: 30px auto;
      padding: 0 20px;
    }

    .article-link {
      text-decoration: none !important;
      color: inherit !important;
      display: block;
      margin-bottom: 25px;
    }

    .article {
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s, box-shadow 0.2s, border-color 0.2s;
      border: 1px solid transparent;
    }

    .article-link:hover .article {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.15);
      border-color: #a0522d;
    }

    .article h2 { margin: 0 0 10px; color: #5c4033; }
    .meta { font-size: 0.9em; color: #777; margin-bottom: 10px; }
    .article p { color: #444; margin-bottom: 0; }

    .btn-back {
      display: inline-block;
      padding: 10px 25px;
      background: #5c4033;
      color: #fff !important;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: 0.3s;
    }

    .btn-back:hover {
      background: #a0522d;
      transform: translateX(-5px);
    }
  </style>
</head>
<body>
  <!-- Wrapping everything in the gradient div -->
  <div class="grd-img">
    
    <header>
      <h1>Tourist Tips Blog</h1>
    </header>
    
    <div class="container">
      <!-- Article 1 -->
      <a href="{{ url('/blog/scammed') }}" class="article-link">
          <div class="article">
              <h2>How to NOT Get Scammed as a Tourist in the Philippines</h2>
              <div class="meta">Apr 20 • 4 min read</div>
              <p>Red flags to watch out for, what prices should actually look like, and why booking a local guide is safer...</p>
          </div>
      </a>

      <!-- Article 2 -->
      <a href="{{ url('/blog/package') }}" class="article-link">
          <div class="article">
              <h2>How to Choose a Tour Package When You Have No Idea Where to Go</h2>
              <div class="meta">Apr 21 • 3 min read</div>
              <p>Step 1: Admit you are confused. Step 2: Pick a vibe (beach, mountain, food)...</p>
          </div>
      </a>

      <!-- Article 3 -->
      <a href="{{ url('/blog/local-guide') }}" class="article-link">
          <div class="article">
              <h2>Why Booking With a Local Guide is Better Than a Big Tour Company</h2>
              <div class="meta">Apr 22 • 5 min read</div>
              <p>Money stays in the community. You get real stories, not scripts...</p>
          </div>
      </a>

      <!-- Article 4 -->
      <a href="{{ url('/blog/street-foods') }}" class="article-link">
          <div class="article">
              <h2>Top 5 Street Foods You Must Try in Davao</h2>
              <div class="meta">Apr 23 • 6 min read</div>
              <p>From durian candy to grilled isaw, here’s what you shouldn’t miss...</p>
          </div>
      </a>

      <!-- Article 5 -->
      <a href="{{ url('/blog/eco-adventures') }}" class="article-link">
          <div class="article">
              <h2>Eco‑Adventures in Davao del Norte</h2>
              <div class="meta">Apr 24 • 7 min read</div>
              <p>From river tubing to agri‑tourism, discover the unique eco‑friendly adventures that make Davao del Norte a must‑visit...</p>
          </div>
      </a>

      <div style="text-align: center; margin-top: 30px; padding-bottom: 50px;">
          <a href="{{ url('/') }}" class="btn-back">← Back to Home</a>
      </div>
    </div>

  </div> <!-- End grd-img -->
</body>
</html>
