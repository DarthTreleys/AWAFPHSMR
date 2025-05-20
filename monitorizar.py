import datetime
import subprocess
import os

log_file = "/var/log/sys_monitor.log"

now = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")
cpu = psutil.cpu_percent(interval=1)
ram = psutil.virtual_memory()
disk = psutil.disk_usage('/')

log = (
    f"[{now}]\n"
    f"CPU: {cpu:.1f}%\n"
    f"RAM: {ram.percent:.1f}% ({ram.used // (1024**2)}MB / {ram.total // (1024**2)}MB)\n"
    f"DISK: {disk.percent:.1f}% ({disk.used // (1024**3)}GB / {disk.total // (1024**3)}GB)\n"
    "---------------------------\n"
)

# Escribir directamente en el archivo
with open(log_file, "a") as f:
    f.write(log)

print("Monitorització completada! Comprova el fitxer en la direcció")

