'use strict'; // eslint-disable-line

const glob = require('glob-all');
const PurgecssPlugin = require('purgecss-webpack-plugin');

const config = require('./config');

class TailwindExtractor {
  static extract(content) {
    return content.match(/[\w-/:]+(?<!:)/g) || [];
  }
}

module.exports = {
  plugins: [
    new PurgecssPlugin({
      paths: glob.sync([
        'app/**/*.php',
        'resources/views/**/*.php',
        'resources/assets/scripts/**/*.js',
      ]),
      whitelist: ['html', 'body', 'main', 'h1', 'hr', 'pre', 'a', 'abbr[title]', 'b', 'strong', 'code', 'kbd', 'samp', 'small', 'sub', 'sup', 'img', 'button', 'input', 'optgroup', 'select', 'textarea', '[type="button"]', '[type="reset"]', '[type="submit"]', 'button::-moz-focus-inner', '[type="button"]::-moz-focus-inner', '[type="reset"]::-moz-focus-inner', '[type="submit"]::-moz-focus-inner', 'button:-moz-focusring', '[type="button"]:-moz-focusring', '[type="reset"]:-moz-focusring', '[type="submit"]:-moz-focusring', 'fieldset', 'legend', 'progress', '[type="checkbox"]', '[type="radio"]', '[type="number"]::-webkit-inner-spin-button', '[type="number"]::-webkit-outer-spin-button', '[type="search"]', '[type="search"]::-webkit-search-decoration', '::-webkit-file-upload-button', 'details', 'summary', 'template', '[hidden]', '*', '*::before', '*::after', 'blockquote', 'dl', 'dd', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'figure', 'p', 'pre', 'button:focus', 'ol', 'ul', 'input:-ms-input-placeholder', 'textarea:-ms-input-placeholder', 'input::-ms-input-placeholder', 'textarea::-ms-input-placeholder', 'input::placeholder', 'textarea::placeholder', '[role="button"]', 'table', 'optgroup', 'svg', 'video', 'canvas', 'audio', 'iframe', 'embed', 'object', 'screen-reader-text' ],
      whitelistPatterns: [/aos/],
      extractors: [
        {
          extractor: TailwindExtractor,
          extensions: ["js", "php"]
        }
      ],
    }),
  ],
};