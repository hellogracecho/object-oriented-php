# Object-oriented PHP

Ok, I've been using PHP in lots of Wordpress projects so far but have I really understood the foundation of PHP? Not really.

One of the main advantages of object-oriented programming is the ability to reduce code duplication with inheritance.

## I really wanna love you 🐘

In order to love PHP, I really need to dive deepand learn the basic foundation of PHP. Well, I never hate you anyway. 😂

[Reference](https://phpenthusiast.com/)

# Study Notes

- Classes, objects, methods and properties
- **The $this keyword**: It indicates that we use the class's own methods and properties, and allows us to have access to them within the class's scope.
- Chaining methods and properties
- Access modifiers: public vs. private and protected:
  1. `public` - accessible from outside or inside the class
  2. `private` - prevents access to a class's methods or properties from any code that is outside the class
  3. `protected` - allows code usage from both inside the class and from its child classes, but not object instances of the declared class itself!

| Modifier    | Class | Child Class | Global scope |
| ----------- | ----- | ----------- | ------------ |
| `public`    | ✅    | ✅          | ✅           |
| `protected` | ✅    | ✅          | 🚫           |
| `private`   | ✅    | 🚫          | 🚫           |

- How to access a `private` property?: create public methods of Setters & Getters
- Why do we need access modifiers?: to limit the modifications that code from outside the classes can do to the classes' methods and properties
- Magic methods and constants unveiled
  - magic method: `__construct()`
    - How to write a constructor method without risking an error?: code breaking if we don’t pass a value to the constructor - so set default property value = `0`, `""`, or even a `null` then we can have some value validation code to assign new value
  - magic constants aka [predefined constants](https://www.php.net/manual/en/language.constants.predefined.php): `__UPPERCASE__` (e.g. `__CLASS__`, `__DIR__`, `__FILE__`)
- Inheritance (child) in object-oriented PHP `extends`: Inheritance allows us to write the code only once in the parent, and then use the code in both the parent and the child classes.
  - `protected`: When we declare a property or a method as protected, we can approach it from both the parent and the child classes.
  - to prevent the child class from overriding the parent's method: use _`final`_ `pubic function Hello()...`
- `Abstract` classes and methods: To commit the child classes to certain methods: We use abstract classes and methods when we need to commit the child classes to certain methods that they inherit from the parent class but we cannot commit about the code that should be written inside the methods.
  - ❗️ once we have an abstract method in a class, the class must also be abstract.
  - ❗️ the child classes that inherit from abstract classes must add bodies to the abstract methods.
- `Interfaces` - the next level of abstraction
