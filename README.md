# Slim 3 Project

This is a Fake Spotify API to list some bands albums.

# Run Server
composer run start 
php -S localhost:8080 -t public 

# Routes
http://localhost:8080/api/v1/bands - Display all the registered Bands
http://localhost:8080/api/v1/albums - Display all the registered Albums
http://localhost:8080/api/v1/albums?q=<band-name> - Display all the Albums of the given band
