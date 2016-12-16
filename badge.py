#!/usr/bin/python3
# -*- coding: utf-8 -*

import serial
import requests

serial = serial.Serial("emplacement du port usb", baudrate=9600)
tag = ''

while True:
		data = serial.read()
		if data == '\r'
				tag = ''
		else:
				tag = tag + data
    

          
requests.post("adresse du serveur", data = tag) # Envoie la réponse au serveur.
          

        
time.sleep(2000)
