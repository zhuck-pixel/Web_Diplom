<div class="container-fluid my-carousel">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/7.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

    <section class="main-content">
      <div class="container">
        <div class="row">
           <?php
        $sql_cat = $link->query("select * from `category`");
        foreach ($sql_cat as $cat) :
        ?>
         
          <div class="col-lg-4 col-sm-6 mb-3"> 
            <div class="product-card">
              <div class="product-thumb">
                <a href="index.php?page=model_cat&id_cat=<?php echo $cat['id_category']; ?>"><img src="<?php echo $cat['img']; ?>" alt=""></a>
              </div>
              <div class="product-details">
                  <h4><a href="#"><?php echo $cat['name']; ?></a></h4>
                <div class="product-bottom-details d-flex justify-content-between">
                </div>
              </div>
            </div>
          </div>       
          <?php endforeach;?>
        </div>

      </div>
    </section>


