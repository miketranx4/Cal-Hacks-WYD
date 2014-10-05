from flask import Flask, request, jsonify
import db as backend
import pdb

# For environment variables
from os import getenv

app = Flask(__name__)
app.debug = True

@app.route("/")
def hello():
    return app.send_static_file('index.html')

@app.route("/getall")
def getall():
    return jsonify(result=backend.getall(backend.db))

@app.route("/get/<key>")
def get(key):
    return jsonify(result=backend.get(backend.db,key))

@app.route("/delete/<key>")
def delete(key):
    return jsonify(result=backend.delete(backend.db, key))

@app.route("/getdistance")
def getdistance():
    key1 = request.args.get('key1')
    key2 = request.args.get('key2')
    return jsonify(result=backend.getdistance(backend.db, key1, key2))

@app.route("/put", methods=['POST'])
def put():
  name = request.form['name']
  lat = request.form['lat']
  lon = request.form['lon']
  backend.put(backend.db, name, lat, lon)
  pdb.set_trace()
  return jsonify(result=backend.get(backend.db, name)[0])

@app.route("/getpeopleinradius")
def getpeopleinradius():
    try: 
       vip = request.args.get('vip')
    except Exception, e:
       return "User not Found!"
    distance_limit = request.args.get('distance_limit')
    if distance_limit <= 0:
        distance_limit = 0
    res = backend.getpeopleinradius(backend.db, str(vip), str(distance_limit))
    #pdb.set_trace()
    return jsonify(result=res)


if __name__ == "__main__":
    app.run(port=(int(getenv('SERVER_PORT')) or 5000), host='0.0.0.0')
