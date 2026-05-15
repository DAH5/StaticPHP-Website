---
page_title: Name Generator
layout: src/_includes/layout-2025-09.php
stylesheet_urls:
- /assets/css/namegenerator.min.css
javascript_urls:
- /assets/javascripts/namegenerator.min.js
staticphp_nav_item: namegenerator
---

<div class="container">
    <h2>--- metadata.page_title ---</h2>
    <p>Need help thinking of a name for your next project? Try this tool.</p>

    <form method="GET" action="/namegenerator/" id="name-generator-form">
        <div>
            <label>Number of Adjectives</label>
            <select id="adjective-choice">
                <option value="0">Random</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div>
            <label>Number of Nouns</label>
            <select id="noun-choice">
                <option value="1">One</option>
            </select>
        </div>

        <div>
            <label>Style</label>
            <select id="style-choice">
                <option value="1">lower-case-hyphen-separated</option>
                <option value="2">CapitalisedNoSpaces</option>
                <option value="3">Capitalised With Spaces</option>
                <option value="4">Like a sentence.</option>
            </select>
        </div>

        <div>
            <div>&nbsp;</div>
            <button type="button" onclick="doNameGeneration()">Generate</button>
        </div>
    </form>

    <p id="name">Sorry, you can't use the name generator. Your device doesn't support it.</p>
    <p>Press Generate to get a new name suggestion.</p>
</div>