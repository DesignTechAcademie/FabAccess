class Message:

    def __init__(self, username):
        self._Username = username

    def Afficher_Bonjour(self):
        Message = "Bonjour " + self._Username + " !"
        print(Message)

    def Afficher_Aurevoir(self):
        Message = "Aurevoir " + self._Username + " !"
        print(Message)

    def Afficher_Concierge(self):
        Message = "Bonjour " + self._Username + ".Veuillez vous rendre auprès d'un gérant."
        print(Message)

    def Afficher_prix(self,prix):
        Message = "1 unité sur cette machine coute " + prix
        print(Message)

    def Declarer_incident(self):
        Message = self._Username + " vous souhaitez déclarer un incident ?"
        print(Message)

    def Afficher_Credit(self, credit):
        if(credit == "0):
            Message = "Vous n'avez plus de crédits"
            print(Message)
        else:
            Message = "Il vous reste " + credit + " crédit(s)"
            print(Message)

# une batterie de test

test = Message("Christophe")
test.Afficher_Bonjour()
test.Afficher_Aurevoir()
test.Afficher_Concierge()
test.Afficher_prix("1 euro")
test.Declarer_incident()
test.Afficher_Credit("30")
test.Afficher_Credit("0")
