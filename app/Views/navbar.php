<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <title>Bootstrap 5 Side Bar Navigation</title>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/a2331dbcf7.js" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
            <img src="/images/contoh1.png" style="height: 50px">
        <div class="logo_name">SIGMA</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="/dashboard">
        <i class="fa-solid fa-gauge"></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="/items">
       <i class="fa-solid fa-circle-plus"></i>
         <span class="links_name">Items</span>
       </a>
       <span class="tooltip">Items</span>
     </li>
     <li>
       <a href="/staff">
       <i class="fa-solid fa-clipboard-user"></i>
         <span class="links_name">Staff</span>
       </a>
       <span class="tooltip">Staff</span>
     </li>
     <li>
       <a href="penjualan">
       <i class="fa-solid fa-book"></i>
         <span class="links_name">Penjualan</span>
       </a>
       <span class="tooltip">Penjualan</span>
     </li>
     <li>
     <a href="/pembelian">
       <i class="fa-solid fa-cart-shopping"></i>
         <span class="links_name">Pembelian</span>
       </a>
       <span class="tooltip">Pembelian</span>
      </li>
       <li class="profile">
        <form action="/sessions/logout" method="post">
          <button class="inibutton" >
         <span class="links_name text-dark">Exit</span>
         </button>
         </form>
     </li>
    </ul>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>