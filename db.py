import fdb
import math

fdb.api_version(200)

db = fdb.open()

# Returns all keys in the database
def getall(tr):
	X = tr['AAA':'ZZZ']
	return X

# Add a person into the database, along with their coordinates
def put(tr, key, lat, lon):
	tr[key] = str(lat) + "," + str(lon)

# Retrieve an individual person
def get(tr, key):
	return tr[key]

# Remove a person from the database
def delete(tr, key):
	del tr[key]
	return tr

# Return Earth distance from one coordinate to another
def getdistance(tr, key1, key2):
	if key1 != key2:
		first = tr[key1]
		firstcoor = first.split(',')
		x1, y1 = float(firstcoor[0]), float(firstcoor[1])

		second = tr[key2]
		secondcoor = second.split(',')
		x2, y2 = float(secondcoor[0]), float(secondcoor[1])

		R = 6371
  		dLat = (x2 - x1) * math.pi / 180
  		dLon = (y2 - y1) * math.pi / 180
  		a = math.sin(dLat / 2) * math.sin(dLat / 2) + math.cos(x1 * math.pi / 180) * math.cos(x2 * math.pi / 180) * math.sin(dLon / 2) * math.sin(dLon / 2)
  		c = 2 * math.atan2(math.sqrt(a), math.sqrt(1 - a))
  		return R * c;
  	elif key1 == key2:
  		return 0
  	else:
  		return 0

# Return a list of people within the vip's distance_limit
def getpeopleinradius(tr, vip, distance_limit):
	mylist = getall(tr)
	inradius = []
	for key, value in mylist:
		if vip != key:
			distance = getdistance(tr, vip, key)
			if distance <= distance_limit:
				inradius.append(key)
	return inradius

# Test cases
put(db, "Alice", 37.865, -122.261)
put(db, "Bob", 37.861, -122.260)
put(db, "Clyde", 37.863, -122.265)
put(db, "Dawny", 37.869, -122.250)
getdistance(db, "Alice", "Bob")
print(getpeopleinradius(db, "Alice", 10))



