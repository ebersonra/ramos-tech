from flask import Flask, send_from_directory
import os

app = Flask(__name__)

# Rota para servir arquivos estáticos
@app.route('/')
def serve_index():
    return send_from_directory('site-selavie', 'index.html')

@app.route('/<path:path>')
def serve_static(path):
    return send_from_directory('site-selavie', path)

if __name__ == '__main__':
    app.run(debug=True, port=5000) 