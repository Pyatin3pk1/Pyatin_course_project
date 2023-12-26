<header>
     <h2 class="logo"> <a href="index.php">ЗП</a></h2>
     <nav class="navigation">
          <ul>
               <li>
               <?php if (isset($_SESSION['ID_User'])): ?>
                         <li><a href="index.php">Запись</a></li>
                         <li><a href="RecordLog.php">Журнал записей</a></li>
                         <li>
                              <a href="#">
                                   <?php echo $_SESSION['Full_Name']; ?>
                              </a>
                              <ul>
                                        <li><a href="../modul/logout.php">
                                        <span class="material-icons-sharp">
                                             logout
                                        </span>
                                        Выход</a></li>
                              </ul> 
                         </li>
               <?php elseif (isset($_SESSION['ID_Employee'])): ?>
                              <?php if ($_SESSION['Admin']): ?>
                              <li><a href="index.php">Запись</a></li>
                              <li><a href="RecordLog.php">Журнал записей</a></li>
                              <li>
                                   <a href="#">
                                        <?php echo $_SESSION['Full_Name']; ?>
                                   </a>
                                   <ul>
                                             <li><a href="../admin/record/index.php">
                                                  <span class="material-icons-sharp">
                                                       admin_panel_settings
                                                  </span>
                                                  Админпанель</a></li>
                                             <li><a href="../modul/logout.php">
                                             <span class="material-icons-sharp">
                                                  logout
                                             </span>
                                             Выход</a></li>
                                   </ul> 
                              </li>
                              <?php else: ?>    
                              <li><a href="RecordLog.php">Журнал записей</a></li>
                              <li>
                                   <a href="#">
                                        <?php echo $_SESSION['Full_Name']; ?>
                                   </a>
                                   <ul>
                                             <li><a href="../modul/logout.php">
                                             <span class="material-icons-sharp">
                                                  logout
                                             </span>
                                             Выход</a></li>
                                   </ul> 
                              </li>
                              <?php endif; ?>
                    <?php else: ?>
                         <li>
                              <a href="../html/login.php">
                                   Вход
                              </a>
                              <ul>
                                   <li><a href="../html/reg.php">
                                        <li><a href="reg.php">Регистрация</a></li>
                                   </li>
                              </ul>
                         </li>
                    <?php  endif; ?>
               </li>
          </ul>
     </nav>
</header>