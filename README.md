# This is no git

# What is this then
pit

# What it does?
* creates user config on the SourceHub server:
  * full-name
  * username
  * bio
  * avatar
* creates repository
* deletes repository
* adds file to the repo
* removes files form the repo
* clones a repo `pit clone`

# What is it for?
This is meant to be a lightweight GitHub/GitLab alternative, making it good to self-host

# TODO:
* finish web
* finish the CLI tool
* make installer
* make version controll

# Note
This Github Clone will not support branches, pull and stuff like that. Not even commit messages. Or maybe? We'll see.

# Structure
```sh
|   index.html (SourceHub front page)
|   style.css  (SourceHub front page CSS)
|
\---alxb421    (sample username)
    |   index.php  (list repos webpage)
    |   main_style.css (style for the above webpage)
    |   script.js (js for that)
    |
    +---.profile  (user profile configuraion)
    |       avatar.png
    |       full-name.txt
    |       user-bio.txt
    |       username.txt
    |
    +---New repo  (example repo)
    \---Sample Repository (example repo)
```

# Copyright and Licensing

This Project is made by Alexandru Balan under the Pear Project team (even tho it is not in the pear repository uwu) and is licensed under the Pear Public License V2.
See LICENSE file for details
