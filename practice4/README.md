## Project: Vehicle Rental System

    1 - Define a base class called "Vehicle" with the following properties:
        - Brand
        - Color

    2 - Create a constructor in the "Vehicle" class to initialize the brand and color of the vehicle.

    3 - Implement the following methods in the "Vehicle" class:
        - honk(): This method should output a generic honking sound.

    4 - Create two derived classes from the "Vehicle" class: "Car" and "Motorcycle".

    5 - Add additional properties to the derived classes based on their specific characteristics. For example:
        - Car: Number of doors, seating capacity
        - Motorcycle: Engine displacement, maximum speed

    6 - Implement constructors in the derived classes to initialize their specific properties. Make use of the parent class constructor to initialize the brand and color.

    7 - Implement any additional methods specific to each derived class. For example:
        - Car: openRoof(), accelerate()
        - Motorcycle: wheelie(), startEngine()

    8 - Create objects of the "Car" and "Motorcycle" classes, set their properties, and invoke their methods to showcase their functionalities.

    9 - Display the details of each vehicle, including the brand, color, and any additional properties.

    10 - Test the honk() method of both classes to ensure they produce different sounds.

    11 - Explore polymorphism by creating an array of "Vehicle" objects and calling the displayDetails() method for each vehicle.