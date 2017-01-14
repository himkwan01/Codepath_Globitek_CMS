# Project 1 - Globitek CMS

Time spent: **3** hours spent in total

## User Stories
Week 1
The following **required** functionality is completed:

1. [x]  Required: Create a Users Table
2. [x]  Required: Create a Page with an HTML Form
3. [x]  Required: Detect when the form is submitted
4. [x]  Required: Validate form data
5. [x]  Required: Display form errors if and validations fail
6. [x]  Submit successfully-validated form values to the database
7. [x] Redirect the user to a confirmation page
8. [x] Sanitize all dynamic output for HTML

The following advanced user stories are optional:

* [ ]  Bonus: Validate that form values contain only whitelisted characters

* [ ]  Bonus: Validate the uniqueness of the username

Week 2
The following **required** functionality is completed:

1. [x]  Import the starting databse
2. [x]  Set up the Starting Code
3. [x]  taff CMS for Users
4. [x]  Staff CMS for Salespeople
5. [x]  Staff CMS for States
6. [x]  Staff CMS for Territories
7. [x]  Validations
   - [x] Validate that no values are left blank
   - [x] Validate that all string values are less than 255 characters long
   - [x] Validate that usernames contain only the whitelisted characters: A-Z, a-z, 0-9, and _
   - [x] Validate that phone numbers contain only the whitelisted characters: 0-9, spaces, and ()-
   - [x] Validate that email addresses contain only whitelisted characters: A-Z, a-z, 0-9, and @._-
   - [x] Validate that email addresses contian at least one char before @ , one char between @ and . , and one char after .
   - [x] Validate that State codes contian only 2 uppercase characters
   - [x] Validate that first names and last names contiain only the whitelisted characters: A-Z, a-z, ', -, ,, ., and space.
8. [x] Sanitize all dynamic output for HTML

The following advanced user stories are optional:

* [ ]  Bonus: On "public/staff/territories/show.php", instead of displaying an integer value for territories.state_id, display the name of the state.
* [ ]  Bonus: Validate the uniqueness of users.username, both when a user is created and when a user is updated
* [ ]  Bonus: Add a page for "public/staff/users/delete.php". Add a link to it from the user details page. The delete page will display the text: "Are you sure you want to permanently delete the user: ". If the user confirms it, delete the user record and redirect back to the users list.
* [ ]  Bonus: Add a Staff CMS for countries. (Creating a countries table was a bonus objective in last week's assignment.) Add pages for "list", "show", "new", and "edit", similar to the pages in the CMS area for states.
* [ ]  Advanced: Nest the CMS for states inside of the Staff CMS for countries (created in the previous challenge). It should be nested in the same way in which territories are nested inside of states.
## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/ya4Cb7Z.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

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
