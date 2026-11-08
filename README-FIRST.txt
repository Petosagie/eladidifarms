ELADIDI INTEGRATED FARMS SERVICE LTD WEBSITE
=============================================

WHAT IS INCLUDED
- index.html: updated company website and company profile
- styles.css: responsive design, layout and visual styling
- script.js: mobile navigation and automatic copyright year
- contact.php: PHP enquiry form handler (requires company email configuration)
- assets/: company logo and favicon
- .htaccess: basic Apache hosting settings

EDITING WITH VISUAL STUDIO CODE
1. Extract this ZIP on your Windows computer, for example to Documents\eladidi-website.
2. Open Visual Studio Code.
3. Select File > Open Folder and choose the extracted eladidi-website folder.
4. Open index.html and edit the website text. Open styles.css to change colours, spacing, fonts and image backgrounds. Open script.js for small interactive features.
5. To preview locally, install the "Live Server" extension in VS Code, right-click index.html and select "Open with Live Server".
6. Save your changes (Ctrl+S) and refresh the browser preview.

The Live Server preview is only on your computer. It does not publish changes to eladidifarms.com.

PHOTOGRAPHS
Your original farm photographs have been cleaned (borders and captions removed), sharpened and optimised. They are now stored in assets/images/ and used on the site for:
- rubber-heaps.jpg (rubber plantation / heaps ready for processing)
- pineapple-plantation.jpg (newly cultivated pineapple farm)
- rubber-offloading.jpg (offloading rubber lumps)
- rubber-lumps-finished.jpg (finished rubber product / processing)
The hero section still uses a high-quality Unsplash plantation image for visual impact. You can replace it later with a wide landscape of your own rubber plantation if preferred.
Suggested future additions: close-up latex tapping, wider plantation rows, ripe pineapple harvest. Aim for 1600×1000 px or larger, well-lit, landscape orientation.

COMPANY DETAILS TO CONFIRM BEFORE PUBLICATION
- Confirm the exact legal company spelling on CAC documents: "INTEGRATED" or "INTERGRATED".
- Confirm that the farm landholding is approximately 1,000 hectares.
- Confirm the production figure stated as 20,000 tonnes monthly. It is a very large figure, so verify the quantity and unit (tonnes, kilograms, or another measure) before publishing.
- Confirm whether pineapple production is 500 dozen per month and whether this should be described as fruit, dozens, or crates.
- Verify the three project quantities (60,000, 35,000 and 45,000 tons) against invoices/delivery records before publication.
- Confirm the exact farm-site spelling and address: Egueiladidi, Udo Okomu, Ovia South-West, Edo State.
- Confirm whether all named clients and affiliations may be displayed publicly.
- Company emails configured: info@eladidifarms.com, director@eladidifarms.com, admin@eladidifarms.com. Add telephone / WhatsApp number when ready.

CONTACT FORM SETUP
Open contact.php and replace:
$recipient is already set to info@eladidifarms.com. Change it if you prefer a different monitored address. Do not put an email password in this file. Test the form after uploading. If PHP mail() does not deliver reliably, configure authenticated SMTP using a suitable mail library/service and keep credentials outside public website files.

UPLOAD TO NAMECHEAP SHARED HOSTING
1. Sign in to your Namecheap account.
2. Open Hosting List and click Go to cPanel for the Shared Hosting package.
3. In cPanel, open Domains and check the Document Root for eladidifarms.com. For the primary domain this is usually public_html; an additional domain may have its own folder.
4. Open File Manager and navigate to that exact document-root folder.
5. Back up any existing website files before replacing them. Do not delete unrelated account folders.
6. Upload the website ZIP into the document root and use Extract. Make sure index.html, styles.css, script.js, contact.php and .htaccess are directly inside the document root, with the assets folder beside them. Avoid leaving everything inside an extra nested folder.
7. Visit https://eladidifarms.com and test navigation, images, mobile layout and the contact form.

DOMAIN AND SSL
- Ensure eladidifarms.com is connected to the Namecheap Shared Hosting service. Namecheap's Shared Hosting Getting Started guide explains domain connection and cPanel access.
- In cPanel, use Namecheap SSL to check the certificate status. Test that the site opens with https:// and displays a padlock.
- If the domain was registered at Namecheap but DNS is not yet pointed to this hosting account, follow the hosting welcome email / Namecheap setup instructions rather than guessing DNS values.

UPDATING THE LIVE WEBSITE FROM VS CODE
For a beginner, upload the updated website ZIP through cPanel File Manager after making changes locally. For frequent edits, you can set up an FTP/SFTP workflow in VS Code or use an FTP client. Use the exact server, username, port and connection type shown in your Namecheap hosting account; do not share hosting passwords in chat or commit them to source control.

BACKUP AND SECURITY
- Keep a copy of the website folder and ZIP on your computer before every live update.
- Never upload private keys, passwords or database credentials into the public document root.
- Keep PHP and hosting software updated.
- Add a privacy notice before collecting personal information through the enquiry form.
