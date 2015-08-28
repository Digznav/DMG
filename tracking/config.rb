environment = :production
conversiontype = :twocolumn

if conversiontype == :onecolumn
	require "breakpoint"
	require "singularitygs"
end

http_path = "/"
css_dir = "css"
sass_dir = "css/scss"
images_dir = "images"
fonts_dir = "webfonts"
javascripts_dir = "js"

output_style = :compressed
output_style = (environment == :production) ? :compressed : :expanded;
relative_assets = true
line_comments = false
preferred_syntax = :scss
asset_cache_buster :none

sourcemap = (environment == :production) ? false : true;