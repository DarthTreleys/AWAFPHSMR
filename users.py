import sys
import subprocess

usuari = sys.argv[1]
passwd = sys.argv[2]

try:
    subprocess.run(["sudo", "useradd", "-m", usuari], check=True)
    subprocess.run(["chpasswd"], input=f"{usuari}:{passwd}".encode(), check=True)
    print(f"✅ Usuario '{usuari}' creado exitosamente.")
except subprocess.CalledProcessError as e:
    print(f"❌ Error al crear el usuario: {e}")
