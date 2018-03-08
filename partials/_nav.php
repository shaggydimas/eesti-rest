<?php
$class = '';
$uri = explode('/', $_SERVER['REQUEST_URI'])[1];
?>
<nav>
  <div class="row">
    <div class="col-sm-3 col-md-4 logo">
      <a href="/">
        <?php if($uri === 'kontakt'){ ?>
          <img src="images/logo_white.png">
        <?php } else { ?>
          <img src="images/logo.png">
        <?php } ?>
      </a>
    </div>
    <div class="col-sm active-wrap">
      <ul class="<?php echo ($uri === 'kontakt') ? 'white-nav' : ''; ?>">
        <li>
          <a href="/meist" class="<?php echo ($uri === 'meist') ? 'active' : ''; ?>"><span class="circle"></span>MEIST</a>
        </li>
        <li class="has-dropdown">
          <a href="javascript:void(0)" class="<?php echo ($uri === 'fassaadid') ? 'active' : ''; ?>"><span class="circle"></span>TEHTUD TÖÖD</a>
          <ul class="dropdown">
            <li><a href="/fassaadid" class="<?php echo ($uri === 'fassaadid') ? 'active' : ''; ?>"><span class="circle"></span>RESTAURATSIOON & FASSAADID</a></li>
            <li><a href=""><span class="circle"></span>ÜLDEHITUS</a></li>
            <li><a href=""><span class="circle"></span>SISETÖÖD</a></li>
            <li><a href=""><span class="circle"></span>VÄLISMAA</a></li>
          </ul>
        </li>
        <li>
          <a href="/kontakt" class="<?php echo ($uri === 'kontakt') ? 'active' : ''; ?>"><span class="circle"></span>KONTAKT</a>
        </li>
        <li>
          <a href="#"><span class="circle"></span>FACEBOOK</a>
        </li>
      </ul>
    </div>
  </div>
</nav>