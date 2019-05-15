<?php

function printValues($input)
{
    print("<div class=\"card\">\n<div class=\"card-body\">");
    if (is_array($input)) {
        print("<pre>");
        foreach ($input as $key => $value) {
            if (is_array($value)) {
                print("<div class=\"card\">\n<div class=\"card-body\">");
                print(" ARRAY {$key} = ");
                printValues($value);
                print("</div>\n</div>");
            } else if (is_object($value)) {
                print("<div class=\"card\"> <div class=\"card-body\">");
                print(" OBJECT {$key} = ");
                var_dump($value);
                print("</div>\n</div>");
            } else {
                print("{$key} = {$value}\n");
            }
        }
        print("</pre>");
    } else {
        if ($input != null) {
            print("Not an array: {$input}\n");
        } else {
            print("Found null.  \n");
        }
    }
    print("</div>\n</div>");
}
