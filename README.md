# Salsa Rica Dance Company
 
## Inleiding

Mijn vader wilt een reserveringssysteem voor de school waar hij salsa danslessen geeft. Een systeem waar je kunt reserveren voor een proefles of misschien een les of cursus aan mee wilt doen.

## Ontwerp

- Een users-tabel die de informatie voor de admins/leraren en studenten. Het bevat een column voor de naam van een admin, een wachtwoord-, een telefoonnummer- en een emailadres- column van een admin.
Een courses-tabel die de informatie bevat voor de cursussen. Het bevat een column voor de start- en einddatum van een cursus. Een cursus bevat altijd 10 reservaties van 10 verschillende lessen achter elkaar. Ook is er een column die aangeeft wanneer de course is ontstaan (created_at).
- Een reservations-tabel die de informatie bevat voor de reservaties voor de lessen. Deze tabel bevat 2 foreign keys (FK): De course_id en de lesson_id. Deze geven aan bij welke cursus de reservatie behoort en welke les ervoor is gereserveerd. Hiernaast bevat de tabel ook columns voor de naam, het telefoonnummer en het emailadres van de persoon die de les heeft gereserveerd.
- Een lessons-tabel die de informatie voor de lessen waarvoor kan worden gereserveerd. Deze tabel bevat een boolean/tinyint column. Deze geven aan of de les een proefles of een normale les is. Deze tabel bevat ook columns voor de start- en eind- datum en tijd.