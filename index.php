
<!DOCTYPE HTML>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashWoorkZ IT</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,500i,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil" rel="stylesheet">
	     
	

</head>
<body>
<div class="container-wrapper" id="mainWrapper">

<span class="hidden-nav" id="hideNav">
<div class="hamB" id="hamB1">
<div class="bar" id="bar-1"></div>
<div class="bar" id="bar-2"></div>
<div class="bar" id="bar-3"></div>
</div>
<div class="hamB" id="hamB2">
<div class="barA" id="bar-1"></div>
<div class="barA" id="bar-2"></div>
<div class="barA" id="bar-3"></div>
</div>
</span>
<header>
<h1 class="hdr-title"></h1>
<nav class="hdr-nav" id="hdrNav">
<button class="nav-btn" id="btn-1">
<button class="nav-btn" id="btn-2">
<button class="nav-btn" id="btn-3">
<button class="nav-btn" id="btn-4">
</nav>
</header>
<aside class="aside-nav" id="navHide">
<h1 class="side-nav-title"></h1>
<nav class="side-nav" id="sideNav">
<button onclick="openService('cForm')" class="side-nav-btn" id="side-btn-1">
<button onclick="openService('specials')" class="side-nav-btn" id="side-btn-2">
<button onclick="openService('events')" class="side-nav-btn" id="side-btn-3">
<button onclick="openService('staff')" class="side-nav-btn" id="side-btn-4">
</nav>

<div class="service contact-form" id="cForm">
<h1></h1>
<form class="form">

<div class="field">
<input type="text" autocomplete="off" id="fname" value="" required />
<label for="fname" class="label-fname">
<span class="content-fname" name="fname"></span>
</label>
</div>

<div class="field">
<input type="text" autocomplete="off" id="lname" value="" required />
<label for="lname" class="label-lname">
<span class="content-lname" name="lname"></span>
</label>
</div>

<div class="field">
<input type="email" autocomplete="off" id="email" value="" required />
<label for="email" class="label-email">
<span class="content-email" name="email"></span>
</label>
</div>

<div class="field">
<input type="text" autocomplete="off" id="company" value="" required />
<label for="company" class="label-company">
<span class="content-company" name="company"></span>
</label>
</div>
<nav class="btn-bar">
<button class="btn" id="form-btn-1"></button>
</nav>
</form>
</div>

<div class="service special-deals" id="specials">
    <div class="deals">
<div class="dwkz" id="dwkzBrand">
    <h1>dashWoorkZ IT</h1>
    <quote>Linux Driven To Succeed</quote>
    <h2><a href="https://dashwoorkz.ca"></a></h2>
    <h3>Phone: 604-347-8698</h3>
</div>
<div class="current" id="currentSpec"></div>
<div class="current1" id="currentSpec1"></div>
<div class="consult" id="freeConsult"></div>
</div>
</div>

<div class="service events-list" id="events">
<div class="current-events" id="currentEvents"></div>
</div>

<div class="service staff-list" id="staff">
<div class="lead-staff" id="leadStaff">


<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
        <h1 class="flip-title">Sole-Proprietor</h1>
      <img src="imgs/DL_brand.jpg" alt="Dash LaLonde">
    </div>
    
    <div class="flip-card-back">
      <h1>Dash LaLonde</h1>
      <p>Web Develper</p>
      <p>Full Stack</p>
    </div>
  </div>
</div> 

</div>


</aside>

<div class="container" id="main-container">

<div class="content-container" id="mainContent">

<div class="content-billboard" id="billboard"></div>
<div class="content-brand" id="brand">


</div>
</div>
<div class="content" id="content-box-1"></div>
<div class="content" id="content-box-2"></div>
<div class="content" id="content-box-3"></div>
<div class="content" id="content-box-4"></div>
<footer id="footer"></footer>
</div>
<script src="js/app.js"></script>
</body>

</html>
