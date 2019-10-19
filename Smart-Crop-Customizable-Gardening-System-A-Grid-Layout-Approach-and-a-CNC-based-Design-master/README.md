# Smart-Crop-Customizable-Gardening-System-A-Grid-Layout-Approach-and-a-CNC-based-Design
Major project developed by Rohit Mucherla, Naga abhilash reddy, Thakur Rishabh Singh and myself (Katakam Ram Gopal Srikar)

Abstract:The ever-increasing population demands a higher yield of crops from the farmers. But the current yield rate might not be sufficient in the future and the quality of it may be compromised as well. However, this can be prevented if every household produces their own limited range of crops. Thus, we have written a paper which proposes an automated gardening system, which enables the user to produce a wide range of crops in a grid fashion, which is cost-effective and energy-efficient with minimum human interaction. The system consists of 3 axes controlled by Nema 17 stepper motors which helps it to navigate to each grid location to plant seeds, check moisture and water the crops. The type of seed to be planted at a particular grid location is determined by the user through an android mobile app which also allows the user to check the various parameters recorded by the sensors which are stored on the database. The seed planting is done using linear actuator mechanism, seed selection is achieved using servo motor and the watering of plants is controlled by relay and dc water pump. The Arduino mega serves as the controller to coordinate all the functions and real time clock module is used to enable automatic and regular watering of plants. The system has been implemented and tested for a 5x2 grid and the results are discussed in our paper.

My contribution:
 Developed server-client based communication system for storing and access all the data collected from the system.
 Designed functions to help the bot navigate on a 5x2 grid and plant the appropriate seeds (seeding_start(int loc[])) with
the help of a servo based mechanism (plantSeed(int loc1)) 
 Developed app interface for access of data from server runnning on a local address.
 Developed Arduino Code for running ESP-8263 wifi model for transmitting data collected from the micro-controller.

This repository has the code which we implemented for the project.

Credits:
Naga abhilash reddy - for developing the android app Cultivating_bot.apk in MIT App Inventor and designing the mechanical structure and programming the steppers.
Thakur Rishabh Singh - for developing RTC, MOTORS.