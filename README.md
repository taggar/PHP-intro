# PHP-Intro

## Introduction

So just like Javascript, php is first and foremost also a scripting language.
This means a lot of the functionality will be similar, as well as a lot of it being extremely different, confused yet?


Let's talk about some of the core features of PHP:

1. Where JS has the DOM, PHP has the server
1. PHP Can communicate through the server to a Database (don't know what a database is? Look it up :) )
1. PHP Runs before the page is loaded visually (this means you can use PHP for the prepatory work for your page as well)
1. Your PHP code (even if it is in your file with the HTML code) can not be seen by the browser / user.


## Usage

**So how do we use PHP ?**
First of all, we start with creating a file, just like we would for HTML. This time though, give it the extension `.php`.
A `.php` file is basically a HTML file that will first look for **ANY** PHP code inside of it

So how does it work (chronologically):

1. Server gets a request for a page
1. Server looks for the file
1. Server sees file (`index.php`) and reads it
1. Any PHP Code in that file, the server will execute **FIRST**
1. The result from the **executed** PHP code combined with the HTML code in the file will be sent to the browser
1. This means no actual PHP Code is left in the file when sending to the browser
1. The browser reads it like regular HTML and shows it to the user

This is very important to understand because PHP runs backend, this all means that it's much more secure and safe from the hands of the user.

Next up is the simple but essential question: How do I write PHP.
Easy, we already created a `.php` file, now in that PHP File, write `<?php` and `?>` anything in between those two tags will be seen by the server as PHP code.
You can use multiple lines in one block with these tags as well by the way.

One final thing before we start though, when writing php code at the start of a php file, we tend to start the `<?php` tag before any characters / spaces at the very very start of the file. Look up why we do this! ;)

## Final Setup

I advise you, to create a repo called `PHP-Intro` (or something like it), where you can push all the exercise in subfolders.
This way you don't need to create a repo for every small exercise in the PHP intro section.
You can duplicate the folders of this repository and put your solution files in every exercise's `0.Working-Files` directory.

## Get Started

To get started follow this learning path:

1. [PHP Global supervariables](src/1.Global-Supervariables)
1. [Loops in and out PHP](src/2.Loops)
1. Read about [debugging](src/3.Debugging)
1. [Manipulation](src/4.Manipulation)
1. [Functions](src/5.Functions)
1. [Conditions](src/6.Conditions)
1. [Classes](src/7.Classes)
