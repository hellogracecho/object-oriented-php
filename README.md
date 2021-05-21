# Object-oriented PHP

Ok, I've been using PHP in lots of Wordpress projects so far but have I really understood the foundation of PHP? Not really.

## I really wanna love you 🐘

It's time to go deep dive and learn the basic foundation of PHP.

[Reference](https://phpenthusiast.com/)

# What I learned

- Classes, objects, methods and properties
- **The $this keyword**: It indicates that we use the class's own methods and properties, and allows us to have access to them within the class's scope.
- Chaining methods and properties
- **Access modifiers: public vs. private**: While the public access modifier allows a code from outside or inside the class to access the class's methods and properties, the private modifier prevents access to a class's methods or properties from any code that is outside the class.
  - How to access a private property?: create public methods of Setters & Getters
  - Why do we need access modifiers?: to limit the modifications that code from outside the classes can do to the classes' methods and properties
- Magic methods and constants unveiled
  - magic method: `__construct()`
    - How to write a constructor method without risking an error?: code breaking if we don’t pass a value to the constructor - so set default property value = `0`, `""`, or even a `null` then we can have some value validation code to assign new value
  - magin constants aka [predefined constants](https://www.php.net/manual/en/language.constants.predefined.php): `__UPPERCASE__` e.g. `__CLASS__`, `__DIR__`, `__FILE__`
- Inheritance in object-oriented PHP
