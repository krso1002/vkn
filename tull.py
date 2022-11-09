"""
#print what time it is
import time
print("Klokka er: ")
print (time.strftime("%H:%M:%S"))

#calculate the time until work is over
import datetime
now = datetime.datetime.now()
end = datetime.datetime(2022, 11, 7, 15, 50, 00)
diff = end - now
print("Tid til arbeidsdagen er over: ")
print (diff)


import random
randnum = random.randint(1,100)

#ask for a number
guess = int(input("Gjett et tall mellom 1 og 100: "))

#check if the number is higher or lower than the random number
while guess != randnum:
    if guess > randnum:
        print("Tallet er lavere")
        guess = int(input("Gjett et tall mellom 1 og 100: "))
    elif guess < randnum:
        print("Tallet er høyere")
        guess = int(input("Gjett et tall mellom 1 og 100: "))
    else:
        print("Du gjettet riktig!")
        break
"""


from tkinter import *

root = Tk()
root.title("Tull")
root.geometry("300x300")
canvas = Canvas(root, width=300, height=300, bg="white")


#when mouse is clicked draw a circle
def click(event):
    x = event.x
    y = event.y
    print("x: ", x, "y: ", y)
    canvas.create_oval(x-5, y-5, x+5, y+5, fill="black")


canvas.bind("<Button-1>", click)

#display the window
canvas.pack()
root.mainloop()

