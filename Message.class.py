class Message:
#toutes les ligne "print" sont vouées à disparaitre elle sont uniquement là pour les batteries de tests.
    def __init__(self, username):
        self._username = username

    def afficherBonjour(self):
        Message = "Bonjour " + self._username + " !"
        print(Message)

    def afficherAurevoir(self):
        Message = "Aurevoir " + self._username + " !"
        print(Message)

    def afficherConcierge(self):
        Message = "Bonjour " + self._username + ".Veuillez vous rendre auprès d'un gérant."
        print(Message)

    def afficherPrix(self,prix):
        Message = "1 unité sur cette machine coute " + prix
        print(Message)

    def declarerIncident(self):
        Message = self._username + " vous souhaitez déclarer un incident ?"
        print(Message)

    def afficherCredit(self, credit):
        if(credit == "0):
            Message = "Vous n'avez plus de crédits"
            print(Message)
        else:
            Message = "Il vous reste " + credit + " crédit(s)"
            print(Message)

# une batterie de test

test = Message("Christophe")
test.afficherBonjour()
test.afficherAurevoir()
test.afficherConcierge()
test.afficherPrix("1 euro")
test.declarerIncident()
test.afficherCredit("30")
test.afficherCredit("0")
