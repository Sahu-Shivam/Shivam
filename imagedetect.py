import numpy as np
import cv2
from pyimagesearch.colordescriptor import ColorDescriptor
import argparse
import glob
import csv
from pyimagesearch.searcher import Searcher

#1.  first challenge get only those images which are required to be tagged 
class ColorDescriptor:
	def __init__(self, bins):
		self.bins = bins

	def describe(self, image):
            
		image = cv2.cvtColor(image, cv2.COLOR_BGR2HSV)
		features = []

		(h, w) = image.shape[:2]
		(cX, cY) = (int(w * 0.5), int(h * 0.5))

		segments = [(0, cX, 0, cY), (cX, w, 0, cY), (cX, w, cY, h),
			(0, cX, cY, h)]

		(axesX, axesY) = (int(w * 0.75) / 2, int(h * 0.75) / 2)
		ellipMask = np.zeros(image.shape[:2], dtype = "uint8")
		cv2.ellipse(ellipMask, (cX, cY), (axesX, axesY), 0, 0, 360, 255, -1)

		for (startX, endX, startY, endY) in segments:
			
			cornerMask = np.zeros(image.shape[:2], dtype = "uint8")
			cv2.rectangle(cornerMask, (startX, startY), (endX, endY), 255, -1)
			cornerMask = cv2.subtract(cornerMask, ellipMask)

			hist = self.histogram(image, cornerMask)
			features.extend(hist)

		hist = self.histogram(image, ellipMask)
		features.extend(hist)

		return features

		segments = [(0, cX, 0, cY), (cX, w, 0, cY), (cX, w, cY, h),
			(0, cX, cY, h)]
 
		(axesX, axesY) = (int(w * 0.75) / 2, int(h * 0.75) / 2)
		ellipMask = np.zeros(image.shape[:2], dtype = "uint8")
		cv2.ellipse(ellipMask, (cX, cY), (axesX, axesY), 0, 0, 360, 255, -1)
 
		for (startX, endX, startY, endY) in segments:
			
			cornerMask = np.zeros(image.shape[:2], dtype = "uint8")
			cv2.rectangle(cornerMask, (startX, startY), (endX, endY), 255, -1)
			cornerMask = cv2.subtract(cornerMask, ellipMask)
 
			
			hist = self.histogram(image, cornerMask)
			features.extend(hist)
			
		hist = self.histogram(image, ellipMask)
		features.extend(hist)
 
		return features
	    
def histogram(self, image, mask):
		hist = cv2.calcHist([image], [0, 1, 2], mask, self.bins,
			[0, 180, 0, 256, 0, 256])
		hist = cv2.normalize(hist).flatten()
		
		return hist
#2. Then grouping similar type images wrt to its type eg - Machine (gear, motor), Motion ( cycle, car ) etc 
ap = argparse.ArgumentParser()
ap.add_argument("-d", "--dataset", required = True,
	help = "path of folder of image")
ap.add_argument("-i", "--index", required = True,
	help = "path where the new images would be stored")
args = vars(ap.parse_args())

cd = ColorDescriptor((8, 12, 3))
output = open(args["index"], "w")

for imagePath in glob.glob(args["dataset"] + "/*.png"):

	imageID = imagePath[imagePath.rfind("/") + 1:]
	image = cv2.imread(imagePath)

	features = cd.describe(image)

	features = [str(f) for f in features]
	output.write("%s,%s\n" % (imageID, ",".join(features)))

output.close()

#3.Tagging each image with its specific tag type 

class Searcher:
	def __init__(self, indexPath):
		self.indexPath = indexPath
 
	def search(self, queryFeatures, limit = 10):
		
		with open(self.indexPath) as f:
			reader = csv.reader(f)
 
			for row in reader:
				features = [float(x) for x in row[1:]]
				
				d = self.chi2_distance(features, queryFeatures)
 
				results[row[0]] = d
				f.close()
 
		results = sorted([(v, k) for (k, v) in results.items()])
 
		return results[:limit]
	def chi2_distance(self, histA, histB, eps = 1e-10):
		
		d = 0.5 * np.sum([((a - b) ** 2) / (a + b + eps)
			for (a, b) in zip(histA, histB)])

		return d
	    
ap = argparse.ArgumentParser()
ap.add_argument("-i", "--index", required = True,
	help = "path where the new images would be stored")
ap.add_argument("-q", "--query", required = True,
	help = "path of ref image")
ap.add_argument("-r", "--result-path", required = True,
	help = "path of storage of new image")
args = vars(ap.parse_args())
 

cd = ColorDescriptor((8, 12, 3))
query = cv2.imread(args["query"])
features = cd.describe(query)

searcher = Searcher(args["index"])
results = searcher.search(features)

cv2.imshow("Query", query)

for (score, resultID) in results:
	result = cv2.imread(args["result_path"] + "/" + resultID)
	cv2.imshow("Result", result)
	cv2.waitKey(0)
