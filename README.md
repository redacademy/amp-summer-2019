# AMP

A WordPress starter theme AMP Vancouver, forked from Underscores.

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `red_amp-master` directory

Make sure that the theme directory name is project appropriate!

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 3a. Plugin Dependencies

#### Contact Form 7 
Used to create the contact us page.

#### Custom Field Suite
Used for create custom fields for workspaces, events, testimonials and the meet the team members.

#### Gravity Forms
Used to create the main book a tour form for the website.


### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

 
## Theme description
 
### The theme includes the following template files:

The theme supports carousel images using the flickity plugin and a default menu:

Flickity: The carousels on the website were done with the Flickity jquery plugin.

Styling for the flickity required use of !importants because the generic styling was very specfic.

Menus:
The default menu is in header.php, and uses the Menus admin
 
### Styling
There is one general Media Query for mobile layout at 760px. All screens under that threshold will display as mobile.

The max width for all screens is 1400px.
 

### There are 2 custom post types:
- Workspaces
- Events


### Workspaces

Custom fields for workspaces

Steps for creating a new workspace
#### Step 1
<img src="./themes/red_amp/readme-images/click-workspace.png"   alt="read-me-image" />

#### Step 2
<img src="./themes/red_amp/readme-images/new-workspace.png"   alt="read-me-image" />

#### Step 3
<img src="./themes/red_amp/readme-images/workspace-title.png"   alt="read-me-image" />

#### Step 4
<img src="./themes/red_amp/readme-images/create-workspace.gif"   alt="read-me-image" />

#### Step 5
<img src="./themes/red_amp/readme-images/workspace-icons.gif"   alt="read-me-image" />

#### Step 6
<img src="./themes/red_amp/readme-images/workspace-publish.png"   alt="read-me-image" />

### Events

Custom fields for workspaces.

Steps for creating a new event.

#### Step 1
<img src="./themes/red_amp/readme-images/event-section.png"   alt="read-me-image" />

#### Step 2
<img src="./themes/red_amp/readme-images/event-add.png"   alt="read-me-image" />

#### Step 3
<img src="./themes/red_amp/readme-images/event-title.png"   alt="read-me-image" />

#### Step 4
<img src="./themes/red_amp/readme-images/event-details.png"   alt="read-me-image" />

#### Step 5
<img src="./themes/red_amp/readme-images/event-publish.png"   alt="read-me-image" />



### Forms

1. GRAVITY FORMS PLUGIN
2. CONTACT FORM 7 PLUGIN

### GRAVITY FORMS-
Gravity Forms is a WordPress plugin used originally for forms which are multi-step such as contact forms, but in a more general sense, it allows site owners to create forms to collect information. Gravity Forms can be used for contact forms, WordPress post creation, calculators, employment applications and more.

Written in PHP, Gravity Forms uses many WordPress built-in functions and features to power its form builder. It also uses the same MySQL database system as WordPress, but stores all forms and entries in its own tables.

#### BOOK A TOUR FORM

* It is multi-step form which helps the user to select their preferable date and time for visiting the available workspaces.
* The user would see the confirmation message after submitting the form.
* The admin will be notified through an email regarding any new bookings for the tour.

#### NEWSLETTER SUBSCRIPTION FORM

* It is a one field form through which the user would be able to subscribe for any updates from the AMP.


### CONTACT FORM 7-
Contact Form 7 can manage multiple contact forms, plus you can customize the form and the mail contents flexibly with simple markup. The form supports Ajax-powered submitting, CAPTCHA, Akismet spam filtering and so on.

#### LETS GET IN TOUCH FORM

* It is a single page form which give the user to be able to get in touch with the AMP.
* The user would recieve a confirmation message on successful submission of the form.
