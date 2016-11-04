distribution = :no

require "breakpoint"
# require "singularitygs"

http_path = "/"
css_dir = "css"
sass_dir = "css/scss"
images_dir = "images"
fonts_dir = "css/fonts"
javascripts_dir = "js"

output_style = (distribution == :yes) ? :compressed : :expanded;
relative_assets = true
line_comments = false
preferred_syntax = :scss
asset_cache_buster :none
