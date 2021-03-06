# Object-oriented PHP

Ok, I've been using PHP in lots of Wordpress projects so far but have I really understood the foundation of PHP? Not really.

One of the main advantages of object-oriented programming is the ability to reduce code duplication with inheritance.

## I really wanna love you π

In order to love PHP, I really need to dive deepand learn the basic foundation of PHP. Well, I never hate you anyway. π

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
| `public`    | β    | β          | β           |
| `protected` | β    | β          | π«           |
| `private`   | β    | π«          | π«           |

- How to access a `private` property?: create public methods of Setters & Getters
- Why do we need access modifiers?: to limit the modifications that code from outside the classes can do to the classes' methods and properties
- Magic methods and constants unveiled
  - magic method: `__construct()`
    - How to write a constructor method without risking an error?: code breaking if we donβt pass a value to the constructor - so set default property value = `0`, `""`, or even a `null` then we can have some value validation code to assign new value
  - magic constants aka [predefined constants](https://www.php.net/manual/en/language.constants.predefined.php): `__UPPERCASE__` (e.g. `__CLASS__`, `__DIR__`, `__FILE__`)
- Inheritance (child) in object-oriented PHP `extends`: Inheritance allows us to write the code only once in the parent, and then use the code in both the parent and the child classes.
  - `protected`: When we declare a property or a method as protected, we can approach it from both the parent and the child classes.
  - to prevent the child class from overriding the parent's method: use _`final`_ `pubic function Hello()...`

#

- `Abstract` classes and methods: To commit the child classes to certain methods: We use abstract classes and methods when we need to commit the child classes to certain methods that they inherit from the parent class but we cannot commit about the code that should be written inside the methods.
  - βοΈ once we have an abstract method in a class, the class must also be abstract.
  - βοΈ the child classes that inherit from abstract classes must add bodies to the abstract methods.
- `Interfaces` - the next level of abstraction: An interface commits its child classes to abstract methods that they should implement.
  - The classes that implement the interfaces **must** define all the methods that they inherit from the interfaces, including all the parameters.
- What are the difference between `abstract` classes and `interfaces`?

|                   | `interface`                                        | `abstract`                                                           |
| ----------------- | -------------------------------------------------- | -------------------------------------------------------------------- |
| the code          | abstract methods / constants                       | abstract methods / constants / concrete methods / concrete variables |
| access modifiers  | public                                             | public / protected                                                   |
| number of parents | The same class can implement more than 1 interface | The child class can inherit only from 1 abstract class               |
|                   |

- Polymorphism _(many forms in Greek)_ in PHP: According to the Polymorphism principles methods that serve the **same** functionality in different classes should have the **same** name. In order to implement the polymorphism principle, we can choose between `abstract` classes and `interfaces`.
- Type hinting: restrict functions and methods to use only **arrays** or **objects** that were created from a certain class.

### Tutorial: Value Objects and Mutability

Create a tyle class
