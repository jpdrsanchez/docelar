module.exports = {
    plugins: [
        require("postcss-pxtorem"),
        require("postcss-combine-media-query"),
        require("postcss-em-media-query"),
        require("autoprefixer"),
    ],
};
