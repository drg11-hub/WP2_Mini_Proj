This repository contains the HTML, CSS/SCSS and JavaScript code used in creating the browser rendering of the website for a restaurant called 'Ristorante Con Fusion'. It also uses some JQuery syntax. The four HTML files represent four different sections of the website. These make extensive use of the style features provided by Bootstrap 4 to augment the basic HTML syntax and make the website visually appealing to the user.

To view the website on the browser, a local lite server was created using the Node.js desktop JavaScript runtime environment and NPM. The server is started up by running the NPM script called 'NPM start' (as mentioned in the package.json file) at the command line. This script actually performs two functions:

1. runs the lite server and renders the website on the browser, and

2. monitors and tracks changes to the SCSS file called 'styles.scss' and if there are any, freshly compiles it into the          corresponding CSS code which gets saved in the file called 'styles.css'.
