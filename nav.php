<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <a href="index.php" class="navbar-brand">Sparks Bank </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse2">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse2">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="transformoney.php" class="nav-item nav-link active">Transfor Money</a>
                <a href="transactionhistory.php" class="nav-item nav-link active">View Transaction History</a>
            </div>
        </div>
        <style>
          .navbar-dark .nav-item > .nav-link.active  {
          color:white;
          }
        </style>
        <script>
      $('.navbar-nav .nav-link').click(function(){
          $('.navbar-nav .nav-link').removeClass('active');
          $(this).addClass('active');
      })
    </script>
    </nav>
    