const sharp = require("sharp");
const path = require("path");
const fs = require("fs");

const ROOTDIR = path.resolve(__dirname);
const targetDir = path.join(ROOTDIR, 'build');
const outputImgDir = path.join(targetDir, 'img');

// Check directory builds
if (!fs.existsSync(targetDir)) {
    fs.mkdirSync(targetDir)
}

if (!fs.existsSync(outputImgDir)) {
    fs.mkdirSync(outputImgDir)
}

const targetImg = path.join(path.resolve(__dirname, '../'), 'public', 'assets', 'images', 'logo', 'logo-dprd-batanghari.png');

sharp(targetImg)
    .resize(100, 100)
    .toFormat('webp')
    .toFile(path.join(outputImgDir, 'logo-dprd-batanghari.webp'))
    .then(() => console.log("✅ Berhasil konversi gambar!"))
    .catch((e) => console.error("❌ Gagal konversi gambar. Error:", e))