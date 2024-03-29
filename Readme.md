# Ray Beliveau's Portfolio Project

## Description

This is a website demonstrating my portfolio. I've incorporated several CSS styles to add additional functionality
to the website, such as effects and transitions for link hovering, popup tiles on hover for work, and fixed
backgrounds. I've displayed many of the skills that I've already possessed, and even included a live JavaScript
project that I've been working on for (mostly for fun but also for my portfolio), for a Facebook YouTube-related
membership group that I'm a moderator for. While I don't have any other public projects that I'm able to share for
my portfolio, I've attempted to create a layout that will work well for multiple projects in the future, using
example project ideas.

Headshot of me by Discovery Photos (https://discovery.photos). Icons from icons8. Additional images from pexels.com.
All code is my own, and reference material provided by W3C and MDN (I couldn't remember the full syntax of some of the
shortcuts, like transitions).

## Installation

Installation is simple. Copy files to your root web directory (ex. `/var/www/html`), and ensure that your httpd.conf
file is properly configured. Proper permissions for the directory `chmod -R 644 /var/www/html` and SELinux (if
enforcing) should be configured: `sudo restorecon -vRF /var/www/html`.

The screenshots folder and this Readme server purpose in the website's operation, and should be left omitted from
the root directory. I've included the SASS (SCSS) file for organizational purposes, but it is also unnecessary as
are the aforementioned files.

## Usage

Usage for this project is straightforward: Ensure the preceding steps in Installation have been followed, and visit
the corresponding website within your browser.

I have converted this site from the original HTML-only site, which was used for my assignment (now index-nojs.html) to
separate JavaScript and PHP versions; both of which access the data from one file (data.json). This file is a lot easier
to edit than going through the HTML and doing multiple modifications. I'm not lazy, I just like to be efficient.

Live versions of the site can be viewed here:

* HTML (Non-JS): https://raybeliveau.com/index-nojs.html
* JavaScript: https://raybeliveau.com/index.html
* PHP: https://raybeliveau.com/index.php

[//]: # (A live version of this can be viewed here: https://rayxis.github.io/w2-RayBeliveau-Portfolio/)

## Screenshots

![Screenshot of completed website](./screenshots/Screenshot%202023-12-03%20at%2011.25.55%E2%80%AFPM.png)
![Screenshot of completed website](./screenshots/Screenshot%202023-12-03%20at%2011.26.27%E2%80%AFPM.png)
![Screenshot of completed website](./screenshots/Screenshot%202023-12-03%20at%2011.26.54%E2%80%AFPM.png)
![Screenshot of completed website](./screenshots/Screenshot%202023-12-03%20at%2011.27.07%E2%80%AFPM.png)
![Screenshot of completed website](./screenshots/Screenshot%202023-12-03%20at%2011.27.21%E2%80%AFPM.png)

## User Story

```
AS AN employer
I WANT to view a potential employee's deployed portfolio of work samples
SO THAT I can review samples of their work and assess whether they're a good candidate for an open position
```

## Acceptance Criteria

```
GIVEN I need to sample a potential employee's previous work
WHEN I load their portfolio
THEN I am presented with the developer's name, a recent photo or avatar, and links to sections about them, their work, and how to contact them
WHEN I click one of the links in the navigation
THEN the UI scrolls to the corresponding section
WHEN I click on the link to the section about their work
THEN the UI scrolls to a section with titled images of the developer's applications
WHEN I am presented with the developer's first application
THEN that application's image should be larger in size than the others
WHEN I click on the images of the applications
THEN I am taken to that deployed application
WHEN I resize the page or view the site on various screens and devices
THEN I am presented with a responsive layout that adapts to my viewport
```
