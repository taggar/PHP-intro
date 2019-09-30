# Functions

## Introduction

We already talked about functions in JS and PHP is pretty much the same, especially when it comes to syntax.
Though one of the things that you should try in PHP is using separate files for functions. Let's learn to work decently with `include()` and `require()` while we're at it.


## Instructions

- Create a `home.php` file
- Create a `functions.php` file
- Create a `security.php` file
- On your home.php create three boxes (next to each other, but bordered off) and give all of them one button:
	- Generate object
	- Revert object
	- Get a nickname (Give this box also an input field to type the nickname)
- Require `security.php` in your `home.php` file
- Include `functions.php` in your `home.php` file
- In your functions.php, create three functions:
	- `nickname_generate()`, ask for the parameter nickname in it, and use this parameter to do what you did in the string manipulation exercise
	- `object_generate()`, this does not take any parameters, but returns the object
	- `object_revert()`, this function should either take the object from the previous function (`object_generate()`) if it's passed to it as a parameter or create the object at the start if it wasn't passed
	- It should then do the following:
		- it takes both halves of the original array out of the object and combines them back into one array
		- it takes all the properties that the associative array gave to the object and puts them back into the associative arrays
		- make sure that all the things you just put back into their original forms, you also remove from the object
		- it prints out an easy-to-read version of all items on the page
- In `security.php`, write an HTML form that asks the user whether they are a bot from the future coming to exterminate the human race and are just here for a cool nickname
- If they answer yes, just give them back a nickname from the nickname generate function
- If they answer no, and only then, they can see the `home.php` page, so the user is not to see the `home.php` page until they answered no on this form.
