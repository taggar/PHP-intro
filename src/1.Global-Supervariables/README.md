# Global supervariables

## Introduction

Welcome to the section about Global Supervariables.
If this sounds like the avengers of the variables, then you're right!

## What is this?

Global supervariables are variables that PHP instantiates itself and makes available to you, the user at all times.
There are a lot of them:

1. $_SERVER
1. $_REQUEST
1. $_POST
1. $_GET
1. $_FILES
1. $_ENV
1. $_COOKIE
1. $_SESSION


Look each and every one of them up.
Know what they are, what they do.

## Exercise

1. Create a file `setup.php`
1. Create a file `result.php`
1. Use `$_POST` and `$_GET` to send data* from `setup.php` to `result.php`
1. On `result.php` show this data* to the user:
	- Show what data is in which variable
	- Make it look decent (use css) -> Don't spend too much time either !


> * The data that needs to be sent, for `$_POST`: top 5 tv shows, top 5 movies, for `$_GET`: Favourite country, worst movie ever seen
> Data for any bonus objectives can be anything you want (maybe stick with the theme ;) )

## Bonus objectives

1. Use as many of the superglobal variables as you can
1. Put each variable's values in a tab (bootstrap tabs for example) on the result page
1. Loop through the data and post it in a table (as key => value)


## Super bonus objectives 

1. Save all data from each variable into an object with the variable name as object name and its keys => values as properties
1. Save all objects into a larger object called `data_object`
1. Save this `data_object` into the `$_SESSION`
1. Create a third page called `superdata.php` on which you display the `data_object` as an indented list of keys => values of the properties and child objects

