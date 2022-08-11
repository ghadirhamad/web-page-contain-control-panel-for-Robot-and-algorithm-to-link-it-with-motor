# web-page-contain-control-panel-for-Rpbot-and-algorithm-to-link-it-with-motor
# In this project I used HTML and PHP code to done this task

### First to handle with PHP you must Download Xampp server from this link:
## https://www.apachefriends.org/download.html 
## After setup you should click on start Apache and MySql Xampp
![Xampp](https://user-images.githubusercontent.com/108132445/184069003-7fa1d377-de8b-4910-8ab9-be7ae5efcfb3.PNG)

### Then you wil save your project in this path C:\xampp\htdocs To open you HTML page you should go to browser then write: http://localhost/index.html

### In index.html file I put form tag to send data to php page with get method the form contain multiple buttons refer to dirctions of robot and stop button 
### In controll.php I create connection to MySQL then Create Database Then Create table contain one column to insert char values then I write insert statment and I use if statement to check which button was clicked to save value of button in database and print it in php page
## HTML page:
![2](https://user-images.githubusercontent.com/108132445/184068101-b53974ba-6229-47c0-8f24-b799f3df3528.PNG)
## PHP page if I click forward:
![f](https://user-images.githubusercontent.com/108132445/184068153-561843dc-17c7-49d6-86be-13c708bc139f.PNG)
## PHP page if I click Backward:
![b](https://user-images.githubusercontent.com/108132445/184068181-a6096a72-025c-42f3-a5d1-d5a501b7c520.PNG)
## PHP page if I click Right:
![r](https://user-images.githubusercontent.com/108132445/184068232-1b4a7900-105d-4cf3-afb1-046458af2b4d.PNG)
## PHP page if I click Left:
![l](https://user-images.githubusercontent.com/108132445/184068274-8ec0f283-a805-47a3-95b1-08575ad2e170.PNG)
## PHP page if I click Stop:
![s](https://user-images.githubusercontent.com/108132445/184068313-d1989104-5b50-44c6-9cdb-7871d22df0b1.PNG)

## to see your history of clicked buttons you will click on MYSQL > Admin in xampp srever then you will choose your DB then your table:
![1](https://user-images.githubusercontent.com/108132445/184068437-6731a4a5-ae1c-410b-b8c3-c637a5a278df.PNG)

