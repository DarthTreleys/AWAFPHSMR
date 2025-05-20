import os
import shutil
import subprocess
from datetime import datetime

SOURCE = "/"
DEST = "/mnt"

# Crear nombre de archivo de copia de seguridad
timestamp = datetime.now().strftime('%Y-%m-%d_%H-%M-%S')
backup_base_name = os.path.join(DEST, f"backup_{timestamp}")

# Crear archivo .tar.gz (funciona en Linux y Windows)
print("Creant el punt de restauració... Això pot trigar uns minuts.")

try:
    archive_name = f"{backup_base_name}.tar.gz"
    result = subprocess.run(
        ["tar", "-czf", archive_name, "-C", SOURCE, "."],
        check=True,
        stdout=subprocess.PIPE,
        stderr=subprocess.PIPE,
        text=True
    )
    print(f"Punt de restauració creat: {os.path.abspath(archive_name)}")
except subprocess.CalledProcessError as e:
    print("Hi ha hagut un error al crear el punt de restauració.")
    print(e.stderr)


