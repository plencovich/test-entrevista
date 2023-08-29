let mix = require('laravel-mix');

mix.setPublicPath('./public_html/');

/* CSS Maintenance - CONTACT */
mix.combine([
  'node_modules/bootstrap/dist/css/bootstrap.css',
  'resources/css/style.css'
], 'public_html/assets/css/welcome-contact.css');

/* JS Maintenance - CONTACT */
mix.combine([
  'node_modules/bootstrap/dist/js/bootstrap.js',
  'resources/js/main.js'
], 'public_html/assets/js/welcome-contact.js');

mix.sourceMaps();
/* MIX Version */
mix.version();

mix.copy('resources/graphics', 'public_html/assets/images')

/* MIX Options */
mix.options({
  processCssUrls: true,
  cleanCss: {
    level: {
      1: {
        specialComments: 'none'
      }
    }
  },
  postCss: [
    require('postcss-discard-comments')({
      removeAll: true
    })
  ]
});

mix.disableNotifications();
