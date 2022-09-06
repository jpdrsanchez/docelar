import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";
import fs from "fs";
import os from "os";

let host = "docelar.test";
let homeDir = os.homedir();

let serverConfig = {};

if (homeDir) {
    serverConfig = {
        https: {
            key: fs.readFileSync(
                path.resolve(homeDir, `.config/valet/Certificates/${host}.key`)
            ),
            cert: fs.readFileSync(
                path.resolve(homeDir, `.config/valet/Certificates/${host}.crt`)
            ),
        },
        hmr: {
            host: "docelar.test",
        },
        host: "docelar.test",
    };
}

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/control/app.scss",
                "resources/js/control/app.js",
                "resources/scss/web/app.scss",
                "resources/js/web/app.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
            "@fontsource/raleway": path.resolve(
                __dirname,
                "node_modules/@fontsource/raleway"
            ),
            "@quill": path.resolve(__dirname, "node_modules/quill/dist"),
        },
    },
    server: serverConfig,
});
