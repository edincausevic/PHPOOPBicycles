<nav>
  <ul class="menu">
    <li>
      <a 
        href="index.php"
        class="<?php if(isset($page_active) && $page_active == 'home') echo 'menu-active'; ?>">Home</a>
    </li>
    <li>
      <a 
        href="inventory.php"
        class="<?php if(isset($page_active) && $page_active == 'inventory') echo 'menu-active'; ?>">View Our Inventory</a>
    </li>
    <li>
      <a 
        href="about.php"
        class="<?php if(isset($page_active) && $page_active == 'about') echo 'menu-active'; ?>">About Us</a>
    </li>
    <li>
      <a 
        href="staff"
        class="<?php if(isset($page_active) && $page_active == 'staff') echo 'menu-active'; ?>">Admin</a>
    </li>
  </ul>
</nav>