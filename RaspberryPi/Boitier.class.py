#! /usr/bin/python
# -*-coding:Utf-8 -*
import serial
import time
import lcddriver
from Message.class.py import *     #import de tout les modules de la class message (christophe junier)
GPIO.cleanup()  # Initialisation du GPIOs
GPIO.setmode(GPIO.BCM)  # Choix du mode de numérotation des ports : identique aux inscriptions sur le Cobbler
GPIO.setup(12, GPIO.OUT) #led verte
GPIO.setup(13, GPIO.OUT) #led jaune
GPIO.setup(14, GPIO.OUT) #led rouge

class Boitier(): # Définition de notre classe

    def __init__(self): # Notre méthode constructeur
        self.nom=nom
        self.ID=ID

    def lectureRFID():
        ser = serial.Serial('/dev/ttyUSB0', 2400, timeout=1) # replace '/dev/ttyUSB0' with your port

        while True:
            response = ser.read(12)
            if response <> "":
                print "raw: " + str(response)
                print "hex: " + str(response[-8:])
                print "dec: " + str(int(response[-8:], 16))
                print(response)
            time.sleep(1)
            else:

            break   #ou le mettre exactement ?

        ser.close()
        return response  #on renvoit le résultat du badge

    def getMessage():

    def ledverte():
        GPIO.output(12,GPIO.HIGH)   # sortie au niveau logique haut (3.3 V)
        time.sleep(3)               # on ne change rien pendant 3 seconde
        GPIO.output(12,GPIO.LOW)    # sortie au niveau logique bas (0 V)
    def ledorange():
        GPIO.output(13,GPIO.HIGH)   # sortie au niveau logique haut (3.3 V)
        time.sleep(3)               # on ne change rien pendant 3 seconde
        GPIO.output(13,GPIO.LOW)    # sortie au niveau logique bas (0 V)
    def ledrouge():
        GPIO.output(14,GPIO.HIGH)   # sortie au niveau logique haut (3.3 V)
        time.sleep(3)               # on ne change rien pendant 3 seconde
        GPIO.output(14,GPIO.LOW)    # sortie au niveau logique bas (0 V)
    def ledeteinte():
        GPIO.cleanup()

    def getDroitEquipement():
        DroitEquipement=1,2,3();
        return DroitEquipement



test1=Boitier()
Etat=test1.lectureRFID

if test1.getDroitEquipement()==1:
    test1.ledverte()
elif test1.getDroitEquipement()==2:
    test1.ledorange()
elif test1.getDroitEquipement()==3:
    test1.ledrouge()
else:
    test1.ledeteinte()




#test pour voir si la class à bien été importer
test = Message("Destinataire")
test.Afficher_Bonjour()
test.Afficher_Aurevoir()
test.Afficher_Concierge()
test.Afficher_prix("1 euro")
test.Declarer_incident()
test.Afficher_Credit("30")
test.Afficher_Credit("0")
