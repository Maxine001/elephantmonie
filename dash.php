<?php
  session_start();
  include("connection.php");
  include("functions.php");
  $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <!-- Material icon--> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
  rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <script src="js/jquery-3.7.1.min.js"></script>
  
</head>

<body>
  <div class="container">
    <aside>
      <div class="top">
        <div class="logo">
          <img src="Eb 4.JPG">
          <h2>EGA <span class="danger">TOR</span></h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-symbols-outlined">close</span>
        </div>
      </div>

      <div class="sidebar">
        <a href="#">
          <span class="material-symbols-outlined">grid_view</span>
          <h3>Dashboard</h3>
        </a>
        <a href="#" class="active">
          <span class="material-symbols-outlined">person</span>
          <h3>Profile</h3>
        </a>
        <a href="deposit.php">
          <span class="material-symbols-outlined">account_balance </span>
          <h3>Deposit</h3>
        </a>
        <a href="withdrawal.php">
          <span class="material-symbols-outlined">payments</span>
          <h3>Withdrawal</h3>
        </a>
        <a href="#">
          <span class="material-symbols-outlined">chat</span>
          <h3>Chat</h3>
          <span class="message-count">40</span>
        </a>
        
        <a href="#">
          <span class="material-symbols-outlined">settings</span>
          <h3>Settings</h3>
        </a>
        <a href="#">
          <span class="material-symbols-outlined">add</span>
          <h3>$Activities</h3>
        </a>
        <a href="#">
          <span class="material-symbols-outlined">bar_chart_4_bars</span>
          <h3>How it works</h3>
        </a>
        <a href="logout.php">
          <span class="material-symbols-outlined">logout</span>
          <h3>Log out</h3>
        </a>
      </div>
    </aside>
    
    <!--END OF ASIDE-->

  <main>
    <h1 class="wht">Dashboard</h1>

    <div class="insights">
      <div class="sales">
        <span class="material-symbols-outlined">analytics</span>
        <div class="middle">
          <div class="left">
            <h3>Total Deposit</h3>
            <h1>$25</h1>
          </div>

          <div class="progress">
            <svg>
              <circle cx="38" cy="38" r="36"></circle>
            </svg>
            <div class="number">
              <p>81%</p>
            </div>
          </div>
        </div>
      </div>
      
      <!---------------------End Depodits----------------------------------------->

          <div class="income">
            <span class="material-symbols-outlined">equalizer</span>
            <div class="middle">
              <div class="left">
                <h3>Total Income</h3>
                <h1>$50</h1>
              </div>

              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>81%</p>
                </div>
              </div>
            </div>
          </div>
        
      <!---------------------------End of Total income------------------------------------------->   
          
          <div class="referral">
            <span class="material-symbols-outlined">diversity_3 </span>
            <div class="middle">
              <div class="left">
                <h3>Referal Bonus</h3>
                <h1>$30</h1>
              </div>
    
              <div class="progress">
                <svg>
                  <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                  <p>81%</p>
                </div>
              </div>
            </div>
          </div>
       

      <!------------------End of Referal bonus--------------------------------->

      <div class="tasks">
        <span class="material-symbols-outlined">diversity_3 </span>
        <div class="middle">
          <div class="left">
            <h3>Task earnings</h3>
            <h1>$100</h1>
          </div>

          <div class="progress">
            <svg>
              <circle cx="38" cy="38" r="36"></circle>
            </svg>
            <div class="number">
              <p>81%</p>
            </div>
          </div>
        </div>
      </div>
      <!-------------------End of Task Earning------------>
    </div>
    <!---------------------End of Insight------------------------------->

    <div class="recent-order">
       <h2>Recent Activities</h2>
      <table>
        <thead>
          <tr>
            <th>Product name</th>
            <th>Product number</th>
            <th>Payments</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>purchase of coupon</td>
            <td>104568l</td>
            <td>completed</td>
            <td class="warning">pending</td>
          </tr>
            <td>purchase of coupon</td>
            <td>104568l</td>
            <td>completed</td>
            <td class="warning">pending</td>
          </tr>
            <td>purchase of coupon</td>
            <td>104568l</td>
            <td>completed</td>
            <td class="warning">pending</td>
          </tr>
            <td>purchase of coupon</td>
            <td>104568l</td>
            <td>completed</td>
            <td class="warning">pending</td>
          </tr>
        </tbody>
      </table>
      <a href="#">Show All</a>

    </div>
    <!-----------------END of RECENT---------------------------->
    </main>
    <!-------------------END OF MAIN--------------------------------------->

    <div class="right">
      <div class="top">
        <button id="menu-btn"><span class="material-symbols-outlined">menu</span>
        </button>
         
        <div  onclick=" themeToggleBtn();" class="theme-toggler">
          <span class="material-symbols-outlined active">light_mode</span>
          <span class="material-symbols-outlined">dark_mode</span>
        </div>
        <div class="profile">
          <div class="info">
            <p>Hey,<b><?php echo $_SESSION["user_id"];?><b></p>
            <small class="text-muted">User ID</small>
          </div>
        </div>
      </div>

      <!--------------END OF TOP------------------------------>

      <div class="recent-updates">
        <h2>Recent Updates</h2>
        <div class="updates">
          <div class="update">
            <div class="profile-photo">
              <img src="pf.JPG">
            </div>
            <div class="message">
              <p><b>success John</b> received his order for coupon</p>
              <small class="text-muted">3 minutes ago</small>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="pf.JPG">
            </div>
            <div class="message">
              <p><b>Mike Tyson</b> received his order for coupon</p>
              <small class="text-muted">2 minutes ago</small>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="pf.JPG">
            </div>
            <div class="message">
              <p><b>John Cena</b> received his order for coupon</p>
              <small class="text-muted">1 minutes ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
 
  <script>
  $(document).ready(function () {
   
      const sideMenu = document.querySelector("aside");
      const menuBtn = document.querySelector("#menu-btn");
      const closeBtn = document.querySelector('#close-btn');
      $(menuBtn).click(function (){
        sideMenu.style.display = 'block';
      });
      $(closeBtn).click(function(){
         sideMenu.style.display = 'none';
      });
 

    
      const themeToggler = document.querySelector('.theme-toggler');
      $(themeToggler).click(function () {
         document.body.classList.toggle('dark-theme-variables');
      });

    //themetoggle button
  });
  </script>
 
  
</body>
</html>