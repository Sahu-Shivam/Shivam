import speech_recognition as sr
from time import ctime
import time
import os
from gtts import gTTS
from google import search
 
def speak(audioString):
    print(audioString)
    tts = gTTS(text=audioString, lang='en')

def recordAudio():
    r = sr.Recognizer()
    with sr.Microphone() as source:
        print("Say something!")
        audio = r.listen(source)

    data = ""
    try:
        
        data = r.recognize_google(audio)
        print("You said: " + data)
    except sr.UnknownValueError:
        print("Speech Recognition could not understand audio")
    except sr.RequestError as e:
        print("Could not request results from Speech Recognition service; {0}".format(e))
 
    return data
 
def myspeech(data):
    if "hey speech" in data:
        speak("Hello Master! How are you?")        

    if "i am fine" in data:
        speak("Good to see that :)")
        
    if "how are you" in data:
        speak("I am fine")
        
    if "what time is it" in data:
        speak(ctime())
 
    if "where is" in data:
        data = data.split(" ")
        location = data[2]
        speak("Hold on Shivam, I will show you where " + location + " is.")
        os.system("https://www.google.nl/maps/place/" + location + "/&amp;")
        
    if "search for" in data:
        data = data.split(" ")
        searchdata = data[2]
        speak("Ok Shivam, I'm Searching " + searchdata + " for you.")
        for j in search(searchdata, tld='com', lang='en', num=10, start=0, stop=2, pause=2.0):
            print(j)

time.sleep(2)
speak("Hi Shivam, what can I do for you?")
while 1:
    data = recordAudio()
    myspeech(data)
