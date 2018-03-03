This website was designed as part of a project for the course INFS3202 at the University of Queensland.

## Description 
The aim of this website is to provide an ordered and concise tool of information for the users interested in sports. 

### Server Side Languages and Database Management
The server side language to be used in this project is PHP (Apache) which will manage the connection to the database using MySQL, this includes usernames, passwords, and session control.

-	MySQL will be used to build and manage the database. 
-	HTML and CSS will be the main languages to develop the front end.

## Functionality & Feature Coverage 

  ### Client Server Communication
The user is able to retrieve data from the server by performing different tasks. The primary data format to transmit data back is JSON, because it is a lightweight format of parsing data to and from the client server. 
For the following features JavaScript will be used:

  ### Search for news
The content used to browse and search for information is stored in a database. It will be retrieved and displayed to the user, using API’s from popular sport feeds. This includes live news and daily news from all the different sports. 

  ### My Teams and Bookmarks
The “Bookmarks” section displays the newspapers that the user have saved, while the “My Teams” section display the teams that the user follow for quick access. The user can set up receiving notifications for these categories. Both sections require to retrieve content from the backend database.

For this sections a database is required to build a database (i.e. phpMyAdmin). The content of each user is stored under unique ID’s for each user signed to the website. Every time that a user logs into their account, their ID’s is identified and it attempts to access and retrieve their content with the correct information.  

### Server Side Code 
  ### Log In and Sign Up – Account 
  For this feature the users are required to set up an account to have full access of the website tools. Once the user completes all the information details. Registered users are able to save and pin articles in a “Bookmark” section that can be accessed anytime.

### Trivia (partially implemented)
The aim of this section is to encourage sports enthusiastic to test their knowledge. This is a space for the community registered in the website to build different trivia’s for other users to solve. A certain score will be designated depending of the number of correct answers and your overall score will be displayed in a public scoreboard (not implemented). For the trivia, users will upload their set of questions directly to the database. So it can be accessed and solved by all the registered users. 

### Additional JavaScript
  - Retrieve content from existing database -> pulled REST API's from My Sport Feeds.
  - Reveal news when scrolling using carousel -> The carousal automatically scrolls through lists of four news articles
  - Article Search feature -> A useful gadget when searching for news, is to filter a list of items depending on the text written in the search bar. 

## Security 
### Security SSL Encryption and Password Protection 
The website will be required to run with HTTPS (SSL) to encrypt directly the information that is received and sent from the server (i.e. passwords). This will keep all the user information protected by a security certificate.

### SQL Injection Protection
To increase SQL security it is required to constrain and sanitize the input data from the user, check for permissions given in the database and use parameters with dynamic SQL.
