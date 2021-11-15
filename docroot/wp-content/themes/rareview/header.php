<html>
<head>
<title>Rareview</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<script>
    function handleMenuClick() {
  document.getElementById("mainMenu").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<body>
    <div id="site-header" class="header-container">
        <div class="header-content-section"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="./wp-content/themes/rareview/assets/logo-header.svg" alt="Site Logo" /></a>
            <div class="dropdown">
                <button onclick="handleMenuClick()" class="dropbtn"><img src="./wp-content/themes/rareview/assets/navicon.svg" /></button>
                <div id="mainMenu" class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div>
<div class="container">
