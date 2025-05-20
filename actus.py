import subprocess
import os
import platform


print("Actualizando lista de paquetes...")
subprocess.run(["sudo", "apt", "update"], check=True)

print("Instalando actualizaciones disponibles...")
subprocess.run(["sudo", "apt", "upgrade", "-y"], check=True)

print("Limpieza de paquetes innecesarios...")
subprocess.run(["sudo", "apt", "autoremove", "-y"], check=True)

print("Actualización completada con éxito.")

