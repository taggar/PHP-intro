No exercises here - just reading ... 

# PHP: Conditions

## Introduction
Conditions are something we use to make the code decide what to execute/ what to run.
From a simple `if` statement to the more advanced `switch` statement, knowing when to use which condition, 
can save you a lot of writing work. 

Look up the different conditional statements that exist for PHP and make sure you understand how to work with them.
For now let's look at the most important one: `if` and everything that surrounds it.


## Operators
Comparing values ​​is a very important part of programming. It makes it possible to make decisions in your code.

* `==`: equal to
* `!=`: different from
* `>`: greater than
* `<`: less than
* `>=`: greater than or equal to
* `<=`: less than or equal to


## Combining conditions
You can combine conditions with the key words AND and OR.

```PHP
if ($age <= 12 AND $language == "English") {
  .....
}
```



## Nesting conditions
You can nest conditions.

```PHP
if ($gender == "female") {

  if ($age <25) {
    ...
  } else {
    ...
  }

} else {
  ...
}
```

## Instructions

I chose not to write an exercise for this chapter, this is fairly simple and too little to write an exercise on.
Please use the statements in different exercises and familiarize yourself with them a little bit more.

```php
if ($you_understand == true) {
    next_chapter();
}
else {
    start_over();
}
```

Back to main [Readme](../)