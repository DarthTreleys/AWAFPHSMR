import os

directori = "/tmp"


for archivo in os.listdir(directori):
    ruta = os.path.join(directori, archivo)
    if os.path.isfile(ruta) and (archivo.endswith(".tmp") or archivo.endswith(".log")):
        try:
            os.remove(ruta)
            print("Eliminado:", archivo)
        except Exception as e:
            print(f"No se pudo eliminar {archivo}: {e}")
