Anahita Standard Project
========================
Anahita Standard Project is the preferred way for getting started to develop new applications on the Anahita Platform.

The standard project gives you a skeleton in addition to command line tool for managing your Anahita installation.

1) Setting up a project
----------------------------------
Anahita Standard Project extensively uses the composer package manager for installing and managing dependency.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Once you have the composer installed, you need to download the anahita standard package and place it in a folder that's accessible by a webserver

To download the package you can either download the zip [package](https://github.com/anahitasocial/anahita-standard/archive/master.zip) or to clone it (recommended) using git.

To clone run the following command in your shell

    git clone https://github.com/anahitasocial/anahita-standard.git myproject

Then change the directory to myproject

    cd myproject

If you notice this is just an empty skeleton. With no code. Now we need to tell the composer to download all the dependencies by running the following command

     php composer.phar install

This will take few minutes as it try to download all the dependencies.

Once finished, have a look around in the vendor directories and you should be able to spot the anahita folder along with other packages. The anahita folder contains all the code required for running Anahita. If you look into the src folder in anahita/anahita. You'll see two folders anahita and packages. anahita folder contains the core package files that's required to run a minimum installation of Anahita. packages folder contains all the extra components that can be installed on Anahita.

Next we need to install and configure Anahita before we can use it.

1) Installation and Configuration
----------------------------------
To configure Anahita, you can use the console script utility in the root of your project called anahita.php.

Run `php anahita` in the root of your project and you should be able to see list of commands.

Run `php anahita site:init`. This will initializes your installation. This command will prompt you for database information. Once entered it will create and initializes the database.

Once completed, the login credentials are displayed.Take a note of them. 

Also you should be able to spot a 'www' folder in the root of your project. This is the public folder that you need to point your web server to (example: http://localhost/myproject/www). 

If you have pointed your browser the www folder you should be able to see the Anahita home page. Try to log in with your login credentials.

If you are able to successfully to login, then congratulation you have successfully installed and configured Anahita 

2) Installing Components  
----------------------------------
As we mentioned Anahita provides some components as Anahita apps. You can view list of packages available to install by typing `php anahita.php package:list`. A package can contain one or many components that are related to each other.

You can install any of those packages by typing `php anahita package:install p1 p2 …` So for example to install photos and topics you can type

     php anahita package:install photos connect

Now point your browser to http://localhost/myproject/www/index.php/photos and you should be able to see the photo app.

**Note**
After installing any package we track the installed package at config/developement.yaml. That way when you just type `php anahita.php package:install` it will try to re-install (upate the symlink in www) the packages listed in developement.yaml.

3) Hello World Component
----------------------------------
Anahita by default provides a simple hello world example that showcases a package file structure. To install the helloworld component run the following command

     php anahita package:install example

Now point your browser to http://localhost/myproject/www/index.php/helloworld. You should be able to see a hello world there.

Feel free to explore and play around with the code. You can also use any of the existing apps as a starting point either by going directly to vendor/anahita/anahita/src/packages or by simply copying them into the root packages folder. 

Here's an example to re-use the photos app. If you have already installed the photos app you need unlink it first

     php anahita package:uninstall photos

Then run the following command from your project root. This will copy the photos package into your root packages directory

     cp -r vendor/anahita/anahita/packages/photos/ packages/photos

Then open the ROOT/packages/photos/composer.json and change the name from "anahita/photos" to "myproject/photos",

If you do `php anahita package:list` you can see now photo shows under the myproject packages. Those are your packages. Now run the following command to install the photos app

    php anahita package:install "myproject/photos" 

Now you can makes changes in the photos code at ROOT/pakcages/photos/src and see the results.


**Note**
If you have APC and have enabled the caching, then object paths are cached in the memory for performance reason. To clear the cache you can go in the back-end and turn off and then turn on the cache or go in the 'www' folder find the configuration.php file and set the cahce to 0, refresh the page and then set it back to 1. This will empty the cahce.

   

