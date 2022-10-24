<header data-role="Header" class="home-header">
      <img alt="image" src="https://i.postimg.cc/Pf3ndv6Q/PortalML.png" loading="eager" class="home-image" />
      <a href="index.php" rel="noreferrer noopener" class="home-link">
        Home
      </a>
      <a href="resource-list.php" rel="noreferrer noopener" class="home-link">
        Resource List
      </a>
      <a href="about.php" rel="noreferrer noopener" class="home-link1">
        <span class="home-text">About</span>
        <br />
      </a>
      <a href="get-help.php" rel="noreferrer noopener" class="home-link2">
        Get Help
      </a>

      <form action="search-resources.php" method="POST">
        <label>Search</label>
        <input type="text" name="search" value="<?php if(isset($_POST['search'])){echo $_POST['search'];}?>">
        <input type="submit" name="submit">
      </form>
      
      <a href="login.php">
        <button type="button" class="home-button button" class="login-button">Login</button></a>
      <a href="admin.php">
        <button type="button" class="admin-button">Admin</button>
      </a>
    </header>