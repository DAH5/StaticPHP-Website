---
layout: src/_includes/docs-layout.php
page_title: Getting Started
docs_nav_item: getting-started
---

<h2>Getting Started</h2>

<h3>Step One: Download and Install</h3>

<p>Create a new folder/directory for your project (e.g. <code>mysite</code>). Download the latest version of StaticPHP to your project folder/directory. It is recommended to download the launcher instead of StaticPHP itself, as this will keep you up-to-date with the latest StaticPHP features and provide easy customization options.</p>

<h3>Step Two: Setup Your Project Structure</h3>

<p>Inside your project folder/directory, decide what you want to call the folder/directory where your source files will be located (e.g. <code>src</code>) and create it.</p>

<p>Decide on the name of the folder/directory where your generated output files will be located (e.g. <code>public</code>) and create it.</p>

<p>If you are using, or plan to use, Git source control software, you may also want to create a <code>.gitignore</code> file now in the root of your project folder/directory.</p>

<p><b>Example .gitignore file:</b></p>

<pre>
# Ignore Generated Output Files
public

# Ignore StaticPHP File
StaticPHP.php
</pre>

<p>The above example will ensure that only the source files are commited to Git because the generated output files can be regenerated anytime, so make sure to replace <code>public</code> with your chosen folder/directory name. It also includes an entry to ignore <code>StaticPHP.php</code> which is recommended when using the launcher to ensure the main StaticPHP file does not get commited too. If you are not using the launcher, you may want this file included, so simply remove that line. Lines that start with a hash symbol <code>#</code> are comments.</p>

<h3>Step Three: Develop Your Website</h3>

<p>Start creating HTML and PHP files, and let StaticPHP handle the rest. Ensure that any file paths, such as those for including other files, are relative to the location of the StaticPHP file.</p>

<p>Refer to the <a href="/docs/metadata">MetaData</a> feature to explore additional capabilities for your website files.</p>

<h3>Step Four: Build and Deploy</h3>

<p>Run StaticPHP to generate the static version of your website in the output folder/directory.</p>

<p><strong>JavaScript Minification</strong> is currently <strong>Disabled</strong> due to a bug in the minification process. It will be re-enabled once the bug has been fixed.</p>

<p>If using the launcher, simply run the following command:</p>

<pre>php StaticPHP-Launcher.php</pre>

<p>For those using the StaticPHP file itself, there are two options:</p>

<h4>Using Command-Line Parameters</h4>

<p>This method is less recommended due to the potential difficulty in remembering configuration options. However, for those who prefer this approach, here’s how to do it:</p>

<p>Open a terminal in your project directory/folder, and type the following command, adjusting the parameters to suit your project:</p>

<pre>php StaticPHP.php source_dir_path output_dir_path items_to_ignore friendly_urls metadata_delimiter minify_html minify_css minify_js minify_html_tags_to_preserve bulk_redirects_filename redirection_template_filename</pre>

<ul>
	<li><code>source_dir_path</code>: The path relative to StaticPHP that contains your source input files.</li>
	
	<li><code>output_dir_path</code>: The path relative to StaticPHP that contains your generated output files.</li>
	
	<li><code>items_to_ignore</code>: Any string of text in file paths that StaticPHP should ignore as individual files. Useful for PHP includes that you don't want to output.</li>
	
	<li><code>friendly_urls</code>: A boolean (true/false) indicating whether StaticPHP should create friendly URLs (e.g., domain.tld/page) or keep the paths the same as the source (e.g., domain.tld/page.html).</li>
	
	<li><code>metadata_delimiter</code>: A delimiter indicating where Metadata starts and ends. See the Metadata page for more details.</li>
	
	<li><code>minify_html</code>: A boolean indicating whether StaticPHP should minify HTML files. This affects only the output files; source files remain unminified.</li>
	
	<li><code>minify_css</code>: A boolean indicating whether StaticPHP should minify CSS files. This affects only the output files; source files remain unminified.</li>
	
	<li><code>minify_js</code>: A boolean indicating whether StaticPHP should minify JavaScript files. This affects only the output files; source files remain unminified.</li>

	<li><code>minify_html_tags_to_preserve</code>: A string containing a single HTML tag name to preserve and not minify. Useful for things like code snippets using the <code>&lt;pre&gt;</code> tag. Ommit entirely if not needed.</li>

	<li><code>bulk_redirects_filename</code>: A string containing your preferred filename for the bulk redirects file. Defaults to <code>_bulk_redirects</code> if not specified.</li>

	<li><code>redirection_template_filename</code>: A string containing your preferred filename for the redirection template file. Defaults to <code>_redirection_template.html</code> if not specified.</li>
</ul>

<h4>Using a Custom Launcher Script</h4>

<p>You can create a custom launcher script for more flexibility. Here is an example:</p>

<pre>
&lt;?php

$source_dir_path = __DIR__ . DIRECTORY_SEPARATOR . 'src';
$output_dir_path = __DIR__ . DIRECTORY_SEPARATOR . 'public';
$items_to_ignore = array( '_includes' );
$friendly_urls = true;
$metadata_delimiter = '---';
$minify_html = true;
$minify_css = true;
$minify_js = true;
$minify_html_tags_to_preserve = array();
$bulk_redirects_filename = "_bulk_redirects";
$redirection_template_filename = "_redirection_template.html";

include __DIR__ . DIRECTORY_SEPARATOR . 'StaticPHP.php';

new StaticPHP
(
	$source_dir_path,
	$output_dir_path,
	$items_to_ignore,
	$friendly_urls,
	$metadata_delimiter,
	$minify_html,
	$minify_css,
	$minify_js,
	$minify_html_tags_to_preserve,
	$bulk_redirects_filename,
	$redirection_template_filename
);
</pre>


<h3>Step Five: Commit to Git</h3>

<p>This step is optional, but if you are using Git source control, you may want to commit it now to make sure your progress is saved.</p>

<p><b>Add All Files to Git</b></p>

<p><code>git add .</code></p>

<p><b>Commit Changes to Local Repository</b></p>

<p><code>git commit -m "Commit Message Goes Here"</code></p>

<p><b>Push to Remote</b></p>

<p><code>git push origin master</code></p>

<h3>Conclusion</h3>

<p>By following these steps, you can get started with StaticPHP and easily build and deploy your static websites. For more detailed information, refer to the accompanying documentation and guides.</p>
