import os
import platform
import sys

directori = "/home"

for arxiu in os.listdir(directori):
    ruta = os.path.join(directori, arxiu)
    if os.path.isfile(ruta):
        extension = arxiu.split('.')[-1] 
        if extension == "png":
            os.system("mv" +ruta+ " ~/Pictures")
            print("Fitxer "+ruta+" Mogut a Pictures")
        if extension == "mp4":
            os.system("mv " +ruta+ " ~/Videos")
            print("Fitxer " +ruta+ " Mogut a Videos")
        if extension == "mp3":
            os.system("mv " +ruta+ " ~/Music")
            print("Fitxer "+ruta+" Mogut a Music")
    else:
       print("No tens pngs, mp3s o mp4s en el directori")

