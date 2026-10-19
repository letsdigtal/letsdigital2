const puppeteer = require('puppeteer-core');
const fs = require('fs');
const path = require('path');

const CHROME_PATH = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';

const projects = [
  { name: 'Really Well Made', url: 'https://reallywellmade.co.uk/', filename: 'really-well-made.png' },
  { name: 'Wigs com', url: 'https://www.wigs.com/', filename: 'wigs-com.png' },
  { name: 'Wonder Noah', url: 'https://wondernoah.com/en-ww', filename: 'wonder-noah.png' },
  { name: 'Audio Select', url: 'https://audioselect.de/', filename: 'audio-select.png' },
  { name: 'Olivine', url: 'https://shopolivine.com/', filename: 'olivine.png' },
  { name: 'Anson Belt & Buckle', url: 'https://ansonbelt.com/', filename: 'anson-belt.png' },
  { name: 'Zorrata', url: 'https://www.zorrata.com/', filename: 'zorrata.png' },
  { name: 'Cellucor', url: 'https://cellucor.com/', filename: 'cellucor.png' },
  { name: 'Tuckernuck', url: 'https://tnuck.com/', filename: 'tuckernuck.png' },
  { name: 'Hyper', url: 'https://www.hypershop.com/', filename: 'hyper.png' },
  { name: 'Lance210', url: 'https://lance210.com/', filename: 'lance210.png' },
  { name: 'ULX Store', url: 'https://ulxstore.com/', filename: 'ulx-store.png' },
  { name: 'Vital Nutrients', url: 'https://vitalnutrients.co/', filename: 'vital-nutrients.png' },
  { name: 'PerfectShaker', url: 'https://perfectshaker.com/', filename: 'perfectshaker.png' },
  { name: 'RJ Living', url: 'https://rjliving.com.au/', filename: 'rj-living.png' }
];

const outDir = path.resolve(__dirname, '../../assets/screenshots');
if (!fs.existsSync(outDir)) {
  fs.mkdirSync(outDir, { recursive: true });
}

(async () => {
  console.log('Launching Chrome...');
  const browser = await puppeteer.launch({
    executablePath: CHROME_PATH,
    headless: "new",
    args: ['--no-sandbox', '--disable-setuid-sandbox', '--disable-dev-shm-usage', '--window-size=1280,900']
  });

  for (const project of projects) {
    // Skip if already captured
    const outPath = path.join(outDir, project.filename);
    if (fs.existsSync(outPath)) {
      console.log(`Already exists, skipping: ${project.filename}`);
      continue;
    }
    
    const page = await browser.newPage();
    await page.setViewport({ width: 1280, height: 900 });
    try {
      console.log(`Capturing: ${project.name} (${project.url})`);
      await page.goto(project.url, { waitUntil: 'domcontentloaded', timeout: 30000 });
      // Wait for visual stability
      await new Promise(resolve => setTimeout(resolve, 2500));
      // Try to dismiss common cookie popups
      await page.evaluate(() => {
        const selectors = [
          '[class*="cookie"] button', '[id*="cookie"] button',
          '[class*="consent"] button', '[id*="accept"]',
          '[class*="accept"]', 'button[aria-label*="ccept"]'
        ];
        for (const sel of selectors) {
          try { document.querySelector(sel)?.click(); } catch(e){}
        }
      });
      await new Promise(resolve => setTimeout(resolve, 800));
      
      await page.screenshot({ path: outPath, clip: { x: 0, y: 0, width: 1280, height: 900 } });
      console.log(`  Saved: ${outPath}`);
    } catch (err) {
      console.error(`  FAILED: ${project.name} — ${err.message}`);
    } finally {
      await page.close();
    }
  }

  await browser.close();
  console.log('\nDone! All screenshots attempted.');
})();
