
Notification

This repository contains the source code for the FISAT News Notification Android app. This application receives notifications of fisat news from its offical website(http://fisat.ac.in/). The even.py file is used to extract datas from http://fisat.ac.in/index.php and sends it to notification.php. The notification.php sends notifications to android application.

Getting Started

Follow these instructions to build and run the project 

1.Clone this repository.

2.Install Python.

3.Install Php5.

4.Install php5-curl.

5.Install Android Studio.

6.Copy the notifications.php into localhost.

7.Import the project. Open Android Studio, click Open an existing Android Studio project and select the project. Gradle will build the project.

8.Replace google-service.json with yours from firebase website.

9.Run the android project.

10.Copy the refreshed token obtained from log into .php page.

11.Copy the Server key from Firebase console to notifications.php.

12.Change the IP address in even.py to your localhost.

13.Execute even.py file using python.

