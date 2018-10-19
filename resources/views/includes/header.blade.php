<!-- <div class="navbar">
   <div class="navbar-inner">
       <a id="logo" href="/">Single Malt</a>
       <ul class="nav">
           <li><a href="/">Home</a></li>
           <li><a href="/contact">Contact</a></li>
       </ul>
   </div>
</div> -->
<!-- Fixed navbar -->
<script>
$(function() {

    $(".nav a").on("click", function(){
    //$(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
    console.log("active link");
    });

});
</script>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SOLIPLAST</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/inventario">Inventario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Entradas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Salidas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pedidos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reportes</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
    </div>
</nav>
