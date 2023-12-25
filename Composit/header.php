<header>
     <h2 class="logo"> <a href="index.php">ЗП</a></h2>
     <nav class="navigation">
          <ul>
               <li><a href="index.php">Запись</a></li>
               <li><a href="RecordLog.php">Журнал записей</a></li>
               <li>
               <?php if (isset($_SESSION['ID_User'])): ?>
                         <a href="#">
                              <?php echo $_SESSION['Full_Name']; ?>
                         </a>
                         <ul>
                              <?php if ($_SESSION['Admin']): ?>
                                        <li><a href="../admin/admin.php">
                                             <span class="material-icons-sharp">
                                                  admin_panel_settings
                                             </span>
                                             Админпанель</a></li>
                              <?php endif; ?>
                                   <li><a href="../modul/logout.php">
                                   <span class="material-icons-sharp">
                                        logout
                                   </span>
                                   Выход</a></li>
                         </ul>     
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