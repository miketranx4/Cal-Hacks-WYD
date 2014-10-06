import fdb
import pdb
import math

fdb.api_version(200)

db = fdb.open()

# Returns all keys in the database
def getall(tr):
    X = tr['AAA':'ZZZ']
    return X

# Add a person into the database, along with their coordinates
def put(tr, key, lat, lon):
    tr[str(key)] = str(lat) + "," + str(lon)

# Retrieve an individual person
def get(tr, key):	
    val = tr[str(key)]

    #pdb.set_trace() 
    if val == None:
        raise Exception("User not found!")
    return val

# Remove a person from the database
def delete(tr, key):
    del tr[str(key)]
    return tr

# Return Earth distance from one coordinate to another
def getdistance(tr, key1, key2):
    if key1 != key2:
	first = get(tr, key1)
	firstcoor = first.split(',')
	x1, y1 = float(firstcoor[0]), float(firstcoor[1])

	second = get(tr, key2)
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
		if str(vip) != str(key):
                    try:
			distance = getdistance(tr, str(vip), str(key))
			if distance <= distance_limit:
				inradius.append(key)
                    except Exception as e:
                        print "Failed to fetch %s" % (key)
	return inradius




