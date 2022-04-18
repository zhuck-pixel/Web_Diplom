<div class="model_head ">
  <h2>Каталог товаров</h2>
</div>
<div class="container content">
  <div class="sort-block mb-4 mt-4">
    <form action="">
      <select onchange="location=value">
        <option value="" selected="selected">Сортировка по имени</option>
        <option value="index.php?page=sort&id_sort=1">A-Z</option>
        <option value="index.php?page=sort&id_sort=2">Z-A</option>
      </select>

      <select onchange="location=value">
        <option value="" selected="selected">Сортировка по цене</option>
        <option value="index.php?page=sort&id_sort=3">по возрастанию</option>
        <option value="index.php?page=sort&id_sort=4">по убыванию</option>
      </select>
    </form>
  </div>

  <div class="row">
    <div class="col-lg-2">
      <ul class="list-group">
        <?php
        $sql_cat = $link->query("select * from `category`");
        foreach ($sql_cat as $cat) :
          ?>
          <a href="index.php?page=model_cat&id_cat=<?php echo $cat['id_category']; ?>">
            <li class="list-group-item"><?php echo $cat['name']; ?></li>
          </a>
        <?php endforeach; ?>
        <a href="index.php?page=model_cat&id_cat=0">
          <li class="list-group-item">Всё</li>
        </a>
      </ul>
    </div>

    <div class="col-md-9">
      <section class="main-content">
        <div class="container">
          <div class="row">
              <?php
            foreach ($sql as $good):

            ?>
            <div class="col-lg-4 .col-sm-6 mb-4">
              <div class="product-card">
                <div class="product-thumb">
                  <img src="<?php echo $good['imgs']; ?>" alt="">
                </div>
                <div class="product-details">
                  <h4><a href="index.php?page=tovar_card&id=<?php echo $good['id']?>"><?php echo $good['name']; ?></a></h4>
                  <div class="product-bottom-details d-flex justify-content-between">
                    <div class="product-price">
                     <?php echo $good['price']." руб"; ?>
                   </div>
                   <div class="product-links">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach;?>
        </div>
      </div>
    </section>
  </div>
</div>
</div>


