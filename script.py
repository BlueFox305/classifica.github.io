print("Benvenuto nel mio gioco!")

# Prima domanda
answer = input("Come mi chiamo? ")

if answer.lower() == "lorenzo":
    print("Corretto!")
else:
    print("Sbagliato!")

# Seconda domanda (sempre eseguita)
answer = input("Quanti anni ho? ")

# Verifica se è un numero e se è corretto
if answer.isdigit() and int(answer) == 11:
    print("Bravo!")
else:
    print("Sbagliato!")

# Terza domanda (sempre eseguita)
answer = input("Come si chiama il mio gatto? ")

if answer.lower()== "milu":
    print("Corretto!")
else:
    print("Sbagliato!")
    
    answer = input("Porto gli occhiali? ")

if answer.lower()== "si":
    print("Corretto!")
else:
    print("Sbagliato!")

    answer = input("Ti è piaciuto questo gioco? ")

if answer.lower() == "si":
    print("Corretto!")
else:
    print("Sbagliato!")
