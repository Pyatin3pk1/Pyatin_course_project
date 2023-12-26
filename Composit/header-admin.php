<header>
     <h2 class="logo"> <a href="../../html/index.php">ЗП</a></h2>
     <nav class="navigation">
          <ul>
                    <li>
                         <a href="#">
                              <?php echo $_SESSION['Full_Name']; ?>
                         </a>
                         <ul>
                              <li><a href="../../modul/logout.php">
                                   <span class="material-icons-sharp">
                                             logout
                                   </span>
                                   Выход</a></li>
                         </ul> 
                    </li>
          </ul>
     </nav>
</header>