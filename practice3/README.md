## Project: Library Management System

    1 - Define a base class called "Item" with the following properties:
        - Title
        - Author
        - Publication Year
        - Status (whether the item is available or borrowed)

    2 - Create a constructor (__construct) in the "Item" class that accepts the title, author, and publication year as parameters and initializes the properties.

    3 - Implement two derived classes, "Book" and "DVD," which inherit from the "Item" class.

    4 - Add additional properties specific to each derived class:
        - For the "Book" class: Number of Pages
        - For the "DVD" class: Duration (in minutes)

    5 - Implement the displayDetails() method in each derived class to display the details of the respective item, including the inherited properties from the "Item" class.

    6 - Instantiate multiple objects of both the "Book" and "DVD" classes, set their properties using the constructor, and display their details using the displayDetails() method.