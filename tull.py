#create an array with 9 stars
stars = []
for i in range(9):
    stars.append('*')
# print the array in a 3x3 grid
for i in range(3):
    for j in range(3):
        print(stars[3*i+j], end=' ')
    print()

while True:
    # get user input
    print('Enter a number between 1 and 9')
    turn = 1
    num = int(input())
    if num <= 1:
        turn+=1
    #replace the star with the number
    if turn % 2 == 1:
        stars[num-1] = 'X'
    else:
        stars[num-1] = 'O'
        turn += 1
    # print the array in a 3x3 grid
    for i in range(3):
        for j in range(3):
            print(stars[3*i+j], end=' ')
        print()
    if num == 0:
        break

