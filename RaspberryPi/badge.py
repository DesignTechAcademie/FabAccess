#!/usr/bin/python3
# -*- coding: utf-8 -*

import serial
import requests

serial = serial.Serial("emplacement du port usb", baudrate=9600) #on initialise serial sur l'emplacement de la carte RFID
tag = ''   #le tag est initialiser à vide

while True:                            #tant qu'une carte est detecter on recupere le tag rfid
		data = serial.read()
		if data == '\r'
				tag = ''
		else:
				tag = tag + data
    

          
requests.post("adresse du serveur", data = tag) # Envoie la réponse au serveur.   #quand la boucle est faite on envoie le tag au serveur
          

        
time.sleep(2000) #2 seconde entre deux badgage.
