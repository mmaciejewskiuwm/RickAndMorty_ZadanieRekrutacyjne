Projekt rekrutacyjny Mikołaj Maciejewski <br />
Aplikacja webowa Symfony wyświetlająca listę postaci, zdjęcia postaci oraz numery odcinków w których występują. <br />
Dodatkowo mamy opcję kliknięciu zdjęcia postaci co powoduje wyskakoczenie okienka "pop-up" z jej danymi.  <br />
Do aplikacji został utworzony plik do uruchomienia za pomocą Dockera. Funkcjonalność ta została sprawdzona przeze mnie na Ubuntu 25.04. <br /> Link -> https://drive.google.com/file/d/1wHAKZwtRXzHT7lSUc4RNxF-udXmwKboB/view?usp=sharing  <br />
Pliki warte przejrzenia ->
1) CharacterController.php -> \src\Controller\CharacterController.php (Główny Controller)
2) RickAndMortyApiService.php  -> \src\Service\RickAndMortyApiService.php (Obsługa API)
3) index.html.twig -> \templates\character\index.html.twig (Obsługuje wyświetlanie się strony)
4) RickAndMortyApiServiceTest.php -> \tests\Service\RickAndMortyApiServiceTest.php (unit testy dla API)
