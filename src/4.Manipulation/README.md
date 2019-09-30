# String Manipulation

## Introduction

In PHP, in JS, in C#, in basically almost any language you are going to alter variables... A LOT!
So mastering the basic functions will help you a lot along the way in other languages, since the similarities are often very big. Example:

| Function explanation                             | PHP                       | JS                             |
| -------------------------------------------------| ------------------------- | ------------------------------ |
| Replace a substring of a string with another one | `replace("", "", $var)`   | `$var.replace("","")`          |
| Push a new item to an array                      | `array_push()`            | `$arr.push()`                  |
| Get a substring from a string                    | `substr($start, $length)` | `$var.substr($start, $length)` |
| ....                                             | `...`                     | `...`                          |


## Exercise Explanation

There are far too many functions that will do far too many things to a string alone.
[Here](https://www.php.net/manual/en/ref.strings.php) is a list (for example) that shows string manipulation functions in PHP.

There are a LOT, though no worries, since you will use them every so often, you should be able to know all of them over time without making too much effort into studying them.


## Exercise

- Create a `nickname.php`, on it create a form, with the title `Cool NickName Generator`
- This form should have one text input and a button, which can only be pressed if more than one character is filled into the field
- When you fill in the field and submit the form, take the filled in username and go through a series of steps dictated below:
	- Turn the name around
	- Capitalize it
	- Turn the name back around
	- Add `--` to the front and back of the name
	- Add `x` to the front of the name
	- Add two to four random characters (A-Z, a-z, 0-9) in front of the name
	- Wrap those random characters with blocked parentheses `[]`
	- Capitalize one more random character in the name (if the character is already capitalized, it should be de-capitalized)



## Bonus objective

- Give the nickname a gradient by wrapping each letter in a span with a different color style attribute to it


# Object / Array Manipulation

## Introduction

Just like string manipulation, the same goes for all other types of variables, from learning how you can interact with objects, to arrays, to classes, all of these need to feel like a soccer ball with which you can juggle all day long. 




## Instructions

- Create an array, an associative array and an object in `home.php`.
- What are the differences between an array, an associative array and an object? (**\***)
- Write a for-loop that adds an item to all of the above.
- Write an if-statement that has a 20% chance to edit a random item of one of the above.
- Put this if statement in a loop so every array/object has a random chance of having a random item changed
- Divide the array in half (if uneven items half-1, unless half-1 makes it empty)
- Remove the last item of the associative array
- Add the arrays to the object as `arr1` and `arr2`
- Loop through the associative array adding all items to the object as `key => value`
- Save the object in the `$_COOKIE` superglobal
- Find a way to print this final object on the homepage, in an easily readable way


> \* Write this down somewhere in the main repo's readme or in the exercise's readme


# Class manipulation

## Introduction

Class manipulation is something we are going to hold off of, until we reach the actual class chapter.
This is too big to get into now, so forget about it for now ;)
