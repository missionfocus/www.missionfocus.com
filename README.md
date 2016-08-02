Default layout is "page" which is a two column layout

Override default layout with "layout: three-columns" in front matter

Change the header for a page by adding the image to ```static/images``` and adding a front matter value ```image: image-name.ext```

To update Sass or JS files, run ```gulp watch``` from the command line.

To make the site live for production, change ```production``` in the config file to "true" and add Google Analytics ID to that variable in the config file.
