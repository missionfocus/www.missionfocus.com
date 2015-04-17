# Mission Focus Website

In order to run the website locally to create new posts, you need to have Ruby, the Jekyll gem, and the LESS compiler all installed on your machine.

## Checking Ruby Version
You should already have Ruby installed. If for some reason you do not, you can do so [here](https://www.ruby-lang.org/en/downloads/).

Jekyll requires Ruby 1.9.3 or above. RVM is popular for switching Ruby. You can get instructions on installing and using RVM [here](https://rvm.io/rvm/install).

Jekyll is gem, thus you need to have RubyGems installed. You can install RubyGems [here](http://rubygems.org/pages/download).

## Installing Jekyll

	gem install jekyll

## Running Jekyll Locally
To run the website locally, run ```jekyll serve``` in the site directory. This will build the website. If you need it to actively poll for changes, you can pass it the ```--watch``` flag. More detailed information on how to build source files can be found [on the Jekyll website](http://jekyllrb.com/docs/usage/).

## Creating Posts
To create a new post, you have to follow Jekyll's naming convention in the ```_posts``` directory. The convention is ```YEAR-MONTH-DAY-title.MARKUP```, e.g.:

	2011-12-31-new-years-eve-is-awesome.md

## Creating New Pages
To create static pages, create the .html in the directory needed. At the top of the file before your ```<DOCTYPE>``` declaration, you need to pass in two variables as follows (including the dashes):

	---
		layout: default
		title: Mission Focus
	---

The ```layout``` variable determines which template to use from the ```_layouts``` directory. Any content you write here will be populated into the ```{{ content }}``` tag in that template. Liquid tags can be used in page-specific files. We currently have a default template, the blog posts page template, and an individual post template, where we declare javascript files, css stylesheets, etc.

The ```_plugins``` directory holds any converters the compiler might need (such as the LESS compiler). 

The ```_site``` directory holds the compiled site.

The ```_includes``` holds assets such as external libraries.

## LESS Compiler
In the event of troubleshooting, the ticks necessary for the Jekyll plugin will break the vanilla LESS compiler. Thus, if you need to compile the style.less stylesheet manually, you will need to delete/comment out the dashes at the top of the file that tell the Jekyll plugin to compile the file. 