<html>
<head>
    <title>xxxのhomepage
    </title>
    <style>
        .button:hover {
            background: #0090aa;
        }
        .hamberger_bar {
            display:block;background:#000;width:100%;height:4px;position:absolute;left:0;
            transition:top 1s, transform 1s,opacity 1s;
        }
        .hamberger_bar:nth-child(1) {
            top:0;
        }
        .hamberger_bar:nth-child(2) {
            top:50%;transform:translateY(-50%);
        }
        .hamberger_bar:nth-child(3) {
            top:100%;transform:translateY(-100%);
        }
        .hamberger_bar.is_active:nth-child(1) {
            top: 50%;
            transform: rotate(135deg);
        }
        .hamberger_bar.is_active:nth-child(2) {
            transform: translate(50%,-50%);
            opacity:0;
        }
        .hamberger_bar.is_active:nth-child(3) {
            top: 50%;
            transform: rotate(-135deg);
        }
        .nav {
            position:relative;
            top:0;
            left:0;
            right:0;
            bottom:0;
            z-index:99;
            background:#a0a0a0;
            transition: opacity 1s;
            opacity:0;
            pointer-events:none;
        }
        .nav.is_active {
            opacity:1;
            pointer-events:auto;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(function () {
            const hamberger = $(".hamberger");
            const nav = $(".nav");
            hamberger.click(function () {
                $(this).find(".hamberger_bar").toggleClass("is_active");
                nav.toggleClass("is_active");
            });
        });
    </script>
</head>
<body class="h1">
@csrf
<div style="position:relative;width:400px;height:600px;">
    <button class="hamberger" style="z-index:100;border-color:tan;border-color:transparent;background:transparent;cursor:pointer;right:16px;width:40px;height:032px;position:absolute;">
        <span class="hamberger_bar"></span>
        <span class="hamberger_bar"></span>
        <span class="hamberger_bar"></span>
    </button>
    <nav class="nav">
        <ul>
            <li><a href="xxxxx">link1</a></li>
            <li><a href="xxxxx">link2</a></li>
            <li><a href="xxxxx">link3</a></li>
        </ul>
    </nav>
</div>

<div style="background-size:cover;min-height:50vh;background-image :url(assets/images/coffee.jpg)">aaaaaaaa
</div style="display:flex;">
<div style="border-radius:20%;">
<a style="border-radius:5%;background:tan;font-size:1.4rem;padding:18px 32px;text-decoration:none;color:#fff;:hover" href="/laravelapp/public/dashboard">dashboad</a><br>
</div>
<a class="button" href="/laravelapp/public/register">regisyer</a><br>
<a href="/laravelapp/public/fruit">fruit</a><br>
<a href="/laravelapp/public/giji/add">gijiadd</a>
</div>
</body>
</html>