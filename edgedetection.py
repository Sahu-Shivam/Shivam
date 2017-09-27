import cv2
from PIL import Image
import os
import numpy as np

filename = '10000616.jpg'  
img = cv2.imread(filename)  
gray = cv2.cvtColor(img,cv2.COLOR_BGR2GRAY)

gray = np.float32(gray)  
dst = cv2.cornerHarris(gray,2,3,0.04)
dst = cv2.dilate(dst,None)

img[dst>0.01*dst.max()]=[0,0,255]

cv2.imshow('dst',img)  
#----------------Threshold----------------------
import cv2
import numpy as np
from matplotlib import pyplot as plt
from PIL import Image
 
img = cv2.imread('tattoo-art-how-draw-tattoos-sell-40235.jpg',0)
im = Image.open('tattoo-art-how-draw-tattoos-sell-40235.jpg')
im.show()
size = np.size(img)
skel = np.zeros(img.shape,np.uint8)
 
ret,img = cv2.threshold(img,127,255,0)
element = cv2.getStructuringElement(cv2.MORPH_CROSS,(3,3))
done = False
 
while( not done):
    eroded = cv2.erode(img,element)
    temp = cv2.dilate(eroded,element)
    temp = cv2.subtract(img,temp)
    skel = cv2.bitwise_or(skel,temp)
    img = eroded.copy()
 
    zeros = size - cv2.countNonZero(img)
    if zeros==size:
        done = True
 
cv2.imshow("skel",skel)
cv2.waitKey(0)
cv2.destroyAllWindows()
#---------------sobel & laplacian--------------
import cv2
import numpy as np
from matplotlib import pyplot as plt

img = cv2.imread('Capture.png',0)

laplacian = cv2.Laplacian(img,cv2.CV_64F)
sobelx = cv2.Sobel(img,cv2.CV_64F,1,0,ksize=5)
sobely = cv2.Sobel(img,cv2.CV_64F,0,1,ksize=5)

plt.subplot(2,2,1),plt.imshow(img,cmap = 'gray')
plt.title('Original'), plt.xticks([]), plt.yticks([])
plt.subplot(2,2,2),plt.imshow(laplacian,cmap = 'gray')
plt.title('Laplacian'), plt.xticks([]), plt.yticks([])
plt.subplot(2,2,3),plt.imshow(sobelx,cmap = 'gray')
plt.title('Sobel X'), plt.xticks([]), plt.yticks([])
plt.subplot(2,2,4),plt.imshow(sobely,cmap = 'gray')
plt.title('Sobel Y'), plt.xticks([]), plt.yticks([])

plt.show()
#-----------------canny------------------------------
import cv2
import numpy as np
from matplotlib import pyplot as plt

img = cv2.imread('11060047_889915194388993_7866362015757758570_n.jpg',0)
edges = cv2.Canny(img,100,200)

plt.subplot(121),plt.imshow(img)
plt.title('Original Image'), plt.xticks([]), plt.yticks([])
plt.subplot(122),plt.imshow(edges)
plt.title('Edge Image'), plt.xticks([]), plt.yticks([])

plt.show()
