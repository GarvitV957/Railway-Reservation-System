Steps to be followed to run this web application :
Step 0: Unzip "RailwayProject.zip" and Keep the name of folder as default, i.e "RailwayProject".
Step 1: Turn on Apache & MySQL servers in your system.
Step 2: Use dump.sql ( Either import or Copy & Paste to MySQL Shell ) file to create database and all the required tables with initial dummy data. (Name of database is Railways)
Step 3: Move folder "RailwayProject" to htdocs.
Step 4: Make sure that "RailwayProject" should contain 3 folders directly inside it , i.e, "Authentication", "Home", and "Checking".
Step 5: Open your favorite browser and hit over to http://localhost/RailwayProject/Authentication/index.html
Step 6: Sign Up or login using a dummy account credentials (phone: 6869726182, password: 12345678 ).
Step 7: Enter the source, destination, date and find your train, book your train , download your ticket, can also cancel your ticket. (Kindly use the source destination and day* combination which is present in traininfo table since many combinations may not persent in database and you will get "No trains found".)

NOTE: There is a QR Code in tickets that can only be accessed when this site is hosted (As In my local system I have used my IP Adress instead of localhost to create the QR Code).
Step 8: So you need to hit over http://localhost/RailwayProject/Checking/index.html to access that page.
Step 9: For checking the validity of that ticket enter seat no and travel id (both are mentioned specifically in each ticket).

################### Thanks for using iRailway Sevices :) ###################################
