
# Radio-Template

A Radio Template what you can use for free, and what easy is to use.



## Screenshots

![App Screenshot](https://user-images.githubusercontent.com/80313417/199616969-c2e1f0e5-6db7-49e7-918d-5fd660edb8a0.PNG)


## Features

- Shows the current song
- News Page via RSS Feed
- Artist Cover (from Itunes)
- Without MySQL
- Last Tracks
- ON/OFF Air Picture
- Laut.fm Embedding
- Individually adjustment
- Responsive Design
- Color changing is possible


## Installation

- Download the Project as Zip
- Unzip the Folder
- Take before or after you upload the Folder a Editor and edit the Config File at the inc/ Folder for your Radio Station
    
## Usage/Examples

```php
/* Allgemeine Informationen */
$radioname = "Radio Demo";
$slogan = "Die beste Musik!";
$hintergrundfarbe = "white";
$lautmountpoint = "eins";
$externerplayerlink = "";
$titelbox = "Mustertitel";
$titeltext = "Hier könnte der benutzerdefinierte Text stehen, den Besucher auf der Seite unten sehen können";
$rssfeed = simplexml_load_file('https://www.tagesschau.de/xml/rss2/');
?>
```

For Example change Radio Demo by $radioname to your Station Name.
## Demo

https://radio-template.julianzillner.de/


## Support

For support, email info@julianzillner.de or join our Slack channel.


## Author

- [@julianzillner](https://www.github.com/julianzillner)

