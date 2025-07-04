---
layout: src/_includes/docs-layout.php
page_title: MetaData
docs_nav_item: metadata
---

<h2>MetaData</h2>

<p>MetaData is an area at the top of your source files where you can store information for later reference or for StaticPHP to use during the build process.</p>
			
<h3>Defining MetaData</h3>
			
<p>To define MetaData, place it at the top of your file with the first line being the MetaData delimiter set in your build configuration. If you haven't defined a delimiter yet, follow the instructions on the <a href="/docs/getting-started">Getting Started</a> page, or use the default delimiter of triple hyphens (---).</p>
			
<p>Here is an example of MetaData at the top of a source file:</p>
			
<pre>
---
some_key: some value
another_key: another value
---
</pre>
			
<p>Keys and values are separated by a colon and a space for clarity. Replace some_key and some value with your actual metadata keys and values.</p>
			
<h4>Using Placeholders</h4>
			
<p>You can display MetaData values using placeholders. These are formed using the MetaData delimiter on either end, the word metadata, a dot, and then the key name. StaticPHP will replace this with the value associated with that key during the build process.</p>
			
<p>For example, given the MetaData above, you can retrieve these values like this:</p>
			
<pre>
&lt;p&gt;--- metadata.some_key ---&lt;/p&gt;

&lt;p&gt;--- metadata.another_key ---&lt;/p&gt;
</pre>
	
<p>This will output:</p>

<pre>
&lt;p&gt;some value&lt;/p&gt;

&lt;p&gt;another value&lt;/p&gt;
</pre>

<h3>Special MetaData</h3>

<p>Special MetaData keys are used internally by StaticPHP to modify its behavior. Defining these keys with specific values allows you to customize the build process.</p>

<h4>Overriding Friendly URLs</h4>

<p>As explained on the <a href="/docs/getting-started">Getting Started</a> page, you can set friendly URLs globally. However, you can override this setting on a per-page basis by setting the <code>friendly_urls</code> MetaData key to <code>true</code> or <code>false</code>.</p>

<h4>Custom Output Path</h4>

<p>By default, StaticPHP uses the Friendly URLs setting to determine the output path. To specify a custom output path for a page, set the <code>custom_output_path</code> MetaData key to the desired path.</p>

<h4>Base Layouts</h4>

<p>Maintaining a consistent base layout across all pages can be challenging. StaticPHP simplifies this process by allowing you to define base layouts.</p>

<p>Add the layout MetaData key in the source file of the page you want the base layout applied to, with the value being the path to the base layout file.</p>

<pre>
---
page-title: Awesome Page
layout: SOURCE-FILES/IGNORE-FILES/base-layout.php
---

&lt;h2&gt;--- metadata.page-title ---&lt;/h2&gt;
&lt;p&gt;This is a very awesome page. I am so glad you checked it out! :)&lt;/p&gt;
</pre>

<p>In the base layout file, add the <code>content_placeholder</code> MetaData key to specify where the content of the specific page will be inserted.</p>

<pre>
---
content_placeholder: {{ content }}
---

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
	&lt;head&gt;
		&lt;meta charset="UTF-8"&gt;
		&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
		
		&lt;title&gt;--- metadata.page-title --- - Awesome Website - powered by StaticPHP&lt;/title&gt;
	&lt;/head&gt;
	
	&lt;body&gt;
		&lt;h1&gt;Awesome Website&lt;/h1&gt;
		&lt;p&gt;powered by StaticPHP&lt;/p&gt;
		
		&lt;hr&gt;
		
		{{ content }}
		
		&lt;hr&gt;
		
		&lt;p&gt;Copyright © Awesome Developer.&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;
</pre>

<p>By following these steps, you can easily manage MetaData in your StaticPHP projects, enabling greater flexibility and control over your static website generation process. For more detailed information, refer to the accompanying documentation and guides.</p>
