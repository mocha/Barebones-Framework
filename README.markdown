# Barebones Framework v0.8 (What an Amazing Project)
The quick and dirty way to build static html websites in no time flat.

---------------------------------------

## What it is

BBF is a copy of the extremely excellent HTML5 Boilerplate by Paul Irish ([http://html5boilerplate.com](http://html5boilerplate.com)) fitted with a helpful PHP script that allows you to create static html websites with ease.

---------------------------------------

## Usage Overview

1. Drop the files on your webserver in the root directory of your domain
2. Rename 'default.htaccess' to simply '.htaccess'
3. Set the values in config.php to the ones appropriate for your website
4. Modify the file header and footer in /inc/layout/header.php and /inc/layout/footer.php
5. Add your own css to /css/style.css
6. Add content pages under the /inc folder.
7. Profit!

---------------------------------------

## File Structure

The way file structure works is very simple - the goal here is to make it as quick and easy for you to add static html files.

If you want to add a contact page, for example, you would add a file called contact.php to the folder /inc. If you then link to yourdomain.com/contact, the script will automatically look first for a file called contact.php, and failing that, look for contact/default.php

This method works for up to 2 levels of depth, allow you to create categories and subcategories. Here are some examples of how this works:

domain.com/contact                ->  /inc/contact.php
domain.com/aboutus                ->  /inc/aboutus/default.php
domain.com/aboutus/staff          ->  /inc/aboutus/staff.php
domain.com/services/all           ->  /inc/services/all/default.php
domain.com/services/all/plumbing  ->  /inc/services/all/plumbing.php

Note: if your website is in a subdirectory of another domain, take that in to account with your links. i.e. if you're under domain.com/stuff/, your links should be to /stuff/links

---------------------------------------

## Requirements

A server with php

---------------------------------------

## Thanks to

HTML5 Boilerplate [http://html5boilerplate.com](http://html5boilerplate.com)

---------------------------------------

## License:

This is all public domain. Do with it anything you'd like, no attribution necessary. [http://creativecommons.org/publicdomain/zero/1.0/](http://creativecommons.org/publicdomain/zero/1.0/)
