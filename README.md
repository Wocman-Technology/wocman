# wocman

#  getting the API documentation ready

# for test

clone this.

open the xcf4_config.php file in the database folder.

set up the website_link constant to point to the root directory where you cloned this project into.

set up the server,user and password credentials of your server.

go to index.php from your browser to make the database and tables.

open the route.php file in the v1(version one) folder.

target each and every one of those constants like so.

server_add/v1/?route.

example.

http://localhost/wocman/v1/?get_token

# note
some of the routes are authorized routes which needs you to pass some session values to access basically all the routes with admin and true.

to test those once, open the index.php in the v1 folder and uncomment the first 3 session variables and save the file.