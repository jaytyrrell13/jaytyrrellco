import { defineConfig } from 'astro/config';

import tailwind from "@astrojs/tailwind";

// https://astro.build/config
export default defineConfig({
  site: 'https://jaytyrrell.co',
  integrations: [tailwind()],
  markdown: {
    shikiConfig: {
      theme: 'one-dark-pro'
    }
  }
});
