<?php include('header/doc-header.php') ?>
<div class="super_container">
  <?php include('header/nav-header.php') ?>


  <div class="page_slider" style="background-image:url(<?php echo base_url()?>/templates/images/banner-productlist.jpg)">
    <div class="container fill_height">
      <div class="row align-items-center fill_height">
        <div class="col">
          <div class="page_slider_content">
            <h5>Find the perfect pair of glasses<br/>in the comfort of your home with our no risk home try-on.</h5>
            <h2>Find your frame</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="new_arrivals">
    <div class="container">
      <div class="row align-items-center">
        <div class="col text-center">
          <div class="new_arrivals_sorting">
            <ul class="product_sorting">
              <li>
                <span class="type_sorting_text">Choose by</span>
                <i class="fa fa-angle-down"></i>
                <ul class="sorting_type">
                  <li class="dropdown_isotope"><span value="price">Price</span></li>
                  <li class="dropdown_isotope"><span value="model">Model</span></li>
                </ul>
              </li>
            </ul>
            <ul id="model" class="arrivals_grid_sorting clearfix button-group filters-button-group">
              <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
              <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">women's</li>
              <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">accessories</li>
              <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">men's</li>
            </ul>
            <ul id="price" class="arrivals_grid_sorting clearfix button-group filters-button-group">
              <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
              <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women"> < $100 </li>
              <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">$100 - $200 </li>
              <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men"> $200 <</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

            <!-- Product 1 -->

            <div class="product-item men">
              <div class="product discount product_filter">
                <div class="product_image">
                  <img src="<?php echo base_url()?>/templates/images/headshot/Denver.jpg" alt="">
                </div>
                <div class="favorite favorite_right"></div>
                <div class="product_info">
                  <h6 class="product_name"><a href="single.html">Denver</a></h6>
                  <div class="product_price">$520.00<span>$590.00</span></div>
                </div>
              </div>
              <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
            </div>

            <!-- Product 2 -->

            <div class="product-item women">
              <div class="product product_filter">
                <div class="product_image">
                  <img src="<?php echo base_url()?>/templates/images/headshot/Eugene.jpg" alt="">
                </div>
                <div class="favorite"></div>
                <div class="product_info">
                  <h6 class="product_name"><a href="single.html">Eugene</a></h6>
                  <div class="product_price">$610.00</div>
                </div>
              </div>
              <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
            </div>

            <!-- Product 3 -->

            <div class="product-item women">
              <div class="product product_filter">
                <div class="product_image">
                  <img src="<?php echo base_url()?>/templates/images/headshot/Jarrod.jpg" alt="">
                </div>
                <div class="favorite"></div>
                <div class="product_info">
                  <h6 class="product_name"><a href="single.html">Jarrod</a></h6>
                  <div class="product_price">$120.00</div>
                </div>
              </div>
              <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
            </div>

            <!-- Product 4 -->

            <div class="product-item accessories">
              <div class="product product_filter">
                <div class="product_image">
                  <img src="<?php echo base_url()?>/templates/images/headshot/Lachlan.jpg" alt="">
                </div>
                <div class="favorite favorite_left"></div>
                <div class="product_info">
                  <h6 class="product_name"><a href="single.html">Lachlan</a></h6>
                  <div class="product_price">$410.00</div>
                </div>
              </div>
              <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
            </div>

            <!-- Product 5 -->

            <div class="product-item women men">
              <div class="product product_filter">
                <div class="product_image">
                  <img src="<?php echo base_url()?>/templates/images/headshot/Madison.jpg" alt="">
                </div>
                <div class="favorite"></div>
                <div class="product_info">
                  <h6 class="product_name"><a href="single.html">Madison</a></h6>
                  <div class="product_price">$180.00</div>
                </div>
              </div>
              <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
            </div>

            <!-- Product 6 -->

            <div class="product-item accessories">
              <div class="product discount product_filter">
                <div class="product_image">
                  <img src="<?php echo base_url()?>/templates/images/headshot/Olive.jpg" alt="">
                </div>
                <div class="favorite favorite_left"></div>
                <div class="product_info">
                  <h6 class="product_name"><a href="#single.html">Olive</a></h6>
                  <div class="product_price">$520.00<span>$590.00</span></div>
                </div>
              </div>
              <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
            </div>

            <!-- Product 7 -->

            <div class="product-item women">
              <div class="product product_filter">
                <div class="product_image">
                  <img src="<?php echo base_url()?>/templates/images/headshot/Oliver C09.jpg" alt="">
                </div>
                <div class="favorite"></div>
                <div class="product_info">
                  <h6 class="product_name"><a href="single.html">Oliver C09</a></h6>
                  <div class="product_price">$610.00</div>
                </div>
              </div>
              <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
            </div>

            <!-- Product 8 -->

            <div class="product-item accessories">
              <div class="product product_filter">
                <div class="product_image">
                  <img src="<?php echo base_url()?>/templates/images/headshot/Tanika.jpg" alt="">
                </div>
                <div class="favorite"></div>
                <div class="product_info">
                  <h6 class="product_name"><a href="single.html">Tanika</a></h6>
                  <div class="product_price">$120.00</div>
                </div>
              </div>
              <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        </div>

  <?php include('footer/nav-footer.php') ?>
</div>
<?php include('footer/doc-footer.php') ?>
