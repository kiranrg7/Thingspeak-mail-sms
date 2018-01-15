# Thingspeak-mail-sms


  This application mainly displays last two field1 records  of thingspeak.com(cloud) channel data and send the last record via sms or email.
Do register in the application before login.


Steps to execute the project
  
step 1: Install wamp or xamp server 

step  2: place all the files in htdocs incase of xamp 
             or place all the files in www folder incase of wamp.

step 3: open mysql and import the sql file named servelots.sql whic is placed under db file of the project. if couldn't import follow these steps
             #1 create a database  called servelots in mysql
             #2 and create table using command  :  
                 create table user (uname varchar(30),pwd varchar(30), name varchar(30),email varchar(30),phno int(20));
 

step 4: For getting mail working follow these steps
             
             #1  login into gmail account and in your go to settings and set allow less secure app as on in your settings.
             
             #2 and local host  for ssl certicate  copy 'cacert.pem' file and place it in any directory and copy the path of that particular directory
                   then open the php.ini file of wamp or xamp and goto open ssl section under "[open ssl]" section place the following line by providing your path
        
                 openssl.cafile=path of the directory\cacert.pem   
                 curl.cainfo = pathe of the directory\cacert.pem
    
          for  example :  openssl.cafile=C:\wamp64\www\assignment\cacert.pem
                             curl.cainfo = C:\wamp64\www\assignment\cacert.pem


step 6 : restart the xamp or wamp .

step 7 : Now run the index.html file in browser under local host.



note : in this project things speak channel id and read key are static if you want to use for your channel id and read api then you can make changes in code within data.js file where 335418 is channel id and  WYACO3T89W0TBNOK is read key. and some the validation for fields are not covered  in the application              
