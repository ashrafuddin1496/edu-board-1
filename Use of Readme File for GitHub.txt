


Purpose of Readme File : To present nice project documentation step by step

1. touch -> Mac and Linux

2.


----------------------------------------------------------------------------

1st step :

1. git init

2. git add .

3. git commit -m "Edu board file setup"

4. git remote add origin https://github.com/muhsinashoma/edu-board.git               server file of git
git push -u origin master 

5. touch readme.md       to creat readme.md file in gitbash for MAC and Linux. README file is used for markdown(md) sintext
-------------------------------------------------------------------------
6. git status            to check status

7.git log --oneline      to check last commit or all commit  

--------------------------------------------------------------------------

2nd step :

1. git add .

2. git commit -m "test"

3. git push

and this process is continued upto end
----------------------------------------------------------------------------


3rd step : 

Packagist : The PHP Package Repository

Link : https://packagist.org/

1. We will create packagist account in this link https://packagist.org/. Packagist is the PHP Package Repository

2. Packagist which is reausable library

3. By using Package/reusable library we shall develop like facebook.com patter

4. We can submit this project(edu-board) as project in packagist 

5.We will convert this full project as project in packagist

6.To Upload this project in packagist link

   at first
     
      vendor / name  = project name  
     
     a. muhsinashoma/edu-board   	->  github way

     b. vendor / name    		 will be similar way of github

     c. muhsinashoma/edu-board      	-> similar way of github  
--------------------------------------------------------------------------------    
4th Step :

To create composer file

1. composer init

2. muhsinashoma / edu-board  

3.Description []: This is a learing purpose project for result calculation


4.Author [muhsina.akter <muhsina.akter2@gmail.com>, n to skip]: muhsina <muhsina.akter2@gmail.com>

    Here

    a. author name : muhsina
    b. email :  muhsina.akter2@gmail.com

----------------------------------------------------------------------------------------

Microsoft Windows [Version 10.0.18362.959]                                                                                                                              (c) 2019 Microsoft Corporation. All rights reserved.                                                                                                                                                                                                                                                                                          


 C:\xampp\htdocs\edu_board>composer init                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   Welcome to the Composer config generator                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
 This command will guide you through creating your composer.json config.                                                                                                                                                                                                                                                                         

Package name (<vendor>/<name>) [muhsina akter/edu_board]: muhsinashoma                                                                                                  



Author [muhsina.akter <muhsina.akter2@gmail.com>, n to skip]: muhsina <muhsina.akter2@gmail.com>                                                                        


Minimum Stability []:                                                                                                                                                   

Package Type (e.g. library, project, metapackage, composer-plugin) []: library                                                                                          License []: MIT                                                                                                                                                                                                                                                                                                                                 Define your dependencies.                                                                                                                                                                                                                                                                                                                       


  "license": "MIT",       



----------------------------------------------------------------------------------------------------------------------------

To upload this composer.json file in packagist as a package of well organized style otherwise packagist will not accept this project as package 

{
    "name": "muhsinashoma/edu-board",
    "description": "This is a learing purpose project for result calculation",
    "type": "library",
    "license": "MIT",
    "authors": [
        {
            "name": "muhsina",
            "email": "muhsina.akter2@gmail.com"
        }
    ],
    "autoload" : {
        "psr-4" : {
            "Edu\\Board\\" : "app\\"
        }
    },
    "require": {}
}
         



Why we shall kept this project in packagist  ? 

because : 

a. I want to update in sometimes

b. Open to all to see

c. 


Open to all
                                                                                                                                                                                                                                                                                                     {                                                                                                                                                                           "name": "muhsina",                                                                                                                                                      "email": "muhsina.akter2@gmail.com"                                                                                                                                 }                                                                                                                                                                   ],                                                                                                                                                                                                                                                                                                                           }                                                                                                                                                                                                                                                                                                                                               Do you confirm generation [yes]? yes                                                                                                                                    Would you like the vendor directory added to your .gitignore [yes]? NO                                                                                                                                                                                                                                                                         







