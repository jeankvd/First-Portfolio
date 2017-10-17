# Elouise Photography (Website Version)
## Link
[Elouise Photography](https://elouisephotography.000webhostapp.com/)
## Description
With this website I wanted to do the whole process of creating a website from a PSD and the porting it to WordPress. While I have created a couple websites from PSDs and ported websites to WordPress this was my first time doing the whole process.  I also created a jquery lightbox from scratch for the image gallery on the website.
## Technologies

- BootStrap
- WordPress Hooks, Tags, & WP Loop.
- Responsive Design
- Jquery
- PSD to Website

## Issues

1. I struggled with ways of changing the images on the image gallery section. I considered AJAX, React.js, and a type of carousel for the gallery. I decided the simplest way to achieve the constant changing of images on the gallery was with jQuery. app.js listens for a click event on any of the list items of the gallery. It then changes only a part image source attribute and the link href attribute effectively changing the address of the images. 
2. Iframes are known for being unresponsive. I decided that instead of doing a "hack" with the iframe I would dynamically change the width in accordance to the viewport.
3. The WordPress porting was extremely smooth except for the content editor. I decided to load all of the html from Wordpress' Content Editor. At the beginning it kept adding p tags and br all over the code. I installed the Raw HTML plugin to keep my code consistent.

## Next Steps
I am going to do a couple more of wordpress themes following this workflow. I am currently working on a multiple pages website and next I will create a personal blog. I am planning on making Wordpress themes for both of these projects.