# Project 1 - Globitek CMS

Time spent: **3** hours spent in total for week 1, **10** hours spent in total for week 2

## User Stories

Week 1
The following **required** functionality is completed:

1. [x]  Required: Create a Users Table
  * [x]  Required: Use the command line to connect to the database "globitek".
  * [x]  Required: Define a table "users" with the required columns.

2. [x]  Required: Create a Page with an HTML Form
  * [x]  Required: It has required text inputs.
  * [x]  Required: It submits to itself.
  * [x]  Required: It looks correct in a browser.
  
3. [x]  Required: Detect when the form is submitted.
  * [x]  Required: When page loads, page displays the form.
  * [x]  Required: When form submits, page retrieves the form data.

4. [x]  Required: Validate form data.
  * [x]  Required: Require the provided validation functions library.
  * [x]  Required: Validate the presence of all form values.
  * [x]  Required: Validate that no values are longer than 255 characters.
  * [x]  Required: Validate that first\_name and last\_name have at least 2 characters.
  * [x]  Required: Validate that username has at least 8 characters.
  * [x]  Required: Validate that email contains a "@".

5. [x]  Required: Display form errors if any validations fail.
  * [x]  Required: Do not submit the data to the database.
  * [x]  Required: Redisplay the form with the submitted values filled in.
  * [x]  Required: Report all errors as a list above the form.
  * [x]  Required: Test each field to ensure you get the expected errors.

6. [x]  Required: Submit successfully-validated form values to the database.
  * [x]  Required: Write an SQL insert statement.
  * [x]  Required: Add current date and time to "created\_at".
  * [x]  Required: Follow best practices regarding the query result and database connection.
  * [x]  Required: Use the command line to check the records.

7. [x]  Required: Redirect the user to a confirmation page.
    * [x]  Required: Locate the page "public/registration\_success.php".
    * [x]  Required: Redirect the user to the new page. ([Tips](#!hints))

8. [x]  Required: Sanitize all dynamic output for HTML. ([Tips](#!hints))


The following advanced user stories are optional:

* [x]  Bonus 1: Validate that form values contain only whitelisted characters.

* [ ]  Bonus 2: Validate the uniqueness of the username.

Week 2
The following **required** functionality is completed:

1. [x]  Required: Import the starting databse
    * [x]  Required: Download the Assignment 2 Starting Database.
    * [x]  Required: Use the command line to import globitek_week2.sql into the globitek database.

2. [x]  Required: Set up the Starting Code
    * [x]  Required: Download the Assignment 2 Starting Code.
    * [x]  Required: Unzip the files and move them to your web document root.

3. [x]  Required: Staff CMS for Users
    * [x]  Required: index.php
    * [x]  Required: show.php
    * [x]  Required: new.php
    * [x]  Required: edit.php

4. [x]  Required: Staff CMS for Salespeople
    * [x]  Required: index.php
    * [x]  Required: show.php
    * [x]  Required: new.php
    * [x]  Required: edit.php

5. [x]  Required: Staff CMS for States
    * [x]  Required: index.php
    * [x]  Required: show.php
    * [x]  Required: new.php
    * [x]  Required: edit.php

6. [x]  Required: Staff CMS for Territories
    * [x]  Required: index.php
    * [x]  Required: show.php
    * [x]  Required: new.php
    * [x]  Required: edit.php

7. [x]  Required: Validations
   * [x]  Required: Validate that no values are left blank.
   * [x]  Required: Validate that all string values are less than 255 characters long.
   * [x]  Required: Validate that usernames contain only the whitelisted characters: A-Z, a-z, 0-9, and _
   * [x]  Required: Validate that phone numbers contain only the whitelisted characters: 0-9, spaces, and ()-
   * [x]  Required: Validate that email addresses contain only whitelisted characters: A-Z, a-z, 0-9, and @._-
   * [x]  Required: Add at least 5 other validations
     - [x]  Validate that email addresses contian at least one char before @ , one char between @ and . , and one char after .
     - [x]  Validate that State codes contian only 2 uppercase characters
     - [x]  Validate that first names and last names contiain only the whitelisted characters: A-Z, a-z, ', -, ,, ., and space.
     - [x]  Validate that country id contain only numbers and the first number will not be zero.
     - [x]  Validate that state names contian onyl uppercase character at the beginning.
   
8. [x]  Required: Sanitize
   * [x]  Required: All input and dynamic output should be sanitized.
   * [x]  Required: Sanitize dynamic data

9. [x] Required: Penetration Testing
   * [x]  Required: Verify that all form text inputs are not vulnerable to SQLI attacks.
   * [x]  Required: Verify that all URL query strings are not vulnerable to SQLI attacks. 
   * [x]  Required: Verify that all form text inputs are not vulnerable to XSS attacks.
   * [x]  Required: Verify that all URL query strings are not vulnerable to XSS attacks.

The following advanced user stories are optional:

* [ ]  Bonus 1: On "public/staff/territories/show.php", instead of displaying an integer value for territories.state_id, display the name of the state.

* [ ]  Bonus 2: Validate the uniqueness of users.username, both when a user is created and when a user is updated


* [ ]  Bonus 3: Add a page for "public/staff/users/delete.php". Add a link to it from the user details page. The delete page will display the text: "Are you sure you want to permanently delete the user: ". If the user confirms it, delete the user record and redirect back to the users list.

* [ ]  Bonus 4: Add a Staff CMS for countries. (Creating a countries table was a bonus objective in last week's assignment.) Add pages for "list", "show", "new", and "edit", similar to the pages in the CMS area for states.

* [ ]  Advanced: Nest the CMS for states inside of the Staff CMS for countries (created in the previous challenge). It should be nested in the same way in which territories are nested inside of states.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

Week 1
<img src='http://i.imgur.com/ya4Cb7Z.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

Week 2
<img src='http://i.imgur.com/u1neDPm.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright 2017 Tsz Him Kwan

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
