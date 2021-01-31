<!--
  HTML kode for navbar/header, toppseksjonen av nettsiden. her blander jeg html og php
-->
<div id="navbar">
  <div class="navbar">
    <div class="navbar-left">
      <div class="logo">
        <a href="index.php">GreenBook</a>
      </div>
      <div class="søk" title="søk i greenbook">
        <form action="index.php" method="post">
          <input type="text" placeholder="Søk..." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    <div class="navbar-right">
      <div class="notifications">
        <div class="icon_wrapper">
          <i class="fas fa-bell" title="varsler"></i>
        </div>
        <div class="notification_dd">
          <ul class="notification_ul">
            <li>
              <div class="notify_icon"></div>
              <div class="notify_data"></div>
              <div class="notify_status"></div>
            </li>
          </ul>
        </div>
      </div>
      <div class="profile">
        <div class="icon_wrapper" title="din profil">
          <?php //Her henter jeg ut bilde og navn fra database med Pnr som jeg fikk fra login @autor Martin Reberg
          require "kobling/kob.php";
          $id = $_SESSION["id"];
          $sql = "SELECT * FROM person WHERE Pnr = $id";
          $result = $conn->query($sql);
          $rowcount = '0';
          $profilbilde = "";
          $navn = "";
             if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
                   $navn = $row['navn'];
                   if (empty($row['profilbilde'])) {
                     $profilbilde = "bilde/tom.jpg";
                   } else {
                     $profilbilde = $row['profilbilde'];
                   }
                   echo "<a href='dinside.php'><img src='$profilbilde' alt='Bilde'></img></a>";
                   ?>
                   <button id="myButton" onclick="dropDown()" class="dropbtn">
                   <?php
                   echo "<span class='name'>$navn</span>";
                 }
               }
          ?>
          <i class="fas fa-chevron-down"></i></button>
        </div>
      </div>
    </div>
  </div>
  <div id="myDropdown" class="dropdown-content"> <!--https://www.w3schools.com/howto/howto_js_dropdown.asp -->
    <form action="dinside.php" method="post">
      <button class="profil-knapp" type="submit" name="profil-knapp" title="Din profil">Din profil</button>
    </form>
    <form action="index.php" method="post">
      <button class="#" type="submit" name="#" title="#">Knapp</button>
    </form>
    <form action="kobling/logout.php" method="post">
      <button class="loggut-knapp" type="submit" name="loggut-knapp" title="Logg ut">Logg ut</button>
    </form>
  </div>
</div>
