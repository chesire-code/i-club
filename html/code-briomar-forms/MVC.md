## *index.php*
---
### Form with three input fields (fname, sname, email).
### Each input field has its own name(KEY in getting its input).

## *form.php*
---
### Three files are required for this file to be fully functional:
* ### model.inc.php
* ### control.inc.php
* ### viewer.inc.php

### Instances of classes are created here.

## *model.inc.php*
---
### Contains `Connection_key` class. It is a child class of the parent class `Access`.
### Functions and properties used to interact with the database are used here. Inserting user input into the database occurs here.

## *control.inc.php*
---
### Contains the parent class `Access`. User input is handled here. The inputs from the input fields are stored in variables declared in the parent class `Access`.
### `Access` is a parent class since all the variables storing the user inputs have to be inherited in the `Connection_key` class so that they could be inserted into the database.

## *viewer.inc.php*
---
### Any information from the database that the user has to view is handled here.