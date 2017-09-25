import cv2
from PIL import Image, ImageFilter
import numpy as np
from matplotlib import pyplot as plt

#---------------- Applying blur on B&W image -------------------------

im = Image.open('10000619.jpg')
im2 = im.filter(ImageFilter.GaussianBlur(5))
plt.subplot(121),plt.imshow(im),plt.title('Original')
plt.xticks([]), plt.yticks([])
plt.subplot(122),plt.imshow(im2),plt.title('Gaussian Blur')
plt.xticks([]), plt.yticks([])
plt.show()

#------------------ 2D convolution Image ----------------------------------

im = cv2.imread('10000619.jpg')

kernel = np.ones((15,15),np.float32)/225
dst = cv2.filter2D(im,-5,kernel)

plt.subplot(121),plt.imshow(im),plt.title('Original')
plt.xticks([]), plt.yticks([])
plt.subplot(122),plt.imshow(dst),plt.title('2D Convolution')
plt.xticks([]), plt.yticks([])
plt.show()

#----------------------- Averaging ------------------------------------

blur = cv2.blur(im,(10,10))
plt.subplot(121),plt.imshow(im),plt.title('Original')
plt.xticks([]), plt.yticks([])
plt.subplot(122),plt.imshow(blur),plt.title('Averaging')
plt.xticks([]), plt.yticks([])
plt.show()

#----------------------- Gaussian Filter -----------------------------

blur1 = cv2.GaussianBlur(blur,(5,5),0)
plt.subplot(121),plt.imshow(blur),plt.title('Original')
plt.xticks([]), plt.yticks([])
plt.subplot(122),plt.imshow(blur1),plt.title('Gaussian Filtered')
plt.xticks([]), plt.yticks([])
plt.show()

#----------------------- Median Filter --------------------------------

median = cv2.medianBlur(blur,5)
plt.subplot(121),plt.imshow(blur),plt.title('Original')
plt.xticks([]), plt.yticks([])
plt.subplot(122),plt.imshow(median),plt.title('Median Filtered')
plt.xticks([]), plt.yticks([])
plt.show()

#----------------------- BiLateral Filter -----------------------------

Bilateral = cv2.bilateralFilter(blur,90,75,75)
plt.subplot(121),plt.imshow(blur),plt.title('Original')
plt.xticks([]), plt.yticks([])
plt.subplot(122),plt.imshow(Bilateral),plt.title('Bilateral Filtered')
plt.xticks([]), plt.yticks([])
plt.show()
