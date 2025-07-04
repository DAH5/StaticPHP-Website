---
layout: src/_includes/docs-layout.php
page_title: Markdown Files
docs_nav_item: markdown-files
---

<h2>Markdown Files</h2>

<p>StaticPHP has support for Markdown files. It will treat a file as markdown if it has the <code>.md</code> file extension.</p>

<p>You may want to use Markdown when you are writing an article of some sort where you only require simple text formatting without having to worry about HTML or PHP.</p>

<h3>Examples of Supported Markdown</h3>

<p>The most used Markdown features should be supported, but if you have any specific needs, you may need to wait for this to be added in the future.</p>

<h4>Paragraphs and Text</h4>

<p>Simple lines of text forming sentenses or paragraphs can be written on their own. Linebreaks are supported too.</p>

<pre>
The quick brown fox jumped over the lazy dog.

The quick brown fox
jumped over the lazy dog.
</pre>

<h4>Headings</h4>

<p>StaticPHP supports all six headings in Markdown.</p>

<pre>
# Heading 1
## Heading 2
### Heading 3
#### Heading 4
##### Heading 5
###### Heading 6
</pre>

<h4>Inline Text Formatting</h4>

<p>You can format your text as <strong>bold</strong>, <em>italic</em>, and <del>strikethrough</del>.</p>

<pre>
**bold** or __bold__
*italic* or _italic_
~~strikethrough~~
</pre>

<h4>Hyperlinks</h4>

<p>Linking to other resources can be done too.</p>

<pre>
[Link Text](http://hostname.tld/resource)
</pre>

<p>You can also add a title to the hyperlink.</p>

<pre>
[Link Text](http://hostname.tld/resource "Title Text")
</pre>

<h4>Images</h4>

<p>Adding images is very similar to hyperlinks.</p>

<pre>
![Alt Text](http://hostname.tld/image.png)
</pre>

<p>With a title.</p>

<pre>
![Alt Text](http://hostname.tld/image.png "Title Text")
</pre>

<h4>Code and Code Blocks</h4>

<p>You can write lines of code inline by surrounding the content with single backticks. <code>`</code></p>

<p>And you can write multiline codeblocks using three backticks on the start and end lines. You can optionally supply a name after the opening backticks.</p>

<h3>MetaData Support</h3>

<p>StaticPHP has MetaData support for Markdown files. Refer to the <a href="/docs/metadata">MetaData</a> documentation for more.</p>


<h3>Functional Blocks Support</h3>

<p>There is currently no functional blocks support for Markdown files. This is planned and will likely be added in the future.</p>

<p>Functional blocks can still be used with other files. Refer to the <a href="/docs/functional-blocks">Functional Blocks</a> documentation for more.</p>
