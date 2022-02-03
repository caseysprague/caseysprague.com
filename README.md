# About
The source code for caseysprague.com, running on Laravel.

## Dependencies
The resume download functionality uses Browsershot to generate a PDF so that the resume is always kept up-to-date with what's in the database. Browsershot relies on Puppeteer, which has [dependencies](https://github.com/puppeteer/puppeteer/blob/main/docs/troubleshooting.md#chrome-headless-doesnt-launch-on-unix) that need to be installed on Linux. Browsershot also has it's own [listed dependencies](https://github.com/spatie/browsershot#requirements).
