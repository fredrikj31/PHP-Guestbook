# Guestbook

This guestbook is made for new beginners to PHP, and is focused to make people learn from it. Or maybe you just want to use it as a guestbook. You can do whatever you want with it. 

You can see a preview of the guestbook here:

![Preview of guestbook](https://raw.githubusercontent.com/fredrikj31/PHP-Guestbook/master/Preview1.PNG)

## Installation

#### Download

You can download the [project](https://github.com/fredrikj31/PHP-Guestbook) by simply clicking the `Clone & Download` button and then click `Download ZIP`. 

Then you drag-drop the files into your website server (XAMPP, WAMP) or you web hosting provider htdocs folder

Then you access the website by the url.

#### Install of SQL

You need to access your database, and then you click import and then upload the `guestbook.sql` file and then you click upload or something like that.

## Usage

You is needed to edit these line of code to you database information. This code is located in the settings.php

The code looks like this:

```php
<?php
    //Database settings
    $dbhost = "localhost"; //Database host
    $dbuser = "root"; //Database username
    $dbpassword = ""; //Database Password. Leave blank for no password!
    $dbname = "guestbook"; //Database Name;

    //General Settings
    $sitename = "Guestbook"; //Website Name;
?>
```

You can edit the website name to your own website name if you want to use it as a normal guestbook. 

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[Fredrik Johansen](https://github.com/fredrikj31)
