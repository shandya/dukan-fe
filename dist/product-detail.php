<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Index</title>


    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  </head>

  <body class="page page--product-detail">

    <?php include 'components/header.php';?>

    <section class="section section--breadcrumb pb-3">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Boutique</a></li>
            <li class="breadcrumb-item"><a href="#">Biscuits</a></li>
            <li class="breadcrumb-item active" aria-current="page">Anti-Gaspillage Mini Cookies Aux Myrtilles et Graines de Chie DDM 16-02-22</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="section section--product-detail pt-0">
      <div class="container">
        <div class="product-detail">
          <div class="image-wrapper">
            <div class="card card-image">
              <img src="assets/images/dummy/product-2.jpg" alt="" class="product-image">
            </div>
          </div>
          <div class="product-body">
            <h1 class="product-title">Anti-Gaspillage Mini Cookies Aux Myrtilles et Graines de Chie DDM 16-02-22</h1>
            <div class="product-meta-info mb-4">
              <span class="price">6,2€</span><span class="old-price">8,0€</span>
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
              </ul>
            </div>

            <ul class="nav nav-tabs mb-3" id="productTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="detail-tab" data-toggle="tab" data-target="#detail" type="button" role="tab" aria-controls="detail" aria-selected="true">Detail</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nutrition-tab" data-toggle="tab" data-target="#nutrition" type="button" role="tab" aria-controls="nutrition" aria-selected="false">Information Nutrition</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="methods-tab" data-toggle="tab" data-target="#methods" type="button" role="tab" aria-controls="methods" aria-selected="false">Methods</button>
              </li>
            </ul>

            <div class="tab-content mb-3" id="myTabContent">
              <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                <div class="product-description">
                  <p>Description:</p>
                  <p>Nothing like apple crumble falvoring its fragrance and typical tast will brighten up even in the middle of winter. </p>
                  <ul>
                    <li>Food flavoring for all kinds of culinary preparations: pastries, cream dessert, youghurt, ice cream</li>
                    <li>pour a few drops in the preparation and mix well</li>
                    <li>their concentration makes them very economical</li>
                  </ul>
                </div>  
              </div>
              <div class="tab-pane fade" id="nutrition" role="tabpanel" aria-labelledby="nutrition-tab">
                

              </div>
              <div class="tab-pane fade" id="methods" role="tabpanel" aria-labelledby="methods-tab">
                

              </div>
            </div>


            <div class="comments">
              <div class="card card-comment-submit mb-3">
                <form action="" class="form form-comment-submit">
                  <div class="avatar-wrapper pr-3">
                    <div class="avatar"></div>
                  </div>
                  <div class="comment-input flex-1">
                    <textarea class="form-control" id="" rows="3"></textarea>
                  </div>
                  <div class="cta-wrapper pl-3">
                    <button class="btn btn-lavender btn-cta pl-4 pr-4">Send</button>
                  </div>
                </form>
              </div>


              <ul class="list-comments">
                <?php for ($x = 0; $x <= 3; $x++) { ?> 
                  <li class="list-item">
                    <div class="card card-comment mb-3">
                      <header class="card-header d-flex align-items-center justify-content-center">
                        <div class="avatar-wrapper pr-3">
                          <div class="avatar"></div>
                        </div>
                        <h5 class="card-title mb-0 flex-1">
                          <strong class="mr-4">ramsesmiron</strong> 
                          1 week ago
                        </h5>
                        <div class="cta-wrapper">
                          <button class="btn btn-reply">Reply</button>
                        </div>
                      </header>
                      <div class="card-body pt-0">
                        C'est la meilleure recommandation donnée par le docteur dukan, j'ai perdu 20 kg en seulement 3 mois. Les ingrédients de Dukan sont de la meilleure qualité, alors faites confiance et attendez patiemment le processus. Résultat final satisfaisant.
                      </div>
                    </div>
                  </li>
                <?php } ?> 
              </ul>


            </div>

          </div>
          <div class="product-order">
            <div class="card card-add-to-cart">
              <h5 class="card-title">Choose variant: <strong>3 variant</strong></h5>
              <form action="" class="form-add-to-cart">
                <select class="form-control form-select mb-3" aria-label="">
                  <option disabled>select variant</option>
                  <option value="1">100gr</option>
                  <option value="2">250gr</option>
                  <option value="3">400gr</option>
                </select>

                <div class="input-group input-group-amount mb-3">
                  <div class="input-group-prepend">
                    <button class="btn btn-control-amount input-group-text">-</button>
                  </div>
                  <input type="number" class="form-control" id="product-amount" placeholder="1" value="1">
                  <div class="input-group-prepend">
                    <button class="btn btn-control-amount input-group-text">+</button>
                  </div>
                </div>

                <div class="cta-wrapper">
                  <button class="btn btn-lavender btn-cta">
                    Add to Cart
                    <svg class="button-image ml-1">
                      <use xlink:href="assets/images/sprite.svg#svg-cart"></use>
                  </svg>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include 'components/testimonials.php';?>

    <?php include 'components/updates.php';?>

    <?php include 'components/footer.php';?>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script type="module" src="assets/js/main.js"></script>
    <script type="module" src="assets/js/products.js"></script>
  </body>
</html>
