import http.server
import socketserver
import os

# Configura el directorio donde se encuentra el archivo HTML
directory = r"C:\Users\Administrator\Desktop\CODIGOS\FISHING\index"

# Configura el puerto en el que se ejecutará el servidor
port = 8000

# Cambia al directorio del script para asegurarte de que encuentra el archivo HTML
os.chdir(directory)

# Crea un manejador para el servidor
handler = http.server.SimpleHTTPRequestHandler

# Configura el servidor en el puerto especificado
with socketserver.TCPServer(("", port), handler) as httpd:
    print(f"Servidor iniciado en el puerto {port}")
    print(f"Accede a http://localhost:{port} en tu navegador para ver la página.")
    httpd.serve_forever()
