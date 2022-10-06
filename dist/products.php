<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Index</title>


    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css"/>

    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

  </head>

  <body class="page page--products">

    <?php include 'components/header.php';?>

    <section class="section section-products">
      <div class="container">
        <div class="row">
          <div class="col col-filter">
            <div class="product-sidebar">
              <div class="close-sidebar-modal d-md-none">
                <span>Annuler la sélection</span>
                <button class="btn btn-close js-btn-toggle-filter">X</button>
              </div>
              <h3 class="sidebar-title d-none d-md-block">Filter</h3>
              
              <div class="card card-product-filter">
                <h3 class="sidebar-title mb-2 d-md-none px-3">Filter</h3>

                <form action="" class="form form-product-filter">
                  <div class="accordion" id="accordionProductFilter">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Catégorie
                          </button>
                        </h2>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionProductFilter">
                        <div class="card-body">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-category-1">
                            <label class="form-check-label" for="checkbox-category-1">Petit déjeuner</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-category-2">
                            <label class="form-check-label" for="checkbox-category-2">Compléments Alimentaires</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-category-3">
                            <label class="form-check-label" for="checkbox-category-3">Nutrition Attaque</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-category-4">
                            <label class="form-check-label" for="checkbox-category-4">Cuisine Dukan/Sauces</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-category-5">
                            <label class="form-check-label" for="checkbox-category-5">Dukan Bio</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-category-6">
                            <label class="form-check-label" for="checkbox-category-6">Konjac/Plats cuisinés</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-category-7">
                            <label class="form-check-label" for="checkbox-category-7">Dukan Box</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-category-8">
                            <label class="form-check-label" for="checkbox-category-8">Livres</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-category-9">
                            <label class="form-check-label" for="checkbox-category-9">Promos</label>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Besoins nutritionnels
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionProductFilter">
                      <div class="card-body">

                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkbox-sugar">
                          <label class="form-check-label" for="checkbox-sugar">Sugar</label>
                        </div>

                        <div class="form-group mt-2">
                          <input type="range" class="form-control-range" id="formControlRangeSugar" min="10" max="100" step="10" value="50" data-unit="gr">
                          <label class="form-range-label" for="formControlRangeSugar">
                            <span class="label-start">
                              <small>10gr</small><br>
                              Les
                            </span>
                            <span class="label-value"></span>
                            <span class="label-end">
                              <small>100gr</small><br>
                              More
                            </span>
                            
                          </label>
                        </div>

                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkbox-protein">
                          <label class="form-check-label" for="checkbox-protein">Protéines</label>
                        </div>

                        <div class="form-group mt-2">
                          <input type="range" class="form-control-range" id="formControlRangeProtein" min="10" max="100" step="10" data-unit="gr">
                          <label class="form-range-label" for="formControlRangeProtein">
                            <span class="label-start">
                              <small>10gr</small><br>
                              Les
                            </span>
                            <span class="label-value"></span>
                            <span class="label-end">
                              <small>100gr</small><br>
                              More
                            </span>
                            
                          </label>
                        </div>

                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Rating
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionProductFilter">
                      <div class="card-body">

                        <div class="form-check">
                          <input type="radio" name="rating" class="form-check-input" id="checkbox-rating-5">
                          <label class="form-check-label" for="checkbox-rating-5">
                            <ul class="list-stars">
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                            </ul>
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" name="rating" class="form-check-input" id="checkbox-rating-4">
                          <label class="form-check-label" for="checkbox-rating-4">
                            <ul class="list-stars">
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <span>+</span>
                              </li>
                            </ul>
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" name="rating" class="form-check-input" id="checkbox-rating-3">
                          <label class="form-check-label" for="checkbox-rating-3">
                            <ul class="list-stars">
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <span>+</span>
                              </li>
                            </ul>
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" name="rating" class="form-check-input" id="checkbox-rating-2">
                          <label class="form-check-label" for="checkbox-rating-2">
                            <ul class="list-stars">
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <span>+</span>
                              </li>
                            </ul>
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="radio" name="rating" class="form-check-input" id="checkbox-rating-1">
                          <label class="form-check-label" for="checkbox-rating-1">
                            <ul class="list-stars">
                              <li class="list-item">
                                <svg class="list-image">
                                  <use xlink:href="assets/images/sprite.svg#svg-star"></use>
                                </svg>
                              </li>
                              <li class="list-item">
                                <span>+</span>
                              </li>
                            </ul>
                          </label>
                        </div>


                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Consommation Methode
                          </button>
                        </h2>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionProductFilter">
                        <div class="card-body">
                          <h5 class="form-title">MÉTHODE CLASSIQUE</h5>

                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-classic-1">
                            <label class="form-check-label" for="checkbox-classic-1">Attaque</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-classic-2">
                            <label class="form-check-label" for="checkbox-classic-2">Croisiere</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-classic-3">
                            <label class="form-check-label" for="checkbox-classic-3">Consolidation</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-classic-4">
                            <label class="form-check-label" for="checkbox-classic-4">Stabilisation</label>
                          </div>

                          <h5 class="form-title mt-2">L'ESCALIER NUTRITIONNEL</h5>
                          <p class="form-copy">"ajustez le meilleur jour pour vous de consommer"</p>

                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-nutrition-1">
                            <label class="form-check-label" for="checkbox-nutrition-1">Lundi</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-nutrition-2">
                            <label class="form-check-label" for="checkbox-nutrition-2">Mardi</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-nutrition-3">
                            <label class="form-check-label" for="checkbox-nutrition-3">Marcedi</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-nutrition-4">
                            <label class="form-check-label" for="checkbox-nutrition-4">Jeudi</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-nutrition-5">
                            <label class="form-check-label" for="checkbox-nutrition-5">Vendredi</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-nutrition-6">
                            <label class="form-check-label" for="checkbox-nutrition-6">Samedi</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-nutrition-7">
                            <label class="form-check-label" for="checkbox-nutrition-7">Dimanche</label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card card-apply-filter">
                      <div id="collapseFive" class="show">
                        <div class="card-body">

                          <button class="btn btn-lavender btn-cta btn-apply-filter">
                            <span>Save Filter</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>

          <div class="col col-products">
            <div class="form-product-tags">
              <ul class="list-product-tags list-slider-product-tags list-unstyled p-0 mb-3" id="list-product-tags">
                <li class="list-item">
                  <div class="form-check p-0">
                    <input type="checkbox" class="form-check-input" id="tagCheck1">
                    <label class="form-check-label btn btn-product-tags" for="tagCheck1">Dukan Innovation 2022</label>
                  </div>
                </li>
                <li class="list-item">
                  <div class="form-check p-0">
                    <input type="checkbox" class="form-check-input" id="tagCheck2">
                    <label class="form-check-label btn btn-product-tags" for="tagCheck2">Anti-Waste</label>
                  </div>
                </li>
                <li class="list-item">
                  <div class="form-check p-0">
                    <input type="checkbox" class="form-check-input" id="tagCheck3">
                    <label class="form-check-label btn btn-product-tags" for="tagCheck3">Barres</label>
                  </div>
                </li>
                <li class="list-item">
                  <div class="form-check p-0">
                    <input type="checkbox" class="form-check-input" id="tagCheck4">
                    <label class="form-check-label btn btn-product-tags" for="tagCheck4">Biscuits</label>
                  </div>
                </li>
                <li class="list-item">
                  <div class="form-check p-0">
                    <input type="checkbox" class="form-check-input" id="tagCheck5">
                    <label class="form-check-label btn btn-product-tags" for="tagCheck5">Causin</label>
                  </div>
                </li>
                <li class="list-item">
                  <div class="form-check p-0">
                    <input type="checkbox" class="form-check-input" id="tagCheck6">
                    <label class="form-check-label btn btn-product-tags" for="tagCheck6">Cerreals/Petit Dejeuner</label>
                  </div>
                </li>
                <li class="list-item">
                  <div class="form-check p-0">
                    <input type="checkbox" class="form-check-input" id="tagCheck7">
                    <label class="form-check-label btn btn-product-tags" for="tagCheck7">Dukanella</label>
                  </div>
                </li>
              </ul>
            </div>

            <div class="d-flex align-items-center justify-content-center mb-3 search-navigation">
              <div class="flex-1 search-result-wrapper">
                <p class="search-result-label mb-0">
                  Showing 60 Product of 123 from <strong>"Dukan Innovation 2022"</strong> 
                </p>
                <button class="btn btn-toggle-filter js-btn-toggle-filter d-md-none">Filter</button>
              </div>
              <div class="flex-align-center sort-product-wrapper d-none d-md-block">
                <form action="" class="form-sort-product">
                  <select class="form-select" aria-label="">
                    <option value="1" selected>New Products</option>
                    <option value="2">Top Products</option>
                    <option value="3">Lowest to Highest Price</option>
                    <option value="4">Highest to Lowest Price</option>
                  </select>
                </form>
              </div>
            </div>


            <ul class="list-products">

              <?php for ($x = 0; $x <= 5; $x++) { ?> 

                <li class="list-item">
                  <div class="card card-product">
                    <div class="image-wrapper">
                      <a href="" class="list-link"></a>
                      <img src="assets/images/dummy/product-1.jpg" alt="" class="card-image">
                      <div class="favorite-wrapper">
                        <button class="btn cta-favorite">
                          <svg class="button-image">
                            <use xlink:href="assets/images/sprite.svg#svg-favorite"></use>
                          </svg>
                        </button>
                        <span class="favorite-label">add to favorite</span>
                      </div>
                    </div>
                    <div class="card-body">
                      <a href="" class="list-link"></a>
                      <h5 class="card-title">Nutrition Attack</h5>
                      <p class="card-excerpt">Anti-Gaspillage Mini Cookies Aux Myrtilles et Graines de Chie DDM 16-02-22</p>
                      <div class="card-meta-info">
                        <span class="price">12,2€</span><br />
                        <span class="discount">25%</span>
                        <span class="old-price">8,0€</span>
                        <span class="status">kilogrammes moins cher</span>
                      </div>
                      <div class="add-to-cart-wrapper">
                        <button class="btn btn-lavender btn-cta">
                          <span>Add to Cart</span>
                          <svg class="button-image ml-1">
                            <use xlink:href="assets/images/sprite.svg#svg-cart"></use>
                        </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </li>

              <?php } ?> 
            </ul>

          </div>
        </div>
      </div>
    </section>
    

    <?php include 'components/testimonials.php';?>

    <?php include 'components/approved-by-dukan.php';?>

    <?php include 'components/product-innovation.php';?>

    <?php include 'components/download-app.php';?>

    <?php include 'components/footer.php';?>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="module" src="assets/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <script type="module" src="assets/js/main.js"></script>
    <script type="module" src="assets/js/products.js"></script>
    
  </body>
</html>



