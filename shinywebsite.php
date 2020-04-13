<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Risky Bird</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="/css/crossfade.css">
    
    <!-- import the webpage's javascript file -->
    <script src="/script.js" defer></script>
  </head>  
  <body>
    <div id="doodlebird">
      <!-- Goal is to have each div fade in and out on the 3 second counter-->
      
     <div >
       <p>Take the risk</p>
     </div>
       <div>
       <p>of first</p>
     </div>
     <div>
       <p>flight</p>
     </div>
     <div>
       <p>But choose</p>
     </div>
      <div>
       <p>a branch</p>
     </div>
      <div>
       <p>close to </p>
     </div>
      <div>
       <p>the ground</p>
     </div>
      
    </div>

    <!-- include the Glitch button to show what the webpage is about and
          to make it easier for folks to view source and remix -->
 
  </body>
</html>
