### Simple client for consuming the Email users & Apps REST API

#### What is this used for 

It can be used for many things, but I used it to provide a admin user rights to all the users so we can migrate users using [migrationwiz](http://www.bittitan.com/products/migrationwiz), which allowed us to migrate the user's data over to Office365. 

You need to use third party tools like MigrationWiz when it comes to migrating users from a cloud hosted services to another cloud hosted services (i.e Rackspace to O365). 

Thanks to Rackspace Email & Apps REST API Team and Josh Shilling for creating the API

I used their API and modified it so you can **set permission** to all users at once instead of selecting a user at time which can be seriously time consumming. 

To use the API to access your email users within your domain that is hosted in Rackspace use the following steps 

1. Clone this repo 
2. Use your text editor I recommend [Submlime Text 3](http://www.sublimetext.com/3) to open up the files
3. Go to the APIClient.php and enter in the USER_KEY and SECRET_KEY. For more info about this read [Rackspace API Wiki](http://api-wiki.apps.rackspace.com/api-wiki/index.php/Main_Page#URL)
4. Open your bowser and use a local server, normally ran on port 3000 (i.e localhost:3000) and naviagate to one of the php files below, depending one what task you are trying to accomplish.

### Tasks you are trying to run

#### Printing all users within your domain onto the screen 

Use the `getUsersInsideDomain.php` file

#### Print single user within your domain onto the screen 

Use the `getUserInfo.php` file

#### Set permissions to all users within your domain hosted on Rackspace 

Use the `addPermissionToAllUsers.php` file 

#### Set permission to a single user within your domain hosted on Rackspace 

Use the `setPermissionOnSingle.php` file

#### Contribute 

Please feel free to add to this code, it can help many sys admins migrate users from Rackspace to Office 365. 


