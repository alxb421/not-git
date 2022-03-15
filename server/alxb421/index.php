<?php

// save Repository Name if user creates a new repository
$reponame = 'your value';
$username = file_get_contents("./.profile/username.txt");
$fullname = file_get_contents("./.profile/full-name.txt");
$userbio = file_get_contents("./.profile/user-bio.txt");

// function to get the file extension (type)
function ext( $file ) {
    if ( is_dir( $file ) ) {
        return 'dir';
    }
}

// get the file list for the current directory
$files = scandir( '.' );

// exclude index from the array
$exclude = array( '.', '..', '.htdocs', '.env', '.profile', 'index.php', 'styles.css', 'main_style.css', 'script.js');

// exclude from list
foreach ( $exclude as $ex ) {
    if ( ( $key = array_search( $ex, $files ) ) !== false ) {
        unset( $files[$key] );
    }
}

?>

<html lang="en" class="dark">
    <head>
        <title>SourceHub</title>
        <meta name="viewport" content="width=device-width">
        <style>ul {list-style-type: none;}</style>
        <link rel="stylesheet" href="./main_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        </head>
        
        <body>
        <nav>
          <img src="./.profile/avatar.png" height="250px">
          <div> <p class="user-fullname"><br> <?php print $fullname ?></p>
          <p class="user-name"> @<?php print $username ?></p>
          <p class="user-desc"><br> <?php print $userbio ?></p>
        </nav>

  <div class="app-container">
  <div class="app-header">
    <div class="app-header-left">
      <span class="app-icon"></span>
      <p class="app-name">SourceHub</p>

      <div class="search-wrapper">
        <input class="search-input" type="text" placeholder="Search (not working lol)">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
          <defs></defs>
          <circle cx="11" cy="11" r="8"></circle>
          <path d="M21 21l-4.35-4.35"></path>
        </svg>
      </div>

    </div>
    <div class="app-header-right">
      <button class="mode-switch active" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
    </div>
  </div>

<div class="messages-section">
  <div class="projects-section-header">
    <p>Repositories</p>
  </div>
  <div class="messages">
    
    <?php
            if ( !empty( $files ) ) {
                foreach ( $files as $file ) {
                print '<div class="message-box">';
                    print '<div class="message-content">';
                        print '<div class="message-header">';
                            print '<a href="./' . $file . '"><div class="name">' . $file  . '</div></a></div></a></div></div>';
                }
                print '<div class="endline"></div>';
        }
        ?>
</div>
</div>
</div>

<div id="footer">
<div class="container">
    <div class="row">
    </div>
  </div>  
</div>

<script  src="./script.js"></script>
        </body>
</html>