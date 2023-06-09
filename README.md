<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Open+Sans&family=Rajdhani:wght@300;500&family=Sigmar&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
     integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body> 
<div align="center"> <a>Star Market</a> </div>
<p class="bg-warning">
Creare il file .env copiandolo da .env.example <br>
Inserire la password per il db nel file .env <br>
    
Impostare la queue_connection uguale a database nel file .env <br>
    
Creare un database mysql impostando i parametri come nel file .env <br>
Impostare i parametri per utilizzare mailtrap nel file .env <br>
Lanciare il comando “composer install”. <br>
Se non dovesse funzionare scaricare l’ultima versione di php, e lanciare i seguenti comandi: <br>
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" <br>
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt';
    unlink('composer-setup.php'); } echo PHP_EOL;" <br>
php composer-setup.php <br>
php -r "unlink('composer-setup.php');" <br>
    

installare mysql se non lo avete e impostare la password <br>
abilitare le seguenti estensioni nel file php.ini: <br>
•	Curl <br>
•	Fileinfo <br>
•	Gd <br>
•	Mbstring <br>
•	Exif <br>
•	Mysqli <br>
•	Openssl <br>
•	Pdo_mysql <br>
•	Pdsqlite <br>
•	Sqlite3 <br>
In curl.cainfo mettete il path del file che dovete scaricare qui: https://curl.se/docs/caextract.html <br>
riavviare il pc <br>
installare laravel scout con composer require laravel/scout <br>
lanciare il comando composer update <br>
lanciare il comando npm install <br>
lanciare il comando php artisan key:generate <br>
lanciare il comando php artisan scout:flush "App\Models\Announcement" <br>
lanciare il comando php artisan scout:import "App\Models\Announcement" <br>
rinominare il file delle credenziali google, dell’ai di google vision in: google_credential.json <br>
inserire nel .env la riga: GOOGLE_APPLICATION_CREDENTIALS=google_credential.json  <br>

lanciare in 3 terminali diversi i seguenti comandi:  <br>
php artisan queue:work  <br>
npm run dev  <br>
php artisan serve <br>
Enjoy <br>
</p>

    
</body>
</html>
