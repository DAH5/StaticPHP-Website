---
layout: src/_includes/docs-layout.php
page_title: Functional Blocks
docs_nav_item: functional-blocks
---

<h2>Functional Blocks</h2>

<p>Functional Blocks in StaticPHP allow you to create dynamic content without writing PHP. They are similar to using PHP functions but with a simplified syntax.</p>

<h3>Syntax</h3>

<p>A Functional Block starts with an opening tag using the same delimiter as MetaData, followed by the block name, and then a set of key-value parameters within parentheses. The block is closed with an end tag, which is the word "end" followed by the block name, surrounded by the MetaData delimiter.</p>

<p>Here's an example:</p>

<pre>
--- func(key = "value", another-key = "another-value") ---

Put anything here.

--- endfunc ---
</pre>

<h3>The Loop Functional Block</h3>

<p>The <code>loop</code> block allows you to iterate through a list of items and display information for each item as you define.</p>

<h4>Directory Contents</h4>

<p>Use the dir parameter to loop through each file in a directory. You can specify an absolute path or a relative path (without a leading slash). Relative paths are relative to the location of the StaticPHP file, not the file containing the loop block.</p>

<p>You can access MetaData within each file using placeholders prefixed with "loop" instead of "metadata."</p>

<p>Example:</p>

<pre>
--- loop(dir = "src/items") ---

Item Name: --- loop.item-name ---

--- endloop ---
</pre>

<p>For more information on setting MetaData in files and using placeholders, refer to the <a href="/docs/metadata">MetaData</a> page.</p>

<p>A special placeholder <code>--- loop.uri ---</code> is available when using the <code>dir</code> parameter, displaying the path to the current directory item for use in links.</p>

<h4>Sorting Order</h4>

<p>By default, items are sorted as the filesystem sorts them, typically in ascending order. You can change this by setting the <code>sort</code> parameter to either <code>ascending</code> or <code>descending</code>.</p>

<h5>Example of sorting using <code>dir</code>:</h5>

<pre>
--- loop(dir = "src/items", sort = "descending") ---

Item Name: --- loop.item-name ---

--- endloop ---
</pre>

<h4>Outputting JSON</h4>

<p>You can make the loop results available as a JSON file by setting the <code>json</code> parameter to the desired file path. Similar to <code>dir</code>, this path can be relative to StaticPHP or absolute.</p>

<p>Example of JSON output:</p>

<pre>
--- loop(dir = "src/items", json = "src/api/items.json") ---

Item Name: --- loop.item-name ---

--- endloop ---
</pre>

<h4>Ignoring Items</h4>

<p>You can specify additional items for the loop to ignore using the <code>ignores</code> parameter. This parameter takes a semicolon-separated list of items to ignore, optionally with spaces for readability.</p>

<p>Example of ignoring items:</p>

<pre>
--- loop(dir = "src/items", ignores = "ignore-this; ignore-that") ---

Item Name: --- loop.item-name ---

--- endloop ---
</pre>

<h3>The If Functional Block</h3>

<p>The <code>if</code> functional block allows you to perform conditional checks on MetaData.</p>

<h4>Example of Use</h4>

<p>Assume you have the following MetaData at the top of your home page file, indicating that this page is the home page.</p>

<pre>
---
current-page: home
---
</pre>

<p>You can perform a check that the current page is the home page using the following <code>if</code> functional block.</p>

<pre>
---&nbsp;if( current-page == "home" )&nbsp;---
    &lt;p&gt;This is the home page.&lt;/p&gt;
---&nbsp;endif&nbsp;---
</pre>

<p>When the condition is true, it will output the content inside.</p>

<pre>
&lt;p&gt;This is the home page.&lt;/p&gt;
</pre>

<h4>Checking the Key Only</h4>

<p>The IF functional block can be used to only check if the key exists. Assume you want to output the page title, and have the following MetaData...</p>

<pre>
---
page-title: Welcome
---
</pre>

<p>You want to check if there is a title before displaying it, so you have the following if functional block...</p>

<pre>
---&nbsp;if( page-title )&nbsp;---
    &lt;h1&gt;--- metadata.page-title ---&lt;/h1&gt;
---&nbsp;endif&nbsp;---
</pre>

<p>When the condition is true, it will output the content inside.</p>

<pre>
&lt;h1&gt;Welcome&lt;/h1&gt;
</pre>

<p>The if functional block is currently limited to this basic functionality. The functionality may get extended in the future.</p>

<h3>More Features Coming Soon</h3>

<p>This is just the beginning for Functional Blocks in StaticPHP. Stay tuned for updates and additional features in the documentation.</p>
