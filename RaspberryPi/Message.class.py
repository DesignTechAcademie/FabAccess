class Message:
#
# @author Junier Christophe <christophe.junier@gmail.com>
#
#toutes les ligne "print" sont vouées à disparaitre elle sont uniquement là pour les batteries de tests. (christophe)

    def __init__(self, username):      #initialisation de la class avec le nom de la personne visée en paramètre.
        self._username = username

    def afficherBonjour(self):         #on dit bonjour à la personne.
        Message = "Bonjour " + self._username + " !"
        print(Message)

    def afficherAurevoir(self):        #on lui dit aussi aurevoir un peu de politesse.
        Message = "Aurevoir " + self._username + " !"
        print(Message)

    def afficherMessage(self,message):    #on lui dit qu'il/elle a des messages, puis on les affiches.
        Message = "Bonjour " + self._username + ".Vous avez un/des nouveau(x) message."
        print(Message)
        print("\n")
        print(message)

    def afficherPrix(self,prix):        #affiche le prix d'une unité sur la machine concerné.
        Message = "1 unité sur cette machine coute " + prix
        print(Message)

    def declarerIncident(self):         #Demande à l'utilisateur si il souhaite declarer un incident.
        Message = self._username + " vous souhaitez déclarer un incident ?"
        print(Message)

    def afficherCredit(self, credit):      #affiche les credits de l'utilisateurs, ou qu'il n'en a plus.
        if(credit == "0):
            Message = "Vous n'avez plus de crédits"
            print(Message)
        else:
            Message = "Il vous reste " + credit + " crédit(s)"
            print(Message)

