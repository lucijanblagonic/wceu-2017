# WordCamp Europe 2017 CSS

👀 **Check out the WCEU 2018 [style guide](https://lucijanblagonic.github.io/wceu-2018/styleguide/)**.

**Work in progress.** See the current version of the generated [style guide](https://lucijanblagonic.github.io/wceu-2017/styleguide/).

![Style guide created with KSS methodology](screenshot.png)

## About

This plugin generates the custom CSS for the WordCamp Europe 2017 theme and a style guide using [KSS](http://warpspire.com/kss/) methodology.

This is a modified version of [WordCamp Europe 2016 CSS](https://github.com/scottsweb/wceu-2016-css) plugin by [@scottsweb](http://twitter.com/scottsweb).

## Getting Started

Install [node.js](http://nodejs.org).

	npm install gulp
	npm install

You are done.

### `gulp`

Use `gulp` for on–the–fly updates of your code (templates, js, css) and style guide.

### `gulp build`

This will create a `build` directory for project assets and a `styleguide` directory from your KSS documentation in CSS **without browser-sync live preview**.

## Directory Structure

Feel free to modify everything in the `source` directory and keep in mind that `styleguide` and `build` directories are rebuilt with each `gulp build` command.

	gulpfile.js
	package.json
	readme.md
	source/
	├── assets/ [images, stylesheets]
	├── styleguide-template/ [modified KSS template for generating style guides]
	├── kss-config.json [style guide configuration]
	└── styleguide.md [description of the project and the style guide]

	build/ [generated via gulp]
	styleguide/ [generated via gulp]

## Interesting Bits

* Uses [Bourbon](bourbon.io), a lightweight Sass Tool Set
* Uses [Modular scale](https://github.com/modularscale/modularscale-sass) for typography
* Uses [Susy](susy.oddbird.net) for grids
* CSS architecture based on ITCSS (Inverted Triangle CSS) by [Harry Roberts](http://csswizardry.com) [Article](http://www.creativebloq.com/web-design/manage-large-css-projects-itcss-101517528)

## Additional Resources

More information about [style guides](http://www.styleguides.io/).

Articles and tools to start documenting interfaces and build style guides:

* [Documenting interfaces](http://polarnorth.org/blog/documenting-interfaces/)
* [Interface inventory](https://github.com/lucijanblagonic/interface-inventory/)
* [Moving the design process to the browser](http://polarnorth.org/blog/moving-the-design-process-to-the-browser/)
