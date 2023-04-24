---
current_page: metadata
page_title: MetaData
layout: src/_includes/base.php
---

        <section class="w3-padding-32">
            <div class="w3-content w3-padding">
                <h2>--- metadata.page_title ---</h2>
                
                <p>An area at the top of your source files where you can store information that you can refer back to later, or for StaticPHP to use as part of special metadata.</p>
                
                <h3>Defining MetaData</h3>
                
                <p>To define MetaData, you put it at the top of your file with the first line being the MetaData Delimiter you set as build configuration. If you haven't defined a delimiter yet, you can do so using the information on the <a href="/getting-started">Getting Started</a> page, or use the default delimiter of triple hyphens (---).</p>
                
                <p>Here is an example of MetaData at the top of a source file.</p>
                
<pre class="w3-code" style="overflow-x: auto;">
---
some_key: some value
another_key: another value
---
</pre>
                
                <p>Keys and values are separated by a colon and usually a space for clarity. The word key does not need to be part of the key, and the word value does not need to be part of the value, these were put there purely for illustration purposes and clarity.</p>
                
                <h3>Placeholders</h3>
                
                <p>You can display MetaData values using MetaData placeholders. These are formed using the MetaData Delimiter on either end, the word metadata and a dot and then the key name as defined in metadata you wish to retrieve, similar to accessing an object property in some programming languages. StaticPHP will replace this with the value associated with that key during the build process if a matching key exists in metadata.</p>
                
                <p>In the previous example where it shows how to define metadata, we set two keys with associated values. Here is an example of how you can retrieve these values again later.</p>
                
<pre class="w3-code" style="overflow-x: auto;">
&lt;p&gt;--- metadata.some_key ---&lt;/p&gt;

&lt;p&gt;--- metadata.another_key ---&lt;/p&gt;
</pre>
		
		<p>The output of having the metadata example and the above placeholders example will be like this.</p>

<pre class="w3-code" style="overflow-x: auto;">
&lt;p&gt;some value&lt;/p&gt;

&lt;p&gt;another value&lt;/p&gt;
</pre>

		<h3>Special MetaData</h3>
		
		<p>These are things defined in MetaData that are used internally by StaticPHP. Defining these special metadata keys with a value will tell StaticPHP to do something differently.</p>
		
		<p><u>Overriding Friendly URLs</u></p>
		
		<p>As it explains on the <a href="/getting-started">Getting Started</a> page, you can set friendly URLs to true or false globally, but you can also change this value on a per-page basis. If StaticPHP sees you have set the metadata key <u>friendly_urls</u> to either true or false, it will honor this over the global setting.</p>
		
		<p><u>Custom Output Path</u></p>
		
		<p>By default, StaticPHP will use the Friendly URLs setting to decide what the output path should be. If you wish the output filename to be different, you can set this on a per-page basis. Simply set the metadata key <u>custom_output_path</u> to the path you wish the output file to be located.</p>
		
		<p><u>Base Layouts</u></p>
		
		<p>One problem you may come across when making a website static is having the same base layout across all pages. StaticPHP makes this easy with the metadata key <u>layout</u> being set to the path of where your base layout file is. StaticPHP will merge the current file with the defined layout file for you. It is recommended to store the base layout file inside one of the ignore paths so it does not get processed as an individual file.</p>
            </div>
        </section>

