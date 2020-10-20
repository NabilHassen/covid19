<!DOCTYPE html>
<html lang="en" class="has-background-white-ter">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.png" type="image/gif" sizes="64z64">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.min.css" integrity="sha256-D9M5yrVDqFlla7nlELDaYZIpXfFWDytQtiV+TaH6F1I=" crossorigin="anonymous" />
    <title>@yield('title')</title>
    <style>
        a.navbar-item:hover{
            background-color: black;
            color: white;
        }
        a.navbar-item:focus{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar has-background-black is-spaced" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a class="navbar-item is-size-4 has-text-white" href="/">
                <span class="has-text-weight-light">
                    Nabil
                </span>
                <span class="has-text-weight-bold">
                    Dev
                </span>
              </a>
              <a role="button" id="burgerBtn" class="navbar-burger burger has-text-white has-text-weight-bold" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample" onclick="toggleMenu()">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>
            <div id="menuBurger" class="navbar-menu">
              <div class="navbar-start">
                <a class="navbar-item has-text-white" href="/live-coronavirus">
                  Global Coronavirus Updates
                </a>
                <a class="navbar-item has-text-white" href="/usa-states-coronavirus-update">
                  USA States COVID-19 Updates
                </a>
                <a class="navbar-item has-text-white" href="/about">
                  About
                </a>
              </div>
            </div>
        </nav>
    </header>

    @yield('main')

    <footer class="footer has-background-grey-dark">
        <div class="container has-text-centered">
          <a href="/live-coronavirus" class="has-text-grey-light">
            Global Coronavirus Updates
          </a>
          <span class="has-text-white is-hidden-mobile">
            |
          </span>
          <br class="is-hidden-tablet">
          <a href="/usa-states-coronavirus-update" class="has-text-grey-light">
            USA States COVID-19 Updates
          </a>
          <span class="has-text-white is-hidden-mobile">
            |
          </span>
          <br class="is-hidden-tablet">
          <a href="/about" class="has-text-grey-light">
            About
          </a>
          <br>
          <span class="has-text-grey">
            Copyright © 2020 NabDev. All rights reserved.
          </span>
          <br><br>
          <span class="has-text-grey-lighter is-italic">
            Powered by
          </span>
          <a href="https://onricatech.com" target="_blank">
            <br>
            <img src="/img/sponsor.png" width="150px" height="70px">
          </a>
        </div>
    </footer>

<script src="/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161177413-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161177413-1');
</script>
</body>
</html>