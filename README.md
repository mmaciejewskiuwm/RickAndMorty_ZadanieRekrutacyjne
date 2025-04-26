Projekt rekrutacyjny Mikołaj Maciejewski  
Aplikacja webowa Symfony wyświetlająca listę postaci, zdjęcia postaci oraz numery odcinków w których występują.  
Dodatkowo mamy opcję kliknięciu zdjęcia postaci co powoduje wyskakoczenie okienka "pop-up" z jej danymi.  
Do aplikacji został utworzony plik do urochomienia za pomocą Dockera. Funkcjonalność jego została sprawdzona na Ubuntu 25.04. Link -> https://drive.google.com/file/d/1wHAKZwtRXzHT7lSUc4RNxF-udXmwKboB/view?usp=sharing  
Pliki warte przejrzenia ->
1) CharacterController.php -> \src\Controller\CharacterController.php (Główny Controller)
2) RickAndMortyApiService.php  -> \src\Service\RickAndMortyApiService.php (Obsługa API)
3) index.html.twig -> \templates\character\index.html.twig (Obsługuje wyświetlanie się strony)
4) RickAndMortyApiServiceTest.php -> \tests\Service\RickAndMortyApiServiceTest.php (unit testy dla API)
