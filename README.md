## Before you start

Make sure that your server meets the system requirements:

1. **Linux** or **Unix** server. You may encounter problems on a Windows server.
2. Apache 2.0+ (with mod_mysql, mod_xml, mod_zlib) or nginx
3. MySql 5.0+
4. php 5.2+ with APC
5. If you have Zend Optimizer on your server **disable it**!
6. If you have the suhosin patch installed on your server you might get an error. [Here is how you can fix it](https://www.assembla.com/spaces/nooku-framework/wiki/Known_Issues).
7. Composer package management. You can download it following the instructions on
http://getcomposer.org/ or just run the following command:

`curl -s http://getcomposer.org/installer | php`

## Installing Anahita

Use the following Composer command to create an Anahita project called _myproject_. This command automatically downloads all the required files from the [Anahita GitHub repository](https://github.com/anahitasocial):

    composer create-project anahita/project myproject dev-master

**Please note:** system asks you "Do you want to remove the existing VCS (.git, .svn..) history?" so just answer Y and press enter.

Now go to the _myproject_ directory:

    cd myproject

If you type _php anahita_ you get a list of all commands available to manage your Anahita installation. In order to initialize your Anahita installation run the following command and provide your database information when it is asked from you:

    php anahita site:init

After the command is executed you can go to the _http://localhost/myproject/www_ folder to access your Anahita installation. The first account that is created on this installation will be the _Super Administrator_ account. Go to the _http://localhost/myproject/www/people/signup_ and create an account.

**Congratulations!** You have just installed your Anahita installation successfully.

**Hint:** you need to custom configure your server to recognize the _http://localhost/myproject/www_ as the home directory of your website. 

**Hint:** Since you are the _Super Admin_ you can also access the administration back-end via  _http://localhost/myproject/www/administration_

## Installing Anahita apps and components

Now it is time to extend your Anahita installation with some apps and components. Anahita already comes with some really useful ones. To get a list of them simply type the following command:

    php anahita package:list

Now in order to install an app, for example the Photos app, type the following command:

    php anahita package:install photos

You can even provide a list of apps and components in one line. For example to install the Groups, Topics, and Connect apps use the following command:

    php anahita package:install groups topics connect

In order to uninstall apps and extensions you can simply use the following command:

    php anahita package:uninstall photos

**HINT:** In the administration back-end you can go to the _Extend > Components_ and further define whether an app should optionally or always be available on actor profiles (people, groups, etc.). If an app is optionally available, then on each actor profile the app can be enabled under the _Edit Profile > Apps_.

Congratulations! You have just installed some apps and extensions on your Anahita installation.
