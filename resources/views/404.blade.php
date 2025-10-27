<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>404 — Page Not Found</title>
  <style>
    /* ---------------- GLOBAL ---------------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --main: #1e3a8a;
      --primary: #2563eb;
      --accent: #38bdf8;
      --light: #f8fafc;
      --dark: #0f172a;
    }

    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background: linear-gradient(135deg, var(--main), var(--primary));
      font-family: "Inter", "Segoe UI", Roboto, sans-serif;
      color: var(--light);
      text-align: center;
      overflow: hidden;
    }

    /* ---------------- 404 TEXT ---------------- */
    h1 {
      font-size: 8rem;
      font-weight: 800;
      color: var(--light);
      line-height: 1;
      position: relative;
      animation: float 4s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }

    h2 {
      font-size: 1.8rem;
      font-weight: 600;
      color: #e0e7ff;
      margin-bottom: 10px;
    }

    p {
      color: #cbd5e1;
      font-size: 1rem;
      margin-bottom: 30px;
      max-width: 420px;
    }

    /* ---------------- BUTTON ---------------- */
    a.button {
      display: inline-block;
      background: var(--accent);
      color: var(--dark);
      padding: 12px 28px;
      border-radius: 8px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(56, 189, 248, 0.4);
    }

    a.button:hover {
      background: var(--light);
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(255, 255, 255, 0.3);
    }

    /* ---------------- DECORATIVE BACKGROUND ---------------- */
    .circle {
      position: absolute;
      border-radius: 50%;
      opacity: 0.1;
      animation: pulse 6s infinite ease-in-out alternate;
    }

    .circle.one {
      width: 350px;
      height: 350px;
      background: var(--accent);
      top: -120px;
      left: -120px;
    }

    .circle.two {
      width: 280px;
      height: 280px;
      background: var(--light);
      bottom: -100px;
      right: -100px;
    }

    @keyframes pulse {
      from { transform: scale(1); opacity: 0.15; }
      to { transform: scale(1.2); opacity: 0.05; }
    }

    /* ---------------- RESPONSIVE ---------------- */
    @media (max-width: 600px) {
      h1 {
        font-size: 5rem;
      }
      h2 {
        font-size: 1.4rem;
      }
      p {
        font-size: 0.95rem;
        padding: 0 20px;
      }
    }
  </style>
</head>
<body>
  <div class="circle one"></div>
  <div class="circle two"></div>

  <h1>404</h1>
  <h2>Page Not Found</h2>
  <p>Sorry, the page you’re looking for doesn’t exist or has been moved. Let’s get you back home safely.</p>
  <a href="/" class="button">Back to Home</a>
</body>
</html>
