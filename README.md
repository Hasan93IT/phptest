# phptest
#Autor: Hasan Abdullah
geschrieben mit:PHP Version 7.3.21

Problemstellung:
Die Applikation gibt alle Nummern von 1 bis 100 aus, wobei
Für jedes Vielfache von drei schreibe “Fizz” anstatt der Nummer.
Für jedes Vielfache von fünf schreibe “Buzz”. 
Für Zahlen die sowohl ein Vielfaches von drei als auch von fünf sind, schreibe “FizzBuzz”. 

lösung:
es wird eine for-schleife für zäheln von 1 bis 100 benötigt.
für die Überprüfung der Vielfachheit der Nummer mit einer Zahl wird das Modulo benutzt, wenn das Resultat null ist, dann ist die Nummer vielfache einer Zahl, z.b $i % 3 == 0.

