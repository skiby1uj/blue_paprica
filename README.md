# Plue Paprica

### Create project and settings

If you have run application you must clone is with repository. 
Open console in directory where you want create project and write:

    git clone https://github.com/skiby1uj/blue_paprica.git

Go to project (cd blue_paprica) and you must set database configure in .enc:

    sudo vim .enc
    
In file you must set db_user, db_password and db_name (probably 16 line in the file)
Example sets:

    DATABASE_URL=mysql://root:qwerty@127.0.0.1:3306/blue_paprica
    
Now you must install project. Use this commend in terminal

    composer install
    
### Use application in website

Now you can run project. You write in console:

    php bin/console s:r

In your console you see where you open application (probably http://127.0.0.1:8000/).

http://127.0.0.1:8000/ - form to add new information

http://127.0.0.1:8000/login - login to admin

http://127.0.0.1:8000/get - get information about person from the database

If you can login to admin:
    
    login: admin
    password admin
