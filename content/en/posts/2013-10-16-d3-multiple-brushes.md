---
title: "D3: Multiple Brushes"
date: 2013-10-16
description: How to select multiple time ranges using D3 brushes.
---

One of the useful features [D3](http://d3js.org/) offers is a [dynamic brush](https://github.com/mbostock/d3/wiki/SVG-Controls) that allows one to select a portion of a scale. If desired, SVG elements within the "brushed" range of the can then be manipulated. For an in-house project, we wanted to select multiple time ranges using brushes. 

This great [example](http://bl.ocks.org/mbostock/1667367) from D3's creator made implementing one brush simple (if you haven't previously implemented a singular brush, you'll probably want to give the example a look before continuing). However, when we tried to add another brush to the display the brushes weren't usable, and there didn't seem to be any D3 documentation about how to achieve the  functionality. There also didn't seem to be any other examples online with more than one brush. Since it was a feature we needed, we experimented. In the end, by making two simple DOM alterations to the brushes, we were able to create multiple brushes on the same scale. 

The brush exposes certain events: 'brushstart' when it is started, a series of 'brush' events while it is being altered, and a 'brushend' event when the alterations end (for more on this see the documentation link above). To provide these events, the brush captures mouse events within its active area (the SVG DOM element in which the brush can be drawn, dragged, and resized), processes the mouse events, and outputs them as one of the three events provided by the brush. 

This is sufficient for one brush because every click event is captured by the first brush created. Determining whether a user mouse event should create a new brush or alter an existing brush has to be accomplished manually.

Looking at a brush in the DOM, we realized the brush would respond to mouse events if its pointer-events attribute was set to 'all'. Setting the same attribute to 'none' resulted in the brush no longer honoring (and therefore consuming) click events. By adding a simple jQuery click listener to the DOM element that contains the brush, mouse clicks can be examined if the brush isn't listening to / consuming click events. To make this happen, each time a brush sends a 'brushend' event, the brush's pointer-events attribute is set to none. That means the brush won't swallow the next click event, and the event will occur in the jQuery click listener for the active region containing the brush. At this point, logic occurs to determine if the user is holding down the meta-key while clicking. If this is the case, a new brush is created and the old brush remains deactivated. If the user is performing a click without the meta-key, the brush's pointer-events attribute is set back to 'all' and it will continue consuming click events and updating its size/location accordingly.

But that wasn't the last piece of the puzzle. Simply setting the brush's 'pointer-events' attribute didn't actually have the desired effect of activating and deactivating the brush. It wasn't until accidentally stumbling across manually assigning the brush an id attribute that the brushes would activate and deactivate accordingly. Since no mention of id is made in the brush documentation, it's unclear whether this is an intended or unintended feature in the inner workings of the brush.

While this surely isn't the most elegant solution to implementing multiple brushes, it seems the best until the brush's functionality is extended.

[D3 Multiple Brushes Example](https://github.com/imintel/d3-multiple-brushes)