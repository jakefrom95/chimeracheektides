# Chimera Peptides - WordPress Compliant & Vercel Ready

This repository contains a duplicate of the Chimera Peptides website. It is designed to be dual-purpose:
1. **WordPress Compliant**: A full WordPress theme is located in `wp-content/themes/chimera-peptides/`.
2. **Vercel Ready**: A static version of the site is provided in the root `index.html` for instant deployment to Vercel.

## Deployment to Vercel

1. **Upload to GitHub**:
   - Create a new repository on GitHub.
   - Initialize git in this folder: `git init`.
   - Add files: `git add .`.
   - Commit: `git commit -m "Initial commit"`.
   - Push to your GitHub repo.

2. **Connect to Vercel**:
   - Go to [vercel.com](https://vercel.com).
   - Click "New Project".
   - Import your GitHub repository.
   - Vercel will automatically detect the static files and deploy.

## Project Structure

- `index.html`: Main static landing page (used by Vercel).
- `vercel.json`: Configuration for Vercel hosting.
- `wp-content/themes/chimera-peptides/`: The WordPress theme directory.
  - `style.css`: Theme metadata and base styles.
  - `functions.php`: Theme logic and asset enqueuing.
  - `header.php`, `footer.php`, `index.php`: WordPress template files.
  - `assets/`: CSS, JS, and Images used by both the static and WP versions.

## Research Use Only

All products mentioned are intended for research purposes only.
