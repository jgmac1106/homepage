<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>37 Rime Wheel Spinner</title>
  <style>
    :root{
      --size: 520px;
      --shadow: 0 18px 45px rgba(0,0,0,.18);
      --ring: rgba(0,0,0,.12);
    }

    body{
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      margin: 0;
      min-height: 100vh;
      display: grid;
      place-items: center;
      background: radial-gradient(circle at 25% 20%, #f6f7ff, #eef0f7 45%, #e9edf4);
      color: #111;
    }

    .app{
      width: min(940px, 92vw);
      display: grid;
      gap: 18px;
      justify-items: center;
    }

    h1{
      margin: 8px 0 0;
      font-size: clamp(20px, 3vw, 30px);
      letter-spacing: .2px;
    }

    .wrap{
      position: relative;
      width: min(var(--size), 92vw);
      aspect-ratio: 1 / 1;
      display: grid;
      place-items: center;
      filter: drop-shadow(var(--shadow));
    }

    /* Pointer */
    .pointer{
      position: absolute;
      top: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      height: 0;
      border-left: 18px solid transparent;
      border-right: 18px solid transparent;
      border-top: 34px solid #111;
      z-index: 5;
    }
    .pointer::after{
      content:"";
      position:absolute;
      top:-30px; left:-8px;
      width:16px; height:16px;
      background:#111;
      border-radius: 50%;
    }

    /* Wheel */
    .wheel{
      width: 100%;
      height: 100%;
      border-radius: 50%;
      position: relative;
      overflow: hidden;
      background: #fff;
      border: 10px solid rgba(255,255,255,.9);
      box-shadow: inset 0 0 0 2px var(--ring);
      transform: rotate(0deg);
      will-change: transform;
    }

    /* The slice graphics (conic gradient) */
    .wheel::before{
      content:"";
      position:absolute;
      inset:0;
      border-radius: 50%;
      background: var(--bg);
      box-shadow: inset 0 0 0 1px rgba(0,0,0,.08);
    }

    /* Center hub */
    .hub{
      position:absolute;
      width: 86px;
      height: 86px;
      border-radius: 50%;
      background: radial-gradient(circle at 30% 30%, #fff, #efefef 55%, #e0e0e0);
      border: 2px solid rgba(0,0,0,.12);
      z-index: 4;
      display:grid;
      place-items:center;
      font-weight: 800;
      letter-spacing: .5px;
      user-select:none;
    }

    /* Labels: positioned around the wheel */
    .labels{
      position:absolute;
      inset:0;
      border-radius: 50%;
      z-index: 3;
    }

    .label{
      position:absolute;
      left:50%;
      top:50%;
      transform-origin: 0 0;
      user-select:none;
      pointer-events:none;
      font-weight: 700;
      font-size: clamp(10px, 1.7vw, 13px);
      color: rgba(0,0,0,.88);
      text-shadow: 0 1px 0 rgba(255,255,255,.65);
      white-space: nowrap;
    }

    /* Controls */
    .controls{
      display:flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: center;
      align-items: center;
    }

    button{
      font-size: 16px;
      font-weight: 700;
      padding: 12px 16px;
      border-radius: 12px;
      border: 0;
      cursor: pointer;
      background: #111;
      color: #fff;
      box-shadow: 0 10px 18px rgba(0,0,0,.15);
    }
    button:disabled{
      opacity: .55;
      cursor: not-allowed;
    }

    .small{
      font-size: 14px;
      padding: 10px 12px;
      background: #fff;
      color: #111;
      border: 1px solid rgba(0,0,0,.18);
      box-shadow: none;
    }

    /* Result */
    .result{
      width: min(740px, 92vw);
      background: rgba(255,255,255,.85);
      border: 1px solid rgba(0,0,0,.10);
      border-radius: 16px;
      padding: 14px 16px;
      box-shadow: 0 10px 20px rgba(0,0,0,.08);
      line-height: 1.35;
    }
    .result strong{
      font-size: 18px;
    }
    .words{
      margin-top: 8px;
      font-size: 16px;
    }

    /* Respect reduced motion */
    @media (prefers-reduced-motion: reduce){
      .wheel{ transition: none !important; }
    }
  </style>
</head>
<body>
  <div class="app">
    <h1>🎡 37 Rime Wheel Spinner</h1>

    <div class="wrap">
      <div class="pointer" aria-hidden="true"></div>
      <div id="wheel" class="wheel" aria-label="Rime wheel spinner">
        <div id="labels" class="labels"></div>
      </div>
      <div class="hub" aria-hidden="true">SPIN</div>
    </div>

    <div class="controls">
      <button id="spinBtn">Spin</button>
      <button id="resetBtn" class="small">Reset</button>
    </div>

    <div class="result" id="result" aria-live="polite">
      <strong>Result:</strong> Click <b>Spin</b>.
      <div class="words" id="words"></div>
    </div>
  </div>

  <script>
    // 37 rimes + example words (editable)
    const rimes = {
      "ab":   ["cab","dab","grab","slab"],
      "ack":  ["back","track","snack","black"],
      "ad":   ["bad","mad","glad","pad"],
      "ag":   ["bag","tag","flag","drag"],
      "ail":  ["mail","sail","tail","pail"],
      "ain":  ["rain","train","brain","chain"],
      "ake":  ["cake","lake","snake","bake"],
      "ale":  ["sale","pale","whale","scale"],
      "all":  ["ball","call","fall","wall"],
      "ame":  ["game","name","same","flame"],
      "an":   ["can","man","fan","ran"],
      "ank":  ["bank","tank","thank","blank"],
      "ap":   ["cap","map","tap","snap"],
      "ash":  ["cash","dash","flash","trash"],
      "at":   ["cat","hat","bat","flat"],
      "ate":  ["gate","late","rate","plate"],
      "aw":   ["saw","paw","claw","draw"],
      "ay":   ["day","play","stay","tray"],
      "eat":  ["eat","seat","heat","treat"],
      "ell":  ["bell","tell","fell","smell"],
      "est":  ["best","nest","rest","test"],
      "ice":  ["ice","mice","rice","nice"],
      "ick":  ["kick","pick","stick","brick"],
      "ide":  ["ride","side","hide","slide"],
      "ight": ["light","night","bright","flight"],
      "ill":  ["hill","will","fill","spill"],
      "in":   ["pin","win","bin","chin"],
      "ine":  ["line","mine","fine","shine"],
      "ing":  ["ring","sing","king","bring"],
      "ink":  ["pink","sink","think","blink"],
      "ip":   ["lip","sip","trip","ship"],
      "it":   ["sit","hit","fit","split"],
      "ock":  ["rock","sock","clock","block"],
      "oke":  ["poke","joke","broke","smoke"],
      "op":   ["hop","pop","stop","drop"],
      "ore":  ["more","core","store","shore"],
      "uck":  ["duck","luck","truck","stuck"]
    };

    const keys = Object.keys(rimes);
    const N = keys.length; // 37
    const wheel = document.getElementById("wheel");
    const labels = document.getElementById("labels");
    const spinBtn = document.getElementById("spinBtn");
    const resetBtn = document.getElementById("resetBtn");
    const result = document.getElementById("result");
    const wordsEl = document.getElementById("words");

    // Keep track of rotation so multiple spins accumulate nicely
    let currentRotation = 0;
    let isSpinning = false;

    // Build a conic-gradient with N slices (no libraries)
    function buildWheelBackground() {
      const stops = [];
      for (let i = 0; i < N; i++) {
        const a0 = (i / N) * 360;
        const a1 = ((i + 1) / N) * 360;

        // Create a pleasant repeating palette using HSL
        const hue = Math.round((i * (360 / N)) % 360);
        const c = `hsl(${hue} 80% 80%)`;

        // Thin separator line at the start of each wedge
        const line = `rgba(0,0,0,.14)`;
        stops.push(`${line} ${a0}deg ${a0 + 0.6}deg`);
        stops.push(`${c} ${a0 + 0.6}deg ${a1}deg`);
      }
      wheel.style.setProperty("--bg", `conic-gradient(from -90deg, ${stops.join(", ")})`);
    }

    // Place labels around the wheel
    function buildLabels() {
      labels.innerHTML = "";
      const radius = 43; // percent distance from center
      for (let i = 0; i < N; i++) {
        const key = keys[i];
        const angle = (i + 0.5) * (360 / N); // center of wedge
        const el = document.createElement("div");
        el.className = "label";
        el.textContent = "-" + key;

        // Position: rotate to angle, translate outward, then rotate text so it's readable-ish
        // (keeps text roughly upright, not fully tangential)
        el.style.transform = `
          rotate(${angle}deg)
          translate(${radius}%, -50%)
          rotate(${angle > 90 && angle < 270 ? 180 : 0}deg)
        `;
        labels.appendChild(el);
      }
    }

    function pickWinnerFromRotation(finalRotationDeg) {
      // Pointer is at 12 o'clock (top). Our gradient starts from -90deg (top).
      // Determine where the pointer lands on the wheel after rotation.
      // Normalize to [0, 360)
      const normalized = ((finalRotationDeg % 360) + 360) % 360;

      // The wheel is rotated clockwise by finalRotationDeg, which effectively moves wedges under a fixed pointer.
      // Pointer sees angle = (360 - normalized) because wheel rotated CW.
      const pointerAngle = (360 - normalized) % 360;

      // Map angle to wedge index
      const wedgeSize = 360 / N;
      const index = Math.floor(pointerAngle / wedgeSize);
      return index; // 0..N-1
    }

    function showResult(key) {
      result.innerHTML = `<strong>Result:</strong> <b>-${key}</b>`;
      wordsEl.textContent = "Example words: " + rimes[key].join(", ");
    }

    function spin() {
      if (isSpinning) return;
      isSpinning = true;
      spinBtn.disabled = true;

      // Add multiple full rotations + a random extra
      const extra = Math.random() * 360;
      const fullTurns = 6 + Math.floor(Math.random() * 4); // 6–9 turns
      const target = currentRotation + fullTurns * 360 + extra;

      // Smooth ease-out transition
      wheel.style.transition = "transform 4.2s cubic-bezier(0.12, 0.85, 0.15, 1)";
      wheel.style.transform = `rotate(${target}deg)`;

      // After transition ends, compute winner
      const onDone = () => {
        wheel.removeEventListener("transitionend", onDone);

        currentRotation = target;

        const winnerIndex = pickWinnerFromRotation(currentRotation);
        const winnerKey = keys[winnerIndex];

        showResult(winnerKey);

        isSpinning = false;
        spinBtn.disabled = false;
      };

      wheel.addEventListener("transitionend", onDone);
    }

    function reset() {
      if (isSpinning) return;
      currentRotation = 0;
      wheel.style.transition = "transform 0.25s ease";
      wheel.style.transform = "rotate(0deg)";
      result.innerHTML = `<strong>Result:</strong> Click <b>Spin</b>.`;
      wordsEl.textContent = "";
    }

    spinBtn.addEventListener("click", spin);
    resetBtn.addEventListener("click", reset);

    buildWheelBackground();
    buildLabels();
  </script>
</body>
</html>
