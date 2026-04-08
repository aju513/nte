import { resolve } from "node:path";
import { fileURLToPath } from "node:url";
import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";

const rootDir = fileURLToPath(new URL(".", import.meta.url));

export default defineConfig({
  plugins: [tailwindcss()],
  build: {
    emptyOutDir: false,
    outDir: "css",
    rollupOptions: {
      input: {
        main: resolve(rootDir, "css/main.css"),
      },
      output: {
        assetFileNames: (assetInfo) =>
          assetInfo.names.includes("main.css") ? "main.build.css" : "[name][extname]",
        entryFileNames: "[name].js",
      },
    },
  },
});
