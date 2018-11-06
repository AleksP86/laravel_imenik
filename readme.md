Small phonebook done in Laravel (Serbian text in views).

List of pages:
- login (regular login), has login only for 1 user for now (username: korisnik pass:1234). No registration or mailig for now.
- home page where you can add new phone numbers and where all are listed.
- search phone number by any of values: town, street, lastname, firstname, phone numer.
    All fileds have search offering auto-sugestions from DB based on what is typed.
- graph (js plugin) offering info on sities and number of entries for each.
Every page has in left corner color picker that changes current page background (resets on page leave).
API request that for city name returns all entries for it, /api/imenik/city_name
imenik.sql is DB dump for this application with 20 entries.
