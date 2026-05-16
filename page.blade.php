<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tourist Tips</title>
    <link href="https://jsdelivr.net" rel="stylesheet">
    <script src="https://jsdelivr.net"></script>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        .grd-img {
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(90deg, 
                rgba(244, 241, 238, 1) 0%, 
                rgba(244, 241, 238, 0.8) 50%, 
                rgba(244, 241, 238, 0.2) 100%),
                        /*diria pag add image*/
                        url('/images/borac.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding-bottom: 50px;
        }

        header {
            background: rgba(92, 64, 51, 0.9); 
            color: #fff;
            padding: 15px 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
        
        header h1 { margin: 0; font-size: 22px; }

        .tips-section { 
            padding: 40px 20px; 
            max-width: 900px; 
            margin: auto; 
        }

        h2 { color: #f4f1ec; margin-bottom: 30px; }

        .card {
            background: rgba(255, 255, 255, 0.95); /* "Glass" effect */
            border: none;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: 0.3s;
        }
        
        .card h3 { margin: 0 0 10px; color: #5c4033; }
        .card p { color: #444; margin-bottom: 0; }

        .card-link {
            text-decoration: none !important;
            color: inherit !important;
            display: block;
        }

        .card-link:hover .card {
            transform: translateY(-5px);
            background: #fff;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }

        .view-all {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #a0522d;
            color: #fff !important;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.3s;
        }
        .view-all:hover { background: #7b3f1d; transform: scale(1.05); }
    </style>
</head>
<body>

    <div class="grd-img">
        <header>
            <h1>Tourist Tips Blog</h1>
        </header>

        <div class="tips-section">
            <h2 style="color: #50372d">Featured Tourist Tips</h2>
            
            <!-- Card 1 -->
            <a href="{{ url('/blog/scammed') }}" class="card-link">
                <div class="card">
                    <h3>How to NOT Get Scammed in the Philippines</h3>
                    <p>Red flags to watch out for and what prices should actually look like...</p>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="{{ url('/blog/package') }}" class="card-link">
                <div class="card">
                    <h3>Choosing the Right Tour Package</h3>
                    <p>Stop being confused. Pick a vibe and let the adventure begin...</p>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="{{ url('/blog/local-guide') }}" class="card-link">
                <div class="card">
                    <h3>Why Local Guides are Better</h3>
                    <p>Support the community and get the real stories behind the sights...</p>
                </div>
            </a>

            <a href="{{ url('/blog') }}" class="view-all">View all tips →</a>
        </div>
    </div>

</body>
</html>