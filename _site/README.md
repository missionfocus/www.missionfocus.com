# Mission Focus Website

[![Build Status](https://travis-ci.org/helenvholmes/missionfocus.png?branch=master)](https://travis-ci.org/helenvholmes/missionfocus)

Instructions for adding new team member photos, adding new blog posts, and adding/removing the 'currently hiring' section from the site for [missionfocus.com](missionfocus.com).

## Production
The process for how branches for the site is as follows:
- ```master``` stays clean. Don't push to master unless you know the site/build won't break.
- Site compiles from ```gh-pages```. 
- Pushing to master will _auto-update_ ```gh-pages```. 
- Breaking changes should be made on separate branches and merged in when they don't break the build.
- Build can be run from [Travis CI](https://travis-ci.org/).

## Compiling and Running Locally
Jekyll is a ruby gem. In order to view the site locally you need [Ruby](https://www.ruby-lang.org/en/downloads/) installed. [RVM](https://rvm.io/rvm/install) is also recommended. Install Jekyll with ```gem install jekyll```. More info can be found [here](http://jekyllrb.com/docs/installation/).

1. Compile site with ```jekyll build```.
2. Serve site with ```jekyll serve```.
3. Develop locally with ```jekyll serve --watch```.

# Careers Section
To advertise new positions open at Mision Focus, there are two things you should update: 

-- main page
-- careers section

# Team Photos
Team photos accompany each blog post. In order to associate the right photo with the blog post, in the top of the blog post the following YAML should be stated:

	---
	layout: post
	title: "D3: Multiple Brushes"
	author: Meredith M. Myers
	img: mmmyers.png
	date: 2013-10-16 10:50
	description: How to select multiple time ranges using D3 brushes.
	---

Team photos should follow the proper naming convention of <em>first initial, middle initial, last name.png</em> like in the example above.

# Resources Used for Testing
[Chrome Extension for Responsive Testing](https://chrome.google.com/webstore/detail/responsive-inspector/memcdolmmnmnleeiodllgpibdjlkbpim?hl=en)

# Libraries Used
