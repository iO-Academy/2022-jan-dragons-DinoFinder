# DinoFinder

An adventure 65 million years in the making.

DinoFinder is the go-to app for finding out about all of your favourite dinosaurs!

## Description
DinoFinder is an object-orientated PHP project, styled with SASS, that fetches and displays information about different dinosaurs, from a MySQL database.

Upon selecting a dinosaur you are able to view more in-depth facts about the given species with stats such as *'Height'*, *'Length'* and *'Killer Rating'* (Wow!).

## Getting Started

### Dependencies

    - PHP version 7.0.0+, 
    - MySQL version 5.7 + 
    - Composer version 1+
    - PHPUnit version 6.5+
    - SASS version 1.49+

### Installing
Clone this repo:
```
git clone git@github.com:iO-Academy/2022-jan-dragons-DinoFinder.git
```

Navigate into the newly created repo:
```
cd 2022-jan-dragons-DinoFinder
```
From the root of the project run:
```
composer install
```
and:
```
sass --watch style.scss style.css
```


Install the database ```/dinos.sql``` into a db named ```dinosaurs```

Ensure your local database host, username and password details are correct in:
```
src/Classes/Utilities/Db.php
```

The application will now be available wherever you access your PHP projects!




## Authors

Ethan Garrett - [@EthanGarrett](https://github.com/ethan-garrett)
Gabriel Rowan - [@GabrielRowan](https://github.com/gabrielrowan)
Grace Palacz - [@Grace-P-03](https://github.com/grace-p-03)
Jordan Addis - [@J-Add](https://github.com/j-add)
Luke Grayland - [@Luke-Grayland](https://github.com/luke-grayland)
Marcus Drury - [@Marcus12934](https://github.com/Marcus12934)
Sami Shanagher - [@Parsley-Afroman](https://github.com/Parsley-Afroman)



## Acknowledgements

With thanks to John Hammond, Dr. Alan Grant, Dr. Ellie Sattler, and all of the good people at **InGen**. Without your tireless research, this project would not have been been possible.

![Ah ah ah, you didn't say the magic word](https://static.wikia.nocookie.net/jurassicpark/images/b/b3/Ahahahreal.gif)

