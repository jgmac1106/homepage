<!DOCTYPE html>
<html>
  <head>
    <title>IndieWeb</title>
    <style>
      body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #000000;
      }
      p {
      position: relative;
      font-family: Geneva, sans-serif;
      font-size: 60px;
      text-transform: uppercase;
      letter-spacing: 2px;
      background: linear-gradient(90deg, #DC143C, #fff, #000);
      background-repeat: no-repeat;
      background-size: 80%;
      animation: animate 3s infinite;
      -webkit-background-clip: text;
      -webkit-text-fill-color: rgba(255, 255, 255, 0);
      }
      @keyframes animate {
      0% {
      background-position: -500%;
      }
      100% {
      background-position: 500%;
      }
      }
    </style>
  </head>
  <body>
    <p>Get A Website</p>
  </body>
</html>