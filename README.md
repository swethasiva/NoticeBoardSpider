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


![screenshot 12](https://user-images.githubusercontent.com/28360478/27514209-074f6830-59a1-11e7-8d95-076b4adcea76.png)










