from flask import Flask, request

# For environment variables
from os import getenv

app = Flask(__name__)
app.debug = True

@app.route("/")
def hello():
    return app.send_static_file('index.html')

if __name__ == "__main__":
    app.run(port=(int(getenv('SERVER_PORT')) or 5000), host='0.0.0.0')
