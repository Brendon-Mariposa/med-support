/* eslint-disable */

const cssnanoConfig = {
  preset: ['default', { discardComments: { removeAll: false } }]
};

module.exports = ({ file, options }) => {
  return {
    parser: options.enabled.optimize ? 'postcss-safe-parser' : undefined,
    plugins: {
      tailwindcss: `${options.paths.assets}/styles/tailwind.config.js`,
      autoprefixer: true,
      cssnano: options.enabled.optimize ? cssnanoConfig : false,
    },
  };
};