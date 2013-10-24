# Title: jsFiddle tag for Jekyll
# Author: Brian Arnold (@brianarn)
# Description:
#   Given a jsFiddle shortcode, outputs the jsFiddle iframe code.
#   Using 'default' will preserve defaults as specified by jsFiddle.
#
# Syntax: {% jsfiddle shorttag [tabs] [skin] [height] [width] %}
#
# Examples:
#
# Input: {% jsfiddle ccWP7 %}
# Output: <iframe style="width: 100%; height: 300px" src="http://jsfiddle.net/ccWP7/embedded/js,resources,html,css,result/light/"></iframe>
#
# Input: {% jsfiddle ccWP7 js,html,result %}
# Output: <iframe style="width: 100%; height: 300px" src="http://jsfiddle.net/ccWP7/embedded/js,html,result/light/"></iframe>
#

module Jekyll
  class IFrame < Liquid::Tag
    def initialize(tag_name, markup, tokens)
      if /(?<iframe>\w+)(?:\s+(?<url>[\w,]+))?(?:\s+(?<height>\w+))?(?:\s+(?<width>\w+))?/ =~ markup
        @iframe   = iframe
        @url      = url
        @width    = width || '100%'
        @height   = height || '300px'
      end
    end

    def render(context)
      if @iframe
        "<iframe style=\"width: #{@width}; height: #{@height}\" src=\"../assets#{@url}/\"></iframe>"
      else
        "Error processing input, expected syntax: {% jsfiddle shorttag [tabs] [skin] [height] [width] %}"
      end
    end
  end
end

Liquid::Template.register_tag('iframe', Jekyll::IFrame)