# Loops in and out PHP

## Introduction

In PHP we can use loops in different ways, either:

1. To loop through PHP Code
1. To loop through HTML Code



## Through PHP Code

This one is easy, remember JS loops, well some syntax changes later, you'll be writing them in PHP!

```
<?php

foreach($array as $arr) {
	// Loop through an object, array, ...
}

?>
```

- Find out the syntax of the following loops as well: `for, while`.
- Did you know you can do the same with `if`?

## Through HTML Code

Let's say we have an array of arrays with tv shows and ratings (x out of 5) in them (confused? see the array below), 
and we want to create a table where every row is an item in this array.

We don't want to start saving strings of html code, appending them to each other to then paste this HTML code afterwards. That would just be wrong.
We create a loop, and in this loop we write HTML code. That seems more logical, no ? Only probem is, we can't write HTML code in a PHP block can we...

Solution found!

```
<?php foreach($array as $arr): ?>
<tr>
	<td><?php echo $arr["tv-show"]; ?></td>
	<td><?php echo $arr["rating"]; ?></td>
</tr>
<?php endforeach; ?>
```

## Exercises

1. Create a file `loop.php`
1. At the top of the file, create an array like the one below (with at least 8 shows in it)
1. Loop through the array posting the rating and the tv show's name in a table row
1. Now make the tv-show name clickable and link it to a google search about that tv show
1. Lastly, instead of the number of the rating of this tv show, make a loop inside the current loop to give the number of stars instead of rating (use icons)




## The Array of Arrays

``` 
$array = [
	["tv-show" => "Naruto", "rating" => 4],
	["tv-show" => "Firefly", "rating" => 5],
	["tv-show" => "Big bang theory", "rating" => 4],
	["tv-show" => "Family Guy", "rating" => 5]
];

```

# Extra exercise

## Lottery machine 🍀🤑


### Requirements:

Use at least the following php elements:

    - Loop
    - Array


### Instructions

- Create a lottery machine. with 3 emoji's.
- Create index.php and a lottery.php file
- When the player wins congratulate him and ask him if he wants to play again.
- Choose one emoji that wins and two that lose
- Here are the emoji's: 🍕🍔🍟
