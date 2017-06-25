# Online Notice Board 
## In this fast moving world , wont  it be a lot  Easier if you had all your schedule list in your finger tips ???  Introducing the new Online Notice board for students.
### This is a easy platform for professors to post assignments and reminders  and keep the students updated.

### The Index page of the project is titled as "user.html" where there are three access levels 1) admin / prof  2)Student 3)Class Rep.
### The admin has the highest privillege followed by Class rep( who is selected by the admin himself ) followed by students.

## ADMIN
### admin has the power to  Add new posts , Edit current Posts , Delete Posts, View all posts , Make New Class rep( maximum one per batch ) , Make new Admin , View Profile , Change password.


## Class Rep 
### Max.  One per batch , Who is assigned by the Admin can view the posts and can only postpone the Assignment submission dates but does not have the right to edit or delete notes.

## Students 
### They can only view the posts online and their own profile.


## Additional Info :
### There is one admin already created along with the project .
### user name : admin
### password : admin
### For safety resons the Passwords are stored into database by hashing .
### Once a person clicks logout they are actually destroying the session that was created during the login thus , unless they login again they cannot view any respective pages.


### This project uses Xampp server( Local server ) with phpmyadmin . The backend language used in this project is php( hyper text pre processor).



# Database used( name ) : board
## the commands for creation of data base and other required table is written in "database.sql" file in the repo .
## Tables used : admin , student , note.
### admin table is solely for the professor
### student table is where all registration credential of students registering are stored. The data retrieved from this database is used to check and allow login of Students and Class rep. 
### Student table has uname , email , pwd , cr , admin fields. The value of 1 in cr or admin field means that , that particualr cr is a cr or admin or both based on which fields hold  value 1. 
### The third table , note is used for storing deatils about the posts created or edited and displayed. 


# !!! Use Xampp version 5.5.0( as xampp version 7.1 onwards mysql_connect cannot be used ) and i have used mysql_connect() in the project.!!!

## the link to download the xampp server that has been used for the project is given here  : https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/5.5.19/


![screenshot 12](https://user-images.githubusercontent.com/28360478/27514209-074f6830-59a1-11e7-8d95-076b4adcea76.png)
![screenshot 13](https://user-images.githubusercontent.com/28360478/27514225-8f07f3b4-59a1-11e7-98ea-afdf4b055fd8.png)
![screenshot 14](https://user-images.githubusercontent.com/28360478/27514226-8f0bc520-59a1-11e7-9b9a-00c8faafbe37.png)
![screenshot 15](https://user-images.githubusercontent.com/28360478/27514227-8f16a3a0-59a1-11e7-8a84-bc1056f8ab98.png)
![screenshot 16](https://user-images.githubusercontent.com/28360478/27514228-8f2b0246-59a1-11e7-9c73-64211b3eb28b.png)
![screenshot 17](https://user-images.githubusercontent.com/28360478/27514229-8f2d8dae-59a1-11e7-8bb6-89a515222c32.png)
![screenshot 18](https://user-images.githubusercontent.com/28360478/27514230-8f42f0a4-59a1-11e7-925f-2964348940cc.png)
![screenshot 19](https://user-images.githubusercontent.com/28360478/27514231-8f4af10a-59a1-11e7-8fb3-639c78edb5c2.png)
![screenshot 20](https://user-images.githubusercontent.com/28360478/27514232-8f5db510-59a1-11e7-8104-f7b5532086a9.png)
![screenshot 21](https://user-images.githubusercontent.com/28360478/27514233-8f723738-59a1-11e7-8f38-16459980f44d.png)
![screenshot 22](https://user-images.githubusercontent.com/28360478/27514234-8f78771a-59a1-11e7-8dc3-c82e26225930.png)
![screenshot 23](https://user-images.githubusercontent.com/28360478/27514235-8f847cfe-59a1-11e7-805d-b52ce56b3c0b.png)
![screenshot 24](https://user-images.githubusercontent.com/28360478/27514236-8f95caea-59a1-11e7-96e7-dc83a249ad08.png)
![screenshot 25](https://user-images.githubusercontent.com/28360478/27514237-8f9d7704-59a1-11e7-8133-b77a2972051f.png)











