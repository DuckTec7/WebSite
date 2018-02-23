<!-- Navigation -->
<style>
    .logo {      
      margin-right: -10px;
      height: 100px;
    }
    .fecha{
      font-size: 3rem;
      text-align: right;
      margin-top: 2%;
    }
    .titulo{
    text-align: center;      
    font-family: sans-serif;
    font-size: 3rem;
    margin-top:  2%;

    }
    @media (max-width: 768px) {
      .logo {
        height: 50px;
        margin-left: 6%; 
        margin-top: 6%;
      }
    }
</style>

<nav class="navbar navbar-static-top" style="background: #34495e; color: white;">
  <div style="width: 100%; display: inline-flex;">
    <a class="col-md-4" style="margin-top:  0.5%;">
      <img class="logo" alt="Brand" src="../img/Duck.jpg">
    </a>
    <p class="titulo col-md-4">Duck Tec</p>
    <p class="fecha col-md-4">
      
    </p>
  </div>
      
</nav>

<ul class="menu cf">
  <li><a href="">QUIENES SOMOS</a></li>
  <li>
    <a href="">CONTACTENOS</a>
    <ul class="submenu">
      <li><a href="">Submenu item</a></li>
      <li><a href="">Submenu item</a></li>
      <li><a href="">Submenu item</a></li>
      <li><a href="">Submenu item</a></li>
    </ul>     
  </li>
  <li><a href="">PORTAFOLIO</a></li>
</ul>

<script>
var f = new Date();
document.querySelectorAll('.fecha')[0].innerHTML = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
</script>