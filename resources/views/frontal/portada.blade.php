@extends('layout-frontal')

@section('title', 'Home Monllar')

@section('css')
    <link href="{{ asset('css/frontal/portada.css') }}" rel="stylesheet">
@endsection

@section('content')

      <div class="row">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="first-slide" src="http://via.placeholder.com/1140x450" alt="First slide">
                      <div class="container">
                          <div class="carousel-caption text-left">
                              <h1>1.Eslogan</h1>
                              <p>Descripcion de lo que se ofrecen.</p>
                              <p><a class="btn btn-lg btn-primary" href="#" role="button">Comprar</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img class="second-slide" src="http://via.placeholder.com/1140x450" alt="Second slide">
                      <div class="container">
                          <div class="carousel-caption">
                              <h1>2.Eslogan</h1>
                              <p>Descripcion de lo que se ofrecen.</p>
                              <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver mas</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img class="third-slide" src="http://via.placeholder.com/1140x450" alt="Third slide">
                      <div class="container">
                          <div class="carousel-caption text-right">
                              <h1>3.Eslogan</h1>
                              <p>>Descripcion de lo que se ofrecen.</p>
                              <p><a class="btn btn-lg btn-primary" href="#" role="button">Novedades</a></p>
                          </div>
                      </div>
                  </div>
              </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                <div class="card-body">
                    <h4>1.Nombre Producto</h4>
                    <p class="d-flex card-text">Descripcion del producto....... </p>

                 <div class="text-center">
                        <div class="precio ">PRECIO
                            <span> €</span>
                        </div>
                        <div class="precio_iva small">(PRECIO
                            <span> €</span>IVA Incluido.)
                        </div>
                    </div>
                        <div class="button">
                            <button id="boton" type="button" class="btn btn-primary btn-block">Comprar</button>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card md-3 box-shadow">
                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                <div class="card-body">
                    <h4>2.Nombre Producto</h4>
                    <p class="d-flex card-text">Descripcion del producto.... </p>

                    <div class="text-center">
                        <div class="precio ">PRECIO
                            <span> €</span>
                        </div>
                        <div class="precio_iva small">(PRECIO
                            <span> €</span>IVA Incluido.)
                        </div>
                    </div>
                    <div class="button">
                        <button id="boton" type="button" class="btn btn-primary btn-block">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card md-3 box-shadow">
                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                <div class="card-body">
                    <h4>3.Nombre Producto</h4>
                    <p class="d-flex card-text">Descripcion del producto.... </p>

                    <div class="text-center">
                        <div class="precio ">PRECIO
                            <span> €</span>
                        </div>
                        <div class="precio_iva small">(PRECIO
                            <span> €</span>IVA Incluido.)
                        </div>
                    </div>
                    <div class="button">
                        <button id="boton" type="button" class="btn btn-primary btn-block">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card md-3 box-shadow">
                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                <div class="card-body">
                    <h4>4.Nombre Producto</h4>
                    <p class="d-flex card-text">Descripcion del producto... </p>

                    <div class="text-center">
                        <div class="precio ">PRECIO
                            <span> €</span>
                        </div>
                        <div class="precio_iva small">(PRECIO
                            <span> €</span>IVA Incluido.)
                        </div>
                    </div>
                    <div class="button">
                        <button id="boton" type="button" class="btn btn-primary btn-block">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card md-3 box-shadow">
                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                <div class="card-body">
                    <h4>1.Nombre Producto</h4>
                    <p class="d-flex card-text">Descripcion del producto....... </p>

                    <div class="text-center">
                        <div class="precio ">PRECIO
                            <span> €</span>
                        </div>
                        <div class="precio_iva small">(PRECIO
                            <span> €</span>IVA Incluido.)
                        </div>
                    </div>
                    <div class="button">
                        <button id="boton" type="button" class="btn btn-primary btn-block">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card md-3 box-shadow">
                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                <div class="card-body">
                    <h4>2.Nombre Producto</h4>
                    <p class="d-flex card-text">Descripcion del producto.... </p>

                    <div class="text-center">
                        <div class="precio ">PRECIO
                            <span> €</span>
                        </div>
                        <div class="precio_iva small">(PRECIO
                            <span> €</span>IVA Incluido.)
                        </div>
                    </div>
                    <div class="button">
                        <button id="boton" type="button" class="btn btn-primary btn-block">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card md-3 box-shadow">
                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                <div class="card-body">
                    <h4>3.Nombre Producto</h4>
                    <p class="d-flex card-text">Descripcion del producto.... </p>

                    <div class="text-center">
                        <div class="precio ">PRECIO
                            <span> €</span>
                        </div>
                        <div class="precio_iva small">(PRECIO
                            <span> €</span>IVA Incluido.)
                        </div>
                    </div>
                    <div class="button">
                        <button id="boton" type="button" class="btn btn-primary btn-block">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card md-3 box-shadow">
                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                <div class="card-body">
                    <h4>4.Nombre Producto</h4>
                    <p class="d-flex card-text">Descripcion del producto... </p>

                    <div class="text-center">
                        <div class="precio ">PRECIO
                            <span> €</span>
                        </div>
                        <div class="precio_iva small">(PRECIO
                            <span> €</span>IVA Incluido.)
                        </div>
                    </div>
                    <div class="button">
                        <button id="boton" type="button" class="btn btn-primary btn-block">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="row" >
          <div class="flex-slider">
              <div class="container">
                  <h2>Patrocinadores de nuestra tienda o categorias de ropa</h2>
                  <div class="row" id="itemSlider">
                      <div id="slider-1" class="carousel carousel-by-item slide" data-ride="carousel">
                          <div class="carousel-inner" role="listbox">
                              <div class="carousel-item active">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="https://dummyimage.com/1200x800/03658c/dddddd&text=Item+1" alt="First slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="https://dummyimage.com/1200x800/0e7373/dddddd&text=Item+2" alt="Second slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="https://dummyimage.com/1200x800/265902/dddddd&text=Item+3" alt="Third slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="https://dummyimage.com/1200x800/592512/dddddd&text=Item+4" alt="Fourth slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="https://dummyimage.com/1200x800/d93d04/dddddd&text=Item+5" alt="Five slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="https://dummyimage.com/1200x800/03658c/dddddd&text=Item+6" alt="Six slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="https://dummyimage.com/1200x800/d93d04/dddddd&text=Item+7" alt="Seven slide">
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                      <img class="d-block img-fluid" src="https://dummyimage.com/1200x800/265902/dddddd&text=Item+8" alt="Eight slide">
                                  </div>
                              </div>

                          </div>
                          <a class="carousel-control-prev" href="#slider-1" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#slider-1" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/frontal/portada.js') }}"></script>
@endsection;
