<p align="center">
    <img src="https://accounts.axxessweb.com/Images/Login/logo.svg" alt="Axxess" height="80px">
</p>

# Axxess PHP Code Challenge

This repository contains a sample healthcare web application written in Laravel.
The app is in it's early stages and we would like you to continue it's development by adding some new features through a series of tasks.

The app allows users to browse and manage the relationship between home health agencies and their caregivers.

This assignment should take around 1 to 2 hours, and you have 24 hours to complete it.
If you need more time, or the next 24 hours aren't convenient for you, please let us know.
Once complete, reply with the link to your repository.


## Installation:

We provide a Dockerfile for local development. This is the easiest way to get the project up and running.
However, you are welcome to use Homestead or any other prefered method.

- Fork this repository
- Run docker compose (or other)
- From the docker container, run composer install
- Copy the .env.example file to .env and customize as required
- Migrate and seed the database (we suggest using SQLite or MySQL)


## Tasks:

We would like you to add the following features to our sample healthcare app.
Please make a code commit to your repository after completing each task.

### Commit 1: Agency Listing ("/agencies")
a. Replace the blue question mark with the number of caregives for that Agency
b. Add pagination, just above the table of agencies, displaying 20 agencies per page

### Commit 2: Caregivers Directory ("/caregivers-directory")
a. Replace the placeholder data with queried database data, displaying **all** caregivers in alphabetical order

### Commit 3: Dashboard ("/")
a. Donut Chart; Type of Caregiver
    - Query database for the distribution of positions across all caregivers
    - Pass the data down to the view and assign to the donut chart
    - The chart labels should also come from the database
b. Table; Expiring Licenses
    - Query the database for the top 10 skilled nurses in order of licenses expiring soonest at the top
    - Display the expiration date in human readable form (ie: 1 month from now)
    - Render the color of the badge to red if the expiry date is within "x" days
    - Pull the value of "x" from the "caregivers" config file, defined as "license_renewal_reminder_in_days"

### Commit 4: License Commands
a. Complete the **licenses:list** command, which is defined in the console routes file.
    - The command should list all caregivers with a license, showing their name and license details
b. Write the **licenses:notify-expiring-soon** command, which has been stubbed out in the console routes file
    - Query the database for all licenses considered to be expiring soon ("license_renewal_reminder_in_days")
    - Send an Email to each caregiver found, using the "LicenseExpiring" Mailable
    - Additionally log "Emailed [caregiver name]" to the console for each caregiver found

### Commit 5: Add Caregiver ("/agencies/{agency}/caregivers/create")
a. Add a caregiver to the agency
    - Only the "Skilled Nurse" position requires a license
    - Add JavaScript logic to the page make the HTML section tag (id="license") disapear for all possitions but "Skilled Nurse"
    - Where practical, obtain the text for the caregiver positions from the "caregivers" config file
    - Add validation rules (see below) to the controller and create the caregiver in the database

| Field | Type | Required | Other |
|---|---|---|---|
| name | string | yes | - |
| email | email | yes | - |
| position | string | yes | must be one of the 4 options defined in the config file |
| license_number | string | "Skilled Nurse" only | - |
| license_expiration | date | "Skilled Nurse" only | - |

### Commit 6: Remove Caregiver ("/agencies/{agency}")
a. Remove a caregiver from the agency
    - Add JavaScript logic to the "delete.blade.php" partial, to request the caregiver be deleted
    - Delete the caregiver in the controller


## Summary and Tips:
- Fork this repository and follow the installation instructions above
- Develop each feature before commiting to your repository
- You can refer to the official [Laravel Docs](https://laravel.com/docs/) where required
- No authentication is needed for this project (assume it will be hosted on a secure network)
- There is no need to run Laravel mix to compile assets. Any CSS or JavaScript for this project can be obtained via CDNs
- The project uses Bootstrap 4 for styles
- The project does not use any JavaScript libraries. Vanilla JavaScript is prefered but you can pull in a JavaScript library (ie: jQuery) via CDN if required
- Leaverage Eloquent (ie: scopes/accessors/collections) as much as possile over the query bulder or raw SQL
- The project includes a "caregivers" config file as mentioned in the tasks above. Use the data in this as much as possible, instead of repeatedly hardcoding the values throughout the project


Best of luck

Axxess © 2020
