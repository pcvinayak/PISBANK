BANKING SYSTEM WEB APPLICATION----SUBMITTED BY DHEERAJ KUMAR SRIVASTAVA           202CS006
                                               VINAYAK PRAKASHAN CHOYYAN          202CS033
GITHUB LINK-https://github.com/pcvinayak/PISBANK										   
											   
Preinstallations-1)XAMPP software
       
       (-------FOR UBUNTU-------) for windows scroll down
Steps-FOR UBUNTU
      1)Install XAMPP on your system
      2)Create the "Banking_System" Folder inside "htdocs" folder in Xampp.
      
        To find htdocs folder, computer--->opt--->lampp--->htdocs
        
        Then Paste (all .php files)  from github link inside "Banking_System" Folder.
      3)unzip "banking.rar" file from github link to get "banking" folder.
      4)Inside "banking" folder there are two folders--a)css folder b)img folder
        copy and paste both these folders(css and img folder) in "Banking_System" Folder that is created in step 2.
      5)Open Terminal on ubuntu and give following series of command
      ->cd /opt/lampp
      ->sudo ./manager-linux-x64.run
      
      Then enter your system password for system authentication
      
      6)Xampp software will be launched.
      7)On the top, click Manage Server
      8)Then on below there is a tab "start all" , click that tab.(you will see all three--mysql, apache server,ProFTPD start running)
      9)Minimize the Xampp software.
      10)Open browser.
      11)Type the URL localhost/phpmyadmin/
        You will see phpMyAdmin page --->Showing that everything goes correct till now.
      12)On phpMyAdmin page ,on the Top there is a tab "Databases", Click on it.
      13)Again You can find a Tab on top "import", click on it.
      14)A new page open where you can find "Browse", click on it to browse and select "d_bankingsystem.sql" file (download from github link).
      15)Now after selection scroll down and click "go".
      16)Now you are ready to view the site---"BANKING SYSTEM WEB APPLICATION"
         To view,a)Open a new tab in the browser
                 b)Type url http://localhost/Banking_System/
				 
      
	 


	 (------FOR WINDOWS------)
      FOR WINDOWS
      1)Install XAMPP on your system
      2)Create the "Banking_System" Folder inside "htdocs" folder in Xampp.
      
        To find htdocs folder, This PC--->Local disk(C:)--->xampp--->htdocs
        
        Then Paste (all .php files)  from github link inside "Banking_System" Folder.
      3)unzip "banking.rar" file from github link to get "banking" folder.
      4)Inside "banking" folder there are two folders--a)css folder b)img folder
        copy and paste both these folders(css and img folder) in "Banking_System" Folder that is created in step 2.
      5)Now search on windows search bar "xampp",select xampp control panel and hit enter. 
      6)Xampp software will be launched.
      7)On the top, click Manage Server
      8)Then click "start" for mysql and  apache server(you will see both goes to running state).
		(Note. If you are unable to start mysql then one reason may be that in your system some other application might be using port no 3306,
		you have to manaually stop that application and the again start mysql on Xampp control panel)
      9)Minimize the Xampp software.
      10)Open browser.
      11)Type the URL localhost/phpmyadmin/
        You will see phpMyAdmin page --->Showing that everything goes correct till now.
      12)On phpMyAdmin page ,on the Top there is a tab "Databases", Click on it.
      13)Again You can find a Tab on top "import", click on it.
      14)A new page open where you can find "Browse", click on it to browse and select "d_bankingsystem.sql" file (provided in our submission).
      15)Now after selection scroll down and click "go".(Database got stored here ...you can view all the database from top tab "Database".....
	     After clicking you can see all the tables in that databases)
      16)Now you are ready to view the site---"BANKING SYSTEM WEB APPLICATION"
         To view,a)Open a new tab in the browser
                 b)Type url http://localhost/Banking_System/



Technology Used--a)PHP----------For basic code
                 b)CSS----------For styling the web page
                 c)sql----------For database query
                 d)HTML---------For Body elements on web page
                 
software used----XAMPP(Provides tools--Apache server and Mysql database)

Tools------------a)Apache Server
                 b)Mysql database

# FOR LOGIN------There are three type of login
                   a)admin login------ADMINISTRATION 
		   b)employee login---BANK EMPLOYEE
                   c)Normal user login----NORMAL BANK CUSTOMER
                   (All have diffrent priviledges)
				   
                   c)Login and password for admin
                   sample--username=4
                           password=147
                     
                     Login and password for super admin
                   sample--username=33
                           password=369
                     
                     Login and password for employee
                   sample--username=2
                           password=12
						   
		     Login and password for normal users
                   sample--username=5
                           password=42
						   
				(You can view all users,employees and admin username and password in table d_users in "d_bankingsystem.sql")
				(Also note that password is integer values whereas username can have characters but here we have given simple values for ease)
                    

