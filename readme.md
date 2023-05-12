Employee Vacation System
Documentation
Angelos Zacharioudakis

1)	Description

Employee Vacation System is a distributed application, developed to maintain the details of employees working in any organization. It maintains the information about the personal details of their employees, also the details about their working department system that enable to generate vacation request forms. The application is actually a suite of scripts developed using PHP.

It is simple to understand and can be used by anyone who is not even familiar with simple employees system. It is user friendly and just asks the user to follow systematic operations by giving him few options. It is fast and can perform many operations of a company.

This software package has been developed using the powerful coding tools of HTML, CSS & JavaScript at Front End and PHP through PhpMyAdmin SQL Server at Back End. The software is very user friendly. The package contains different modules like Employee details. This version of the software has multi-user approach. For further enhancement or development of the package, user’s feedback will be considered.
Employee Vacation system is an application that enables users to create and store Employee Records. This application is helpful to department of the organization, which maintains data of employees related to an organization in which the employee can request vacation via a specific form and the administrators have the permission to approve or reject the employees’ vacation form requests.

2)	Installation Instructions
              Unlike the desktop app or mobile apps, the Web App does not need to be installed!
              It runs entirely within a web browser on your computer – no downloads needed.
Traditionally the user would load computer software applications locally on every system. Even with automated software deployment systems, can still be support intensive. With web applications like “Employee Vacation System” the user can load applications just once on a server and let all users access the applications, as they need them via a web browser. You also only have to update only one system as improvements to software become available. In our case, to have access at the site, must be followed the steps as described below:
1.	Download the zip file (source folder) of the site. 
2.	Locate and extract the zip folder at your computer (It will usually be in the downloads folder).
3.	Download and install the PhpMyAdmin.
4.	Open XAMPP Control Panel and enable Apache server and MySQL.
5.	Import the leave_management_system.sql file from the Database File folder in the PhpMyAdmin to fetch tables.
6.	Locate and open up the login.php file with a browser of your choice.
7.	Then it automatically redirects to the login page.
8.	The site installation has completed and it is ready for use.



3)	Mini user manual

The user after launching the main file named login.php as it mentioned in the Installation Instructions section, starts at the login page where he has to enter valid credentials to login as employee or as administrator. The already inserted credentials for user is: email: aggelzah@gmail.com and Password: aggelzah and for admin is: email: admin@admin.com and Password: admin, after the login credentials checked successfully the user redirects to the Dashboard where he can browse the actions enabled. If the user is employee, the right side navigation bar shows the My Profile tab in which he can see his profile details: Full Name, Email, Mobile, Password, Department, Address and Birthday. Moreover, at the navigation bar it appears the Vacation Requests tab where he can see previous requests with the information submitted and their status Pending, Approved or Rejected. In the same page, the employee can request new vacation form by clicking on Add Vacation Request button. He can easily; select the vacation type the dates that he wish and the reason in order to submit the form. However, if the user is administrator, the navigation bar options are more and different; he can see the Department Manager, Vacation Types Manager, Users Manager and Vacation Requests tabs. Each of them has a specific functionality, at Department Manager tab the administrator can see the existing departments, can add a new one by clicking on Add Department button either edit or delete the already registered departments. In the Vacation Types Manager can browse the existing vacation types, can add a new one by clicking on Add Vacation Type button either edit or delete the already vacation types. In the Users Manager tab, the administrator can see the already registered employees with their basic information, however he can edit or delete their elements or add a new user by clicking on Add User button, then it automatically redirects to the form where he has to enter the information needed to create a user as administrator or as employee.
Lastly, the administrator in the Vacation Requests tab can see the submitted vacation forms with the proper information, also at the leave status row he can select approved or rejected to update the request status.
Finally, right on the top the user by clicking on Welcome [his name] can logout anytime he wishes.

