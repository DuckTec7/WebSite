<!-- Navigation -->
<style>
    .logo {
      margin-right: -10px;
      height: 100px;
    }

    @media (max-width: 768px) {
      .logo {
        height: 50px;
        margin-left: 6%; 
        margin-top: 6%;
      }
    }
</style>

<nav class="navbar navbar-static-top" style="background: darkgray;">
  <div>
    <div>
      <a class="navbar-brand" href="#">
        <img class="logo" alt="Brand" src="../img/Duck.jpg">
      </a>
    </div>
    <div id="fecha" >
      
    </div>
  </div>
      
</nav>

<script>
var f = new Date();
document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
</script>