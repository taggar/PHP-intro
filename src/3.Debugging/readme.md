No exercises here, just reading material.

# Debugging

## Introduction

Debugging, this is a subject we haven't touched in JS. Why? Because the console did it for you mostly.
That being said there are some language-independant tips you should know and then some language-specific tips, which here, will be PHP oriented of course.

Let's start with the general tips :)

> I made this short but to the point, so take your time reading and understanding this, I chose not to give an exercise, since the following ones will all test your debugging skills anyway.

## Language independant tips

1. Read first!

This is the most important one, **NEVER** assume anything, read your code like the computer does.
Read **EVERY** line, in the order it should be read and then think what should happen / actually happens.

Think like a computer whilst doing this, for example if an `if` statement is present, then actually read whether it will happen or not and take that information into account.


2. Now we start debugging

So we know what **needs** to happen, next step is what **happens**. 
Print as many variables as you can. 


3. Make it comfortable for yourself

When debugging, one of the more important tips is to make the debugging comfortable for yourself.
In js, when you're in a function debugging, instead of printing the result of this function, why not print a message saying "Hi I am in function: -FUNCTION NAME-". That way you at least know that your program is running through that function. Then you can print variables and function results, but don't forget to explain to yourself where you are at in your code at all times of debugging.


## PHP-Oriented debugging

1. die()

`die()` makes the php code execute whatever is still between the parentheses and stop continuing to execute any code. This means that if after a certain line of code you will `header('Location: /')`, then using a `die()` will prevent that from happening. At the same time you can stop commenting code all the time.


2. print_r()

`print_r()` helps you print out any and all variables (and all variable types) in a readable way.
**Pro Tip:** if you use the browser to inspect the `print_r()` result, it will show it in a much more structured version, when it's an object/class/array/...


3. ini_set()

PHP has a lot of settings, most of them are stored in your php folder in the `php.ini` file.
These settings can be changed using the function `ini_set()`, or they can be set straight in the `php.ini` file.
**Pro Tip:** usually the `key` that you pass to the `ini_set()` function is the same as the actual setting in the `php.ini` file, so you can find them easily that way if you research online.

