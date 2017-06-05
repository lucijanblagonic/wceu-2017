# WordCamp Europe 2017

Style guide for the [WordCamp Europe 2017](https://2017.europe.wordcamp.org) theme.

## Style guide

Style guide is broken down into several specific groups:

* **Overview** — Introduction
* [Settings](section-1.html) — Global variables and examples: colors, typography etc.
* [Tools](section-2.html) — Default mixins and functions: transitions, global paddings, hidden text etc.
* [Generic](section-3.html) — Ground–zero styles: normalize.css, global resets, global box-sizing etc.
* [Elements](section-4.html) — Unclassed HTML elements (type selectors): headings, paragraphs, forms, links etc.
* [Objects](section-5.html) — Cosmetic–free design patterns
* [Components](section-6.html) — Designed components and other UI elements that are used to build the theme.
* [Trumps](section-7.html) — Helpers and overrides.

This style guide is based on [KSS](http://warpspire.com/kss/) methodology. If you want to test it for yourself, you can use [this project as a starting point](https://github.com/lucijanblagonic/wceu-2017).

## Branding

WordCamp Europe 2017 logo. Read more about [colors](section-1.html#kssref-1-colors) and [fonts](section-1.html#kssref-1-typography) used on the site.

<header id="masthead" class="site-header" role="banner">
  <div class="site-branding">
   <h1 class="site-title"><a href="#" title="WordCamp Europe" rel="home">WordCamp Europe</a></h1>
   <h2 class="site-description">Paris, France – June 15-17, 2017</h2>
  </div>
</header>

## Code standards

We are depending on these [coding standards](http://codeguide.co/) for developing flexible, durable, and sustainable HTML and CSS. This mostly affects CSS since HTML of the theme can't be changed without making global breaking changes. But by keeping CSS organized and following a specific writing style — we are making sure that code remains readable and maintainable.

## Components

Every component has a static HTML example which helps in keeping the branding consistent.