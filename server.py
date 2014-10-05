from flask import Flask
from os import getenv
app = Flask(__name__)

@app.route("/")
def hello():
    return "Hello World!"

if __name__ == "__main__":
    app.run(port=(int(getenv('SERVER_PORT')) or 5000), host='0.0.0.0')
