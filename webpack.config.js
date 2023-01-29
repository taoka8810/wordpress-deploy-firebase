const path = require("path");

module.exports = {
  mode: "development",
  entry: "./src/js/firebase.js",
  output: {
    filename: "firebase.js",
    path: path.resolve(__dirname, "./wp-theme/js"),
  },
  resolve: {
    extensions: [".js"],
  },
};
