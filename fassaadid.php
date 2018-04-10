<?php include 'header.php'; ?>
<div class="main fassaadid">
  <div class="line"></div>
  <div class="container">
    <?php include 'partials/_nav.php'; ?>
    <div class="row justify-content-center mt-50">
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-2">
            <img src="images/rest.svg"></img>
          </div>
          <div class="col-sm">
            <h1>RESTAURATSIOON & FASSAADID</h1>
            <p class="blue bold">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
              sed diam nonummy nibh euismod tincidunt ut laoreet dolore
              magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
            quis nostrud exerci tation ullamcorper suscipit lobortis nisl</p>
          </div>
        </div>
      </div>
    </div>
    <div style="margin-top: 50px;">
      <div class="portfolio-cards owl-carousel owl-theme">
        <div class="card">
          <div class="row no-gutters">
            <div class="col">
              <div class="inner toompea">
                <div class="open-gallery">
                  <a href="/images/vanatoompea.png" rel="gallery" class="gallery">
                    <i class="fas fa-search-plus"></i>
                  </a>
                  <a href="/images/baltijaama.png" rel="gallery" class="gallery dn"></a>
                  <a href="/images/vanalinn.png" rel="gallery" class="gallery dn"></a>
                  <a href="/images/max.jpg" rel="gallery" class="gallery dn"></a>
                </div>
                <span>UUS OBJEKT</span><br>
                <h2>Vana Toompea<br>restauratsioon</h2>
                <button class="read-more-btn">Vaata lähemalt</button>
              </div>
            </div>
            <div class="col toggle-info">
              <span class="close-btn">
                <img src="images/close-btn.png"></img>
              </span>
              <div class="box-info">
                <p class="card-header">Vana Toompea Restauratsioon</p>
                <div class="rating">
                  <small>Objekti raskus</small>
                  <div class="icons">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                  </div>
                </div>
                <div class="object-info">
                  <div class="row-grow">
                    <span>Objekti suurus:</span>
                    <span>400 m2</span>
                  </div>
                  <div class="row-grow">
                    <span>Töö kestvus:</span>
                    <span>4 kuud</span>
                  </div>
                  <div class="row-grow">
                    <span>Objekti valmimis aasta:</span>
                    <span>1830</span>
                  </div>
                  <div class="row-grow">
                    <span>Töölisi objektil:</span>
                    <span>8</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row no-gutters">
            <div class="col">
              <div class="inner balti">
                <span>2017</span><br>
                <h2>Vana Toompea<br>restauratsioon</h2>
                <button class="read-more-btn">Vaata lähemalt</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row no-gutters">
            <div class="col">
              <div class="inner vanalinn">
                <span>2017</span><br>
                <h2>Vana Toompea<br>restauratsioon</h2>
                <button class="read-more-btn">Vaata lähemalt</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>