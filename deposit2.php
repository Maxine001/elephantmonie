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
  <title>Deposit</title>
  <link rel="stylesheet" href="style.css">
  <!-- Material icon--> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" 
  rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="index.js"></script>
</head>
<body>
    <div class="container">
      <aside>
        <div class="top">
          <div class="logo">
            <img src="Eb 4.JPG">
            <h2>ELEPHANT <span class="danger">MONIE</span></h2>
          </div>
          <div class="close" id="close-btn">
            <span class="material-symbols-outlined">close</span>
          </div>
        </div>
  
        <div class="sidebar">
          <a href="dashboard.php">
            <span class="material-symbols-outlined">grid_view</span>
            <h3>Dashboard</h3>
          </a>
          <a href="#" class="active">
            <span class="material-symbols-outlined">person</span>
            <h3>Profile</h3>
          </a>
          <a href="Deposit.php">
            <span class="material-symbols-outlined">account_balance </span>
            <h3>Deposit</h3>
          </a>
          <a href="Withdrawal.php">
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
          </a><a href="#">
            <span class="material-symbols-outlined">add</span>
            <h3>$Activities</h3>
          </a><a href="#">
            <span class="material-symbols-outlined">bar_chart_4_bars</span>
            <h3>How it works</h3>
          </a>
          <a href="#">
            <span class="material-symbols-outlined">logout</span>
            <h3>Log out</h3>
          </a>
        </div>
      </aside>

      <div class="right">
        <div class="top">
          <button onclick="
           menuButton();
          " id="menu-btn">
            <span class="material-symbols-outlined">menu</span>
          </button>
           
          <div  onclick=" themeToggleBtn();" class="theme-toggler">
            <span class="material-symbols-outlined active">light_mode</span>
            <span class="material-symbols-outlined">dark_mode</span>
          </div>
          <div class="profile">
            <div class="info">
              <p>Hey, <b><?php echo $_SESSION["user_id"];?></b></p>
              <small class="text-muted">User ID</small>
            </div>
          </div>
        </div>
      
    <main>
      <div id="wrapped">
        <h1 class="pmt">Make payment</h1>
        <p>To complete this cash deposit, send money to the merchant's account with<br>
            details provided below from an account with Amount and verified User ID
        </p>
      </div>
        
        <div id="content-wrap">
          <form>
            <label id="choose-plan">Choose plan</label>
            <select id="plan">
              <option>Basic $5 - $30</option>
              <option> Plat $30 - $70</option>
              <option>Diamond $70 - $100</option>
            </select>

            <div>
              <label>Amount</label>
              <input id="amt" name="depost">
            </div>
            <div>
              <label>User ID</label>
              <input id="user-id" name="user-id">
            </div>
            <div>
              <input type="submit" name="submit" id="submit" value="I have paid">
            </div>
          </form>

        </div>
        
        <div id="acct-details">
          <p>Bank:<strong>Palmpay</strong></p>
          <p>Account Name:<strong>Johnbull eze</strong></p>
          <p>Account Number:<strong>242444444</strong></p></p>
          <strong>OR</strong>
          <p>Send using this wallet address: <strong>dsrfa465678999999999999999999999</strong></p></p>
        </div>

       

    </main>

  </div>
</body>
</html>